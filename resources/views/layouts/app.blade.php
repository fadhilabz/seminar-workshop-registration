<!doctype html>
<html class="light" lang="id">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>SeminarKu - Platform Seminar &amp; Workshop Terbaik</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-background text-on-background font-body-md selection:bg-on-tertiary-container selection:text-white overflow-x-hidden">
        @include('layouts.nav')

        <main class="pt-20">
            @yield('content')
        </main>

        @include('layouts.footer')


    </body>
</html>
