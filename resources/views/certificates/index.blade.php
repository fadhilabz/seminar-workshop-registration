@extends('layouts.app')
@section('title', 'Sertifikat Saya')
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
            display: inline-block;
            vertical-align: middle;
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
        }
        .card-hover {
            transition: all 0.2s ease-in-out;
        }
        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px -10px rgba(0, 9, 23, 0.15);
        }
    </style>
<div class="bg-background text-on-surface font-body-md antialiased min-h-screen flex flex-col">
<!-- Top Navigation Bar -->
<header class="fixed top-0 w-full z-50 bg-primary shadow-sm">
<nav class="flex justify-between items-center px-margin-desktop py-4 max-w-container-max mx-auto">
<div class="flex items-center gap-8">
<span class="font-headline-md text-headline-md font-bold text-on-primary">SeminarKu</span>
<div class="hidden md:flex gap-6">
<a class="font-body-md text-body-md text-tertiary-fixed font-bold border-b-2 border-tertiary-fixed pb-1 hover:text-tertiary-fixed transition-colors duration-200" href="{{ route(\'certificates.index\') }}">Certificates</a>
<a class="font-body-md text-body-md text-on-primary-fixed-variant hover:text-tertiary-fixed transition-colors duration-200" href="#">Admin Panel</a>
<a class="font-body-md text-body-md text-on-primary-fixed-variant hover:text-tertiary-fixed transition-colors duration-200" href="#">Support</a>
</div>
</div>
<div class="flex items-center gap-4">
<button class="material-symbols-outlined text-on-primary p-2 rounded-full hover:bg-primary-container transition-all">notifications</button>
<button class="material-symbols-outlined text-on-primary p-2 rounded-full hover:bg-primary-container transition-all">settings</button>
<div class="flex items-center gap-2 pl-4 border-l border-on-primary-fixed-variant/30">
<span class="text-on-primary font-label-lg text-label-lg">Profile</span>
<div class="w-8 h-8 rounded-full bg-secondary text-on-secondary flex items-center justify-center font-bold text-xs">JD</div>
</div>
</div>
</nav>
</header>
<main class="flex-grow pt-24 pb-16">
<!-- Hero Section -->
<section class="bg-primary-container py-16 mb-12 relative overflow-hidden">

