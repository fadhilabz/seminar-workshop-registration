@extends('layouts.app')
@section('title', 'Preview Sertifikat')
@section('content')
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet"/>
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
                    "on-background": "#121d20",
                    "brand-navy": "#0D2137",
                    "brand-teal": "#028090",
                    "brand-seafoam": "#02C39A"
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
                    "body-lg": ["Montserrat"],
                    "label-lg": ["Montserrat"],
                    "headline-xl": ["Montserrat"],
                    "headline-lg": ["Montserrat"],
                    "body-md": ["Montserrat"],
                    "serif-elegant": ["'Playfair Display'", "serif"]
            }
          }
        }
      }
    </script>
<style>
        .certificate-watermark {
            background-image: repeating-linear-gradient(45deg, transparent, transparent 100px, rgba(2, 128, 144, 0.03) 100px, rgba(2, 128, 144, 0.03) 200px);
            pointer-events: none;
        }
        .watermark-text {
            transform: rotate(-45deg);
            opacity: 0.05;
            user-select: none;
        }
        .btn-hover-effect {
            transition: all 0.2s ease-in-out;
        }
        .btn-hover-effect:active {
            transform: scale(0.98);
        }
    </style>
<div class="bg-background font-body-md text-on-background min-h-screen flex flex-col">
<!-- TopAppBar Mapping -->
<header class="fixed top-0 w-full z-50 bg-brand-navy shadow-sm">
<div class="flex justify-between items-center px-margin-desktop py-4 max-w-container-max mx-auto">
<div class="flex items-center gap-6">
<a href="{{ route(\'certificates.index\') }}" class="text-on-primary flex items-center gap-2 font-label-lg hover:opacity-80 transition-opacity">
<span class="material-symbols-outlined">arrow_back</span>
<span>Kembali</span>
</a>
<h1 class="font-headline-md text-headline-md font-bold text-on-primary">Preview Sertifikat</h1>
</div>
<div class="hidden md:flex gap-8 items-center">
<nav class="flex gap-6">
<a class="text-on-primary-fixed-variant font-label-lg hover:text-tertiary-fixed transition-colors" href="{{ route(\'certificates.index\') }}">Certificates</a>
<a class="text-on-primary-fixed-variant font-label-lg hover:text-tertiary-fixed transition-colors" href="#">Admin Panel</a>
<a class="text-on-primary-fixed-variant font-label-lg hover:text-tertiary-fixed transition-colors" href="#">Support</a>
</nav>
<div class="flex gap-4 items-center">
<span class="material-symbols-outlined text-on-primary cursor-pointer">notifications</span>
<span class="material-symbols-outlined text-on-primary cursor-pointer">settings</span>
<div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container font-bold">JD</div>
</div>
</div>
</div>
</header>
<main class="flex-grow pt-32 pb-20 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto w-full">
<!-- Breadcrumb / Task Context -->
<div class="mb-8 flex flex-col md:flex-row md:items-end justify-between gap-4">
<div>
<h2 class="font-headline-lg text-brand-navy mb-2">Konfirmasi Sertifikat</h2>
<p class="text-on-surface-variant font-body-md">Pastikan data nama dan detail acara sudah benar sebelum mengunduh salinan resmi.</p>
</div>
<div class="flex gap-3">
<button class="flex items-center gap-2 px-6 py-3 rounded-lg border-2 border-brand-teal text-brand-teal font-label-lg btn-hover-effect hover:bg-brand-teal hover:text-white">
<span class="material-symbols-outlined">history</span>
                    Riwayat Edit
                </button>
