<!DOCTYPE html><html class="dark" lang="en"><head><meta charset="utf-8"><meta content="width=device-width, initial-scale=1.0" name="viewport"><meta content="web_dashboard" name="shell-type"><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"><style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style><script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script><script id="tailwind-config">tailwind.config={darkMode:"class",theme:{extend:{colors:{"tertiary-container":"#1d324d","surface-container-low":"#0f1724","on-background":"#e2e8f0","on-secondary-container":"#d1fae5","on-tertiary-fixed-variant":"#3b456b","error-container":"#4c1014","tertiary":"#94a3b8","tertiary-fixed":"#dce1ff","primary-fixed":"#bbf7d0","on-tertiary-fixed":"#0e193d","on-primary-fixed-variant":"#14532d","inverse-surface":"#f1f5f9","surface-container-highest":"#1e293b","inverse-primary":"#15803d","secondary-container":"#14452f","on-secondary-fixed-variant":"#166534","primary":"#22c55e","outline":"#475569","background":"#0a0f18","on-tertiary-container":"#cbd5e1","surface-container":"#131c2e","primary-fixed-dim":"#86efac","on-surface-variant":"#94a3b8","error":"#f87171","primary-container":"#166534","secondary-fixed-dim":"#a7f3d0","secondary":"#10b981","surface-tint":"#22c55e","surface":"#0d1422","inverse-on-surface":"#1e293b","surface-container-lowest":"#080c14","on-secondary":"#ffffff","on-primary":"#052e16","on-surface":"#f8fafc","surface-variant":"#1e293b","surface-bright":"#1e2d44","surface-container-high":"#172338","outline-variant":"#334155","on-primary-container":"#dcfce7","on-tertiary":"#0f172a","on-secondary-fixed":"#052e16","surface-dim":"#0d1422","secondary-fixed":"#d1fae5","on-error-container":"#fee2e2","on-primary-fixed":"#052e16","tertiary-fixed-dim":"#cbd5e1","on-error":"#ffffff"},borderRadius:{DEFAULT:"0.25rem",lg:"0.5rem",xl:"0.75rem",full:"9999px"},fontFamily:{sans:["Inter","sans-serif"],mono:["JetBrains Mono","monospace"]}}}}</script></head><body class="bg-background font-sans text-on-surface antialiased flex min-h-screen">
<!-- Sidebar Navigation -->
@include('components.sidebar', ['currentRole' => 'admin'])
<!-- Main Wrapper -->
<div class="pl-64 flex flex-col flex-1 min-h-screen">
<!-- Clean Header -->
<header class="fixed top-0 left-64 right-0 h-16 bg-[#0b121e]/95 backdrop-blur-md z-40 border-b border-[#1c2a3f] flex items-center justify-between px-6">
<!-- Search Bar -->
<div class="flex items-center max-w-lg w-full"><div class="relative w-full flex items-center"><span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-[19px]">search</span><input class="w-full bg-[#131d2e] border border-[#22334d] text-white placeholder:text-slate-400 pl-10 pr-14 py-2 rounded-lg text-xs font-normal focus:outline-none focus:border-emerald-500/60 transition-colors" placeholder="Search categories, classification policies, documents..." type="text"><div class="absolute right-2.5 top-1/2 -translate-y-1/2 flex items-center gap-0.5 px-1.5 py-0.5 rounded bg-[#1e2e46]/60 border border-[#22334d] text-[10px] font-mono text-slate-400 font-semibold pointer-events-none"><span>⌘</span><span>K</span></div></div></div>
<!-- Header Actions & Profile -->
<div class="flex items-center gap-4">
<!-- Status Pill -->
<div class="hidden sm:flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-950/60 border border-emerald-500/30 text-emerald-400 text-xs font-medium">
<span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
<span>System Operational</span>
</div>
<!-- Notification Bell -->
<button class="relative p-2 text-slate-300 hover:text-white hover:bg-[#152033] rounded-lg transition-colors">
<span class="material-symbols-outlined text-[20px]">notifications</span>
<span class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-rose-500"></span>
</button>
<div class="h-6 w-px bg-[#1e2e46]"></div>
<!-- Admin Profile Info -->
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-emerald-700/40 border border-emerald-500/40 flex items-center justify-center text-emerald-300 font-semibold text-sm">
          RB
        </div>
<div class="flex flex-col text-left">
<span class="text-xs font-semibold text-white leading-tight">Engr. R. Bautista</span>
<span class="text-[11px] text-slate-400 leading-tight">MIS Administrator • Cavite State University</span>
</div>
</div>
</div>
</header>
<!-- Dashboard Body -->
<main class="w-full pt-16 bg-[#0a0f18] min-h-screen text-slate-200"><div class="flex flex-col w-full">
<div class="px-8 py-8 max-w-[1440px] w-full mx-auto flex flex-col gap-8">
<!-- Page Header -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
<div class="flex flex-col gap-2 min-w-0">
<div class="flex items-center gap-2 font-label-sm text-label-sm uppercase text-primary tracking-widest"><span class="w-2 h-2 rounded-full bg-primary inline-block"></span>
<a class="hover:underline text-primary transition-colors" href="{{ route('admin.preview.dashboard') }}">ADMIN CONSOLE</a>
<span class="text-slate-500">/</span>
<span class="text-slate-300">SYSTEM SETTINGS</span></div>
<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">
          System &amp; Security Settings
        </h1>
<p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
          Configure global authentication policies, session timeouts, RA 10173 compliance, and HSM key rotation.
        </p><div class="flex flex-wrap items-center gap-3 pt-1">
<a class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-surface-container-high hover:bg-surface-container-highest border border-[#1c2a3f] text-slate-300 hover:text-white text-xs font-mono transition-colors" href="{{ route('admin.preview.access-levels') }}">
<span class="material-symbols-outlined text-[16px] text-primary">admin_panel_settings</span>
<span>Manage Document Tiers &amp; RA 10173 Rules →</span>
</a>
<a class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-surface-container-high hover:bg-surface-container-highest border border-[#1c2a3f] text-slate-300 hover:text-white text-xs font-mono transition-colors" href="{{ route('admin.preview.audit-logs') }}">
<span class="material-symbols-outlined text-[16px] text-primary">receipt_long</span>
<span>View Security Audit Trail →</span>
</a>
</div>
</div>
<div class="flex items-center gap-3 shrink-0">
<div class="hidden items-center gap-2 px-3 py-2 rounded-lg bg-secondary-container text-on-secondary-container font-label-sm text-label-sm" id="save-status-pill">
<span class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
<span>POLICIES COMMITTED</span>
</div>
<button class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-primary text-on-primary font-label-lg text-label-lg shadow-md hover:bg-primary-fixed transition-colors cursor-pointer" id="save-changes-btn" type="button">
<span class="material-symbols-outlined text-[18px]">save</span>
<span>Save Changes</span>
</button>
</div>
</div>
<!-- 2-Column Settings Grid -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-start">
<!-- Left Column -->
<div class="flex flex-col gap-6 w-full">
<!-- 1. Card: Authentication & Session Policy -->
<section class="bg-surface-container rounded-xl p-6 shadow-md flex flex-col gap-6 relative overflow-hidden">
<div class="flex items-start justify-between gap-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-primary shrink-0">
<span class="material-symbols-outlined text-[22px]">shield_lock</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm uppercase text-on-surface-variant">01 // ACCESS CONTROL</span>
<h2 class="font-headline-sm text-headline-sm text-on-surface">Authentication &amp; Session Policy</h2>
</div>
</div>
<span class="px-2.5 py-1 rounded bg-surface-container-high text-primary font-label-sm text-label-sm uppercase">
              ZERO-TRUST
            </span>
</div>
<div class="flex flex-col gap-4">
<!-- Toggle 1 -->
<div class="flex items-center justify-between gap-4 p-4 rounded-lg bg-surface-container-low">
<div class="flex flex-col gap-0.5 min-w-0">
<span class="font-body-md text-body-md font-medium text-on-surface">Enforce Mandatory 2FA (TOTP / FIDO2)</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Require hardware key or authenticator app for all MIS &amp; registrar accounts.</span>
</div>
<button aria-checked="true" class="toggle-btn relative inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full bg-primary transition-colors p-0.5" data-toggle="true" role="switch" type="button">
<span class="toggle-knob pointer-events-none inline-block h-5 w-5 transform rounded-full bg-on-primary shadow-sm transition-transform translate-x-5"></span>
</button>
</div>
<!-- Toggle 2 -->
<div class="flex items-center justify-between gap-4 p-4 rounded-lg bg-surface-container-low">
<div class="flex flex-col gap-0.5 min-w-0">
<span class="font-body-md text-body-md font-medium text-on-surface">Auto-Lockout after 5 Failed Attempts (15-min cooldown)</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Temporarily suspends credentialed access and logs IP telemetry.</span>
</div>
<button aria-checked="true" class="toggle-btn relative inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full bg-primary transition-colors p-0.5" data-toggle="true" role="switch" type="button">
<span class="toggle-knob pointer-events-none inline-block h-5 w-5 transform rounded-full bg-on-primary shadow-sm transition-transform translate-x-5"></span>
</button>
</div>
<!-- Select Inputs -->
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-1">
<label class="flex flex-col gap-2">
<span class="font-label-md text-label-md text-on-surface-variant uppercase">Session Inactivity Timeout</span>
<div class="relative">
<select class="w-full appearance-none bg-surface-container-lowest text-on-surface font-body-md text-body-md rounded-lg px-3.5 py-2.5 pr-10 focus:outline-none">
<option value="5">5 Minutes</option>
<option selected="" value="15">15 Minutes</option>
<option value="30">30 Minutes</option>
<option value="60">60 Minutes</option>
</select>
<span class="material-symbols-outlined text-[18px] text-on-surface-variant absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none">expand_more</span>
</div>
</label>
<label class="flex flex-col gap-2">
<span class="font-label-md text-label-md text-on-surface-variant uppercase">Trusted Device Duration</span>
<div class="relative">
<select class="w-full appearance-none bg-surface-container-lowest text-on-surface font-body-md text-body-md rounded-lg px-3.5 py-2.5 pr-10 focus:outline-none">
<option value="7">7 Days</option>
<option value="14">14 Days</option>
<option selected="" value="30">30 Days</option>
<option value="90">90 Days</option>
</select>
<span class="material-symbols-outlined text-[18px] text-on-surface-variant absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none">expand_more</span>
</div>
</label>
</div>
</div>
</section>
<!-- 2. Card: Document & RA 10173 Compliance -->
<section class="bg-surface-container rounded-xl p-6 shadow-md flex flex-col gap-6">
<div class="flex items-start justify-between gap-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-primary shrink-0">
<span class="material-symbols-outlined text-[22px]">gavel</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm uppercase text-on-surface-variant">02 // DATA PRIVACY ACT</span>
<h2 class="font-headline-sm text-headline-sm text-on-surface">Document &amp; RA 10173 Compliance</h2>
</div>
</div>
<span class="px-2.5 py-1 rounded bg-secondary-container text-on-secondary-container font-label-sm text-label-sm uppercase">
              ENFORCED
            </span>
</div>
<div class="flex flex-col gap-4">
<!-- Toggle 1 -->
<div class="flex items-center justify-between gap-4 p-4 rounded-lg bg-surface-container-low">
<div class="flex flex-col gap-0.5 min-w-0">
<span class="font-body-md text-body-md font-medium text-on-surface">Dynamic Digital Watermarking on Downloads</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Embeds requester ID, UTC timestamp, and SHA-256 hash onto exported PDFs.</span>
</div>
<button aria-checked="true" class="toggle-btn relative inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full bg-primary transition-colors p-0.5" data-toggle="true" role="switch" type="button">
<span class="toggle-knob pointer-events-none inline-block h-5 w-5 transform rounded-full bg-on-primary shadow-sm transition-transform translate-x-5"></span>
</button>
</div>
<!-- Toggle 2 -->
<div class="flex items-center justify-between gap-4 p-4 rounded-lg bg-surface-container-low">
<div class="flex flex-col gap-0.5 min-w-0">
<span class="font-body-md text-body-md font-medium text-on-surface">Mandatory Dual-Approval for Tier 3 &amp; 4 Unsealing</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Requires concurrent sign-off from MIS Admin and University Registrar.</span>
</div>
<button aria-checked="true" class="toggle-btn relative inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full bg-primary transition-colors p-0.5" data-toggle="true" role="switch" type="button">
<span class="toggle-knob pointer-events-none inline-block h-5 w-5 transform rounded-full bg-on-primary shadow-sm transition-transform translate-x-5"></span>
</button>
</div>
<!-- Toggle 3 -->
<div class="flex items-center justify-between gap-4 p-4 rounded-lg bg-surface-container-low">
<div class="flex flex-col gap-0.5 min-w-0">
<span class="font-body-md text-body-md font-medium text-on-surface">Suspicious Velocity Quarantine (&gt;15 files/120s)</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Automatically freezes session tokens on anomalous bulk retrieval patterns.</span>
</div>
<button aria-checked="true" class="toggle-btn relative inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full bg-primary transition-colors p-0.5" data-toggle="true" role="switch" type="button">
<span class="toggle-knob pointer-events-none inline-block h-5 w-5 transform rounded-full bg-on-primary shadow-sm transition-transform translate-x-5"></span>
</button>
</div>
</div>
</section>
</div>
<!-- Right Column -->
<div class="flex flex-col gap-6 w-full">
<!-- 3. Card: Cryptographic & HSM Configuration -->
<section class="bg-surface-container rounded-xl p-6 shadow-md flex flex-col gap-6">
<div class="flex items-start justify-between gap-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-primary shrink-0">
<span class="material-symbols-outlined text-[22px]">memory</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm uppercase text-on-surface-variant">03 // HARDWARE SECURITY MODULE</span>
<h2 class="font-headline-sm text-headline-sm text-on-surface">Cryptographic &amp; HSM Configuration</h2>
</div>
</div>
<span class="px-2.5 py-1 rounded bg-surface-container-high text-tertiary font-label-sm text-label-sm uppercase">
              256-BIT ENCRYPTED
            </span>
</div>
<!-- Status Row -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 p-4 rounded-lg bg-surface-container-lowest">
<div class="flex items-center gap-3">
<span class="w-2.5 h-2.5 rounded-full bg-primary animate-pulse shrink-0"></span>
<div class="flex flex-col">
<span class="font-body-md text-body-md font-semibold text-on-surface">Gemalto SafeNet Luna 7.4</span>
<span class="font-code-snippet text-code-snippet text-primary" id="hsm-status-text">Online • FIPS 140-2 Level 3</span>
</div>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">SLOT 01 // ACTIVE</span>
</div>
<!-- Selects -->
<div class="flex flex-col gap-4">
<label class="flex flex-col gap-2">
<span class="font-label-md text-label-md text-on-surface-variant uppercase">Default Encryption Standard</span>
<div class="relative">
<select class="w-full appearance-none bg-surface-container-lowest text-on-surface font-body-md text-body-md rounded-lg px-3.5 py-2.5 pr-10 focus:outline-none">
<option selected="" value="aes-gcm-sha256">AES-256-GCM + SHA-256 Ledger</option>
<option value="chacha20-sha512">ChaCha20-Poly1305 + SHA-512</option>
<option value="aes-cbc-hmac">AES-256-CBC + HMAC-SHA256</option>
</select>
<span class="material-symbols-outlined text-[18px] text-on-surface-variant absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none">expand_more</span>
</div>
</label>
<label class="flex flex-col gap-2">
<span class="font-label-md text-label-md text-on-surface-variant uppercase">Ephemeral Key Rotation Interval</span>
<div class="relative">
<select class="w-full appearance-none bg-surface-container-lowest text-on-surface font-body-md text-body-md rounded-lg px-3.5 py-2.5 pr-10 focus:outline-none">
<option value="7">Every 7 Days</option>
<option value="14">Every 14 Days</option>
<option selected="" value="30">Every 30 Days</option>
<option value="90">Every 90 Days</option>
</select>
<span class="material-symbols-outlined text-[18px] text-on-surface-variant absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none">expand_more</span>
</div>
</label>
</div>
<div class="flex items-center justify-between gap-4 pt-2">
<span class="font-code-snippet text-code-snippet text-on-surface-variant" id="hsm-test-result">Last diagnostic: 04:12 UTC (PASS)</span>
<button class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-secondary-container text-on-secondary-container font-label-md text-label-md hover:bg-surface-container-highest transition-colors cursor-pointer shrink-0" id="hsm-test-btn" type="button">
<span class="material-symbols-outlined text-[18px]">verified_user</span>
<span>Run HSM Self-Test</span>
</button>
</div>
</section>
<!-- 4. Card: Institutional Maintenance & Backups -->
<section class="bg-surface-container rounded-xl p-6 shadow-md flex flex-col gap-6">
<div class="flex items-start justify-between gap-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-primary shrink-0">
<span class="material-symbols-outlined text-[22px]">cloud_sync</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm uppercase text-on-surface-variant">04 // DISASTER RECOVERY</span>
<h2 class="font-headline-sm text-headline-sm text-on-surface">Institutional Maintenance &amp; Backups</h2>
</div>
</div>
<span class="px-2.5 py-1 rounded bg-surface-container-high text-primary font-label-sm text-label-sm uppercase">
              ENCRYPTED
            </span>
</div>
<!-- Toggle -->
<div class="flex items-center justify-between gap-4 p-4 rounded-lg bg-surface-container-low">
<div class="flex flex-col gap-0.5 min-w-0">
<span class="font-body-md text-body-md font-medium text-on-surface">Automated Daily Encrypted Offsite Backup</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Replicates sealed vault snapshots to Cavite State University disaster recovery node.</span>
</div>
<button aria-checked="true" class="toggle-btn relative inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full bg-primary transition-colors p-0.5" data-toggle="true" role="switch" type="button">
<span class="toggle-knob pointer-events-none inline-block h-5 w-5 transform rounded-full bg-on-primary shadow-sm transition-transform translate-x-5"></span>
</button>
</div>
<!-- Info Row -->
<div class="flex items-center justify-between gap-3 p-4 rounded-lg bg-surface-container-lowest">
<div class="flex items-center gap-3 min-w-0">
<span class="material-symbols-outlined text-[20px] text-primary shrink-0">task_alt</span>
<span class="font-code-snippet text-code-snippet text-on-surface truncate" id="backup-info-text">
                Last Successful Backup: Today, 03:00 AM PST (14,892 docs)
              </span>
</div>
</div>
<div class="flex items-center justify-end pt-1">
<button class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-secondary-container text-on-secondary-container font-label-md text-label-md hover:bg-surface-container-highest transition-colors cursor-pointer" id="manual-backup-btn" type="button">
<span class="material-symbols-outlined text-[18px]">backup</span>
<span>Trigger Manual Backup</span>
</button>
</div>
</section>
</div>
</div>
</div>
</div>
<script>
  (function () {
    const toggles = document.querySelectorAll('[data-toggle="true"]');
    toggles.forEach((btn) => {
      btn.addEventListener('click', () => {
        const isChecked = btn.getAttribute('aria-checked') === 'true';
        const nextState = !isChecked;
        btn.setAttribute('aria-checked', String(nextState));
        const knob = btn.querySelector('.toggle-knob');
        if (nextState) {
          btn.classList.remove('bg-surface-container-highest');
          btn.classList.add('bg-primary');
          knob.classList.remove('translate-x-0', 'bg-on-surface-variant');
          knob.classList.add('translate-x-5', 'bg-on-primary');
        } else {
          btn.classList.remove('bg-primary');
          btn.classList.add('bg-surface-container-highest');
          knob.classList.remove('translate-x-5', 'bg-on-primary');
          knob.classList.add('translate-x-0', 'bg-on-surface-variant');
        }
      });
    });

    const saveBtn = document.getElementById('save-changes-btn');
    const savePill = document.getElementById('save-status-pill');
    if (saveBtn && savePill) {
      saveBtn.addEventListener('click', () => {
        savePill.classList.remove('hidden');
        savePill.classList.add('inline-flex');
        setTimeout(() => {
          savePill.classList.add('hidden');
          savePill.classList.remove('inline-flex');
        }, 3000);
      });
    }

    const hsmBtn = document.getElementById('hsm-test-btn');
    const hsmResult = document.getElementById('hsm-test-result');
    if (hsmBtn && hsmResult) {
      hsmBtn.addEventListener('click', () => {
        hsmResult.textContent = 'Running FIPS 140-2 Level 3 self-test...';
        hsmBtn.disabled = true;
        setTimeout(() => {
          const now = new Date();
          const hh = String(now.getUTCHours()).padStart(2, '0');
          const mm = String(now.getUTCMinutes()).padStart(2, '0');
          hsmResult.textContent = `Last diagnostic: ${hh}:${mm} UTC (PASS)`;
          hsmBtn.disabled = false;
        }, 900);
      });
    }

    const backupBtn = document.getElementById('manual-backup-btn');
    const backupText = document.getElementById('backup-info-text');
    if (backupBtn && backupText) {
      backupBtn.addEventListener('click', () => {
        backupText.textContent = 'Encrypting & syncing 14,892 docs to offsite vault...';
        backupBtn.disabled = true;
        setTimeout(() => {
          backupText.textContent = 'Last Successful Backup: Just now (14,892 docs)';
          backupBtn.disabled = false;
        }, 1100);
      });
    }
  })();
</script></main>
</div>




</body></html>