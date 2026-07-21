@extends('layouts.app')

@section('title', 'Detail Pendaftaran - SeminarKu')

@section('content')
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "tertiary": "#000c07",
                    "secondary-container": "#92edff",
                    "outline": "#74777d",
                    "on-tertiary": "#ffffff",
                    "tertiary-fixed-dim": "#40deb3",
                    "tertiary-fixed": "#65fbcf",
                    "surface-container-low": "#eaf6fa",
                    "primary-container": "#0d2137",
                    "on-error": "#ffffff",
                    "primary": "#000917",
                    "error": "#ba1a1a",
                    "surface-container-highest": "#d9e5e8",
                    "outline-variant": "#c4c6cd",
                    "on-surface-variant": "#44474d",
                    "on-primary-fixed": "#081c32",
                    "inverse-surface": "#273235",
                    "surface": "#f0fbff",
                    "surface-container-lowest": "#ffffff",
                    "secondary-fixed": "#9eefff",
                    "background": "#f0fbff",
                    "surface-bright": "#f0fbff",
                    "secondary-fixed-dim": "#77d4e5",
                    "inverse-on-surface": "#e7f3f7",
                    "secondary": "#006876",
                    "on-primary-container": "#7689a4",
                    "tertiary-container": "#00261c",
                    "surface-container": "#e4f0f4",
                    "primary-fixed": "#d2e4ff",
                    "on-secondary-fixed": "#001f24",
                    "surface-tint": "#4d6079",
                    "on-tertiary-fixed-variant": "#00513e",
                    "on-secondary-fixed-variant": "#004e59",
                    "surface-dim": "#d0dce0",
                    "surface-variant": "#d9e5e8",
                    "primary-fixed-dim": "#b5c8e5",
                    "on-secondary-container": "#006d7b",
                    "error-container": "#ffdad6",
                    "on-surface": "#121d20",
                    "on-primary": "#ffffff",
                    "on-background": "#121d20",
                    "on-tertiary-container": "#009a79",
                    "on-tertiary-fixed": "#002117",
                    "surface-container-high": "#deeaee",
                    "inverse-primary": "#b5c8e5",
                    "on-secondary": "#ffffff",
                    "on-primary-fixed-variant": "#364860",
                    "on-error-container": "#93000a"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "margin-mobile": "16px",
                    "container-max": "1280px",
                    "gutter": "24px",
                    "base": "8px",
                    "margin-desktop": "48px"
            },
            "fontFamily": {
                    "label-lg": ["Montserrat"],
                    "body-lg": ["Montserrat"],
                    "headline-md": ["Montserrat"],
                    "headline-lg-mobile": ["Montserrat"],
                    "headline-lg": ["Montserrat"],
                    "body-md": ["Montserrat"],
                    "headline-xl": ["Montserrat"],
                    "label-md": ["Montserrat"]
            },
            "fontSize": {
                    "label-lg": ["14px", {"lineHeight": "1.2", "fontWeight": "600"}],
                    "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "headline-md": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                    "headline-lg-mobile": ["24px", {"lineHeight": "1.2", "fontWeight": "700"}],
                    "headline-lg": ["32px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                    "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}],
                    "headline-xl": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "label-md": ["12px", {"lineHeight": "1.2", "fontWeight": "500"}]
            }
          }
        }
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        body {
            font-family: 'Montserrat', sans-serif;
        }
        .tonal-layer-1 {
            background-color: #FFFFFF;
            box-shadow: 0 12px 24px -10px rgba(13, 33, 55, 0.05);
        }
    </style>


