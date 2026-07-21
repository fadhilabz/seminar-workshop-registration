@extends('layouts.app')
@section('title', 'Admin Dashboard')
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
        .sidebar-scroll::-webkit-scrollbar {
            width: 4px;
        }
        .sidebar-scroll::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(8px);
            border: 1px solid #D1E4EB;
        }
    </style>
<div class="flex min-h-screen text-on-surface">
<!-- SIDEBAR -->
<aside class="h-screen w-64 fixed left-0 top-0 bg-primary dark:bg-primary-container shadow-xl flex flex-col h-full py-6 z-50 border-r border-outline-variant/10">
<div class="font-headline-md text-headline-md text-on-primary font-bold mb-8 px-4">SeminarKu</div>
<nav class="flex-1 sidebar-scroll overflow-y-auto space-y-1">
<!-- Dashboard Active -->
<a class="flex items-center gap-4 bg-secondary text-on-secondary rounded-lg px-4 py-3 mx-2 scale-95 transition-transform" href="{{ route(\'admin.dashboard\') }}">
<span class="material-symbols-outlined">dashboard</span>
<span class="font-label-lg text-label-lg">Dashboard</span>
</a>
<a class="flex items-center gap-4 text-on-primary/70 hover:bg-white/5 rounded-lg px-4 py-3 mx-2 hover:bg-on-primary/10 transition-all duration-200" href="{{ route(\'admin.events.index\') }}">
<span class="material-symbols-outlined">event</span>
<span class="font-label-lg text-label-lg">Kelola Acara</span>
</a>
<a class="flex items-center gap-4 text-on-primary/70 hover:bg-white/5 rounded-lg px-4 py-3 mx-2 hover:bg-on-primary/10 transition-all duration-200" href="{{ route(\'admin.payments.index\') }}">
<span class="material-symbols-outlined">group</span>
<span class="font-label-lg text-label-lg">Kelola Peserta</span>
</a>
<a class="flex items-center gap-4 text-on-primary/70 hover:bg-white/5 rounded-lg px-4 py-3 mx-2 hover:bg-on-primary/10 transition-all duration-200" href="{{ route(\'admin.role.index\') }}">
<span class="material-symbols-outlined">payments</span>
<span class="font-label-lg text-label-lg">Verifikasi Pembayaran</span>
</a>
<a class="flex items-center gap-4 text-on-primary/70 hover:bg-white/5 rounded-lg px-4 py-3 mx-2 hover:bg-on-primary/10 transition-all duration-200" href="{{ route(\'admin.laporan\') }}">
<span class="material-symbols-outlined">admin_panel_settings</span>
<span class="font-label-lg text-label-lg">Manajemen Role</span>
</a>
<a class="flex items-center gap-4 text-on-primary/70 hover:bg-white/5 rounded-lg px-4 py-3 mx-2 hover:bg-on-primary/10 transition-all duration-200" href="#">
<span class="material-symbols-outlined">workspace_premium</span>
<span class="font-label-lg text-label-lg">Sertifikat</span>
</a>
<a class="flex items-center gap-4 text-on-primary/70 hover:bg-white/5 rounded-lg px-4 py-3 mx-2 hover:bg-on-primary/10 transition-all duration-200" href="#">
<span class="material-symbols-outlined">assessment</span>
<span class="font-label-lg text-label-lg">Laporan</span>
</a>
</nav>
<div class="px-4 mt-6">
<button class="w-full py-3 bg-secondary-fixed text-on-secondary-fixed rounded-xl font-label-lg text-label-lg flex items-center justify-center gap-2 hover:scale-105 transition-transform duration-200">
<span class="material-symbols-outlined">add</span>
                Buat Seminar Baru
            </button>
