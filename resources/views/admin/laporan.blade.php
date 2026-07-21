@extends('layouts.app')
@section('title', 'Laporan Statistik')
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
                        "inverse-surface": "#273235",
                        "primary-fixed": "#d2e4ff",
                        "on-primary-fixed": "#081c32",
                        "surface-container-high": "#deeaee",
                        "on-secondary": "#ffffff",
                        "secondary-fixed-dim": "#77d4e5",
                        "outline": "#74777d",
                        "surface-container": "#e4f0f4",
                        "primary-container": "#0d2137",
                        "primary": "#000917",
                        "on-primary": "#ffffff",
                        "on-tertiary-fixed-variant": "#00513e",
                        "secondary": "#006876",
                        "secondary-fixed": "#9eefff",
                        "surface-bright": "#f0fbff",
                        "surface-tint": "#4d6079",
                        "on-error": "#ffffff",
                        "inverse-primary": "#b5c8e5",
                        "surface-container-lowest": "#ffffff",
                        "surface-variant": "#d9e5e8",
                        "on-secondary-fixed": "#001f24",
                        "tertiary": "#000c07",
                        "on-tertiary": "#ffffff",
                        "on-surface": "#121d20",
                        "background": "#f0fbff",
                        "on-tertiary-fixed": "#002117",
                        "tertiary-fixed-dim": "#40deb3",
                        "error-container": "#ffdad6",
                        "on-background": "#121d20",
                        "on-surface-variant": "#44474d",
                        "on-tertiary-container": "#009a79",
                        "secondary-container": "#92edff",
                        "outline-variant": "#c4c6cd",
                        "surface-dim": "#d0dce0",
                        "on-primary-container": "#7689a4",
                        "on-secondary-fixed-variant": "#004e59",
                        "primary-fixed-dim": "#b5c8e5",
                        "inverse-on-surface": "#e7f3f7",
                        "surface": "#f0fbff",
                        "on-error-container": "#93000a",
                        "on-primary-fixed-variant": "#364860",
                        "error": "#ba1a1a",
                        "tertiary-fixed": "#65fbcf",
                        "on-secondary-container": "#006d7b",
                        "surface-container-highest": "#d9e5e8",
                        "tertiary-container": "#00261c",
                        "surface-container-low": "#eaf6fa"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "margin-mobile": "16px",
                        "gutter": "24px",
                        "container-max": "1280px",
                        "base": "8px",
                        "margin-desktop": "48px"
                    },
                    "fontFamily": {
                        "body-lg": ["Montserrat"],
                        "headline-lg-mobile": ["Montserrat"],
                        "headline-xl": ["Montserrat"],
                        "body-md": ["Montserrat"],
                        "label-lg": ["Montserrat"],
                        "label-md": ["Montserrat"],
                        "headline-md": ["Montserrat"],
                        "headline-lg": ["Montserrat"]
                    },
                    "fontSize": {
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "headline-lg-mobile": ["24px", {"lineHeight": "1.2", "fontWeight": "700"}],
                        "headline-xl": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}],
                        "label-lg": ["14px", {"lineHeight": "1.2", "fontWeight": "600"}],
                        "label-md": ["12px", {"lineHeight": "1.2", "fontWeight": "500"}],
                        "headline-md": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                        "headline-lg": ["32px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "700"}]
                    }
                },
            },
        }
    </script>
<style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f0fbff;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .card-elevation {
            box-shadow: 0 12px 24px -10px rgba(13, 33, 55, 0.05);
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }
        .card-elevation:hover {
            transform: translateY(-2px);
            box-shadow: 0 16px 32px -12px rgba(13, 33, 55, 0.1);
        }
        .bar-animate {
            animation: growUp 1s ease-out forwards;
            transform-origin: bottom;
        }
        @keyframes growUp {
            from { transform: scaleY(0); }
            to { transform: scaleY(1); }
        }
    </style>
