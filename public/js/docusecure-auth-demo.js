(function () {
  'use strict';

  const PATHS = {
    login: '/',
    twoFactor: '/preview/two-factor',
    invalidOtp: '/preview/two-factor-invalid',
    success: '/preview/two-factor-success',
    accountLocked: '/preview/account-locked',
    unlockRequest: '/preview/unlock-request',
    unlockSubmitted: '/preview/unlock-request-submitted',
    unlockConfirmation: '/preview/unlock-confirmation',
    forgotPassword: '/preview/forgot-password',
    resetReauth: '/preview/reauth',
    setPassword: '/preview/set-password',
    resetSuccess: '/preview/reset-success',
    enrollment: '/preview/two-factor-enrollment',
    sessions: '/preview/sessions',
    sessionExpired: '/preview/session-expired',
    sessionTerminated: '/preview/session-terminated'
  };

  const ACCOUNTS = {
    'admin@cvsu.edu.ph': { role: 'admin', label: 'Tier 4 Administrator', destination: '/admin/preview' },
    'faculty@cvsu.edu.ph': { role: 'faculty', label: 'Tier 3 Faculty', destination: '/faculty/preview' },
    'student@cvsu.edu.ph': { role: 'student', label: 'Student', destination: '/student/preview' },
    'viewer@cvsu.edu.ph': { role: 'viewer', label: 'Viewer', destination: '/viewer/preview' }
  };
  const ACCOUNT_KEY = 'docusecure.demoAccount';
  const ATTEMPT_KEY = 'docusecure.otpAttempts';
  const DEMO_PASSWORD = 'Demo@123';
  const DEMO_OTP = '482901';

  function go(path) { window.location.assign(path); }
  function getAccount() {
    try { return JSON.parse(sessionStorage.getItem(ACCOUNT_KEY) || 'null'); }
    catch (_) { return null; }
  }
  function saveAccount(email) {
    const account = ACCOUNTS[email];
    if (!account) return null;
    const saved = { email: email, role: account.role, label: account.label, destination: account.destination };
    sessionStorage.setItem(ACCOUNT_KEY, JSON.stringify(saved));
    sessionStorage.setItem(ATTEMPT_KEY, '0');
    return saved;
  }
  function currentPath() { return window.location.pathname.replace(/\/$/, '') || '/'; }
  function showLoginError(message) {
    const box = document.getElementById('loginError');
    if (!box) return;
    box.textContent = message;
    box.classList.remove('hidden');
  }
  function routeForCurrentAccount() {
    const account = getAccount();
    return account && account.destination ? account.destination : PATHS.login;
  }

  // LOGIN: four approved demo accounts, all sharing the documented demo password.
  if (currentPath() === PATHS.login) {
    const form = document.getElementById('loginForm') || document.querySelector('form[data-purpose="credential-form"]');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    if (form && emailInput && passwordInput) {
      form.addEventListener('submit', function (event) {
        event.preventDefault();
        const email = emailInput.value.trim().toLowerCase();
        const password = passwordInput.value;
        if (!ACCOUNTS[email] || password !== DEMO_PASSWORD) {
          showLoginError('Demo sign-in failed. Select one of the four demo accounts and use password Demo@123.');
          passwordInput.focus();
          return;
        }
        saveAccount(email);
        go(PATHS.twoFactor);
      });
    }
    window.fillDemoAccount = function (email) {
      if (emailInput) emailInput.value = String(email || '').toLowerCase();
      if (passwordInput) passwordInput.value = DEMO_PASSWORD;
      const error = document.getElementById('loginError');
      if (error) error.classList.add('hidden');
      if (emailInput) emailInput.focus();
    };
  }

  // TWO-FACTOR: keep the account identity in the same browser tab and verify the demo OTP.
  if (currentPath() === PATHS.twoFactor) {
    const account = getAccount();
    if (!account || !ACCOUNTS[account.email]) { go(PATHS.login); return; }
    const identity = document.getElementById('twoFactorIdentity');
    if (identity) identity.textContent = account.email;
    const inputs = Array.from(document.querySelectorAll('#otp-container input'));
    inputs.forEach(function (input, index) {
      input.addEventListener('input', function () {
        input.value = input.value.replace(/\D/g, '').slice(0, 1);
        if (input.value && inputs[index + 1]) inputs[index + 1].focus();
      });
      input.addEventListener('keydown', function (event) {
        if (event.key === 'Backspace' && !input.value && inputs[index - 1]) inputs[index - 1].focus();
        if (event.key === 'ArrowLeft' && inputs[index - 1]) inputs[index - 1].focus();
        if (event.key === 'ArrowRight' && inputs[index + 1]) inputs[index + 1].focus();
      });
      input.addEventListener('paste', function (event) {
        const pasted = (event.clipboardData || window.clipboardData).getData('text').replace(/\D/g, '').slice(0, 6);
        if (!pasted) return;
        event.preventDefault();
        inputs.forEach(function (field, i) { field.value = pasted[i] || ''; });
        inputs[Math.min(pasted.length, 5)].focus();
      });
    });
    const fill = document.getElementById('fillDemoOtp');
    if (fill) fill.addEventListener('click', function () {
      ['4','8','2','9','0','1'].forEach(function (digit, i) { if (inputs[i]) inputs[i].value = digit; });
      if (inputs[5]) inputs[5].focus();
    });
    const verify = document.getElementById('verifyOtpBtn');
    if (verify) verify.addEventListener('click', function () {
      const code = inputs.map(function (input) { return input.value; }).join('');
      if (code === DEMO_OTP) {
        sessionStorage.setItem(ATTEMPT_KEY, '0');
        go(PATHS.success);
        return;
      }
      const attempts = Number(sessionStorage.getItem(ATTEMPT_KEY) || '0') + 1;
      sessionStorage.setItem(ATTEMPT_KEY, String(attempts));
      if (attempts >= 5) go(PATHS.accountLocked);
      else go(PATHS.invalidOtp);
    });
    if (inputs[0] && !inputs.some(function (input) { return input.value; })) inputs[0].focus();
  }

  // INVALID OTP: show the remaining attempts and allow a retry without losing the account.
  if (currentPath() === PATHS.invalidOtp) {
    const account = getAccount();
    if (!account) { go(PATHS.login); return; }
    const remaining = document.getElementById('otpAttemptsRemaining');
    if (remaining) remaining.textContent = String(Math.max(0, 5 - Number(sessionStorage.getItem(ATTEMPT_KEY) || '1')));
    const retry = document.getElementById('retryOtpBtn');
    if (retry) retry.addEventListener('click', function () { go(PATHS.twoFactor); });
  }

  // SUCCESS: redirect to the correct portal using the role saved at login.
  if (currentPath() === PATHS.success) {
    const account = getAccount();
    if (!account || !account.destination) { go(PATHS.login); return; }
    const manual = document.getElementById('manualPortalRedirect');
    if (manual) manual.href = account.destination;
    const countdown = document.getElementById('redirectCountdown');
    let remaining = 12;
    const timer = window.setInterval(function () {
      remaining -= 1;
      if (countdown) countdown.textContent = (remaining / 10).toFixed(1) + 's';
      if (remaining <= 0) { window.clearInterval(timer); go(account.destination); }
    }, 100);
  }

  // ACCOUNT LOCKOUT and unlock request flow.
  if (currentPath() === PATHS.accountLocked) {
    const unlockButton = document.getElementById('openUnlockModalBtn');
    if (unlockButton) unlockButton.addEventListener('click', function (event) {
      event.preventDefault();
      go(PATHS.unlockRequest);
    });
  }
  if (currentPath() === PATHS.unlockRequest) {
    const form = document.getElementById('emergencyUnlockForm');
    if (form) form.addEventListener('submit', function (event) {
      event.preventDefault();
      event.stopImmediatePropagation();
      if (!form.reportValidity()) return;
      sessionStorage.setItem('docusecure.unlockRequestSubmitted', '1');
      go(PATHS.unlockSubmitted);
    }, true);
  }
  if (currentPath() === PATHS.unlockSubmitted) {
    const verifyButton = document.getElementById('verifyHardwareKeyBtn');
    if (verifyButton) verifyButton.addEventListener('click', function () { go(PATHS.unlockConfirmation); });
  }
  if (currentPath() === PATHS.unlockConfirmation) {
    const loginButton = document.getElementById('returnSignInBtn');
    if (loginButton) loginButton.addEventListener('click', function () { sessionStorage.removeItem(ACCOUNT_KEY); go(PATHS.login); });
  }

  // PASSWORD RECOVERY: request -> re-authentication -> new password -> success -> login.
  if (currentPath() === PATHS.forgotPassword) {
    const form = document.getElementById('recoveryForm');
    if (form) form.addEventListener('submit', function (event) {
      event.preventDefault();
      event.stopImmediatePropagation();
      if (!form.reportValidity()) return;
      const button = document.getElementById('submitButton');
      if (button) { button.disabled = true; button.textContent = 'Verifying recovery details...'; }
      window.setTimeout(function () { go(PATHS.resetReauth); }, 700);
    }, true);
    const signIn = document.querySelector('a[href="#signin"]');
    if (signIn) signIn.href = PATHS.login;
  }
  if (currentPath() === PATHS.resetReauth) {
    const form = document.querySelector('form[data-purpose="credential-form"]');
    if (form) form.addEventListener('submit', function (event) {
      event.preventDefault();
      if (!form.reportValidity()) return;
      go(PATHS.setPassword);
    });
    const forgot = document.querySelector('a[href="#forgot"]');
    if (forgot) forgot.href = PATHS.forgotPassword;
  }
  if (currentPath() === PATHS.setPassword) {
    const form = document.getElementById('reset-password-form');
    if (form) form.addEventListener('submit', function (event) {
      event.preventDefault();
      event.stopImmediatePropagation();
      if (!form.reportValidity()) return;
      const first = document.getElementById('new-password');
      const second = document.getElementById('confirm-password');
      if (first && second && first.value !== second.value) { alert('The passwords do not match.'); second.focus(); return; }
      const button = document.getElementById('submitButton');
      if (button) { button.disabled = true; button.textContent = 'Updating clearance password...'; }
      window.setTimeout(function () { go(PATHS.resetSuccess); }, 900);
    }, true);
    const signIn = document.querySelector('a[href="#signin"]');
    if (signIn) signIn.href = PATHS.login;
  }
  if (currentPath() === PATHS.resetSuccess) {
    const buttons = Array.from(document.querySelectorAll('button'));
    const loginButton = buttons.find(function (button) { return /sign in|login|return to portal/i.test(button.textContent); });
    if (loginButton) loginButton.addEventListener('click', function () { go(PATHS.login); });
    const signInLink = document.querySelector('a[href="#signin"]');
    if (signInLink) signInLink.href = PATHS.login;
  }

  // FIRST-TIME 2FA ENROLLMENT returns to the normal verification step.
  if (currentPath() === PATHS.enrollment) {
    const originalComplete = window.completeEnrollment;
    if (typeof originalComplete === 'function') {
      window.completeEnrollment = function () {
        const ack = document.getElementById('policy-ack');
        if (ack && !ack.checked) { originalComplete(); return; }
        originalComplete();
        window.setTimeout(function () { go(PATHS.twoFactor); }, 1500);
      };
    }
  }

  // SESSION EXPIRY and termination routes.
  if (currentPath() === PATHS.sessionExpired) {
    const signout = document.getElementById('signoutBtn');
    const dismiss = document.getElementById('dismissBtn');
    [signout, dismiss].forEach(function (button) {
      if (button) button.addEventListener('click', function () { go(PATHS.sessionTerminated); });
    });
    const form = document.getElementById('reAuthForm');
    if (form) form.addEventListener('submit', function (event) {
      event.preventDefault();
      event.stopImmediatePropagation();
      if (!form.reportValidity()) return;
      go(routeForCurrentAccount());
    }, true);
  }
  if (currentPath() === PATHS.sessions) {
    const primary = document.getElementById('primary-launch-cta');
    if (primary) primary.addEventListener('click', function () { go(PATHS.sessionTerminated); });
    const returnLink = document.querySelector('a[href="#"]');
    if (returnLink) returnLink.href = PATHS.login;
  }
  if (currentPath() === PATHS.sessionTerminated) {
    window.handleResumeSession = function () {
      sessionStorage.removeItem(ACCOUNT_KEY);
      sessionStorage.removeItem(ATTEMPT_KEY);
      go(PATHS.login);
    };
    const loginLink = document.querySelector('a[href="login.html"]');
    if (loginLink) loginLink.href = PATHS.login;
  }
})();