</div>
<div class="mt-auto border-t border-on-primary/10 pt-4 space-y-1">
<a class="flex items-center gap-4 text-on-primary/70 hover:bg-white/5 rounded-lg px-4 py-3 mx-2 hover:bg-on-primary/10 transition-all duration-200" href="#">
<span class="material-symbols-outlined">settings</span>
<span class="font-label-lg text-label-lg">Settings</span>
</a>
<a class="flex items-center gap-4 text-on-primary/70 hover:bg-white/5 rounded-lg px-4 py-3 mx-2 hover:bg-on-primary/10 transition-all duration-200" href="#">
<span class="material-symbols-outlined">logout</span>
<span class="font-label-lg text-label-lg">Logout</span>
</a>
</div>
</aside>
<!-- MAIN CONTENT -->
<main class="ml-64 flex-1 flex flex-col">
<!-- HEADER -->
<header class="bg-[#0D2137] text-white py-12 px-12 shadow-md">
<div class="flex justify-between items-center">
<div>
<h1 class="font-headline-lg text-headline-lg font-bold">Selamat datang, Admin!</h1>
<p class="font-body-md text-body-md text-primary-fixed/80 mt-1">Kelola seminar dan workshop dengan mudah</p>
</div>
<div class="flex items-center gap-6">
<div class="relative">
<span class="material-symbols-outlined text-3xl">notifications</span>
<span class="absolute -top-1 -right-1 w-4 h-4 bg-error rounded-full text-[10px] flex items-center justify-center font-bold">3</span>
</div>
<div class="flex items-center gap-3">
<div class="text-right">
<p class="font-label-lg text-label-lg">Ahmad Fauzi</p>
<p class="font-label-md text-label-md text-primary-fixed/60">Super Admin</p>
</div>
<img class="w-12 h-12 rounded-full border-2 border-secondary object-cover" data-alt="A professional studio portrait of a modern male administrator in a professional setting. He is wearing a dark navy corporate blazer with a friendly expression. The background is a soft-focus office with warm ambient lighting and teal accents, following a premium business aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAcczfavHS5EP-cO8GvGgJOUo94mjtmRhdGpOd2HnSSX_UhxTXX2npOkVwYNPDJEOb9ABR8tHcEOr6SnvkYw3DnrhULRPREZeBqGJ5SYPRnqVSNPGkTZ5jHd3n9rRDpO6zGFpAnkCJDJwYyVN8-r3cya84suzgOhmsop6-k3An0J6XTALo4WFNVVw0tuswBQTNIrezeOhpDHa91lSphsZ1d9OmGseJoK3YVc5Q9Q9fyo_eHltB7MrAStQ"/>
</div>
</div>
</div>
</header>
<!-- DASHBOARD BODY -->
<div class="p-12 space-y-12">
<!-- STATS CARDS -->
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
<!-- Stat 1 -->
<div class="bg-white p-6 rounded-2xl shadow-sm border-l-4 border-[#028090] glass-card transition-all duration-300 hover:translate-y-[-4px] hover:shadow-lg">
<div class="flex justify-between items-start">
<div>
<p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Total Acara</p>
<h3 class="font-headline-lg text-headline-lg font-bold text-primary mt-1">24</h3>
</div>
<div class="bg-secondary-container p-2 rounded-lg">
<span class="material-symbols-outlined text-on-secondary-container">event</span>
</div>
</div>
<div class="mt-4 flex items-center gap-1 text-[#028090] font-label-md text-label-md">
<span class="material-symbols-outlined text-sm">trending_up</span>
<span>+3 bulan ini</span>
</div>
</div>
<!-- Stat 2 -->
<div class="bg-white p-6 rounded-2xl shadow-sm border-l-4 border-[#02C39A] glass-card transition-all duration-300 hover:translate-y-[-4px] hover:shadow-lg">
<div class="flex justify-between items-start">
<div>
<p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Total Peserta</p>
<h3 class="font-headline-lg text-headline-lg font-bold text-primary mt-1">348</h3>
</div>
<div class="bg-tertiary-fixed-dim/20 p-2 rounded-lg">
<span class="material-symbols-outlined text-on-tertiary-container">group</span>
</div>
</div>
<div class="mt-4 flex items-center gap-1 text-[#02C39A] font-label-md text-label-md">
<span class="material-symbols-outlined text-sm">trending_up</span>
<span>+28 minggu ini</span>
</div>
</div>
<!-- Stat 3 -->
<div class="bg-white p-6 rounded-2xl shadow-sm border-l-4 border-[#F59E0B] glass-card transition-all duration-300 hover:translate-y-[-4px] hover:shadow-lg">
<div class="flex justify-between items-start">
<div>
<p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Menunggu Verifikasi</p>
<h3 class="font-headline-lg text-headline-lg font-bold text-primary mt-1">12</h3>
</div>
<div class="bg-error-container p-2 rounded-lg">
<span class="material-symbols-outlined text-error">pending_actions</span>
</div>
</div>
<div class="mt-4 flex items-center gap-1 text-[#F59E0B] font-label-md text-label-md">
<span class="material-symbols-outlined text-sm">priority_high</span>
<span>Perlu ditinjau</span>
</div>
</div>
<!-- Stat 4 -->
<div class="bg-white p-6 rounded-2xl shadow-sm border-l-4 border-[#8B5CF6] glass-card transition-all duration-300 hover:translate-y-[-4px] hover:shadow-lg">
<div class="flex justify-between items-start">
<div>
<p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Sertifikat Diterbitkan</p>
<h3 class="font-headline-lg text-headline-lg font-bold text-primary mt-1">285</h3>
</div>
<div class="bg-primary-fixed p-2 rounded-lg">
<span class="material-symbols-outlined text-primary">workspace_premium</span>
</div>
</div>
<div class="mt-4 flex items-center gap-1 text-[#8B5CF6] font-label-md text-label-md">
<span class="material-symbols-outlined text-sm">verified</span>
<span>Total keseluruhan</span>
</div>
</div>
</section>
<!-- TWO COLUMNS: TABLE & UPCOMING -->
<div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
<!-- TABLE SECTION -->
<section class="xl:col-span-2 space-y-6">
<div class="flex justify-between items-center px-2">
<h2 class="font-headline-md text-headline-md font-bold text-primary">Pendaftaran Terbaru</h2>
<button class="text-secondary font-label-lg text-label-lg hover:underline">Lihat Semua</button>
</div>
<div class="bg-white rounded-3xl overflow-hidden shadow-sm glass-card">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low border-b border-outline-variant/20">
<th class="py-5 px-6 font-label-lg text-label-lg text-on-surface-variant uppercase tracking-wide">Nama</th>
<th class="py-5 px-6 font-label-lg text-label-lg text-on-surface-variant uppercase tracking-wide">Acara</th>
<th class="py-5 px-6 font-label-lg text-label-lg text-on-surface-variant uppercase tracking-wide">Tanggal</th>
<th class="py-5 px-6 font-label-lg text-label-lg text-on-surface-variant uppercase tracking-wide">Harga</th>
<th class="py-5 px-6 font-label-lg text-label-lg text-on-surface-variant uppercase tracking-wide">Status</th>
<th class="py-5 px-6 font-label-lg text-label-lg text-on-surface-variant uppercase tracking-wide">Aksi</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/10">
<tr class="hover:bg-secondary-container/10 transition-colors">
<td class="py-5 px-6 font-body-md text-body-md font-semibold">Budi Santoso</td>
<td class="py-5 px-6 font-body-md text-body-md">UX Masterclass 2024</td>
<td class="py-5 px-6 font-label-md text-label-md">12 Okt 2024</td>
<td class="py-5 px-6 font-body-md text-body-md font-medium">Rp 250.000</td>
<td class="py-5 px-6">
<span class="px-3 py-1 bg-secondary-container text-on-secondary-container rounded-full text-[12px] font-bold">Dikonfirmasi</span>
</td>
<td class="py-5 px-6">
<button class="p-2 hover:bg-surface-container rounded-lg"><span class="material-symbols-outlined text-secondary">visibility</span></button>
</td>
</tr>
<tr class="hover:bg-secondary-container/10 transition-colors">
<td class="py-5 px-6 font-body-md text-body-md font-semibold">Siti Aminah</td>
<td class="py-5 px-6 font-body-md text-body-md">Data Science Summit</td>
<td class="py-5 px-6 font-label-md text-label-md">11 Okt 2024</td>
<td class="py-5 px-6 font-body-md text-body-md font-medium">Rp 350.000</td>
<td class="py-5 px-6">
<span class="px-3 py-1 bg-error-container text-on-error-container rounded-full text-[12px] font-bold">Menunggu</span>
</td>
<td class="py-5 px-6">
<button class="p-2 hover:bg-surface-container rounded-lg"><span class="material-symbols-outlined text-secondary">visibility</span></button>
</td>
</tr>
<tr class="hover:bg-secondary-container/10 transition-colors">
<td class="py-5 px-6 font-body-md text-body-md font-semibold">Rian Hidayat</td>
<td class="py-5 px-6 font-body-md text-body-md">Cybersecurity 101</td>
<td class="py-5 px-6 font-label-md text-label-md">10 Okt 2024</td>
<td class="py-5 px-6 font-body-md text-body-md font-medium">Rp 150.000</td>
<td class="py-5 px-6">
<span class="px-3 py-1 bg-surface-variant text-on-surface-variant rounded-full text-[12px] font-bold">Ditolak</span>
</td>
<td class="py-5 px-6">
<button class="p-2 hover:bg-surface-container rounded-lg"><span class="material-symbols-outlined text-secondary">visibility</span></button>
</td>
</tr>
<tr class="hover:bg-secondary-container/10 transition-colors">
<td class="py-5 px-6 font-body-md text-body-md font-semibold">Dewi Lestari</td>
<td class="py-5 px-6 font-body-md text-body-md">AI for Business</td>
<td class="py-5 px-6 font-label-md text-label-md">09 Okt 2024</td>
<td class="py-5 px-6 font-body-md text-body-md font-medium">Rp 400.000</td>
<td class="py-5 px-6">
<span class="px-3 py-1 bg-secondary-container text-on-secondary-container rounded-full text-[12px] font-bold">Dikonfirmasi</span>
</td>
<td class="py-5 px-6">
<button class="p-2 hover:bg-surface-container rounded-lg"><span class="material-symbols-outlined text-secondary">visibility</span></button>
</td>
</tr>
</tbody>
</table>
</div>
</section>
<!-- UPCOMING EVENTS SECTION -->
<section class="space-y-6">
<h2 class="font-headline-md text-headline-md font-bold text-primary px-2">Acara Mendatang</h2>
<div class="space-y-4">
<!-- Card 1 -->
<div class="bg-white p-4 rounded-2xl shadow-sm border border-outline-variant/10 hover:shadow-md transition-shadow">
<div class="flex gap-4">
<div class="w-20 h-20 rounded-xl bg-cover bg-center shrink-0" data-alt="A vibrant digital illustration representing a UX Design workshop. It features sleek user interface components, colorful flowcharts, and abstract geometric shapes in shades of teal, seafoam, and navy. The style is modern, professional, and clean, with a high-contrast corporate look." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBcDCEtLUT3qonjJakgxt1AxEvy0zZhdyyG9wGgZM7-f6ScfLT3vilJfhVe5n9qjvETRyf-oo4xYfDf1XAtneMk5xpBN970nSOra0JDIaNXm2gRYCpsWXB9N3URMeWJ4H2LBYnfyOUvaPkrzVc4FFV8tDd4Dv7bnsV_5FZTJcxYov0FkJxYj4DgIDR1iM_8cdBIhohKHnRuaP8M4FeiWdGaJmZ2IkYMrDwZuQE3my6lRdQVy1i6rYuYCA')"></div>
<div class="flex-1 overflow-hidden">
<h4 class="font-label-lg text-label-lg font-bold text-primary truncate">UX Masterclass 2024</h4>
<p class="font-label-md text-label-md text-on-surface-variant flex items-center gap-1 mt-1">
<span class="material-symbols-outlined text-[14px]">calendar_month</span> 15 Okt 2024
                                    </p>
