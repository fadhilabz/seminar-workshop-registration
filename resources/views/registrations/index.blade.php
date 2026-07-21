@extends('layouts.app')

@section('title', 'Riwayat Pendaftaran Saya - SeminarKu')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- TopNavBar -->
<header class="bg-primary-container docked full-width top-0 shadow-sm z-50 sticky">
<div class="flex justify-between items-center w-full px-margin-desktop max-w-container-max mx-auto h-20">
<div class="font-headline-md text-headline-md font-bold text-on-tertiary-container">SeminarKu</div>
<nav class="hidden md:flex items-center gap-8">
<a class="text-on-primary-container hover:text-on-tertiary-container transition-colors font-label-lg text-label-lg" href="{{ route('home') }}">Home</a>
<a class="text-on-tertiary-container font-bold border-b-2 border-on-tertiary-container pb-1 font-label-lg text-label-lg" href="{{ route('events.index') }}">Acara</a>
<a class="text-on-primary-container hover:text-on-tertiary-container transition-colors font-label-lg text-label-lg" href="#">Tentang</a>
</nav>
<div class="flex items-center gap-4">
<button class="font-label-lg text-label-lg text-on-primary-container hover:bg-primary/10 px-4 py-2 rounded-lg transition-all">Login</button>
<button class="font-label-lg text-label-lg bg-secondary text-on-secondary px-6 py-2 rounded-full scale-95 active:scale-90 transition-transform">Register</button>
</div>
</div>
</header>
<!-- Hero Section -->
<section class="bg-primary-container py-16 md:py-24 overflow-hidden relative">
<div class="max-w-7xl mx-auto px-margin-desktop relative z-10">
<h1 class="font-headline-xl text-headline-xl text-on-primary text-center md:text-left">Riwayat Pendaftaran Saya</h1>
<p class="mt-4 text-on-primary-container font-body-lg text-body-lg max-w-2xl opacity-80 text-center md:text-left">
                Kelola semua pendaftaran seminar dan workshop Anda di satu tempat yang terorganisir.
            </p>
</div>
<!-- Decorative subtle gradient -->
<div class="absolute top-0 right-0 w-1/3 h-full bg-gradient-to-l from-on-tertiary-container/10 to-transparent"></div>
</section>
<!-- Main Content -->
<main class="max-w-7xl mx-auto px-margin-desktop py-12">
<!-- Filter Tabs -->
<div class="flex flex-wrap items-center gap-4 mb-10 border-b border-outline-variant pb-1">
<button class="px-6 py-3 font-label-lg text-label-lg text-on-tertiary-container border-b-2 border-on-tertiary-container">Semua</button>
<button class="px-6 py-3 font-label-lg text-label-lg text-on-surface-variant hover:text-on-tertiary-container transition-colors">Menunggu</button>
<button class="px-6 py-3 font-label-lg text-label-lg text-on-surface-variant hover:text-on-tertiary-container transition-colors">Dikonfirmasi</button>
<button class="px-6 py-3 font-label-lg text-label-lg text-on-surface-variant hover:text-on-tertiary-container transition-colors">Ditolak</button>
</div>
<!-- History List (Bento-ish Grid / Vertical List) -->
<div class="grid grid-cols-1 gap-6">
<!-- Card 1: Pending -->
<div class="bg-surface-container-lowest rounded-xl shadow-md border border-outline-variant/30 flex flex-col md:flex-row items-center overflow-hidden card-hover transition-all duration-300">
<div class="w-full md:w-48 h-48 md:h-auto overflow-hidden">
<img class="w-full h-full object-cover" data-alt="A clean professional digital background with abstract AI neural network patterns in teal and navy blue tones. The composition is minimal and high-tech, perfect for a modern seminar card thumbnail. Soft lighting illuminates the geometric structures creating depth and professional appeal." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB2TAsw03J-lCOFQGNstBU1J8csE9qmKmM2CEGBUsSKmN9mqJ6ci95B6QaQHHnLPRF0tuLPWHDpHAtou4eugL7OGKv0cmRqAl8fRz-C0Yqy12ZfhU0PoJUrspA7bH3KobdwyXCe75xeaVAjJPuSluXepgHYQ_MlPowuJhleIt7je9ydnasLBhKCQDSOWy9ueM2cAi5vRlWhTmXXdrFdVTKz9mlEzrOnWVrh_2a52LlTfjfXphG3-lv5Aw"/>
</div>
<div class="flex-1 p-6 flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
<div>
<div class="flex items-center gap-3 mb-2">
<span class="px-3 py-1 rounded-full text-label-md font-label-md bg-yellow-100 text-yellow-800 uppercase tracking-wider">Menunggu</span>
<span class="text-on-surface-variant text-label-md font-label-md flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]">calendar_today</span> 20 Juli 2025
                            </span>
