<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link href="{{ asset('build/assets/app.css') }}" rel="stylesheet">
    @endif

    <style>
        :root {
            --color-navy: #0a1a3f;
            --color-navy-light: #1a3a6f;
            --color-gold: #fbbf24;
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #0a1a3f 0%, #1a3a6f 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>

    @stack('styles')
</head>
<body>
    <div class="min-h-screen bg-white font-sans antialiased">
        {{-- Navbar --}}
        <x-layout.navbar />

        {{-- Main Content --}}
        <main class="overflow-hidden">
            @yield('content')
        </main>

        {{-- Footer --}}
        <x-layout.footer />
    </div>

    {{-- Scripts --}}
    @stack('scripts')
</body>
</html>