<p class="font-label-md text-label-md text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">location_on</span> Jakarta (Hybrid)
                                    </p>
</div>
</div>
<div class="mt-4 pt-4 border-t border-outline-variant/10">
<div class="flex justify-between mb-1">
<span class="font-label-md text-label-md font-semibold">85 / 100 Peserta</span>
<span class="font-label-md text-label-md text-secondary">85%</span>
</div>
<div class="w-full bg-surface-container h-2 rounded-full overflow-hidden">
<div class="bg-secondary h-full" style="width: 85%"></div>
</div>
</div>
</div>
<!-- Card 2 -->
<div class="bg-white p-4 rounded-2xl shadow-sm border border-outline-variant/10 hover:shadow-md transition-shadow">
<div class="flex gap-4">
<div class="w-20 h-20 rounded-xl bg-cover bg-center shrink-0" data-alt="A futuristic technology-themed banner for a Data Science summit. It includes glowing data visualizations, neural network patterns, and 3D graphs. The color palette uses deep navy blue backgrounds with bright teal and purple highlights, creating a high-tech academic atmosphere." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDsAK2J_7wbduNmEYklBMGXH3uYDVd_e9Qcb4ZJ10hrOCzaZEN67T_wy42U9GRW1sLMy63lrB4tgbK30PQxrkPcCKtbgPZtTNUYWWVYOUvt1E_jW0_QQwEPbQ6f_fYAxc8mTsNEpFX1xtnQa7XyUSZ1rE_L3klgcK48BiLOoHwlJtPCAwUDRl4ihVIhk-I8Xfq87f-zYmppelF8EOgsllU6BPYYvZ8_vu0VQ9eN7ONdFhMmJIrRI32acQ')"></div>
<div class="flex-1 overflow-hidden">
<h4 class="font-label-lg text-label-lg font-bold text-primary truncate">Data Science Summit</h4>
<p class="font-label-md text-label-md text-on-surface-variant flex items-center gap-1 mt-1">
<span class="material-symbols-outlined text-[14px]">calendar_month</span> 22 Okt 2024
                                    </p>
