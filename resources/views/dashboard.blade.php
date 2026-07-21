@extends('layouts.app')
@section('title', 'Dashboard')
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
                        "surface-container-low": "#eaf6fa",
                        "seafoam": "#02C39A",
                        "teal-brand": "#028090",
                        "warning-brand": "#F59E0B"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1.5rem",
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
        body { font-family: 'Montserrat', sans-serif; background-color: #f0fbff; color: #121d20; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .card-shadow { box-shadow: 0 12px 24px -10px rgba(0, 9, 23, 0.05); }
        .card-hover:hover { transform: translateY(-4px); box-shadow: 0 20px 32px -12px rgba(0, 9, 23, 0.1); }
        .glass-effect { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(12px); border: 1px solid rgba(209, 228, 235, 0.5); }
        .transition-all-200 { transition: all 0.2s ease-in-out; }
    </style>
<div class="flex flex-col min-h-screen">
<!-- TopNavBar -->
<nav class="sticky top-0 z-50 flex justify-between items-center w-full px-margin-desktop py-4 bg-primary dark:bg-primary-container shadow-md">
<div class="flex items-center gap-8">
<span class="font-headline-lg text-headline-lg text-on-primary font-bold">SeminarKu</span>
<div class="hidden md:flex gap-6 items-center">
<a class="font-body-md text-body-md text-on-primary border-b-2 border-secondary pb-1 hover:text-secondary-fixed transition-colors duration-200" href="{{ route(\'events.index\') }}">Explore</a>
<a class="font-body-md text-body-md text-on-primary-container/70 dark:text-on-primary-container/50 hover:text-secondary-fixed transition-colors duration-200" href="{{ route(\'events.index\') }}">My Seminars</a>
<a class="font-body-md text-body-md text-on-primary-container/70 dark:text-on-primary-container/50 hover:text-secondary-fixed transition-colors duration-200" href="{{ route(\'dashboard\') }}">Help</a>
</div>
</div>
<div class="flex items-center gap-4">
<button class="material-symbols-outlined text-on-primary p-2 rounded-full hover:bg-white/10 transition-colors" data-icon="notifications">notifications</button>
<button class="material-symbols-outlined text-on-primary p-2 rounded-full hover:bg-white/10 transition-colors" data-icon="account_circle">account_circle</button>
</div>
</nav>
<!-- Header Section -->
<header class="bg-primary-container text-on-primary py-12 px-margin-desktop relative overflow-hidden">
<div class="absolute right-0 top-0 w-1/3 h-full opacity-10 pointer-events-none">

</div>
<div class="max-w-container-max mx-auto relative z-10">
<h1 class="font-headline-lg text-headline-lg font-bold mb-2">Selamat datang, John Doe!</h1>
<p class="font-body-lg text-body-lg text-on-primary-container/80">Pantau pendaftaran dan sertifikat kamu</p>
</div>
</header>
<!-- Main Content -->
<main class="flex-grow w-full max-w-container-max mx-auto px-margin-desktop -mt-8 pb-16">
<!-- Stats Cards Grid -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
<!-- Stat 1 -->
<div class="bg-white p-6 rounded-xl card-shadow border-l-4 border-teal-brand flex items-center justify-between card-hover transition-all-200">
<div>
<p class="font-label-lg text-label-lg text-on-surface-variant uppercase tracking-wider">Acara Didaftar</p>
<h3 class="font-headline-xl text-headline-xl text-primary-container">4</h3>
</div>
<span class="material-symbols-outlined text-4xl text-teal-brand opacity-40" data-icon="event">event</span>
</div>
<!-- Stat 2 -->
<div class="bg-white p-6 rounded-xl card-shadow border-l-4 border-warning-brand flex items-center justify-between card-hover transition-all-200">
<div>
<p class="font-label-lg text-label-lg text-on-surface-variant uppercase tracking-wider">Menunggu Konfirmasi</p>
<h3 class="font-headline-xl text-headline-xl text-primary-container">1</h3>
</div>
<span class="material-symbols-outlined text-4xl text-warning-brand opacity-40" data-icon="pending_actions">pending_actions</span>
</div>
<!-- Stat 3 -->
<div class="bg-white p-6 rounded-xl card-shadow border-l-4 border-seafoam flex items-center justify-between card-hover transition-all-200">
<div>
<p class="font-label-lg text-label-lg text-on-surface-variant uppercase tracking-wider">Sertifikat Dimiliki</p>
<h3 class="font-headline-xl text-headline-xl text-primary-container">2</h3>
</div>
<span class="material-symbols-outlined text-4xl text-seafoam opacity-40" data-icon="workspace_premium">workspace_premium</span>
</div>
</div>
<!-- Pendaftaran Saya Section -->
<section class="mb-16">
<div class="flex items-center justify-between mb-6">
<h2 class="font-headline-md text-headline-md text-primary font-bold">Pendaftaran Saya</h2>
<a class="text-teal-brand font-label-lg hover:underline transition-all" href="#">Lihat Semua Riwayat</a>
</div>
<div class="space-y-4">
<!-- Card 1 -->
<div class="bg-white p-5 rounded-2xl border border-outline-variant/30 flex flex-col md:flex-row md:items-center justify-between gap-4 card-shadow">
<div class="flex items-center gap-5">
<div class="w-16 h-16 rounded-xl bg-surface-container-high flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-teal-brand text-3xl" data-icon="smart_toy">smart_toy</span>
</div>
<div>
<h4 class="font-label-lg text-headline-md text-primary-container font-semibold">Seminar Nasional Teknologi AI 2025</h4>
<p class="font-body-md text-on-surface-variant flex items-center gap-2">
<span class="material-symbols-outlined text-sm" data-icon="calendar_month">calendar_month</span>
                                20 Juli 2025
                            </p>
</div>
</div>
<div class="flex items-center gap-4">
<span class="px-4 py-1.5 rounded-full bg-warning-brand/10 text-warning-brand font-label-md font-bold text-xs uppercase tracking-widest">MENUNGGU</span>
<button class="bg-primary text-on-primary px-5 py-2.5 rounded-lg font-label-lg hover:bg-primary-container transition-all active:scale-95 flex items-center gap-2">
<span class="material-symbols-outlined text-sm" data-icon="upload">upload</span>
                            Upload Ulang Bukti
                        </button>
</div>
</div>
<!-- Card 2 -->
<div class="bg-white p-5 rounded-2xl border border-outline-variant/30 flex flex-col md:flex-row md:items-center justify-between gap-4 card-shadow">
<div class="flex items-center gap-5">
<div class="w-16 h-16 rounded-xl bg-surface-container-high flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-teal-brand text-3xl" data-icon="code">code</span>
</div>
<div>
<h4 class="font-label-lg text-headline-md text-primary-container font-semibold">Workshop Laravel Modern Workflow</h4>
<p class="font-body-md text-on-surface-variant flex items-center gap-2">
<span class="material-symbols-outlined text-sm" data-icon="calendar_month">calendar_month</span>
                                25 Juli 2025
                            </p>
</div>
</div>
<div class="flex items-center gap-4">
<span class="px-4 py-1.5 rounded-full bg-seafoam/10 text-seafoam font-label-md font-bold text-xs uppercase tracking-widest">DIKONFIRMASI</span>
<button class="bg-teal-brand text-white px-5 py-2.5 rounded-lg font-label-lg hover:bg-secondary-fixed-dim transition-all active:scale-95 flex items-center gap-2">
<span class="material-symbols-outlined text-sm" data-icon="download">download</span>
                            Download Sertifikat
                        </button>
</div>
</div>
<!-- Card 3 -->
<div class="bg-white p-5 rounded-2xl border border-outline-variant/30 flex flex-col md:flex-row md:items-center justify-between gap-4 card-shadow">
<div class="flex items-center gap-5">
<div class="w-16 h-16 rounded-xl bg-surface-container-high flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-teal-brand text-3xl" data-icon="design_services">design_services</span>
</div>
<div>
<h4 class="font-label-lg text-headline-md text-primary-container font-semibold">Workshop UI/UX for Professional</h4>
<p class="font-body-md text-on-surface-variant flex items-center gap-2">
<span class="material-symbols-outlined text-sm" data-icon="calendar_month">calendar_month</span>
                                1 Agt 2025
                            </p>
</div>
</div>
<div class="flex items-center gap-4">
<span class="px-4 py-1.5 rounded-full bg-seafoam/10 text-seafoam font-label-md font-bold text-xs uppercase tracking-widest">DIKONFIRMASI</span>
<button class="bg-teal-brand text-white px-5 py-2.5 rounded-lg font-label-lg hover:bg-secondary-fixed-dim transition-all active:scale-95 flex items-center gap-2">
<span class="material-symbols-outlined text-sm" data-icon="download">download</span>
                            Download Sertifikat
                        </button>
</div>
</div>
</div>
</section>
<!-- Suggested Events Section -->
<section>
<h2 class="font-headline-md text-headline-md text-primary font-bold mb-8">Acara yang Mungkin Kamu Suka</h2>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-gutter">
<!-- Event Card 1 -->
<div class="bg-white rounded-2xl overflow-hidden card-shadow card-hover transition-all-200 border border-outline-variant/10">
<div class="h-48 relative">
<img class="w-full h-full object-cover" data-alt="A cinematic, wide-angle shot of a futuristic tech conference hall with blue neon lighting accents and professional attendees. The atmosphere is energetic and modern, reflecting a high-end corporate seminar for SeminarKu branding in a bright navy and teal color scheme." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD7wk_ycNhygkGxm_OHBDC_ez1sSxsWUQ36ta2it7H8Av-ZHHx2TzVwxyZsMSF6BYko2kMuU2U8Tr_FLckk0-gnX9xwirlMUfxWRZcC6Un6cNIUwfCAFlahk3tB7yHPw5AZnSEUy_LsG6vyizGZvDcvca3CKjyJQ7GR1r9tT72uoMXIqKFYQi4neGnRCH9dgxztUrWNlw7B6GgoYhLGHXsvfuRyfPoNsBSDGLZd5cQ-8cfGwJwKNEfY0A"/>
<span class="absolute top-4 left-4 bg-primary text-white text-xs font-bold px-3 py-1 rounded-full uppercase">Technology</span>
</div>
<div class="p-6">
<h5 class="font-headline-md text-headline-md text-primary-container mb-2 line-clamp-2">Mastering Cybersecurity 2025</h5>
<p class="text-on-surface-variant font-body-md flex items-center gap-2 mb-4">
<span class="material-symbols-outlined text-sm" data-icon="schedule">schedule</span>
                            15 Sep 2025 • 09:00 WIB
                        </p>
<div class="flex items-center justify-between pt-4 border-t border-outline-variant/20">
<span class="text-teal-brand font-bold">Rp 150.000</span>
<button class="text-primary font-label-lg flex items-center gap-1 hover:gap-2 transition-all">Detail <span class="material-symbols-outlined" data-icon="arrow_forward">arrow_forward</span></button>
</div>
</div>
</div>
<!-- Event Card 2 -->
<div class="bg-white rounded-2xl overflow-hidden card-shadow card-hover transition-all-200 border border-outline-variant/10">
<div class="h-48 relative">
<img class="w-full h-full object-cover" data-alt="A bright, professional workshop setting with participants collaborating around laptop screens and sticky notes on a glass wall. Soft natural lighting through large windows, modern minimalist furniture, using the SeminarKu teal and seafoam accent colors for a friendly academic feel." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA9y0dHYeXMN1wvIKR9rMscYifSdZowY3631avLeiH4re72ucCb2Hqug_YXVdcqSqkIo-NNigJzrF7Q8Val7cH83658jW3TN2SZGodFHQxOPoO0v73C_oNVztONuNjE6iI-sOf9aSiyVjCTFTEnv2cB0ZiRHCO5eR1W03Zbfe29q3gP84XWpOWRjAlmnO8c2LSkA1YZIkVPUCr0DdYNSYbc0UV9DbpM4V-ZBnmrRUdfZl57rlS58chjIg"/>
<span class="absolute top-4 left-4 bg-seafoam text-primary text-xs font-bold px-3 py-1 rounded-full uppercase">Design</span>
</div>
<div class="p-6">
<h5 class="font-headline-md text-headline-md text-primary-container mb-2 line-clamp-2">Typography &amp; Branding Workshop</h5>
<p class="text-on-surface-variant font-body-md flex items-center gap-2 mb-4">
<span class="material-symbols-outlined text-sm" data-icon="schedule">schedule</span>
                            20 Sep 2025 • 13:00 WIB
                        </p>
<div class="flex items-center justify-between pt-4 border-t border-outline-variant/20">
<span class="text-teal-brand font-bold">Gratis</span>
<button class="text-primary font-label-lg flex items-center gap-1 hover:gap-2 transition-all">Detail <span class="material-symbols-outlined" data-icon="arrow_forward">arrow_forward</span></button>
</div>
</div>
</div>
<!-- Event Card 3 -->
<div class="bg-white rounded-2xl overflow-hidden card-shadow card-hover transition-all-200 border border-outline-variant/10">
<div class="h-48 relative">
<img class="w-full h-full object-cover" data-alt="A high-key studio photo of a business speaker gesturing towards a large digital screen with data visualizations. Professional corporate lighting, clean whites and deep navy tones, emphasizing clarity and organization for an executive seminar sponsored by SeminarKu." src="https://lh3.googleusercontent.com/aida-public/AB6AXuANVPXgVx43eUVqUbXC5gsC2RtUSNBbVIKdQrx14sfFbB0_gGJHopVW0t38dAeMpzg1YdD-UiqUZL2P_yYpfKFgIGzzIyuPcQ9LjSC_j07eDlgkB3i4MUpQAp-BuTvgKtotIX3y3eLx3iRLMFqjp3n7LmWklve_ER4Rsaxj12X0M2u6WD5WEnTZ8OGdDcJXfkYOVDTRUfLDc__ZV-GMciNOQj1CssS53ozEmfflFzAO7spE9Jij-wm4BQ"/>
<span class="absolute top-4 left-4 bg-primary text-white text-xs font-bold px-3 py-1 rounded-full uppercase">Business</span>
</div>
<div class="p-6">
<h5 class="font-headline-md text-headline-md text-primary-container mb-2 line-clamp-2">Startup Investment Summit</h5>
<p class="text-on-surface-variant font-body-md flex items-center gap-2 mb-4">
<span class="material-symbols-outlined text-sm" data-icon="schedule">schedule</span>
                            05 Okt 2025 • 10:00 WIB
                        </p>
<div class="flex items-center justify-between pt-4 border-t border-outline-variant/20">
<span class="text-teal-brand font-bold">Rp 300.000</span>
<button class="text-primary font-label-lg flex items-center gap-1 hover:gap-2 transition-all">Detail <span class="material-symbols-outlined" data-icon="arrow_forward">arrow_forward</span></button>
</div>
</div>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="w-full mt-auto bg-surface-container-low dark:bg-inverse-surface border-t border-outline-variant/20 px-margin-desktop py-12">
<div class="max-w-container-max mx-auto flex flex-col md:flex-row justify-between items-start gap-12">
<div class="max-w-xs">
<span class="font-headline-md text-headline-md text-primary dark:text-primary-fixed font-bold block mb-4">SeminarKu</span>
<p class="font-body-md text-body-md text-on-surface-variant">Platform terpercaya untuk menemukan dan mengelola seminar profesional di seluruh Indonesia.</p>
</div>
<div class="grid grid-cols-2 sm:grid-cols-3 gap-12">
<div>
<h6 class="font-label-lg text-primary font-bold mb-4">Navigation</h6>
<ul class="space-y-2">
<li><a class="font-body-md text-on-surface-variant hover:text-secondary transition-colors" href="#">Explore</a></li>
<li><a class="font-body-md text-on-surface-variant hover:text-secondary transition-colors" href="#">My Seminars</a></li>
<li><a class="font-body-md text-on-surface-variant hover:text-secondary transition-colors" href="#">Help Center</a></li>
</ul>
</div>
<div>
<h6 class="font-label-lg text-primary font-bold mb-4">Legal</h6>
<ul class="space-y-2">
<li><a class="font-body-md text-on-surface-variant hover:text-secondary transition-colors" href="#">Privacy Policy</a></li>
<li><a class="font-body-md text-on-surface-variant hover:text-secondary transition-colors" href="#">Terms of Service</a></li>
</ul>
</div>
<div>
<h6 class="font-label-lg text-primary font-bold mb-4">Support</h6>
<ul class="space-y-2">
<li><a class="font-body-md text-on-surface-variant hover:text-secondary transition-colors" href="#">Contact Us</a></li>
<li><a class="font-body-md text-on-surface-variant hover:text-secondary transition-colors" href="#">FAQ</a></li>
</ul>
</div>
</div>
</div>
<div class="max-w-container-max mx-auto mt-12 pt-8 border-t border-outline-variant/10 flex flex-col md:flex-row justify-between items-center gap-4">
<p class="font-label-md text-on-surface-variant opacity-80">© 2024 SeminarKu. All rights reserved.</p>
<div class="flex gap-6">
<a class="material-symbols-outlined text-on-surface-variant hover:text-secondary transition-all" data-icon="facebook" href="#">facebook</a>
<a class="material-symbols-outlined text-on-surface-variant hover:text-secondary transition-all" data-icon="alternate_email" href="#">alternate_email</a>
<a class="material-symbols-outlined text-on-surface-variant hover:text-secondary transition-all" data-icon="language" href="#">language</a>
</div>
</div>
</footer>
<script>
        // Micro-interaction for hover states and button ripples
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('mousedown', function() {
                this.style.transform = 'scale(0.96)';
            });
            button.addEventListener('mouseup', function() {
                this.style.transform = 'scale(1)';
            });
            button.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        });

        // Simple observer for scroll effects
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    entry.target.classList.remove('opacity-0', 'translate-y-10');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.card-shadow').forEach(card => {
            card.classList.add('transition-all', 'duration-700', 'opacity-0', 'translate-y-10');
            observer.observe(card);
        });
    </script>
</div>
@endsection
