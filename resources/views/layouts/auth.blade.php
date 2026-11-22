<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Authentication') | DocuSecure</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    {{-- Tailwind CDN keeps this drop-in package independent of your Vite setup.
         For production, move these utilities into your existing Tailwind/Vite build. --}}
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cvsu: {
                            900: '#071f16', 850: '#0b291d', 800: '#0e3323',
                            700: '#14452f', 600: '#1a5c3e', 500: '#237a54',
                            gold: '#e6b33a', 'gold-light': '#f8df8c'
                        }
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        mono: ['"JetBrains Mono"', 'monospace']
                    }
                }
            }
        };
    </script>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    @stack('styles')
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased min-h-screen">
    @yield('content')
    <script src="{{ asset('js/auth.js') }}" defer></script>
    @stack('scripts')
</body>
</html>