<!-- TopNavBar -->
<header class="bg-primary-container docked full-width top-0 shadow-sm z-50 sticky">
<div class="flex justify-between items-center w-full px-margin-desktop max-w-container-max mx-auto h-20">
<div class="font-headline-md text-headline-md font-bold text-on-tertiary-container dark:text-tertiary-fixed">SeminarKu</div>
<nav class="hidden md:flex items-center gap-8">
<a class="text-on-primary-container hover:text-on-tertiary-container transition-colors font-label-lg text-label-lg" href="{{ route(\'home\') }}">Home</a>
<a class="text-on-primary-container hover:text-on-tertiary-container transition-colors font-label-lg text-label-lg" href="{{ route(\'events.index\') }}">Acara</a>
<a class="text-on-primary-container hover:text-on-tertiary-container transition-colors font-label-lg text-label-lg" href="#">Tentang</a>
</nav>
<div class="flex items-center gap-4">
<button class="text-on-primary-container hover:text-on-tertiary-container transition-colors font-label-lg text-label-lg px-4 py-2">Login</button>
<button class="bg-on-tertiary-container text-white px-6 py-2 rounded-lg font-label-lg text-label-lg scale-95 active:scale-90 transition-transform">Register</button>
</div>
</div>
</header>
<!-- Hero Section -->
<section class="bg-primary-container py-16">
<div class="max-w-7xl mx-auto px-margin-desktop">
<h1 class="font-headline-xl text-headline-xl text-white">Detail Pendaftaran</h1>
<p class="text-on-primary-container font-body-lg text-body-lg mt-2">Kelola dan tinjau berkas pendaftaran peserta seminar dengan teliti.</p>
</div>
</section>
<!-- Main Content -->
<main class="max-w-7xl mx-auto px-margin-desktop py-12">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
<!-- Left Column (60%) -->
<div class="lg:col-span-7 space-y-gutter">
<!-- Info Peserta Card -->
<div class="tonal-layer-1 rounded-[24px] p-8 border border-outline-variant/30">
<div class="flex items-center gap-3 mb-6">
<span class="material-symbols-outlined text-secondary text-3xl">person</span>
<h2 class="font-headline-md text-headline-md text-on-surface">Info Peserta</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="space-y-1">
<p class="text-on-surface-variant font-label-md text-label-md uppercase tracking-wider">Nama Lengkap</p>
<p class="font-body-lg text-body-lg text-on-surface">Aditya Pratama</p>
</div>
<div class="space-y-1">
<p class="text-on-surface-variant font-label-md text-label-md uppercase tracking-wider">Email</p>
<p class="font-body-lg text-body-lg text-on-surface">aditya.p@example.com</p>
</div>
<div class="space-y-1">
<p class="text-on-surface-variant font-label-md text-label-md uppercase tracking-wider">Nomor Telepon</p>
<p class="font-body-lg text-body-lg text-on-surface">+62 812-3456-7890</p>
</div>
<div class="space-y-1">
<p class="text-on-surface-variant font-label-md text-label-md uppercase tracking-wider">Institusi</p>
<p class="font-body-lg text-body-lg text-on-surface">Universitas Indonesia</p>
</div>
</div>
</div>
<!-- Info Acara Card -->
<div class="tonal-layer-1 rounded-[24px] p-8 border border-outline-variant/30">
<div class="flex items-center gap-3 mb-6">
<span class="material-symbols-outlined text-secondary text-3xl">event_available</span>
<h2 class="font-headline-md text-headline-md text-on-surface">Info Acara</h2>
</div>
<div class="space-y-6">
<div class="flex flex-col gap-1">
<p class="text-on-surface-variant font-label-md text-label-md uppercase tracking-wider">Judul Seminar</p>
<p class="font-headline-md text-headline-md text-primary">Inovasi Teknologi AI dalam Pendidikan Modern 2024</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="flex items-start gap-2">
<span class="material-symbols-outlined text-on-surface-variant">calendar_today</span>
<div>
<p class="text-on-surface-variant font-label-md text-label-md">Tanggal</p>
<p class="font-label-lg text-label-lg text-on-surface">15 Oktober 2024</p>
</div>
</div>
<div class="flex items-start gap-2">
<span class="material-symbols-outlined text-on-surface-variant">location_on</span>
<div>
<p class="text-on-surface-variant font-label-md text-label-md">Lokasi</p>
<p class="font-label-lg text-label-lg text-on-surface">Auditorium Pusat, Jakarta</p>
</div>
</div>
<div class="flex items-start gap-2">
<span class="material-symbols-outlined text-on-surface-variant">category</span>
<div>
<p class="text-on-surface-variant font-label-md text-label-md">Tipe</p>
<p class="font-label-lg text-label-lg text-on-surface">Hybrid Event</p>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Right Column (40%) -->
<div class="lg:col-span-5 space-y-gutter">
<!-- Status Pendaftaran Card -->
<div class="tonal-layer-1 rounded-[24px] p-8 border border-outline-variant/30 flex flex-col items-center text-center">
<p class="text-on-surface-variant font-label-md text-label-md uppercase tracking-wider mb-4">Status Saat Ini</p>
<div class="bg-surface-container-highest px-8 py-4 rounded-full flex items-center gap-3">
<span class="material-symbols-outlined text-[#F59E0B]" style="font-variation-settings: 'FILL' 1;">pending</span>
<span class="font-headline-md text-headline-md text-[#F59E0B]">Menunggu</span>
</div>
<p class="mt-4 font-body-md text-body-md text-on-surface-variant">Pendaftaran sedang ditinjau oleh admin untuk verifikasi pembayaran.</p>
</div>
<!-- Bukti Pembayaran Card -->
<div class="tonal-layer-1 rounded-[24px] p-8 border border-outline-variant/30">
<div class="flex items-center justify-between mb-6">
<h2 class="font-headline-md text-headline-md text-on-surface">Bukti Pembayaran</h2>
<button class="text-secondary font-label-lg text-label-lg flex items-center gap-1 hover:underline">
<span class="material-symbols-outlined">zoom_in</span> Lihat Penuh
                        </button>