</div>
<h3 class="font-headline-md text-headline-md text-primary mb-1">Seminar AI 2025</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Biaya Pendaftaran: <span class="font-bold text-secondary">Rp 150.000</span></p>
</div>
<div class="flex items-center gap-4 w-full md:w-auto">
<button class="flex-1 md:flex-none border border-secondary text-secondary font-label-lg text-label-lg px-8 py-3 rounded-full hover:bg-secondary/5 transition-colors">Lihat Detail</button>
</div>
</div>
</div>
<!-- Card 2: Confirmed -->
<div class="bg-surface-container-lowest rounded-xl shadow-md border border-outline-variant/30 flex flex-col md:flex-row items-center overflow-hidden card-hover transition-all duration-300">
<div class="w-full md:w-48 h-48 md:h-auto overflow-hidden">
<img class="w-full h-full object-cover" data-alt="A sophisticated code-themed background featuring elegant Laravel logo aesthetics integrated with modern teal digital waves. The lighting is focused and professional with high contrast between deep navy shadows and bright seafoam highlights, representing a high-value technical workshop." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD0hpGhNztbwrk6sMoS6OY1d8NuP91X45pew9tZZVrUshVwTiBLQGWANHDGE67NlFjrjI-mxCPasEWiBTjqqjHT9QUvviDQ12_XIsSoutrwd1T-0iWETpph7NWcRKVyD2orgQ2gFJ44RbXfvQrvYFI6FI6mGPovQtRfL7VtEaACtUy7SSiAp5Db_3wR7sT99nd0-Y0-TJ7gnnO5b0fsULPwRxIyiaGt5_j_KtdDZqqzukM60SNg5w3lPQ"/>
</div>
<div class="flex-1 p-6 flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
<div>
<div class="flex items-center gap-3 mb-2">
<span class="px-3 py-1 rounded-full text-label-md font-label-md bg-green-100 text-green-800 uppercase tracking-wider">Dikonfirmasi</span>
<span class="text-on-surface-variant text-label-md font-label-md flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]">calendar_today</span> 25 Juli 2025
                            </span>
</div>
<h3 class="font-headline-md text-headline-md text-primary mb-1">Workshop Laravel</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Biaya Pendaftaran: <span class="font-bold text-secondary">Rp 200.000</span></p>
</div>
<div class="flex items-center gap-4 w-full md:w-auto">
<button class="flex-1 md:flex-none bg-secondary text-white font-label-lg text-label-lg px-8 py-3 rounded-full flex items-center justify-center gap-2 hover:opacity-90 transition-opacity">
<span class="material-symbols-outlined">download</span> Download E-Tiket
                        </button>
</div>
</div>
</div>
<!-- Card 3: Confirmed (Free) -->
<div class="bg-surface-container-lowest rounded-xl shadow-md border border-outline-variant/30 flex flex-col md:flex-row items-center overflow-hidden card-hover transition-all duration-300">
<div class="w-full md:w-48 h-48 md:h-auto overflow-hidden">
<img class="w-full h-full object-cover" data-alt="A creative UI design interface visualization with glassmorphism layers and vibrant gradient accents of teal and navy. The background suggests a high-end Figma design workshop with a focus on modern aesthetics, whitespace, and professional layout tools." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_tFCGCrp3c18iuAJZDkWt2QwLHq15T196ww32DIkTkSM9N08IP6cTsg2EcPM4xMxDsZJvhLrKJdIE_0fjhYk44kqHzxkB4GsXgXJgTyb7xNRqj5vsUgRBtGbhUIeBTCzfM1bsaweOPjyI7qzIAQachEAICojbcgN4IjOK-E-glj3fDk8kS8AYdY7TK1aejGBFzXCjVSD-wCRMSttGrK7y51IfIy_9AtJIHz0mWSynUGmVpnbVUMjdhw"/>
</div>
<div class="flex-1 p-6 flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
<div>
<div class="flex items-center gap-3 mb-2">
<span class="px-3 py-1 rounded-full text-label-md font-label-md bg-green-100 text-green-800 uppercase tracking-wider">Dikonfirmasi</span>
<span class="text-on-surface-variant text-label-md font-label-md flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]">calendar_today</span> 1 Aug 2025
                            </span>
</div>
<h3 class="font-headline-md text-headline-md text-primary mb-1">Workshop Figma</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Biaya Pendaftaran: <span class="font-bold text-on-tertiary-container">GRATIS</span></p>
</div>
<div class="flex items-center gap-4 w-full md:w-auto">
<button class="flex-1 md:flex-none bg-secondary text-white font-label-lg text-label-lg px-8 py-3 rounded-full flex items-center justify-center gap-2 hover:opacity-90 transition-opacity">
<span class="material-symbols-outlined">download</span> Download E-Tiket
                        </button>
