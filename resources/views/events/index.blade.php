@extends('layouts.app')

@section('title', 'Semua Acara')

@section('content')
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary-fixed-dim": "#b5c8e5",
                        "surface-dim": "#d0dce0",
                        "tertiary-fixed": "#65fbcf",
                        "surface-bright": "#f0fbff",
                        "inverse-surface": "#273235",
                        "primary": "#000917",
                        "on-secondary-fixed-variant": "#004e59",
                        "on-surface-variant": "#44474d",
                        "on-primary": "#ffffff",
                        "on-tertiary-container": "#009a79",
                        "surface-container-low": "#eaf6fa",
                        "tertiary-container": "#00261c",
                        "on-tertiary": "#ffffff",
                        "surface-variant": "#d9e5e8",
                        "on-secondary-fixed": "#001f24",
                        "on-error-container": "#93000a",
                        "surface-tint": "#4d6079",
                        "tertiary-fixed-dim": "#40deb3",
                        "inverse-primary": "#b5c8e5",
                        "secondary": "#006876",
                        "surface-container": "#e4f0f4",
                        "on-tertiary-fixed": "#002117",
                        "on-tertiary-fixed-variant": "#00513e",
                        "on-secondary-container": "#006d7b",
                        "secondary-container": "#92edff",
                        "on-primary-container": "#7689a4",
                        "surface-container-highest": "#d9e5e8",
                        "background": "#f0fbff",
                        "secondary-fixed-dim": "#77d4e5",
                        "on-surface": "#121d20",
                        "surface-container-high": "#deeaee",
                        "secondary-fixed": "#9eefff",
                        "on-primary-fixed-variant": "#364860",
                        "inverse-on-surface": "#e7f3f7",
                        "error": "#ba1a1a",
                        "primary-fixed": "#d2e4ff",
                        "outline-variant": "#c4c6cd",
                        "on-error": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "on-background": "#121d20",
                        "outline": "#74777d",
                        "primary-container": "#0d2137",
                        "tertiary": "#000c07",
                        "surface": "#f0fbff",
                        "on-primary-fixed": "#081c32",
                        "error-container": "#ffdad6",
                        "on-secondary": "#ffffff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "gutter": "24px",
                        "margin-mobile": "16px",
                        "margin-desktop": "48px",
                        "base": "8px",
                        "container-max": "1280px"
                    },
                    "fontFamily": {
                        "headline-md": ["Montserrat"],
                        "label-lg": ["Montserrat"],
                        "label-md": ["Montserrat"],
                        "body-md": ["Montserrat"],
                        "body-lg": ["Montserrat"],
                        "headline-lg-mobile": ["Montserrat"],
                        "headline-xl": ["Montserrat"],
                        "headline-lg": ["Montserrat"]
                    },
                    "fontSize": {
                        "headline-md": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                        "label-lg": ["14px", {"lineHeight": "1.2", "fontWeight": "600"}],
                        "label-md": ["12px", {"lineHeight": "1.2", "fontWeight": "500"}],
                        "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "headline-lg-mobile": ["24px", {"lineHeight": "1.2", "fontWeight": "700"}],
                        "headline-xl": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "headline-lg": ["32px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "700"}]
                    }
                },
            },
        }
    </script>