</div>
<div class="relative rounded-xl overflow-hidden aspect-[3/4] border border-outline-variant">
<img class="w-full h-full object-cover" data-alt="A high-quality photo of a physical bank transfer receipt placed on a clean white desk. The receipt shows official bank logos and clear printed text in black ink. The lighting is bright and professional, creating a clean corporate aesthetic consistent with a financial verification process. The background is a soft-focus office setting with professional stationery." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFOxewiibULzW0mUnrVB1OxPwxzDJlIQukxrTEa6etoQyiF3OfJEQqOhld6bnqZwvORPFAPp-1TZKU8QBJWGXZNAlJcN7CgtYk5Sx0I-M1pOUixumDKACkuvyxYT7CWkYZpP8SHorHoqn0unirXwvqBqrce6VI3__GASIRg5XyRcgxWwWRE2pzMxBWKW_rKp8kldlleL1nMYZWO5YI79G0jz47neKFx5Pid4s2GDJdGalWGv90bVbiLQ"/>
</div>
</div>
<!-- Aksi Admin Card -->
<div class="tonal-layer-1 rounded-[24px] p-8 border border-outline-variant/30">
<h2 class="font-headline-md text-headline-md text-on-surface mb-6">Tindakan Admin</h2>
<div class="flex flex-col gap-4">
<button class="bg-[#22C55E] text-white w-full py-4 rounded-xl font-label-lg text-label-lg flex items-center justify-center gap-2 hover:opacity-90 transition-all active:scale-[0.98]">
<span class="material-symbols-outlined">check_circle</span>
                            Konfirmasi Pembayaran
                        </button>
<button class="bg-[#EF4444] text-white w-full py-4 rounded-xl font-label-lg text-label-lg flex items-center justify-center gap-2 hover:opacity-90 transition-all active:scale-[0.98]">
<span class="material-symbols-outlined">cancel</span>
                            Tolak Pendaftaran
                        </button>
</div>
<p class="mt-6 text-center font-label-md text-label-md text-on-surface-variant italic">ID Pendaftaran: REG-2024-00982</p>
</div>
</div>
</div>
</main>
<!-- Footer -->
<footer class="bg-primary-container full-width">
<div class="flex flex-col md:flex-row justify-between items-center w-full px-margin-desktop py-12 max-w-container-max mx-auto">
<div class="mb-8 md:mb-0">
<div class="font-headline-md text-headline-md font-bold text-on-tertiary-container mb-2">SeminarKu</div>
<p class="text-on-primary-container font-body-md text-body-md">Platform seminar terpercaya untuk masa depan akademis Anda.</p>
</div>
<div class="flex flex-wrap justify-center gap-8 mb-8 md:mb-0">
<a class="text-on-primary-container hover:text-on-tertiary-container hover:underline font-body-md text-body-md" href="{{ route(\'home\') }}">Home</a>
<a class="text-on-primary-container hover:text-on-tertiary-container hover:underline font-body-md text-body-md" href="{{ route(\'events.index\') }}">Acara</a>
<a class="text-on-primary-container hover:text-on-tertiary-container hover:underline font-body-md text-body-md" href="#">Tentang</a>
<a class="text-on-primary-container hover:text-on-tertiary-container hover:underline font-body-md text-body-md" href="#">Privacy Policy</a>
<a class="text-on-primary-container hover:text-on-tertiary-container hover:underline font-body-md text-body-md" href="#">Terms of Service</a>
</div>
<div class="text-on-primary-container font-body-md text-body-md text-center md:text-right">
                © 2024 SeminarKu. All rights reserved.
            </div>
</div>
</footer>
<!-- Micro-interactions Script -->
<script>
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('mousedown', () => {
                button.style.transform = 'scale(0.96)';
            });
            button.addEventListener('mouseup', () => {
                button.style.transform = '';
            });
            button.addEventListener('mouseleave', () => {
                button.style.transform = '';
            });
        });
    </script>

@endsection