<div class="relative z-10 max-w-container-max mx-auto px-margin-desktop">
<div class="max-w-2xl">
<h1 class="font-headline-xl text-headline-xl text-on-primary mb-4">Sertifikat Saya</h1>
<p class="font-body-lg text-body-lg text-primary-fixed-dim">Sertifikat keikutsertaan seminar &amp; workshop dalam karir profesional Anda.</p>
</div>
</div>
</section>
<!-- Stats Bento Section -->
<div class="max-w-container-max mx-auto px-margin-desktop mb-12">
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<div class="bg-surface-container-lowest p-8 rounded-[24px] shadow-sm flex items-center gap-6 border border-outline-variant/30 card-hover">
<div class="w-14 h-14 rounded-2xl bg-secondary/10 flex items-center justify-center text-secondary">
<span class="material-symbols-outlined scale-125">auto_awesome_motion</span>
</div>
<div>
<p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Total Sertifikat</p>
<h2 class="font-headline-lg text-headline-lg text-primary">3</h2>
</div>
</div>
<div class="bg-surface-container-lowest p-8 rounded-[24px] shadow-sm flex items-center gap-6 border border-outline-variant/30 card-hover">
<div class="w-14 h-14 rounded-2xl bg-on-tertiary-container/10 flex items-center justify-center text-on-tertiary-container">
<span class="material-symbols-outlined scale-125" data-weight="fill">school</span>
</div>
<div>
<p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Seminar</p>
<h2 class="font-headline-lg text-headline-lg text-primary">1</h2>
</div>
</div>
<div class="bg-surface-container-lowest p-8 rounded-[24px] shadow-sm flex items-center gap-6 border border-outline-variant/30 card-hover">
<div class="w-14 h-14 rounded-2xl bg-secondary-container/30 flex items-center justify-center text-on-secondary-container">
<span class="material-symbols-outlined scale-125">terminal</span>
</div>
<div>
<p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Workshop</p>
<h2 class="font-headline-lg text-headline-lg text-primary">2</h2>
</div>
</div>
</div>
</div>
<!-- Certificate Grid -->
<div class="max-w-container-max mx-auto px-margin-desktop">
<div class="flex justify-between items-end mb-8">
<div>
<h3 class="font-headline-md text-headline-md text-primary">Koleksi Terbaru</h3>
<p class="text-on-surface-variant">Daftar sertifikat yang telah diterbitkan</p>
</div>
<div class="flex gap-2">
<button class="px-4 py-2 rounded-full bg-surface-container-high text-on-surface font-label-lg text-label-lg hover:bg-surface-container-highest transition-colors">Semua</button>
<button class="px-4 py-2 rounded-full text-on-surface-variant font-label-lg text-label-lg hover:bg-surface-container-high transition-colors">Seminar</button>
<button class="px-4 py-2 rounded-full text-on-surface-variant font-label-lg text-label-lg hover:bg-surface-container-high transition-colors">Workshop</button>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
<!-- Certificate Card 1 -->
<div class="group bg-surface-container-lowest rounded-[24px] border border-outline-variant/50 overflow-hidden card-hover flex flex-col">
<div class="relative h-48 bg-surface-dim overflow-hidden">
<div class="absolute inset-0 bg-gradient-to-t from-primary/40 to-transparent z-10"></div>
<div class="absolute top-4 left-4 z-20">
<span class="px-3 py-1 rounded-full bg-on-tertiary-container text-on-tertiary font-label-md text-[10px] uppercase tracking-widest font-bold">SEMINAR</span>
</div>
<div class="absolute inset-0 flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
<div class="w-full h-full bg-cover bg-center" data-alt="A sophisticated professional certificate design with elegant typography and gold foil seal, lying on a high-end corporate mahogany desk with soft ambient lighting and a shallow depth of field. The style is clean, modern, and academic, featuring teal and navy accents that match the SeminarKu brand identity." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDCL7gUGmVyimPvA_S4Zm1OvV_NSyBJMbxyQANl3eiUNfxZqAVNvbomcvHupDJaRomQvOb_oZMwKuqq9OlUiXdV4R36V47JMw9mOV9uc6Qxz88CGytGmGJU1ynUIb_H5UN5dvVPn3SDQMt2ereLbds6sUGM3CNZKxG8HOQSFFv0fHavfD46nNdtdv9-g_DR3sVHIttR0WraOh9pA5tIv35k_B1B-hv5z93iCbt5ClpYohnZ7S1HBdmtNQ')"></div>
</div>
<div class="absolute bottom-4 left-4 z-20 flex items-center gap-2">
<div class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white">
<span class="material-symbols-outlined">eda</span>
</div>
</div>
</div>
<div class="p-6 flex-grow flex flex-col">
<h4 class="font-headline-md text-[18px] text-primary mb-2 line-clamp-2">Seminar Nasional Teknologi AI 2025</h4>
<div class="space-y-3 mb-6">
<div class="flex justify-between items-center text-label-md">
<span class="text-on-surface-variant flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">calendar_today</span> Pelaksanaan</span>
<span class="text-on-surface font-semibold">20 Juli 2025</span>
</div>
<div class="flex justify-between items-center text-label-md">
<span class="text-on-surface-variant flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">verified</span> Terbit</span>
<span class="text-on-surface font-semibold">21 Juli 2025</span>
</div>
<div class="flex justify-between items-center text-label-md">
<span class="text-on-surface-variant flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">fingerprint</span> No. Seri</span>
<span class="text-on-surface font-mono text-[11px] bg-surface-container px-2 py-0.5 rounded">CERT-2025-001</span>
</div>
</div>
<div class="mt-auto grid grid-cols-2 gap-3">
<button class="py-3 px-4 rounded-xl bg-on-tertiary-container text-on-tertiary font-label-lg text-label-lg flex items-center justify-center gap-2 hover:opacity-90 active:scale-95 transition-all">
<span class="material-symbols-outlined text-[18px]">download</span> PDF
                            </button>
<a href="{{ route(\'certificates.show\', 1) }}" class="py-3 px-4 rounded-xl border border-on-tertiary-container text-on-tertiary-container font-label-lg text-label-lg flex items-center justify-center gap-2 hover:bg-on-tertiary-container/5 active:scale-95 transition-all">
<span class="material-symbols-outlined text-[18px]">visibility</span> Lihat
                            </a>