<div class="flex min-h-screen">
<!-- SideNavBar (Shared Component) -->
<aside class="h-screen w-64 fixed left-0 top-0 bg-primary dark:bg-primary-container text-on-primary dark:text-on-primary-container shadow-xl flex flex-col py-6 z-40 border-r border-outline-variant/10">
<div class="font-headline-md text-headline-md text-on-primary font-bold mb-8 px-4">SeminarKu</div>
<div class="flex flex-col gap-1 overflow-y-auto flex-grow">
<a class="flex items-center gap-4 text-on-primary/70 hover:bg-white/5 rounded-lg px-4 py-3 mx-2 transition-all duration-200" href="{{ route(\'admin.dashboard\') }}">
<span class="material-symbols-outlined">dashboard</span>
<span class="font-label-lg text-label-lg">Dashboard</span>
</a>
<a class="flex items-center gap-4 text-on-primary/70 hover:bg-white/5 rounded-lg px-4 py-3 mx-2 transition-all duration-200" href="{{ route(\'admin.events.index\') }}">
<span class="material-symbols-outlined">event</span>
<span class="font-label-lg text-label-lg">Kelola Acara</span>
</a>
<a class="flex items-center gap-4 text-on-primary/70 hover:bg-white/5 rounded-lg px-4 py-3 mx-2 transition-all duration-200" href="{{ route(\'admin.payments.index\') }}">
<span class="material-symbols-outlined">group</span>
<span class="font-label-lg text-label-lg">Kelola Peserta</span>
</a>
<a class="flex items-center gap-4 text-on-primary/70 hover:bg-white/5 rounded-lg px-4 py-3 mx-2 transition-all duration-200" href="{{ route(\'admin.role.index\') }}">
<span class="material-symbols-outlined">payments</span>
<span class="font-label-lg text-label-lg">Verifikasi Pembayaran</span>
</a>
<a class="flex items-center gap-4 text-on-primary/70 hover:bg-white/5 rounded-lg px-4 py-3 mx-2 transition-all duration-200" href="{{ route(\'admin.laporan\') }}">
<span class="material-symbols-outlined">admin_panel_settings</span>
<span class="font-label-lg text-label-lg">Manajemen Role</span>
</a>
<a class="flex items-center gap-4 text-on-primary/70 hover:bg-white/5 rounded-lg px-4 py-3 mx-2 transition-all duration-200" href="#">
<span class="material-symbols-outlined">workspace_premium</span>
<span class="font-label-lg text-label-lg">Sertifikat</span>
</a>
<!-- Active Tab: Laporan -->
<a class="flex items-center gap-4 bg-secondary text-on-secondary rounded-lg px-4 py-3 mx-2 scale-95 transition-transform" href="#">
<span class="material-symbols-outlined">assessment</span>
<span class="font-label-lg text-label-lg">Laporan</span>
</a>
</div>
<div class="mt-auto px-2 space-y-1">
<button class="w-full mb-4 bg-secondary-fixed text-on-secondary-fixed font-label-lg py-3 rounded-lg flex items-center justify-center gap-2 hover:opacity-90 transition-opacity">
<span class="material-symbols-outlined">add_circle</span>
                Buat Seminar Baru
            </button>
<a class="flex items-center gap-4 text-on-primary/70 hover:bg-white/5 rounded-lg px-4 py-3 transition-all duration-200" href="#">
<span class="material-symbols-outlined">settings</span>
<span class="font-label-lg text-label-lg">Settings</span>
</a>
<a class="flex items-center gap-4 text-on-primary/70 hover:bg-white/5 rounded-lg px-4 py-3 transition-all duration-200" href="#">
<span class="material-symbols-outlined">logout</span>
<span class="font-label-lg text-label-lg">Logout</span>
</a>
</div>
</aside>
<!-- Main Content -->
<main class="ml-64 flex-1 flex flex-col">
<!-- Custom Header -->
<header class="bg-primary-container text-white px-margin-desktop py-12 flex flex-col justify-center">
<h1 class="font-headline-lg text-headline-lg">Laporan &amp; Statistik</h1>
<p class="font-body-md text-body-md opacity-80 mt-1">Ringkasan data seminar dan workshop</p>
</header>
<!-- Content Canvas -->
<div class="px-margin-desktop -mt-8 space-y-6 pb-12">
<!-- Filter Row -->
<div class="bg-surface-container-lowest rounded-xl p-4 flex flex-col md:flex-row justify-between items-center card-elevation">
<div class="flex items-center gap-4 w-full md:w-auto">
<label class="font-label-lg text-on-surface-variant">Periode:</label>
<select class="bg-surface-container-low border border-outline-variant/30 rounded-lg px-4 py-2 font-body-md text-on-surface focus:ring-2 focus:ring-secondary outline-none transition-all">
<option>Minggu ini</option>
<option selected="">Bulan ini</option>
<option>Tahun ini</option>
</select>
</div>
<button class="mt-4 md:mt-0 w-full md:w-auto bg-[#028090] text-white px-6 py-2.5 rounded-lg font-label-lg flex items-center justify-center gap-2 hover:brightness-110 active:scale-95 transition-all">
<span class="material-symbols-outlined text-[20px]">picture_as_pdf</span>
                    Export PDF
                </button>