</div>
</div>
</div>
<!-- Card 4: Rejected -->
<div class="bg-surface-container-lowest rounded-xl shadow-md border border-outline-variant/30 flex flex-col md:flex-row items-center overflow-hidden card-hover transition-all duration-300">
<div class="w-full md:w-48 h-48 md:h-auto overflow-hidden opacity-50 grayscale">
<img class="w-full h-full object-cover" data-alt="A corporate office boardroom setting with abstract data charts and business analytics projected on a wall. The image uses a muted palette of corporate blues and greys, representing a professional business seminar environment with a serious and organized tone." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDC_EGZvgSgpdqyro0SmhFRcrU1b8BSK7rk1SR5_I8LHCC5JTKjt_tD0paCExyCMqd5QI2PI8r7mSDQoOJsGLar-5N58zpjGtQAyre-Y2vRQppBvfxPccnmImvVQlSbdttf3mMyJEh6JtznpwCKFmMLunN17kMe4wUnNlKVU7fkh5j6QBJ_RhwVWEK59q89vPu7ByyjhRJifY0QneNRqDUb3EmizvPO4s6svqS1dh_QzOFgTmYLygasHw"/>
</div>
<div class="flex-1 p-6 flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
<div>
<div class="flex items-center gap-3 mb-2">
<span class="px-3 py-1 rounded-full text-label-md font-label-md bg-red-100 text-red-800 uppercase tracking-wider">Ditolak</span>
<span class="text-on-surface-variant text-label-md font-label-md flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]">calendar_today</span> 10 Aug 2025
                            </span>
</div>
<h3 class="font-headline-md text-headline-md text-primary mb-1">Seminar Bisnis</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Biaya Pendaftaran: <span class="font-bold text-secondary">Rp 75.000</span></p>
</div>
<div class="flex items-center gap-4 w-full md:w-auto">
<button class="flex-1 md:flex-none bg-error text-white font-label-lg text-label-lg px-8 py-3 rounded-full flex items-center justify-center gap-2 hover:opacity-90 transition-opacity">
<span class="material-symbols-outlined">headset_mic</span> Hubungi CS
                        </button>
</div>
</div>
</div>
</div>
<!-- Help Section -->
<div class="mt-16 bg-surface-container rounded-3xl p-8 md:p-12 flex flex-col md:flex-row items-center justify-between gap-8">
<div class="max-w-xl text-center md:text-left">
<h2 class="font-headline-lg text-headline-lg text-primary mb-4">Butuh Bantuan dengan Pendaftaran?</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Tim dukungan kami siap membantu Anda 24/7 jika Anda mengalami kendala saat mendownload tiket atau ingin menanyakan status pembayaran.</p>
</div>
<button class="bg-primary-container text-white px-10 py-4 rounded-full font-label-lg text-label-lg hover:bg-primary transition-all flex items-center gap-3">
<span class="material-symbols-outlined">mail</span> Hubungi Support
            </button>
</div>
</main>
<!-- Footer -->
<footer class="bg-primary-container full-width">
<div class="flex flex-col md:flex-row justify-between items-center w-full px-margin-desktop py-12 max-w-container-max mx-auto">
<div class="flex flex-col items-center md:items-start mb-8 md:mb-0">
<div class="font-headline-md text-headline-md font-bold text-on-tertiary-container mb-2">SeminarKu</div>
<p class="text-on-primary-container font-body-md text-body-md text-center md:text-left opacity-70">Empowering professional growth through quality seminars.</p>
</div>
<div class="flex flex-wrap justify-center gap-6 mb-8 md:mb-0">
<a class="text-on-primary-container hover:text-on-tertiary-container font-body-md text-body-md transition-all hover:underline" href="{{ route('home') }}">Home</a>
<a class="text-on-primary-container hover:text-on-tertiary-container font-body-md text-body-md transition-all hover:underline" href="{{ route('events.index') }}">Acara</a>
<a class="text-on-primary-container hover:text-on-tertiary-container font-body-md text-body-md transition-all hover:underline" href="#">Tentang</a>
<a class="text-on-primary-container hover:text-on-tertiary-container font-body-md text-body-md transition-all hover:underline" href="#">Privacy Policy</a>
<a class="text-on-primary-container hover:text-on-tertiary-container font-body-md text-body-md transition-all hover:underline" href="#">Terms of Service</a>
</div>
<div class="text-on-primary-container font-body-md text-body-md opacity-60">
                © 2024 SeminarKu. All rights reserved.
            </div>
</div>
</footer>
@endsection