</div>
</div>
<div class="flex flex-col lg:flex-row gap-10 items-start">
<!-- Certificate Canvas Section -->
<div class="w-full lg:w-3/4 flex flex-col items-center">
<!-- Outer Shadow Box -->
<div class="relative bg-white p-4 shadow-xl rounded-lg w-full max-w-4xl border border-outline-variant overflow-hidden">
<!-- Inner Certificate Rendering (A4 Landscape aspect ratio simulation) -->
<div class="relative aspect-[1.414/1] w-full border-[8px] border-brand-teal p-1 bg-white overflow-hidden">
<div class="w-full h-full border-[4px] border-brand-seafoam flex flex-col items-center justify-between p-12 relative">
<!-- Watermark Overlay -->
<div class="absolute inset-0 z-0 overflow-hidden certificate-watermark flex flex-wrap justify-center items-center">
<div class="watermark-text font-bold text-4xl whitespace-nowrap p-20">SeminarKu SeminarKu SeminarKu</div>
<div class="watermark-text font-bold text-4xl whitespace-nowrap p-20">SeminarKu SeminarKu SeminarKu</div>
<div class="watermark-text font-bold text-4xl whitespace-nowrap p-20">SeminarKu SeminarKu SeminarKu</div>
</div>
<div class="z-10 flex flex-col items-center text-center w-full">
<!-- Icon Top -->
<div class="text-6xl mb-6">🎓</div>
<!-- Header Text -->
<h3 class="font-serif-elegant text-4xl md:text-5xl text-brand-navy tracking-widest uppercase mb-4">SERTIFIKAT KEIKUTSERTAAN</h3>
<!-- Teal Divider -->
<div class="w-1/2 h-1 bg-brand-teal mb-8"></div>
<p class="font-serif-elegant text-xl text-on-surface-variant mb-6 italic">Diberikan kepada:</p>
<!-- Recipient Name -->
<h2 class="font-serif-elegant font-bold text-5xl md:text-6xl text-brand-teal mb-10">JOHN DOE</h2>
<!-- Context -->
<div class="space-y-2">
<p class="font-serif-elegant text-2xl text-brand-navy">Telah mengikuti: Seminar Nasional Teknologi AI 2025</p>
<p class="font-label-lg text-on-surface-variant">Diselenggarakan pada 20 Juli 2025 di Aula Universitas</p>
</div>
</div>
<!-- Footer Certificate -->
<div class="z-10 w-full flex justify-between items-end mt-12 px-8">
<div class="text-left">
<p class="font-label-md text-on-surface-variant mb-1">Nomor Sertifikat:</p>
<p class="font-bold text-brand-navy">CERT-2025-001</p>
</div>
<div class="text-center">
<div class="w-48 h-[1px] bg-brand-navy mb-2"></div>
<p class="font-bold text-brand-navy">Panitia SeminarKu</p>
<p class="font-label-md text-on-surface-variant">Signature Verified</p>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Side Action Panel -->
<div class="w-full lg:w-1/4 flex flex-col gap-6">
<div class="bg-surface-container-low p-6 rounded-xl border border-outline-variant">
<h4 class="font-headline-md text-on-surface mb-4">Opsi Dokumen</h4>
<div class="space-y-4">
<button class="w-full flex items-center justify-center gap-3 bg-brand-teal text-white py-4 px-6 rounded-lg font-bold text-body-md btn-hover-effect shadow-md hover:bg-opacity-90">
<span class="material-symbols-outlined">download</span>
                            Download PDF
                        </button>
<a href="{{ route(\'certificates.index\') }}" class="w-full flex items-center justify-center gap-3 border-2 border-brand-teal text-brand-teal py-4 px-6 rounded-lg font-bold text-body-md btn-hover-effect hover:bg-brand-teal hover:text-white">
<span class="material-symbols-outlined">list</span>
                            Kembali ke Daftar
                        </a>
</div>
<hr class="my-6 border-outline-variant"/>
<div class="space-y-4">
<div class="flex items-center gap-3 text-on-surface-variant">
<span class="material-symbols-outlined text-brand-seafoam">check_circle</span>
<span class="text-label-lg">Verifikasi Blockchain Aktif</span>
</div>
<div class="flex items-center gap-3 text-on-surface-variant">
<span class="material-symbols-outlined text-brand-seafoam">share</span>
<span class="text-label-lg">Bagikan ke LinkedIn</span>
</div>
</div>
</div>
<!-- Preview Info Card -->
<div class="bg-white p-6 rounded-xl shadow-sm border border-outline-variant">
<div class="flex items-center gap-3 mb-4">
<span class="material-symbols-outlined text-brand-teal">info</span>
<h5 class="font-label-lg text-brand-navy">Metadata File</h5>
</div>
<div class="text-label-md space-y-2 text-on-surface-variant">
<div class="flex justify-between">
<span>Format:</span>
<span class="font-bold">A4 PDF (Vector)</span>
</div>
<div class="flex justify-between">
<span>Ukuran:</span>
<span class="font-bold">1.2 MB</span>
</div>
<div class="flex justify-between">
<span>Terakhir Update:</span>
<span class="font-bold">2 Menit yang lalu</span>
</div>
</div>
</div>
</div>
</div>
</main>
<!-- Footer Mapping -->
<footer class="w-full mt-auto bg-surface-container-highest border-t border-outline-variant">
<div class="flex flex-col md:flex-row justify-between items-center py-8 px-margin-desktop max-w-container-max mx-auto gap-6">
<div class="text-center md:text-left">
<div class="font-headline-md text-headline-md text-primary mb-2">SeminarKu</div>
<p class="font-label-md text-label-md text-on-surface-variant">© 2024 SeminarKu. Professional Excellence in Learning.</p>
</div>
<div class="flex gap-8">
<a class="font-label-md text-label-md text-on-surface-variant hover:text-secondary transition-opacity" href="#">Privacy Policy</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-secondary transition-opacity" href="#">Terms of Service</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-secondary transition-opacity" href="#">Contact Us</a>
</div>
</div>
</footer>
<!-- Simple Interactivity -->
<script>
        document.querySelectorAll('.btn-hover-effect').forEach(button => {
            button.addEventListener('mouseover', () => {
                button.style.transform = 'translateY(-2px)';
            });
            button.addEventListener('mouseleave', () => {
                button.style.transform = 'translateY(0)';
            });
        });
    </script>
</div>
@endsection