</div>
</div>
</div>
<!-- Certificate Card 2 -->
<div class="group bg-surface-container-lowest rounded-[24px] border border-outline-variant/50 overflow-hidden card-hover flex flex-col">
<div class="relative h-48 bg-surface-dim overflow-hidden">
<div class="absolute inset-0 bg-gradient-to-t from-primary/40 to-transparent z-10"></div>
<div class="absolute top-4 left-4 z-20">
<span class="px-3 py-1 rounded-full bg-secondary text-on-secondary font-label-md text-[10px] uppercase tracking-widest font-bold">WORKSHOP</span>
</div>
<div class="absolute inset-0 flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
<div class="w-full h-full bg-cover bg-center" data-alt="A high-resolution photograph of a clean, minimalist digital workspace featuring a laptop showing a line of code and a professional certificate on a nearby tablet. The environment is illuminated by soft natural light from a window, creating a serene and productive atmosphere with a teal and seafoam color palette. The aesthetic is corporate and modern, emphasizing technological proficiency." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBnJhN5ePzqsIR2JPWlR5DfMclV7nlp4DDei9DFjPSwGSrDaUdpnFNl7TYCB0292HgDQGKNiXaHcRCW_UPX5FTvhHQbGiOa_LKlLNf6b8qcJMnzR6iDKwOdG2PRzECLAiSDaFIUGc5nB_Ctn8SgTjM3_Q75h9oQN3-Cc6erWLcZYZHk4RbZ-dxu4e7cb16deVssQHAyFoT0KRTs8OGD3GBpwP5qxjTcd3S28O_H_aaAYdSaWjbBHuSuyg')"></div>
</div>
<div class="absolute bottom-4 left-4 z-20 flex items-center gap-2">
<div class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white">
<span class="material-symbols-outlined">laptop_mac</span>
</div>
</div>
</div>
<div class="p-6 flex-grow flex flex-col">
<h4 class="font-headline-md text-[18px] text-primary mb-2 line-clamp-2">Workshop Laravel untuk Pemula</h4>
<div class="space-y-3 mb-6">
<div class="flex justify-between items-center text-label-md">
<span class="text-on-surface-variant flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">calendar_today</span> Pelaksanaan</span>
<span class="text-on-surface font-semibold">25 Juli 2025</span>
</div>
<div class="flex justify-between items-center text-label-md">
<span class="text-on-surface-variant flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">verified</span> Terbit</span>
<span class="text-on-surface font-semibold">26 Juli 2025</span>
</div>
<div class="flex justify-between items-center text-label-md">
<span class="text-on-surface-variant flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">fingerprint</span> No. Seri</span>
<span class="text-on-surface font-mono text-[11px] bg-surface-container px-2 py-0.5 rounded">CERT-2025-002</span>
</div>
</div>
<div class="mt-auto grid grid-cols-2 gap-3">
<button class="py-3 px-4 rounded-xl bg-on-tertiary-container text-on-tertiary font-label-lg text-label-lg flex items-center justify-center gap-2 hover:opacity-90 active:scale-95 transition-all">
<span class="material-symbols-outlined text-[18px]">download</span> PDF
                            </button>
<a href="{{ route(\'certificates.show\', 1) }}" class="py-3 px-4 rounded-xl border border-on-tertiary-container text-on-tertiary-container font-label-lg text-label-lg flex items-center justify-center gap-2 hover:bg-on-tertiary-container/5 active:scale-95 transition-all">
<span class="material-symbols-outlined text-[18px]">visibility</span> Lihat
                            </a>