<p class="font-label-md text-label-md text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">location_on</span> Bandung (Offline)
                                    </p>
</div>
</div>
<div class="mt-4 pt-4 border-t border-outline-variant/10">
<div class="flex justify-between mb-1">
<span class="font-label-md text-label-md font-semibold">120 / 200 Peserta</span>
<span class="font-label-md text-label-md text-secondary">60%</span>
</div>
<div class="w-full bg-surface-container h-2 rounded-full overflow-hidden">
<div class="bg-secondary h-full" style="width: 60%"></div>
</div>
</div>
</div>
<!-- Card 3 -->
<div class="bg-white p-4 rounded-2xl shadow-sm border border-outline-variant/10 hover:shadow-md transition-shadow">
<div class="flex gap-4">
<div class="w-20 h-20 rounded-xl bg-cover bg-center shrink-0" data-alt="A professional business-oriented illustration for an AI seminar. It displays a minimalist robot silhouette integrated with business icons like magnifying glasses, charts, and lightbulbs. The lighting is bright and clean with a palette of white, light teal, and navy accents." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDUvaxJ8ivuW4muGiFFaU8sMXLJwacls-55Irgd8I9WU30ykO-_0jEpSnL_yUNZbR1Y37eEvUnqEEzUXSSHSNJeDodWLYkCD2CV8ggxtOrAd9iWnlmWCOMzdyqNsEg9GUWX2RTyy9Xv-hxqk67G0uOJq0RX4RDG4tVy63B1vCeHkiYSrGErZqhTR3-5WFYydMh1pBzgvPRl2ZnJ7xJItIZVlkr_KWSa7LjEf70-dpEuP1NSkFDDHUIlUA')"></div>
<div class="flex-1 overflow-hidden">
<h4 class="font-label-lg text-label-lg font-bold text-primary truncate">AI for Business</h4>
<p class="font-label-md text-label-md text-on-surface-variant flex items-center gap-1 mt-1">
<span class="material-symbols-outlined text-[14px]">calendar_month</span> 05 Nov 2024
                                    </p>