</div>
<!-- Stats Row -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter">
<!-- Card 1 -->
<div class="bg-surface-container-lowest p-6 rounded-[24px] card-elevation flex flex-col border border-outline-variant/10">
<div class="flex justify-between items-start mb-4">
<div class="p-3 bg-secondary-container rounded-xl text-on-secondary-container">
<span class="material-symbols-outlined">payments</span>
</div>
<span class="text-secondary font-label-md bg-secondary/10 px-2 py-1 rounded-full">+12%</span>
</div>
<span class="font-label-md text-on-surface-variant uppercase tracking-wider">Total Pendapatan</span>
<span class="font-headline-md text-headline-md text-on-surface mt-1">Rp 52.500.000</span>
</div>
<!-- Card 2 -->
<div class="bg-surface-container-lowest p-6 rounded-[24px] card-elevation flex flex-col border border-outline-variant/10">
<div class="flex justify-between items-start mb-4">
<div class="p-3 bg-tertiary-fixed rounded-xl text-on-tertiary-fixed">
<span class="material-symbols-outlined">group</span>
</div>
<span class="text-tertiary font-label-md bg-tertiary-fixed-dim/20 px-2 py-1 rounded-full">+8%</span>
</div>
<span class="font-label-md text-on-surface-variant uppercase tracking-wider">Total Peserta</span>
<span class="font-headline-md text-headline-md text-on-surface mt-1">348</span>
</div>
<!-- Card 3 -->
<div class="bg-surface-container-lowest p-6 rounded-[24px] card-elevation flex flex-col border border-outline-variant/10">
<div class="flex justify-between items-start mb-4">
<div class="p-3 bg-primary-fixed rounded-xl text-on-primary-fixed">
<span class="material-symbols-outlined">task_alt</span>
</div>
</div>
<span class="font-label-md text-on-surface-variant uppercase tracking-wider">Acara Selesai</span>
<span class="font-headline-md text-headline-md text-on-surface mt-1">18</span>
</div>
<!-- Card 4 -->
<div class="bg-surface-container-lowest p-6 rounded-[24px] card-elevation flex flex-col border border-outline-variant/10">
<div class="flex justify-between items-start mb-4">
<div class="p-3 bg-surface-container-highest rounded-xl text-on-surface">
<span class="material-symbols-outlined">analytics</span>
</div>
</div>
<span class="font-label-md text-on-surface-variant uppercase tracking-wider">Rata-rata Peserta</span>
<span class="font-headline-md text-headline-md text-on-surface mt-1">19/acara</span>
</div>
</div>
<!-- Bento Grid Content -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
<!-- Chart Placeholder -->
<div class="lg:col-span-2 bg-surface-container-lowest p-8 rounded-[24px] card-elevation border border-outline-variant/10 flex flex-col h-[420px]">
<div class="flex justify-between items-center mb-8">
<h3 class="font-headline-md text-on-surface">Grafik Pendaftaran per Bulan</h3>
<div class="flex gap-2">
<span class="flex items-center gap-1 font-label-md text-on-surface-variant">
<span class="w-3 h-3 bg-secondary rounded-full"></span> Peserta
                            </span>