</div>
</div>
</div>
<!-- Certificate Card 3 -->
<div class="group bg-surface-container-lowest rounded-[24px] border border-outline-variant/50 overflow-hidden card-hover flex flex-col">
<div class="relative h-48 bg-surface-dim overflow-hidden">
<div class="absolute inset-0 bg-gradient-to-t from-primary/40 to-transparent z-10"></div>
<div class="absolute top-4 left-4 z-20">
<span class="px-3 py-1 rounded-full bg-secondary text-on-secondary font-label-md text-[10px] uppercase tracking-widest font-bold">WORKSHOP</span>
</div>
<div class="absolute inset-0 flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
<div class="w-full h-full bg-cover bg-center" data-alt="An artistic and creative photography shot of a high-quality certificate focused on UI/UX Design Figma. The background shows blurred creative elements like a designer's stylus, color swatches, and a high-resolution monitor. The lighting is soft and artistic with a teal-to-seafoam gradient highlight, conveying a sense of professional mastery in the design industry." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDaWKkJu0TAXNz7fYVXdnAAVtmG6sBs_cylQk4NWFzO068LMyspsOsYvPBp-3ymC0GhHCJ6lTeMTnkaUbjf8HvaIhI3ndReDnhLKd1lMwHiDTqgKPjW_JzsNZI1PZiTBzzHpk52-yGFbsFp3ruwgPyrdCDvJvfporOMQWHBFMOiq0RpNwuMPbOOX2pEu37QsOgG2Ew20Iuafb40J8iHal7h8Bk0FnNVtVXK706RGj9Z636ez9hFwhLmGQ')"></div>
</div>
<div class="absolute bottom-4 left-4 z-20 flex items-center gap-2">
<div class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white">
<span class="material-symbols-outlined">palette</span>
</div>
</div>
</div>
<div class="p-6 flex-grow flex flex-col">
<h4 class="font-headline-md text-[18px] text-primary mb-2 line-clamp-2">Workshop UI/UX Design Figma</h4>
<div class="space-y-3 mb-6">
<div class="flex justify-between items-center text-label-md">
<span class="text-on-surface-variant flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">calendar_today</span> Pelaksanaan</span>
<span class="text-on-surface font-semibold">1 Agustus 2025</span>
</div>
<div class="flex justify-between items-center text-label-md">
<span class="text-on-surface-variant flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">verified</span> Terbit</span>
<span class="text-on-surface font-semibold">2 Agustus 2025</span>
</div>
<div class="flex justify-between items-center text-label-md">
<span class="text-on-surface-variant flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">fingerprint</span> No. Seri</span>
<span class="text-on-surface font-mono text-[11px] bg-surface-container px-2 py-0.5 rounded">CERT-2025-003</span>
</div>
</div>
<div class="mt-auto grid grid-cols-2 gap-3">
<button class="py-3 px-4 rounded-xl bg-on-tertiary-container text-on-tertiary font-label-lg text-label-lg flex items-center justify-center gap-2 hover:opacity-90 active:scale-95 transition-all">
<span class="material-symbols-outlined text-[18px]">download</span> PDF
                            </button>
<a href="{{ route(\'certificates.show\', 1) }}" class="py-3 px-4 rounded-xl border border-on-tertiary-container text-on-tertiary-container font-label-lg text-label-lg flex items-center justify-center gap-2 hover:bg-on-tertiary-container/5 active:scale-95 transition-all">
<span class="material-symbols-outlined text-[18px]">visibility</span> Lihat
                            </a>
</div>
</div>
</div>
</div>
</div>
</main>
<!-- Footer -->
<footer class="bg-surface-container-highest w-full mt-auto border-t border-outline-variant">
<div class="flex flex-col md:flex-row justify-between items-center py-12 px-margin-desktop max-w-container-max mx-auto gap-8">
<div class="flex flex-col items-center md:items-start gap-4">
<span class="font-headline-md text-headline-md text-primary">SeminarKu</span>
<p class="font-label-md text-label-md text-on-surface-variant text-center md:text-left max-w-xs">© 2024 SeminarKu. Professional Excellence in Learning.</p>
</div>
<div class="flex flex-col md:flex-row gap-8 items-center">
<div class="flex gap-6">
<a class="font-label-md text-label-md text-on-surface-variant hover:text-secondary transition-opacity duration-200 hover:opacity-80" href="#">Privacy Policy</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-secondary transition-opacity duration-200 hover:opacity-80" href="#">Terms of Service</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-secondary transition-opacity duration-200 hover:opacity-80" href="#">Contact Us</a>
</div>
<div class="flex gap-4">
<a class="w-10 h-10 rounded-full bg-surface-container-low flex items-center justify-center text-primary hover:bg-secondary-container transition-all" href="#">
<svg class="w-5 h-5 fill-current" viewbox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
</a>
<a class="w-10 h-10 rounded-full bg-surface-container-low flex items-center justify-center text-primary hover:bg-secondary-container transition-all" href="#">
<svg class="w-5 h-5 fill-current" viewbox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg>
</a>
</div>
</div>
</div>
</footer>
<script>
        // Micro-interactions and subtle effects
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('mousedown', () => {
                button.classList.add('scale-95');
            });
            button.addEventListener('mouseup', () => {
                button.classList.remove('scale-95');
            });
            button.addEventListener('mouseleave', () => {
                button.classList.remove('scale-95');
            });
        });
    </script>
</div>
@endsection