<p class="font-label-md text-label-md text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">location_on</span> Online Only
                                    </p>
</div>
</div>
<div class="mt-4 pt-4 border-t border-outline-variant/10">
<div class="flex justify-between mb-1">
<span class="font-label-md text-label-md font-semibold">45 / 300 Peserta</span>
<span class="font-label-md text-label-md text-secondary">15%</span>
</div>
<div class="w-full bg-surface-container h-2 rounded-full overflow-hidden">
<div class="bg-secondary h-full" style="width: 15%"></div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
<!-- FOOTER -->
<footer class="w-full mt-auto px-12 py-8 bg-surface-container-low border-t border-outline-variant/20 flex flex-col md:flex-row justify-between items-center gap-4">
<div class="font-headline-md text-headline-md text-primary font-bold">SeminarKu</div>
<p class="font-body-md text-body-md text-on-surface-variant">© 2024 SeminarKu. All rights reserved.</p>
<div class="flex gap-6">
<a class="text-on-surface-variant hover:text-secondary transition-colors font-label-md text-label-md" href="#">Privacy Policy</a>
<a class="text-on-surface-variant hover:text-secondary transition-colors font-label-md text-label-md" href="#">Terms of Service</a>
<a class="text-on-surface-variant hover:text-secondary transition-colors font-label-md text-label-md" href="#">Contact Us</a>
</div>
</footer>
</main>
<script>
        // Micro-interactions and subtle effects
        document.querySelectorAll('.glass-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.classList.add('scale-[1.01]');
            });
            card.addEventListener('mouseleave', () => {
                card.classList.remove('scale-[1.01]');
            });
        });

        // Search bar animation logic could be added here if needed
    </script>
</div>
@endsection
