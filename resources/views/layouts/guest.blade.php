<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
        [x-cloak] {
            display: none !important;
        }

        .bg-pattern {
            background: #0f172a;
            background-image: linear-gradient(to bottom right, #0f172a, #1e293b);
            background-attachment: fixed;
        }

        .glass {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
    </style>
</head>

<body class="font-sans text-gray-100 antialiased bg-pattern min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="text-center mb-8">
            <div class="inline-flex p-4 rounded-2xl bg-blue-600/20 mb-4">
                <svg style="width: 48px; height: 48px;" class="text-blue-500" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
            </div>
            <h1 class="text-3xl font-extrabold text-white tracking-tight">POS <span class="text-blue-500">Tracker</span>
            </h1>
            <p class="text-gray-400 mt-2">Selamat datang kembali, silakan login.</p>
        </div>

        <div class="glass rounded-3xl p-8 shadow-2xl border border-white/10">
            {{ $slot }}
        </div>

        <div class="text-center mt-8 text-gray-500 text-sm">
            &copy; {{ date('Year') }} POS Tracker System. All rights reserved.
        </div>
    </div>
</body>

</html>