</div>
</div>
<div class="flex-1 bg-[#E8F4F8] border-2 border-dashed border-outline-variant/50 rounded-xl relative flex items-end justify-between px-8 py-4 overflow-hidden">
<!-- Simulated Bar Chart -->
<div class="flex flex-col items-center flex-1">
<div class="bar-animate w-8 sm:w-12 bg-secondary/80 rounded-t-lg" style="height: 45%;"></div>
<span class="mt-2 font-label-md text-on-surface-variant">Jan</span>
</div>
<div class="flex flex-col items-center flex-1">
<div class="bar-animate w-8 sm:w-12 bg-secondary/80 rounded-t-lg" style="height: 60%; animation-delay: 0.1s;"></div>
<span class="mt-2 font-label-md text-on-surface-variant">Feb</span>
</div>
<div class="flex flex-col items-center flex-1">
<div class="bar-animate w-8 sm:w-12 bg-secondary/80 rounded-t-lg" style="height: 35%; animation-delay: 0.2s;"></div>
<span class="mt-2 font-label-md text-on-surface-variant">Mar</span>
</div>
<div class="flex flex-col items-center flex-1">
<div class="bar-animate w-8 sm:w-12 bg-secondary/80 rounded-t-lg" style="height: 85%; animation-delay: 0.3s;"></div>
<span class="mt-2 font-label-md text-on-surface-variant">Apr</span>
</div>
<div class="flex flex-col items-center flex-1">
<div class="bar-animate w-8 sm:w-12 bg-secondary/80 rounded-t-lg" style="height: 55%; animation-delay: 0.4s;"></div>
<span class="mt-2 font-label-md text-on-surface-variant">Mei</span>
</div>
<div class="flex flex-col items-center flex-1">
<div class="bar-animate w-8 sm:w-12 bg-secondary/80 rounded-t-lg" style="height: 70%; animation-delay: 0.5s;"></div>
<span class="mt-2 font-label-md text-on-surface-variant">Jun</span>
</div>
</div>
</div>
<!-- Secondary Info Panel -->
<div class="bg-primary text-on-primary p-8 rounded-[24px] card-elevation flex flex-col justify-between overflow-hidden relative">

<div class="relative z-10">
<h3 class="font-headline-md mb-2">Insight AI</h3>
<p class="font-body-md opacity-70">Berdasarkan data bulan ini, pendaftaran meningkat 15% pada hari Selasa dan Rabu. Pertimbangkan untuk meluncurkan promosi di hari tersebut.</p>
</div>
<div class="relative z-10 mt-8 space-y-4">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed">
<span class="material-symbols-outlined">trending_up</span>
</div>
<div>
<div class="font-label-lg">Pertumbuhan Peserta</div>
<div class="font-body-md opacity-70">+124 peserta baru</div>
</div>
</div>
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-tertiary-fixed flex items-center justify-center text-on-tertiary-fixed">
<span class="material-symbols-outlined">star</span>
</div>
<div>
<div class="font-label-lg">Rating Kepuasan</div>
<div class="font-body-md opacity-70">4.8 / 5.0 (Rata-rata)</div>
</div>
</div>
</div>
<button class="relative z-10 mt-8 w-full py-3 bg-white text-primary font-label-lg rounded-lg hover:bg-opacity-90 transition-all">
                        Lihat Detail Analitik
                    </button>
