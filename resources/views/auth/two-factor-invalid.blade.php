<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verification failed — DocuSecure</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
</head>
<body class="min-h-screen bg-slate-100 font-[Inter] text-slate-900">
    <main class="flex min-h-screen items-center justify-center p-4">
        <section class="w-full max-w-md rounded-2xl border border-slate-200 bg-white p-6 shadow-xl sm:p-8" aria-labelledby="verification-title">
            <div class="flex items-center gap-3">
                <span class="material-symbols-outlined flex h-12 w-12 items-center justify-center rounded-xl bg-rose-50 text-rose-700">error</span>
                <div>
                    <p class="text-xs font-bold uppercase tracking-wider text-rose-700">Verification failed</p>
                    <h1 id="verification-title" class="mt-1 text-xl font-bold tracking-tight">That code didn't work</h1>
                </div>
            </div>

            <p class="mt-5 text-sm leading-6 text-slate-600">Check the code and try again. <span id="otpAttemptsRemaining">4</span> attempts remain before a temporary lockout.</p>

            <div class="mt-5 rounded-lg border border-slate-200 bg-slate-50 p-3">
                <p class="text-[11px] font-semibold uppercase tracking-wide text-slate-500">Signing in as</p>
                <p id="twoFactorIdentity" class="mt-1 break-all font-mono text-sm font-semibold text-slate-800">Your account</p>
            </div>

            <button id="retryOtpBtn" type="button" class="mt-6 flex min-h-11 w-full items-center justify-center gap-2 rounded-lg bg-[#173153] px-4 text-sm font-semibold text-white transition hover:bg-[#24466e] focus:outline-none focus:ring-2 focus:ring-[#173153] focus:ring-offset-2">
                <span class="material-symbols-outlined text-lg">refresh</span>
                Try verification again
            </button>

            <div class="mt-4 border-t border-slate-200 pt-4">
                <button id="resendOtpBtn" type="button" class="text-sm font-semibold text-[#173153] underline underline-offset-4 hover:text-[#24466e]">Resend 2FA OTP</button>
                <p id="resendOtpStatus" class="mt-2 hidden text-xs leading-relaxed text-amber-800" role="status" aria-live="polite"></p>
            </div>

            <form method="POST" action="{{ route('logout') }}" class="mt-4">
                @csrf
                <button type="submit" class="flex min-h-10 w-full items-center justify-center gap-2 rounded-lg text-sm font-semibold text-slate-600 transition hover:bg-slate-100 hover:text-slate-900">
                    <span class="material-symbols-outlined text-base">arrow_back</span>
                    Back to sign in
                </button>
            </form>
        </section>
    </main>
    <script>
        try {
            const account = JSON.parse(sessionStorage.getItem('docusecure.demoAccount') || 'null');
            if (account && account.email) {
                document.getElementById('twoFactorIdentity').textContent = account.email;
            }
        } catch (error) {
            document.getElementById('twoFactorIdentity').textContent = 'Your account';
        }

        document.getElementById('resendOtpBtn').addEventListener('click', () => {
            const status = document.getElementById('resendOtpStatus');
            status.textContent = 'OTP delivery is not configured in this demo, so no message was sent.';
            status.classList.remove('hidden');
        });
    </script>
    <script src="{{ asset('js/docusecure-auth-demo.js') }}" defer></script>
</body>
</html>