<style>
        body { background-color: #f0fbff; font-family: 'Montserrat', sans-serif; -webkit-font-smoothing: antialiased; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .glass-effect { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(8px); border: 1px solid rgba(209, 228, 235, 0.5); }
        .shadow-soft { box-shadow: 0 12px 24px -10px rgba(13, 33, 55, 0.05); }
        .card-hover:hover { transform: translateY(-4px); box-shadow: 0 20px 25px -5px rgba(13, 33, 55, 0.1); }
        .transition-standard { transition: all 200ms ease-in-out; }
    </style>


<!-- Top Navigation Bar -->
<nav class="bg-primary-container docked full-width top-0 shadow-sm sticky z-50">
<div class="flex justify-between items-center w-full px-margin-desktop max-w-container-max mx-auto h-20">
<div class="font-headline-md text-headline-md font-bold text-on-tertiary-container">SeminarKu</div>
<div class="hidden md:flex items-center gap-8">
<a class="text-on-primary-container hover:text-on-tertiary-container transition-colors font-label-lg text-label-lg" href="{{ route('home') }}">Home</a>
<a class="text-on-tertiary-container font-bold border-b-2 border-on-tertiary-container pb-1 font-label-lg text-label-lg" href="{{ route('events.index') }}">Acara</a>
<a class="text-on-primary-container hover:text-on-tertiary-container transition-colors font-label-lg text-label-lg" href="#">Tentang</a>
</div>
<div class="flex items-center gap-4">
<a href="{{ route('login') }}" class="px-6 py-2 rounded-full border border-on-primary-container text-on-primary-container font-label-lg text-label-lg scale-95 active:scale-90 transition-transform hover:bg-primary/10">Login</a>
<a href="{{ route('register') }}" class="px-6 py-2 rounded-full bg-on-tertiary-container text-white font-label-lg text-label-lg scale-95 active:scale-90 transition-transform hover:brightness-110">Register</a>
</div>
</div>
</nav>
<main class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-12">
<!-- Header Section -->
<header class="mb-12">
<h1 class="font-headline-xl text-headline-xl text-primary mb-4">Semua Acara</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                Temukan berbagai seminar dan workshop berkualitas untuk meningkatkan kompetensi profesional dan akademik Anda.
            </p>
</header>
<!-- Search and Filter Bar -->
<div class="flex flex-col lg:flex-row gap-6 mb-12 items-start lg:items-center">
<!-- Search Input -->
<div class="relative w-full lg:max-w-md">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">search</span>
<input class="w-full pl-12 pr-4 py-4 rounded-xl border border-outline-variant bg-white focus:outline-none focus:ring-2 focus:ring-secondary/20 focus:border-secondary transition-all font-body-md text-body-md" placeholder="Cari seminar atau workshop..." type="text"/>
</div>
<!-- Filter Chips -->
<div class="flex items-center gap-3 overflow-x-auto pb-2 lg:pb-0 w-full lg:w-auto">
<button class="px-6 py-2.5 rounded-full bg-secondary text-white font-label-lg text-label-lg whitespace-nowrap transition-standard">Semua</button>
<button class="px-6 py-2.5 rounded-full bg-white border border-outline-variant text-on-surface-variant hover:bg-surface-container font-label-lg text-label-lg whitespace-nowrap transition-standard">Seminar</button>
<button class="px-6 py-2.5 rounded-full bg-white border border-outline-variant text-on-surface-variant hover:bg-surface-container font-label-lg text-label-lg whitespace-nowrap transition-standard">Workshop</button>
</div>
<!-- Category Dropdown -->
<div class="relative w-full lg:w-64">
<select class="w-full px-4 py-4 rounded-xl border border-outline-variant bg-white appearance-none focus:outline-none focus:ring-2 focus:ring-secondary/20 focus:border-secondary font-label-lg text-label-lg cursor-pointer">
<option value="">Semua Kategori</option>
<option value="tech">Teknologi</option>
<option value="business">Bisnis &amp; Marketing</option>
<option value="health">Kesehatan</option>
<option value="education">Pendidikan</option>
</select>
<span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-outline">expand_more</span>
</div>
</div>
<!-- Event Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
<!-- Card 1 -->
<div class="bg-white rounded-[24px] overflow-hidden shadow-soft card-hover transition-standard flex flex-col h-full border border-outline-variant/30">
<div class="h-56 relative overflow-hidden">
<img class="w-full h-full object-cover transition-standard hover:scale-105" data-alt="A professional business seminar setting with a speaker standing in front of a large screen displaying charts. The atmosphere is academic and professional, using a corporate color palette of navy blue and seafoam green. High-key studio lighting creates a bright and reliable visual tone for a learning event." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-a5R_z6e_UMAfDhJiLMIZ6pYlCDoc4f25OKARmw8PpXSpmDwJxojLcxtEPnDRNzftEY537Jg967UV4FFWKH8CPo-wRW3NV8rJPPwLjA-UWkacSz1aHihxCC3YU4lA81JVF-rtZJh-RGGBJHsGXnf-xXs6ujJXwlh34NTa6brqNSnv9aW2qJgyuiWCdv_d7rt3xJ1YFDwt2PLFafukWJO1nT4Wp1u3Ledqkvo1o_k7LyEvWE_R7clOoQ"/>
<div class="absolute top-4 left-4">
<span class="px-3 py-1.5 bg-tertiary-container text-tertiary-fixed rounded-full text-label-md font-label-md uppercase tracking-wider">Seminar</span>
</div>
</div>
<div class="p-6 flex flex-col flex-grow">
<div class="flex items-center gap-2 mb-3 text-secondary">
<span class="material-symbols-outlined text-[18px]">calendar_today</span>
<span class="font-label-md text-label-md">24 Okt 2024</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary mb-3 line-clamp-2">Strategi Transformasi Digital UMKM 2024</h3>
<div class="flex items-center gap-2 mb-6 text-on-surface-variant">
<span class="material-symbols-outlined text-[18px]">location_on</span>
<span class="font-body-md text-body-md">Hotel Indonesia, Jakarta</span>
</div>
<div class="mt-auto flex items-center justify-between">
<span class="font-headline-md text-headline-md text-on-tertiary-container">Rp 250.000</span>
<button class="px-6 py-2.5 bg-on-tertiary-container text-white rounded-full font-label-lg text-label-lg scale-95 active:scale-90 transition-transform shadow-sm hover:brightness-110">Daftar</button>
</div>
</div>
</div>
<!-- Card 2 -->
<div class="bg-white rounded-[24px] overflow-hidden shadow-soft card-hover transition-standard flex flex-col h-full border border-outline-variant/30">
<div class="h-56 relative overflow-hidden">
<img class="w-full h-full object-cover transition-standard hover:scale-105" data-alt="A hands-on workshop session showing diverse participants collaborating on design projects with laptops and sticky notes. The lighting is natural and vibrant, emphasizing a creative and interactive environment. The scene is styled with modern seafoam and teal accents, suggesting a high-value practical training session." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCaKJMPLscZBSXdGquOM4FZ7aEZUquok8YU9aC1F77OpsYU8BYoncmjoi3rEepDlQDDvKKOr1ZKGp6uHWHG9Z1n0uU1U8l0i7lzqiKki0qFwR9hF1GTProq_hmeU5miaoaC10AmE-XLvHZ8W9C_8Xqq2fokHH9x2lG5GRGmx6mlAd9AdQsxcLuDBsJw1ul8pdH00_e93KNPoqxHvvna3Y6gyaNqxsU3ob7Q5Qtdt1BM-NiAl2bjckPYCg"/>
<div class="absolute top-4 left-4">
<span class="px-3 py-1.5 bg-secondary-container text-on-secondary-container rounded-full text-label-md font-label-md uppercase tracking-wider">Workshop</span>
</div>
</div>
<div class="p-6 flex flex-col flex-grow">
<div class="flex items-center gap-2 mb-3 text-secondary">
<span class="material-symbols-outlined text-[18px]">calendar_today</span>
<span class="font-label-md text-label-md">28 Okt 2024</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary mb-3 line-clamp-2">Masterclass UI/UX Design: Dari Riset ke Prototipe</h3>
<div class="flex items-center gap-2 mb-6 text-on-surface-variant">
<span class="material-symbols-outlined text-[18px]">videocam</span>
<span class="font-body-md text-body-md">Online via Zoom</span>
</div>
<div class="mt-auto flex items-center justify-between">
<span class="font-headline-md text-headline-md text-on-tertiary-container">Rp 150.000</span>
<button class="px-6 py-2.5 bg-on-tertiary-container text-white rounded-full font-label-lg text-label-lg scale-95 active:scale-90 transition-transform shadow-sm hover:brightness-110">Daftar</button>
</div>
</div>
</div>
<!-- Card 3 -->
<div class="bg-white rounded-[24px] overflow-hidden shadow-soft card-hover transition-standard flex flex-col h-full border border-outline-variant/30">
<div class="h-56 relative overflow-hidden">
<img class="w-full h-full object-cover transition-standard hover:scale-105" data-alt="A professional medical seminar in a modern auditorium with bright medical-grade lighting. Doctors and health professionals are listening intently to a keynote speech about healthcare innovation. The visual style is clean and trustworthy, utilizing deep navy and bright white surfaces to convey academic reliability." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCHEP4IcIsrs65Bm5Dq_qofUrDU1StBYr9usG-Fafw9JXv39I0MVY-53E8vc1t4wtC6RJUVcCZkI6YI-hZrqY_g14QFykvj6hlKpxXODB3khGIJ_GeO33osvgKHJOGYvfsNLPeUt2aQ6lcnRAkGx7nmsatC95NPFhC456rrVsdYMOuf5w7vN7PMzk_uprCQcDfWM9LN5jYWtyHke10T6SPCxWeQzClHJkgcqGgFZH442Lq8ZeobkUi4BA"/>
<div class="absolute top-4 left-4">
<span class="px-3 py-1.5 bg-tertiary-container text-tertiary-fixed rounded-full text-label-md font-label-md uppercase tracking-wider">Seminar</span>
</div>
</div>
<div class="p-6 flex flex-col flex-grow">
<div class="flex items-center gap-2 mb-3 text-secondary">
<span class="material-symbols-outlined text-[18px]">calendar_today</span>
<span class="font-label-md text-label-md">02 Nov 2024</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary mb-3 line-clamp-2">Inovasi Teknologi Kesehatan Masa Depan</h3>
<div class="flex items-center gap-2 mb-6 text-on-surface-variant">
<span class="material-symbols-outlined text-[18px]">location_on</span>
<span class="font-body-md text-body-md">Gedung Graha Medika, Bandung</span>
</div>
<div class="mt-auto flex items-center justify-between">
<span class="font-headline-md text-headline-md text-on-tertiary-container">Gratis</span>
<button class="px-6 py-2.5 bg-on-tertiary-container text-white rounded-full font-label-lg text-label-lg scale-95 active:scale-90 transition-transform shadow-sm hover:brightness-110">Daftar</button>
</div>
</div>
</div>
<!-- Card 4 -->
<div class="bg-white rounded-[24px] overflow-hidden shadow-soft card-hover transition-standard flex flex-col h-full border border-outline-variant/30">
<div class="h-56 relative overflow-hidden">
<img class="w-full h-full object-cover transition-standard hover:scale-105" data-alt="A focused classroom workshop for financial planning, with participants using digital tablets and printed workbooks. The lighting is bright and even, highlighting an organized and professional atmosphere. Corporate navy blue and seafoam green elements are integrated into the room's design for a cohesive brand look." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBAg79rfjiL-7ONnV6fFeQMry_LIEzmkQwFPO3RVuEFmuoizthB9A33qrTb7DGONp1Ez_Zw6PWKeT_IAzmaWxIaZsfTs6kOavtDpUbfQHGN2mJtksEhA62NN72jHlVUgBVS3ZLRi4b8NQtjx7F6ec-tC3dZob4kG3rNo0sR93kSsXsmjaeYP91FIMjl46tcZpAgh76lIg8Bzpph8Cmxioni30mTtWivPKkTpMvSiG5BLY4nCdQZNRMNtA"/>
<div class="absolute top-4 left-4">
<span class="px-3 py-1.5 bg-secondary-container text-on-secondary-container rounded-full text-label-md font-label-md uppercase tracking-wider">Workshop</span>
</div>
</div>
<div class="p-6 flex flex-col flex-grow">
<div class="flex items-center gap-2 mb-3 text-secondary">
<span class="material-symbols-outlined text-[18px]">calendar_today</span>
<span class="font-label-md text-label-md">10 Nov 2024</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary mb-3 line-clamp-2">Manajemen Keuangan Bisnis bagi Pemula</h3>
<div class="flex items-center gap-2 mb-6 text-on-surface-variant">
<span class="material-symbols-outlined text-[18px]">location_on</span>
<span class="font-body-md text-body-md">Creative Space, Surabaya</span>
</div>
<div class="mt-auto flex items-center justify-between">
<span class="font-headline-md text-headline-md text-on-tertiary-container">Rp 500.000</span>
<button class="px-6 py-2.5 bg-on-tertiary-container text-white rounded-full font-label-lg text-label-lg scale-95 active:scale-90 transition-transform shadow-sm hover:brightness-110">Daftar</button>
</div>
</div>
</div>
<!-- Card 5 -->
<div class="bg-white rounded-[24px] overflow-hidden shadow-soft card-hover transition-standard flex flex-col h-full border border-outline-variant/30">
<div class="h-56 relative overflow-hidden">
<img class="w-full h-full object-cover transition-standard hover:scale-105" data-alt="A large-scale technology conference with futuristic stage lighting in teal and seafoam. The speaker is demonstrating new AI capabilities on a screen. The mood is high-energy and innovative, using high-contrast lighting to emphasize a modern, tech-forward seminar experience." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDJwd0qc2a_KRbOwjISKgaWUnqmvp5CJ8-PXWB3Ehqq95pBrNu5Qa5c_75VLPVylcoW_41rqsMFnm--2aWuIrY_jBLOMIEoEXGRF350z1bAqpmo8LgwGHnUOO5Lz16QzSxX9KpDlvIhzKHGx7PtC1-Nc8y-uvPKzzIiIda01Yn-p4LPtd5JGLL4RiHIXK7H38Z18ituD3FmaUg9knRNFdZKkem8Me8GTrUa7uv6kwUtQqoODycozDSiIw"/>
<div class="absolute top-4 left-4">
<span class="px-3 py-1.5 bg-tertiary-container text-tertiary-fixed rounded-full text-label-md font-label-md uppercase tracking-wider">Seminar</span>
</div>
</div>
<div class="p-6 flex flex-col flex-grow">
<div class="flex items-center gap-2 mb-3 text-secondary">
<span class="material-symbols-outlined text-[18px]">calendar_today</span>
<span class="font-label-md text-label-md">15 Nov 2024</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary mb-3 line-clamp-2">Kecerdasan Buatan dalam Industri Kreatif</h3>
<div class="flex items-center gap-2 mb-6 text-on-surface-variant">
<span class="material-symbols-outlined text-[18px]">videocam</span>
<span class="font-body-md text-body-md">Online Webinar</span>
</div>
<div class="mt-auto flex items-center justify-between">
<span class="font-headline-md text-headline-md text-on-tertiary-container">Rp 75.000</span>
<button class="px-6 py-2.5 bg-on-tertiary-container text-white rounded-full font-label-lg text-label-lg scale-95 active:scale-90 transition-transform shadow-sm hover:brightness-110">Daftar</button>
</div>
</div>
</div>
<!-- Card 6 -->
<div class="bg-white rounded-[24px] overflow-hidden shadow-soft card-hover transition-standard flex flex-col h-full border border-outline-variant/30">
<div class="h-56 relative overflow-hidden">
<img class="w-full h-full object-cover transition-standard hover:scale-105" data-alt="A sophisticated academic lecture hall with tiered seating and a large wooden podium. The lighting is soft and focused on the academic material being presented. The environment is clean and professional, with a color palette of navy blue and neutral tones to ensure a high-value learning atmosphere." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAqmF9CUypxVE72jlx3gwWx8rPy6XamIZvhX4xkS2b3hgXYc5gdoE89bCYi_UoXlDspi-8tQ_eHQxMqbhdQR0UvVy8_XbQwQbP8_95U5ixNXcRG9SOcIMwlBT14yG39lbyy45p88vcUS9TBTFZnMGoBwOpZ9b1gHigOdVt5Qjy5HCLbq9ULBN77qakKK0Aiqq_pgNAV6Aqy2b77G5rjPZitZBsIQ6rC1YFpBhA42foFKQuHCLk-cETpdQ"/>
<div class="absolute top-4 left-4">
<span class="px-3 py-1.5 bg-secondary-container text-on-secondary-container rounded-full text-label-md font-label-md uppercase tracking-wider">Workshop</span>
</div>
</div>
<div class="p-6 flex flex-col flex-grow">
<div class="flex items-center gap-2 mb-3 text-secondary">
<span class="material-symbols-outlined text-[18px]">calendar_today</span>
<span class="font-label-md text-label-md">20 Nov 2024</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary mb-3 line-clamp-2">Teknik Penulisan Jurnal Ilmiah Internasional</h3>
<div class="flex items-center gap-2 mb-6 text-on-surface-variant">
<span class="material-symbols-outlined text-[18px]">location_on</span>
<span class="font-body-md text-body-md">Auditorium Pusat, Yogyakarta</span>
</div>
<div class="mt-auto flex items-center justify-between">
<span class="font-headline-md text-headline-md text-on-tertiary-container">Rp 350.000</span>
<button class="px-6 py-2.5 bg-on-tertiary-container text-white rounded-full font-label-lg text-label-lg scale-95 active:scale-90 transition-transform shadow-sm hover:brightness-110">Daftar</button>
</div>
</div>
</div>
</div>
<!-- Pagination -->
<div class="flex justify-center items-center gap-2 pb-12">
<button class="w-12 h-12 flex items-center justify-center rounded-xl border border-outline-variant text-on-surface-variant hover:bg-surface-container transition-standard">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<button class="w-12 h-12 flex items-center justify-center rounded-xl bg-secondary text-white font-label-lg text-label-lg">1</button>
<button class="w-12 h-12 flex items-center justify-center rounded-xl border border-outline-variant text-on-surface-variant hover:bg-surface-container transition-standard font-label-lg text-label-lg">2</button>
<button class="w-12 h-12 flex items-center justify-center rounded-xl border border-outline-variant text-on-surface-variant hover:bg-surface-container transition-standard font-label-lg text-label-lg">3</button>
<span class="px-2 text-outline">...</span>
<button class="w-12 h-12 flex items-center justify-center rounded-xl border border-outline-variant text-on-surface-variant hover:bg-surface-container transition-standard font-label-lg text-label-lg">12</button>
<button class="w-12 h-12 flex items-center justify-center rounded-xl border border-outline-variant text-on-surface-variant hover:bg-surface-container transition-standard">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</main>
<!-- Footer -->
<footer class="bg-primary-container full-width border-t border-outline-variant/10">
<div class="flex flex-col md:flex-row justify-between items-center w-full px-margin-desktop py-12 max-w-container-max mx-auto">
<div class="mb-8 md:mb-0">
<div class="font-headline-md text-headline-md font-bold text-on-tertiary-container mb-2">SeminarKu</div>
<p class="font-body-md text-body-md text-on-primary-container max-w-xs text-center md:text-left">Platform pendaftaran seminar dan workshop terpercaya untuk masa depan cerah Anda.</p>
</div>
<div class="flex flex-wrap justify-center gap-6 mb-8 md:mb-0">
<a class="text-on-primary-container hover:text-on-tertiary-container transition-standard font-body-md text-body-md hover:underline" href="{{ route('home') }}">Home</a>
<a class="text-on-primary-container hover:text-on-tertiary-container transition-standard font-body-md text-body-md hover:underline" href="{{ route('events.index') }}">Acara</a>
<a class="text-on-primary-container hover:text-on-tertiary-container transition-standard font-body-md text-body-md hover:underline" href="#">Tentang</a>
<a class="text-on-primary-container hover:text-on-tertiary-container transition-standard font-body-md text-body-md hover:underline" href="#">Privacy Policy</a>
<a class="text-on-primary-container hover:text-on-tertiary-container transition-standard font-body-md text-body-md hover:underline" href="#">Terms of Service</a>
</div>
<div class="text-on-primary-container font-body-md text-body-md text-center md:text-right">
                © 2024 SeminarKu. All rights reserved.
            </div>
</div>
</footer>
<script>
        // Micro-interaction for filter chips
        const filterButtons = document.querySelectorAll('.flex.items-center.gap-3 button');
        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                filterButtons.forEach(b => {
                    b.classList.remove('bg-secondary', 'text-white');
                    b.classList.add('bg-white', 'border', 'border-outline-variant', 'text-on-surface-variant');
                });
                btn.classList.add('bg-secondary', 'text-white');
                btn.classList.remove('bg-white', 'border', 'border-outline-variant', 'text-on-surface-variant');
            });
        });

        // Search highlight interaction
        const searchInput = document.querySelector('input[type="text"]');
        searchInput.addEventListener('focus', () => {
            searchInput.parentElement.classList.add('scale-[1.01]');
        });
        searchInput.addEventListener('blur', () => {
            searchInput.parentElement.classList.remove('scale-[1.01]');
        });
    </script>

@endsection
