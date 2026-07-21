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
        
        <style>
            body {
                font-family: 'Outfit', sans-serif;
                background: linear-gradient(135deg, #0D2137 0%, #028090 100%);
                background-attachment: fixed;
            }
            .glass-panel {
                background: rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(16px);
                -webkit-backdrop-filter: blur(16px);
                border: 1px solid rgba(255, 255, 255, 0.2);
                box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            }
            .input-custom {
                background: rgba(255, 255, 255, 0.9);
                border: 1px solid rgba(2, 128, 144, 0.3);
                color: #0D2137;
            }
            .input-custom:focus {
                border-color: #02C39A;
                box-shadow: 0 0 0 3px rgba(2, 195, 154, 0.3);
            }
            .btn-primary {
                background: linear-gradient(to right, #028090, #02C39A);
                transition: all 0.3s ease;
            }
            .btn-primary:hover {
                transform: translateY(-2px);
                box-shadow: 0 10px 20px -10px rgba(2, 195, 154, 0.7);
            }
        </style>
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
