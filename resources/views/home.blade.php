@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-gradient relative py-24 md:py-32 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <!-- Atmospheric background element -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-tertiary-fixed rounded-full blur-[120px] translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-72 h-72 bg-secondary-container rounded-full blur-[100px] -translate-x-1/2 translate-y-1/2"></div>
    </div>
    <div class="max-w-container-max mx-auto px-margin-desktop relative z-10 grid md:grid-cols-2 gap-12 items-center">
        <div class="space-y-8">
            <h1 class="font-headline-xl text-white text-headline-xl max-w-xl md:text-headline-xl text-headline-lg-mobile">
                Daftarkan Dirimu ke Seminar &amp;
                <span class="text-gradient">Workshop Terbaik</span>
            </h1>
            <p class="font-body-lg text-body-lg text-surface-container-low max-w-lg">
                Tingkatkan skill dan pengetahuanmu bersama
                instruktur berpengalaman di bidang teknologi,
                bisnis, dan desain melalui platform SeminarKu.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('events.index') }}" class="inline-block bg-[#02C39A] text-primary px-8 py-4 rounded-xl font-label-lg text-label-lg hover:opacity-90 transition-all scale-100 active:scale-95 shadow-lg">
                    Lihat Acara
                </a>
                <a href="{{ route('register') }}" class="inline-block border-2 border-white text-white px-8 py-4 rounded-xl font-label-lg text-label-lg hover:bg-white/10 transition-all scale-100 active:scale-95">
                    Daftar Sekarang
                </a>
            </div>
        </div>
        <div class="hidden md:block">
            <div class="relative">
                <div class="absolute -inset-4 bg-tertiary-fixed/20 rounded-[32px] blur-2xl"></div>
                <img
                    class="relative rounded-[32px] shadow-2xl w-full h-[500px] object-cover"
                    data-alt="A high-quality professional photography shot of a modern, diverse group of young professionals attending a high-tech seminar. They are sitting in a clean, brightly lit corporate environment with teal and navy accents. Soft natural lighting illuminates the scene, emphasizing a mood of focus and innovation. The overall aesthetic is professional, modern, and trustworthy."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCEbrlIl2AlooiSGHExd5KiDtU-lehps15bJ-7W7u80GHxKpBG4xmVO-KfmLE2_XVe-JDt9se-t70MBmNTJn_fGZhFFElw7aoPCp8kOIk13p0cDBivQvjQdKgzJU62tqcsppKobJYg1PWoVzQtY0Migcaek3DQIy01Y1yKeuVIOIFR64gGtwQhUueT9_AtP3LJ2OO9Q1Cb0JwlTx-_UrgF1v7O5VvF0mCUintLtm7UxWQdrd_iiCZmJQg"
                />
            </div>
        </div>
    </div>
</section>
<!-- Upcoming Events Section -->
<section class="py-20 bg-surface">
    <div class="max-w-container-max mx-auto px-margin-desktop">
        <div class="flex justify-between items-end mb-12">
            <div>
                <h2 class="font-headline-lg text-headline-lg text-primary mb-2">
                    Acara Mendatang
                </h2>
                <p class="text-on-primary-container">
                    Temukan pengalaman belajar baru yang inspiratif
                </p>
            </div>
            <a class="hidden md:flex items-center gap-2 text-on-secondary-container font-label-lg text-label-lg group" href="{{ route('events.index') }}">
                Lihat Semua
                <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </a>
        </div>
        <div class="grid md:grid-cols-3 gap-gutter">
            <!-- Card 1: Seminar AI -->
            <div class="bg-surface-container-lowest rounded-[24px] overflow-hidden shadow-[0_12px_24px_-10px_rgba(13,33,55,0.05)] border border-outline-variant/30 hover:-translate-y-2 transition-all duration-300 group">
                <div class="h-48 overflow-hidden relative">
                    <img
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        data-alt="A conceptual digital art piece representing Artificial Intelligence. Glowing blue neural networks and futuristic data streams flow across a dark navy background with teal highlights. The lighting is crisp and technological, evoking a sense of advanced machine learning and innovation. Minimalist and professional composition."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAk29oRZNyraFyIPrV5BL53gko6jBGiUOryRDF4s51mqzND3lgTJ5Pjqqsgbp8L5CNH74C2kgPpdaLpqGW9UA0iOpG6iDsQICCIQUD-rpAVhVF2H98_aNCB90i6ZdA9rR-Nr9zs0Zy5C4fcUatkUI7XmhoTu8JxYYH80kmPv68jfu0shCdNPnq7iFUxwFLJgDEr3sUINS7ZGXLNVneekyYl8EFG1UZeqB2bFNnNZHyH0sKts8s32IwgyQ"
                    />
                    <div class="absolute top-4 left-4">
                        <span class="bg-primary-container text-tertiary-fixed px-3 py-1 rounded-full text-label-md font-label-md">Seminar</span>
                    </div>
                </div>
                <div class="p-6 space-y-4">
                    <div class="flex items-center gap-2 text-on-secondary-container">
                        <span class="material-symbols-outlined text-[18px]">calendar_today</span>
                        <span class="text-label-md font-label-md">15 Okt 2024</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-primary group-hover:text-on-secondary-container transition-colors">
                        Future of AI: Generative Transformation
                    </h3>
                    <div class="flex items-center gap-4 text-on-primary-container">
                        <div class="flex items-center gap-1">
                            <span class="material-symbols-outlined text-[18px]">person</span>
                            <span class="text-label-md font-label-md">Dr. Sarah Johnson</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: &quot;FILL&quot; 1;">star</span>
                            <span class="text-label-md font-label-md">4.9</span>
                        </div>
                    </div>
                    <div class="pt-4 flex justify-between items-center border-t border-outline-variant/20">
                        <span class="font-headline-md text-on-tertiary-container">Rp 150.000</span>
                        <a href="{{ route('events.show', 1) }}" class="inline-block bg-secondary-container text-on-secondary-fixed-variant px-4 py-2 rounded-lg font-label-lg text-label-lg hover:bg-secondary transition-colors">
                            Daftar
                        </a>
                    </div>
                </div>
            </div>
            <!-- Card 2: Workshop Laravel -->
            <div class="bg-surface-container-lowest rounded-[24px] overflow-hidden shadow-[0_12px_24px_-10px_rgba(13,33,55,0.05)] border border-outline-variant/30 hover:-translate-y-2 transition-all duration-300 group">
                <div class="h-48 overflow-hidden relative">
                    <img
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        data-alt="A clean, minimalist workspace scene featuring a high-end laptop on a white desk. On the screen, elegant code snippets representing Laravel framework development are visible. The background is a soft blue-grey with seafoam green accents from a desk plant. The lighting is soft morning light, creating a calm and professional atmosphere for web development."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_deAxZUMcv028a5r-xJlrCqRvNeQPvg5sgiPuF2lh10dd8UE_hAnRunnc7U4pKP-1iePvuAWHLFVPk0Q-gpuvnEPqtM0W9n8N1qOKgtf40LeNDYfgAeyNBnkkQsepvGwOfWf0OOigz1-58--DKvscgM5kQDkl7Dn6b7QpHsnjx-5TA9fWts7OnM-Gb7cEP5F9-h5XnW97mlSEH1gU82zKzdgv3qegsbcHQcVBKg5cUxI8yQsEidWl8A"
                    />
                    <div class="absolute top-4 left-4">
                        <span class="bg-primary-container text-tertiary-fixed px-3 py-1 rounded-full text-label-md font-label-md">Workshop</span>
                    </div>
                </div>
                <div class="p-6 space-y-4">
                    <div class="flex items-center gap-2 text-on-secondary-container">
                        <span class="material-symbols-outlined text-[18px]">calendar_today</span>
                        <span class="text-label-md font-label-md">22 Okt 2024</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-primary group-hover:text-on-secondary-container transition-colors">
                        Mastering Laravel: Enterprise Patterns
                    </h3>
                    <div class="flex items-center gap-4 text-on-primary-container">
                        <div class="flex items-center gap-1">
                            <span class="material-symbols-outlined text-[18px]">person</span>
                            <span class="text-label-md font-label-md">Ahmad Rizky</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: &quot;FILL&quot; 1;">star</span>
                            <span class="text-label-md font-label-md">4.8</span>
                        </div>
                    </div>
                    <div class="pt-4 flex justify-between items-center border-t border-outline-variant/20">
                        <span class="font-headline-md text-on-tertiary-container">Rp 250.000</span>
                        <a href="{{ route('events.show', 2) }}" class="inline-block bg-secondary-container text-on-secondary-fixed-variant px-4 py-2 rounded-lg font-label-lg text-label-lg hover:bg-secondary transition-colors">
                            Daftar
                        </a>
                    </div>
                </div>
            </div>
            <!-- Card 3: Workshop UI/UX -->
            <div class="bg-surface-container-lowest rounded-[24px] overflow-hidden shadow-[0_12px_24px_-10px_rgba(13,33,55,0.05)] border border-outline-variant/30 hover:-translate-y-2 transition-all duration-300 group">
                <div class="h-48 overflow-hidden relative">
                    <img
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        data-alt="An artistic flat-lay of design tools including a digital tablet, color swatches in teal and navy, and clean wireframe sketches on high-quality paper. The aesthetic is modern and creative, with a bright white surface reflecting soft studio lighting. Minimalist design elements and precise layout evoke a sense of high-end UI/UX craftsmanship."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCqJtDDrL3978RIg9QFCMu-8EmX0D9lBS3jVc75uWRqwrhs1xbGPjWaJZGT3W2AvIkbjh6yIObAF8I6XIthiABXJgOzxS5wid9y9sJ4KUKYJSuBpNHP09E1b0L6eHlvKk52SeTFKFan74LHAGk60SrDkDVTSGlqiOFxpOQ54NFOYXIwRXBWLtoHWSYjeCfDBTljvuZylcQ3ZEsZhD1NsjcI5REbH7BAlcoozzCEKfSJy_NEgnJn-EggyQ"
                    />
                    <div class="absolute top-4 left-4">
                        <span class="bg-primary-container text-tertiary-fixed px-3 py-1 rounded-full text-label-md font-label-md">Workshop</span>
                    </div>
                </div>
                <div class="p-6 space-y-4">
                    <div class="flex items-center gap-2 text-on-secondary-container">
                        <span class="material-symbols-outlined text-[18px]">calendar_today</span>
                        <span class="text-label-md font-label-md">30 Okt 2024</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-primary group-hover:text-on-secondary-container transition-colors">
                        UI/UX Design: Accessibility First
                    </h3>
                    <div class="flex items-center gap-4 text-on-primary-container">
                        <div class="flex items-center gap-1">
                            <span class="material-symbols-outlined text-[18px]">person</span>
                            <span class="text-label-md font-label-md">Maya Putri</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: &quot;FILL&quot; 1;">star</span>
                            <span class="text-label-md font-label-md">5.0</span>
                        </div>
                    </div>
                    <div class="pt-4 flex justify-between items-center border-t border-outline-variant/20">
                        <span class="font-headline-md text-on-tertiary-container">Rp 200.000</span>
                        <a href="{{ route('events.show', 3) }}" class="inline-block bg-secondary-container text-on-secondary-fixed-variant px-4 py-2 rounded-lg font-label-lg text-label-lg hover:bg-secondary transition-colors">
                            Daftar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Statistics Section -->
<section class="bg-primary-container py-20 relative overflow-hidden">
    <div class="absolute inset-0 opacity-5">
        <div class="w-full h-full" style="background-image: radial-gradient(#65fbcf 1px, transparent 1px); background-size: 40px 40px;"></div>
    </div>
    <div class="max-w-container-max mx-auto px-margin-desktop relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
            <div class="space-y-2">
                <div class="font-headline-xl text-headline-xl text-tertiary-fixed">120+</div>
                <div class="font-label-lg text-label-lg text-on-primary-container uppercase tracking-widest">Events Terlaksana</div>
            </div>
            <div class="space-y-2">
                <div class="font-headline-xl text-headline-xl text-tertiary-fixed">3500+</div>
                <div class="font-label-lg text-label-lg text-on-primary-container uppercase tracking-widest">Peserta Aktif</div>
            </div>
            <div class="space-y-2">
                <div class="font-headline-xl text-headline-xl text-tertiary-fixed">2800+</div>
                <div class="font-label-lg text-label-lg text-on-primary-container uppercase tracking-widest">Sertifikat Terbit</div>
            </div>
        </div>
    </div>
</section>
<!-- How It Works Section -->
<section class="py-24 bg-background">
    <div class="max-w-container-max mx-auto px-margin-desktop">
        <div class="text-center mb-20 max-w-2xl mx-auto">
            <h2 class="font-headline-lg text-headline-lg text-primary mb-4">Cara Bergabung</h2>
            <p class="text-on-primary-container">Mulai perjalanan belajarmu dengan 4 langkah mudah dan cepat tanpa hambatan.</p>
        </div>
        <div class="relative">
            <!-- Progress Line (Desktop) -->
            <div class="hidden md:block absolute top-1/2 left-0 w-full h-0.5 bg-outline-variant/30 -translate-y-1/2 z-0"></div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 relative z-10">
                <!-- Step 1 -->
                <div class="bg-white p-8 rounded-[24px] shadow-sm flex flex-col items-center text-center group hover:shadow-md transition-shadow border border-outline-variant/10">
                    <div class="w-16 h-16 bg-primary-container text-tertiary-fixed rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-[32px]">person_add</span>
                    </div>
                    <h4 class="font-headline-md text-headline-md text-primary mb-2">Daftar</h4>
                    <p class="text-on-primary-container text-body-md">Buat akun SeminarKu secara gratis dalam hitungan detik.</p>
                </div>
                <!-- Step 2 -->
                <div class="bg-white p-8 rounded-[24px] shadow-sm flex flex-col items-center text-center group hover:shadow-md transition-shadow border border-outline-variant/10">
                    <div class="w-16 h-16 bg-on-tertiary-container text-white rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-[32px]">search</span>
                    </div>
                    <h4 class="font-headline-md text-headline-md text-primary mb-2">Pilih</h4>
                    <p class="text-on-primary-container text-body-md">Cari acara yang sesuai dengan minat dan kebutuhanmu.</p>
                </div>
                <!-- Step 3 -->
                <div class="bg-white p-8 rounded-[24px] shadow-sm flex flex-col items-center text-center group hover:shadow-md transition-shadow border border-outline-variant/10">
                    <div class="w-16 h-16 bg-on-tertiary-container text-white rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-[32px]">payments</span>
                    </div>
                    <h4 class="font-headline-md text-headline-md text-primary mb-2">Bayar</h4>
                    <p class="text-on-primary-container text-body-md">Lakukan pembayaran aman melalui berbagai metode tersedia.</p>
                </div>
                <!-- Step 4 -->
                <div class="bg-white p-8 rounded-[24px] shadow-sm flex flex-col items-center text-center group hover:shadow-md transition-shadow border border-outline-variant/10">
                    <div class="w-16 h-16 bg-tertiary-fixed-dim text-primary rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-[32px]">workspace_premium</span>
                    </div>
                    <h4 class="font-headline-md text-headline-md text-primary mb-2">Sertifikat</h4>
                    <p class="text-on-primary-container text-body-md">Ikuti acara dan dapatkan sertifikat resmi dari penyelenggara.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter / CTA -->
<section class="max-w-container-max mx-auto px-margin-desktop mb-24">
    <div class="bg-secondary p-12 md:p-20 rounded-[40px] flex flex-col md:flex-row items-center gap-12 relative overflow-hidden shadow-xl">
        <div class="absolute top-0 right-0 w-64 h-64 bg-secondary-container/20 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
        <div class="flex-1 space-y-6">
            <h2 class="font-headline-xl text-headline-xl text-white">Jangan Ketinggalan Event Menarik!</h2>
            <p class="text-secondary-fixed text-body-lg">Berlangganan newsletter kami untuk mendapatkan update terbaru langsung di emailmu.</p>
        </div>
        <div class="w-full md:w-auto flex flex-col sm:flex-row gap-4">
            <input class="px-6 py-4 rounded-xl border-none focus:ring-2 focus:ring-tertiary-fixed w-full md:w-80 font-body-md" placeholder="Alamat email anda" type="email" />
            <button class="bg-tertiary-fixed text-primary px-8 py-4 rounded-xl font-label-lg text-label-lg whitespace-nowrap hover:opacity-90 transition-all shadow-lg">
                Ikuti Sekarang
            </button>
        </div>
    </div>
</section>
@endsection
