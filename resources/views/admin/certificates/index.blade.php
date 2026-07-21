@extends('layouts.app')
@section('title', 'Kelola Sertifikat Admin')
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
                        "on-surface": "#121d20",
                        "on-error": "#ffffff",
                        "inverse-surface": "#273235",
                        "primary-container": "#0d2137",
                        "on-error-container": "#93000a",
                        "tertiary-container": "#00261c",
                        "primary": "#000917",
                        "surface-container-highest": "#d9e5e8",
                        "on-tertiary-fixed-variant": "#00513e",
                        "inverse-on-surface": "#e7f3f7",
                        "tertiary-fixed": "#65fbcf",
                        "surface-container": "#e4f0f4",
                        "on-tertiary": "#ffffff",
                        "inverse-primary": "#b5c8e5",
                        "surface-dim": "#d0dce0",
                        "on-tertiary-fixed": "#002117",
                        "secondary-container": "#92edff",
                        "background": "#f0fbff",
                        "on-primary-container": "#7689a4",
                        "surface-container-low": "#eaf6fa",
                        "on-secondary-fixed-variant": "#004e59",
                        "on-primary": "#ffffff",
                        "tertiary-fixed-dim": "#40deb3",
                        "outline": "#74777d",
                        "on-surface-variant": "#44474d",
                        "secondary": "#006876",
                        "error": "#ba1a1a",
                        "on-secondary-container": "#006d7b",
                        "surface-container-lowest": "#ffffff",
                        "surface-bright": "#f0fbff",
                        "secondary-fixed-dim": "#77d4e5",
                        "surface": "#f0fbff",
                        "on-tertiary-container": "#009a79",
                        "on-secondary-fixed": "#001f24",
                        "on-primary-fixed": "#081c32",
                        "primary-fixed-dim": "#b5c8e5",
                        "surface-tint": "#4d6079",
                        "error-container": "#ffdad6",
                        "secondary-fixed": "#9eefff",
                        "on-primary-fixed-variant": "#364860",
                        "tertiary": "#000c07",
                        "surface-container-high": "#deeaee",
                        "outline-variant": "#c4c6cd",
                        "surface-variant": "#d9e5e8",
                        "on-secondary": "#ffffff",
                        "primary-fixed": "#d2e4ff",
                        "on-background": "#121d20"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "margin-desktop": "48px",
                        "container-max": "1280px",
                        "base": "8px",
                        "gutter": "24px",
                        "margin-mobile": "16px"
                    },
                    "fontFamily": {
                        "label-md": ["Montserrat"],
                        "headline-md": ["Montserrat"],
                        "headline-lg-mobile": ["Montserrat"],
                        "body-lg": ["Montserrat"],
                        "label-lg": ["Montserrat"],
                        "headline-xl": ["Montserrat"],
                        "headline-lg": ["Montserrat"],
                        "body-md": ["Montserrat"]
                    },
                    "fontSize": {
                        "label-md": ["12px", {"lineHeight": "1.2", "fontWeight": "500"}],
                        "headline-md": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                        "headline-lg-mobile": ["24px", {"lineHeight": "1.2", "fontWeight": "700"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "label-lg": ["14px", {"lineHeight": "1.2", "fontWeight": "600"}],
                        "headline-xl": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "headline-lg": ["32px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                        "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}]
                    }
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .active-tab {
            background-color: #92edff;
            color: #006d7b;
            font-weight: 700;
            border-radius: 0.5rem;
        }
        .btn-hover-effect {
            transition: transform 0.2s ease-in-out, background-color 0.2s ease-in-out;
        }
        .btn-hover-effect:hover {
            transform: scale(0.98);
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 12px rgba(13, 33, 55, 0.05);
        }
    </style>
<div class="bg-background font-body-md text-on-surface min-h-screen flex">
<!-- SideNavBar Anchor -->
<aside class="h-full w-64 fixed left-0 top-0 bg-surface-container-low border-r border-outline-variant flex flex-col p-6 gap-4 z-40">
<div class="mb-8 px-2">
<h1 class="font-headline-md text-headline-md text-on-surface font-extrabold tracking-tight">SeminarKu</h1>
<p class="font-label-md text-label-md text-on-surface-variant opacity-70">Admin Panel</p>
</div>
<nav class="flex flex-col gap-2">
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-highest transition-all duration-200 rounded-lg group" href="#">
<span class="material-symbols-outlined group-hover:text-secondary">dashboard</span>
<span class="font-label-lg text-label-lg">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 bg-secondary-container text-on-secondary-container rounded-lg font-bold transition-all duration-200" href="{{ route(\'admin.certificates.index\') }}">
<span class="material-symbols-outlined" style="font-variation-settings: \'FILL\' 1;">verified</span>
<span class="font-label-lg text-label-lg">Manage Certificates</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-highest transition-all duration-200 rounded-lg group" href="#">
<span class="material-symbols-outlined group-hover:text-secondary">add_circle</span>
<span class="font-label-lg text-label-lg">Issue New</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container-highest transition-all duration-200 rounded-lg group" href="#">
<span class="material-symbols-outlined group-hover:text-secondary">history</span>
<span class="font-label-lg text-label-lg">Audit Log</span>
</a>
</nav>
<div class="mt-auto pt-6 border-t border-outline-variant">
<div class="flex items-center gap-3 mb-6">
<div class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center text-on-primary">
<span class="material-symbols-outlined">person</span>
</div>
<div>
<p class="font-label-lg text-label-lg text-on-surface">Admin User</p>
<p class="text-[10px] uppercase tracking-wider text-on-surface-variant">Super Admin</p>
</div>
</div>
<button class="w-full bg-secondary text-on-secondary py-3 rounded-xl font-label-lg text-label-lg btn-hover-effect">
                Generate Report
            </button>
</div>
</aside>
<!-- Main Content Canvas -->
<main class="ml-64 flex-1 flex flex-col">
<!-- TopAppBar Anchor -->
<header class="fixed top-0 left-64 right-0 z-30 bg-primary h-20 shadow-sm flex items-center px-8">
<div class="flex justify-between items-center w-full max-w-container-max mx-auto">
<div class="flex flex-col">
<h2 class="font-headline-md text-headline-md font-bold text-on-primary leading-tight">Kelola Sertifikat</h2>
<p class="font-label-md text-label-md text-on-primary-fixed-variant opacity-80">Generate dan kelola sertifikat peserta</p>
</div>
<div class="flex items-center gap-6">
<div class="hidden md:flex gap-6">
<a class="text-on-primary-fixed-variant font-label-lg hover:text-tertiary-fixed transition-colors duration-200" href="{{ route(\'certificates.index\') }}">Certificates</a>
<a class="text-tertiary-fixed font-bold border-b-2 border-tertiary-fixed pb-1 font-label-lg" href="#">Admin Panel</a>
<a class="text-on-primary-fixed-variant font-label-lg hover:text-tertiary-fixed transition-colors duration-200" href="#">Support</a>
</div>
<div class="flex items-center gap-3 ml-4 border-l border-outline-variant pl-4">
<span class="material-symbols-outlined text-on-primary cursor-pointer hover:text-tertiary-fixed transition-colors">notifications</span>
<span class="material-symbols-outlined text-on-primary cursor-pointer hover:text-tertiary-fixed transition-colors">settings</span>
</div>
</div>
</div>
</header>
<section class="mt-20 p-margin-desktop space-y-8">
<!-- Statistics Bento Layout -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<div class="glass-card p-6 rounded-3xl flex items-center gap-5 border border-outline-variant/30">
<div class="w-14 h-14 rounded-2xl bg-secondary/10 flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-[32px]">task_alt</span>
</div>
<div>
<p class="font-label-md text-label-md text-on-surface-variant">Total Diterbitkan</p>
<h3 class="font-headline-lg text-headline-lg text-on-surface">285</h3>
</div>
</div>
<div class="glass-card p-6 rounded-3xl flex items-center gap-5 border border-outline-variant/30">
<div class="w-14 h-14 rounded-2xl bg-tertiary-fixed-dim/20 flex items-center justify-center text-on-tertiary-container">
<span class="material-symbols-outlined text-[32px]">calendar_month</span>
</div>
<div>
<p class="font-label-md text-label-md text-on-surface-variant">Bulan Ini</p>
<h3 class="font-headline-lg text-headline-lg text-on-surface">48</h3>
</div>
</div>
<div class="glass-card p-6 rounded-3xl flex items-center gap-5 border border-outline-variant/30">
<div class="w-14 h-14 rounded-2xl bg-error-container/40 flex items-center justify-center text-on-error-container">
<span class="material-symbols-outlined text-[32px]">pending_actions</span>
</div>
<div>
<p class="font-label-md text-label-md text-on-surface-variant">Belum Diterbitkan</p>
<h3 class="font-headline-lg text-headline-lg text-on-surface">12</h3>
</div>
</div>
</div>
<!-- Management Section -->
<div class="glass-card rounded-[32px] overflow-hidden border border-outline-variant/20">
<!-- Filters Bar -->
<div class="p-6 bg-surface-container-low border-b border-outline-variant/30 flex flex-wrap items-center justify-between gap-4">
<div class="flex flex-wrap items-center gap-4 flex-1">
<div class="relative w-full max-w-xs">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-surface-container-lowest border border-outline-variant rounded-xl focus:ring-2 focus:ring-secondary focus:border-transparent outline-none font-label-lg" placeholder="Cari nama peserta..." type="text"/>
</div>
<select class="bg-surface-container-lowest border border-outline-variant rounded-xl px-4 py-2 font-label-lg focus:ring-2 focus:ring-secondary outline-none">
<option>Semua Event</option>
<option>Seminar AI 2025</option>
<option>Workshop Laravel</option>
<option>Workshop Figma</option>
</select>
<select class="bg-surface-container-lowest border border-outline-variant rounded-xl px-4 py-2 font-label-lg focus:ring-2 focus:ring-secondary outline-none">
<option>Semua Status</option>
<option>Sudah Terbit</option>
<option>Belum Terbit</option>
</select>
</div>
<button class="bg-[#028090] text-white px-6 py-2.5 rounded-xl font-label-lg flex items-center gap-2 btn-hover-effect shadow-md">
<span class="material-symbols-outlined">auto_fix_high</span>
                        Generate Semua
                    </button>
</div>
<!-- Responsive Table Container -->
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead class="bg-surface-container-high/50">
<tr>
<th class="px-6 py-4 font-label-lg text-on-surface-variant">No</th>
<th class="px-6 py-4 font-label-lg text-on-surface-variant">Peserta</th>
<th class="px-6 py-4 font-label-lg text-on-surface-variant">Acara</th>
<th class="px-6 py-4 font-label-lg text-on-surface-variant text-center">Tgl Selesai</th>
<th class="px-6 py-4 font-label-lg text-on-surface-variant">No. Sertifikat</th>
<th class="px-6 py-4 font-label-lg text-on-surface-variant">Status</th>
<th class="px-6 py-4 font-label-lg text-on-surface-variant text-right">Aksi</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/30">
<!-- Row 1 -->
<tr class="hover:bg-surface-container/30 transition-colors">
<td class="px-6 py-5 text-on-surface-variant">1</td>
<td class="px-6 py-5">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-secondary-fixed text-on-secondary-fixed flex items-center justify-center font-bold text-xs">JD</div>
<span class="font-label-lg text-on-surface">John Doe</span>
</div>
</td>
<td class="px-6 py-5 text-on-surface font-label-lg">Seminar AI 2025</td>
<td class="px-6 py-5 text-center text-on-surface-variant font-label-md">20 Juli 2025</td>
<td class="px-6 py-5 font-mono text-xs text-on-surface-variant">CERT-2025-001</td>
<td class="px-6 py-5">
<span class="px-3 py-1 bg-on-tertiary-container/10 text-on-tertiary-container rounded-full text-[11px] font-bold uppercase tracking-wider">Sudah Terbit</span>
</td>
<td class="px-6 py-5 text-right">
<div class="flex justify-end gap-2">
<button class="p-2 text-secondary hover:bg-secondary/10 rounded-lg transition-colors" title="Preview">
<span class="material-symbols-outlined text-[20px]">visibility</span>
</button>
<button class="p-2 text-secondary hover:bg-secondary/10 rounded-lg transition-colors" title="Download">
<span class="material-symbols-outlined text-[20px]">download</span>
</button>
<button class="p-2 text-secondary hover:bg-secondary/10 rounded-lg transition-colors" title="Email">
<span class="material-symbols-outlined text-[20px]">mail</span>
</button>
</div>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-surface-container/30 transition-colors">
<td class="px-6 py-5 text-on-surface-variant">2</td>
<td class="px-6 py-5">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-primary-fixed text-on-primary-fixed flex items-center justify-center font-bold text-xs">JS</div>
<span class="font-label-lg text-on-surface">Jane Smith</span>
</div>
</td>
<td class="px-6 py-5 text-on-surface font-label-lg">Workshop Laravel</td>
<td class="px-6 py-5 text-center text-on-surface-variant font-label-md">25 Juli 2025</td>
<td class="px-6 py-5 font-mono text-xs text-on-surface-variant">CERT-2025-002</td>
<td class="px-6 py-5">
<span class="px-3 py-1 bg-on-tertiary-container/10 text-on-tertiary-container rounded-full text-[11px] font-bold uppercase tracking-wider">Sudah Terbit</span>
</td>
<td class="px-6 py-5 text-right">
<div class="flex justify-end gap-2">
<button class="p-2 text-secondary hover:bg-secondary/10 rounded-lg transition-colors"><span class="material-symbols-outlined text-[20px]">visibility</span></button>
<button class="p-2 text-secondary hover:bg-secondary/10 rounded-lg transition-colors"><span class="material-symbols-outlined text-[20px]">download</span></button>
</div>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-surface-container/30 transition-colors">
<td class="px-6 py-5 text-on-surface-variant">3</td>
<td class="px-6 py-5">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center font-bold text-xs">BS</div>
<span class="font-label-lg text-on-surface">Budi Santoso</span>
</div>
</td>
<td class="px-6 py-5 text-on-surface font-label-lg">Workshop Figma</td>
<td class="px-6 py-5 text-center text-on-surface-variant font-label-md">1 Agt 2025</td>
<td class="px-6 py-5 font-mono text-xs text-on-surface-variant opacity-30">-</td>
<td class="px-6 py-5">
<span class="px-3 py-1 bg-[#FFF4D6] text-[#856404] rounded-full text-[11px] font-bold uppercase tracking-wider">Belum Terbit</span>
</td>
<td class="px-6 py-5 text-right">
<button class="bg-[#02C39A] text-primary px-4 py-1.5 rounded-lg font-label-md btn-hover-effect">
                                        Generate Sertifikat
                                    </button>
</td>
</tr>
<!-- Row 4 -->
<tr class="hover:bg-surface-container/30 transition-colors">
<td class="px-6 py-5 text-on-surface-variant">4</td>
<td class="px-6 py-5">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-tertiary-fixed-dim text-on-tertiary-fixed flex items-center justify-center font-bold text-xs">SR</div>
<span class="font-label-lg text-on-surface">Siti Rahma</span>
</div>
</td>
<td class="px-6 py-5 text-on-surface font-label-lg">Seminar Bisnis</td>
<td class="px-6 py-5 text-center text-on-surface-variant font-label-md">10 Agt 2025</td>
<td class="px-6 py-5 font-mono text-xs text-on-surface-variant opacity-30">-</td>
<td class="px-6 py-5">
<span class="px-3 py-1 bg-[#FFF4D6] text-[#856404] rounded-full text-[11px] font-bold uppercase tracking-wider">Belum Terbit</span>
</td>
<td class="px-6 py-5 text-right">
<button class="bg-[#02C39A] text-primary px-4 py-1.5 rounded-lg font-label-md btn-hover-effect">
                                        Generate Sertifikat
                                    </button>
</td>
</tr>
<!-- Row 5 -->
<tr class="hover:bg-surface-container/30 transition-colors">
<td class="px-6 py-5 text-on-surface-variant">5</td>
<td class="px-6 py-5">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-outline-variant text-on-surface flex items-center justify-center font-bold text-xs">AF</div>
<span class="font-label-lg text-on-surface">Ahmad Fauzi</span>
</div>
</td>
<td class="px-6 py-5 text-on-surface font-label-lg">Workshop Konten</td>
<td class="px-6 py-5 text-center text-on-surface-variant font-label-md">15 Agt 2025</td>
<td class="px-6 py-5 font-mono text-xs text-on-surface-variant">CERT-2025-005</td>
<td class="px-6 py-5">
<span class="px-3 py-1 bg-on-tertiary-container/10 text-on-tertiary-container rounded-full text-[11px] font-bold uppercase tracking-wider">Sudah Terbit</span>
</td>
<td class="px-6 py-5 text-right">
<div class="flex justify-end gap-2">
<button class="p-2 text-secondary hover:bg-secondary/10 rounded-lg transition-colors"><span class="material-symbols-outlined text-[20px]">visibility</span></button>
<button class="p-2 text-secondary hover:bg-secondary/10 rounded-lg transition-colors"><span class="material-symbols-outlined text-[20px]">download</span></button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination Placeholder -->
<div class="p-6 bg-surface-container-low/30 border-t border-outline-variant/30 flex items-center justify-between">
<p class="font-label-md text-on-surface-variant">Menampilkan 1-5 dari 285 sertifikat</p>
<div class="flex gap-2">
<button class="w-10 h-10 flex items-center justify-center rounded-xl border border-outline-variant text-on-surface-variant hover:bg-white"><span class="material-symbols-outlined">chevron_left</span></button>
<button class="w-10 h-10 flex items-center justify-center rounded-xl bg-secondary text-on-secondary font-bold">1</button>
<button class="w-10 h-10 flex items-center justify-center rounded-xl border border-outline-variant text-on-surface-variant hover:bg-white transition-colors">2</button>
<button class="w-10 h-10 flex items-center justify-center rounded-xl border border-outline-variant text-on-surface-variant hover:bg-white transition-colors">3</button>
<button class="w-10 h-10 flex items-center justify-center rounded-xl border border-outline-variant text-on-surface-variant hover:bg-white"><span class="material-symbols-outlined">chevron_right</span></button>
</div>
</div>
</div>
<!-- Dashboard Interaction Visual -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
<div class="glass-card rounded-3xl p-8 border border-outline-variant/20 relative overflow-hidden">
<div class="relative z-10">
<h4 class="font-headline-md text-headline-md mb-2">Pusat Bantuan</h4>
<p class="text-on-surface-variant mb-6">Butuh bantuan terkait integrasi API sertifikat atau kustomisasi template?</p>
<button class="px-6 py-3 border-2 border-secondary text-secondary font-label-lg rounded-2xl hover:bg-secondary hover:text-white transition-all duration-300">
                            Hubungi Technical Support
                        </button>
</div>
<div class="absolute -bottom-10 -right-10 w-48 h-48 opacity-10 bg-secondary rounded-full"></div>
</div>
<div class="glass-card rounded-3xl p-8 border border-outline-variant/20 relative overflow-hidden">
<div class="relative z-10">
<h4 class="font-headline-md text-headline-md mb-2">Audit Log Terbaru</h4>
<ul class="space-y-4">
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-on-tertiary-container bg-tertiary-fixed-dim/20 p-1 rounded-full text-sm">history</span>
<div>
<p class="font-label-lg text-on-surface">5 Sertifikat diterbitkan otomatis</p>
<p class="text-[10px] text-on-surface-variant uppercase">10 Menit Lalu</p>
</div>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-secondary bg-secondary-container/30 p-1 rounded-full text-sm">edit</span>
<div>
<p class="font-label-lg text-on-surface">Update template 'Seminar Bisnis'</p>
<p class="text-[10px] text-on-surface-variant uppercase">1 Jam Lalu</p>
</div>
</li>
</ul>
</div>
</div>
</div>
</section>
<!-- Footer Anchor -->
<footer class="w-full mt-auto border-t border-outline-variant bg-surface-container-highest dark:bg-inverse-surface">
<div class="flex flex-col md:flex-row justify-between items-center py-8 px-margin-desktop max-w-container-max mx-auto gap-4">
<div class="flex flex-col items-center md:items-start">
<h5 class="font-headline-md text-headline-md text-primary font-bold">SeminarKu</h5>
<p class="font-label-md text-label-md text-on-surface-variant mt-1">© 2024 SeminarKu. Professional Excellence in Learning.</p>
</div>
<div class="flex gap-6">
<a class="font-label-md text-label-md text-on-surface-variant hover:text-secondary transition-opacity duration-200" href="#">Privacy Policy</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-secondary transition-opacity duration-200" href="#">Terms of Service</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-secondary transition-opacity duration-200" href="#">Contact Us</a>
</div>
</div>
</footer>
</main>
<script>
        // Simple interactive feedback for generate buttons
        document.querySelectorAll('button').forEach(btn => {
            btn.addEventListener('click', function() {
                if(this.textContent.trim() === 'Generate Sertifikat') {
                    const originalText = this.innerHTML;
                    this.disabled = true;
                    this.innerHTML = '<span class="material-symbols-outlined animate-spin text-sm">autorenew</span> Processing...';
                    this.classList.add('opacity-70');
                    
                    setTimeout(() => {
                        this.innerHTML = '<span class="material-symbols-outlined text-sm">check_circle</span> Terbit!';
                        this.classList.remove('bg-[#02C39A]');
                        this.classList.add('bg-on-tertiary-container/20', 'text-on-tertiary-container');
                    }, 1500);
                }
            });
        });
    </script>
</div>
@endsection
