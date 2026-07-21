<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SeminarKu') }} - Autentikasi</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        </head>
    <body class="text-white antialiased min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        
        <div class="mb-8 text-center animate-bounce-slow">
            <a href="/" class="flex flex-col items-center group">
                <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-10 h-10 text-[#028090]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z" />
                    </svg>
                </div>
                <h1 class="mt-4 text-3xl font-bold tracking-wider text-white drop-shadow-md">SeminarKu</h1>
            </a>
        </div>

        <div class="w-full sm:max-w-md px-8 py-10 glass-panel overflow-hidden sm:rounded-2xl transition-all duration-500 hover:shadow-2xl hover:border-opacity-40">
            {{ $slot }}
        </div>
        
        <p class="mt-10 text-sm text-gray-300 opacity-70">
            &copy; {{ date('Y') }} SeminarKu Platform. All rights reserved.
        </p>

    </body>
</html>