</div>
</div>
<!-- Table Section -->
<div class="bg-surface-container-lowest rounded-[24px] card-elevation border border-outline-variant/10 overflow-hidden">
<div class="px-8 py-6 border-b border-outline-variant/20 flex justify-between items-center">
<h3 class="font-headline-md text-on-surface">Acara Terpopuler</h3>
<button class="text-secondary font-label-lg hover:underline">Lihat Semua</button>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead class="bg-surface-container text-on-surface-variant font-label-lg uppercase tracking-wider">
<tr>
<th class="px-8 py-4 font-medium">Nama Acara</th>
<th class="px-8 py-4 font-medium">Peserta</th>
<th class="px-8 py-4 font-medium">Pendapatan</th>
<th class="px-8 py-4 font-medium">Status</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/10 font-body-md text-on-surface">
<tr class="hover:bg-secondary/5 transition-colors group">
<td class="px-8 py-5">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-variant flex items-center justify-center text-secondary">
<span class="material-symbols-outlined">code</span>
</div>
<span class="font-semibold">Web Development Bootcamp 2024</span>
</div>
</td>
<td class="px-8 py-5">120</td>
<td class="px-8 py-5">Rp 18.000.000</td>
<td class="px-8 py-5">
<span class="bg-secondary/10 text-secondary px-3 py-1 rounded-full text-label-md font-bold uppercase">Berjalan</span>
</td>
</tr>
<tr class="hover:bg-secondary/5 transition-colors group">
<td class="px-8 py-5">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-variant flex items-center justify-center text-secondary">
<span class="material-symbols-outlined">brush</span>
</div>
<span class="font-semibold">UI/UX Design Strategy</span>
</div>
</td>
<td class="px-8 py-5">85</td>
<td class="px-8 py-5">Rp 12.750.000</td>
<td class="px-8 py-5">
<span class="bg-tertiary-fixed/30 text-on-tertiary-fixed-variant px-3 py-1 rounded-full text-label-md font-bold uppercase">Selesai</span>
</td>
</tr>
<tr class="hover:bg-secondary/5 transition-colors group">
<td class="px-8 py-5">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-variant flex items-center justify-center text-secondary">
<span class="material-symbols-outlined">trending_up</span>
</div>
<span class="font-semibold">Digital Marketing Masterclass</span>
</div>
</td>
<td class="px-8 py-5">98</td>
<td class="px-8 py-5">Rp 14.700.000</td>
<td class="px-8 py-5">
<span class="bg-tertiary-fixed/30 text-on-tertiary-fixed-variant px-3 py-1 rounded-full text-label-md font-bold uppercase">Selesai</span>
</td>
</tr>
<tr class="hover:bg-secondary/5 transition-colors group">
<td class="px-8 py-5">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-variant flex items-center justify-center text-secondary">
<span class="material-symbols-outlined">data_object</span>
</div>
<span class="font-semibold">Data Science for Business</span>
</div>
</td>
<td class="px-8 py-5">45</td>
<td class="px-8 py-5">Rp 7.050.000</td>
<td class="px-8 py-5">
<span class="bg-secondary/10 text-secondary px-3 py-1 rounded-full text-label-md font-bold uppercase">Berjalan</span>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<!-- Footer (Shared Component) -->
<footer class="w-full mt-auto bg-surface-container-low dark:bg-inverse-surface border-t border-outline-variant/20 px-margin-desktop py-8 flex flex-col md:flex-row justify-between items-center text-on-surface dark:text-inverse-on-surface">
<div class="font-headline-md text-headline-md text-primary dark:text-primary-fixed mb-4 md:mb-0">SeminarKu</div>
<div class="flex gap-8 mb-4 md:mb-0">
<a class="font-label-md text-on-surface-variant hover:text-secondary transition-colors" href="#">Privacy Policy</a>
<a class="font-label-md text-on-surface-variant hover:text-secondary transition-colors" href="#">Terms of Service</a>
<a class="font-label-md text-on-surface-variant hover:text-secondary transition-colors" href="#">Contact Us</a>
</div>
<div class="font-body-md text-body-md opacity-80">© 2024 SeminarKu. All rights reserved.</div>
</footer>
</main>
<script>
        // Micro-interactions and accessibility
        document.querySelectorAll('a, button').forEach(elem => {
            elem.addEventListener('mousedown', () => {
                elem.style.transform = 'scale(0.98)';
            });
            elem.addEventListener('mouseup', () => {
                elem.style.transform = '';
            });
            elem.addEventListener('mouseleave', () => {
                elem.style.transform = '';
            });
        });

        // Simple animation for the simulated bar chart on load
        window.addEventListener('DOMContentLoaded', () => {
            const bars = document.querySelectorAll('.bar-animate');
            bars.forEach((bar, index) => {
                bar.style.animationDelay = `${index * 0.1}s`;
            });
        });
    </script>
</div>
@endsection
