@extends('layouts.admin')

@section('title', 'Detail Pendaftaran - SeminarKu')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
<!-- TopNavBar -->
<header class="bg-primary-container docked full-width top-0 shadow-sm z-50 sticky">
    <div class="flex justify-between items-center w-full px-margin-desktop max-w-container-max mx-auto h-20">
        <div class="font-headline-md text-headline-md font-bold text-on-tertiary-container dark:text-tertiary-fixed">SeminarKu</div>
        <nav class="hidden md:flex items-center gap-8">
            <a class="text-on-primary-container hover:text-on-tertiary-container transition-colors font-label-lg text-label-lg" href="{{ route('home') }}">Home</a>
            <a class="text-on-primary-container hover:text-on-tertiary-container transition-colors font-label-lg text-label-lg" href="{{ route('events.index') }}">Acara</a>
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
                    <img class="w-full h-full object-cover" data-alt="A high-quality photo of a physical bank transfer receipt placed on a clean white desk. The receipt shows official bank logos and clear printed text in black ink. The lighting is bright and professional, creating a clean corporate aesthetic consistent with a financial verification process. The background is a soft-focus office setting with professional stationery." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFOxewiibULzW0mUnrVB1OxPwxzDJlIQukxrTEa6etoQyiF3OfJEQqOhld6bnqZwvORPFAPp-1TZKU8QBJWGXZNAlJcN7CgtYk5Sx0I-M1pOUixumDKACkuvyxYT7CWkYZpP8SHorHoqn0unirXwvqBqrce6VI3__GASIRg5XyRcgxWwWRE2pzMxBWKW_rKp8kldlleL1nMYZWO5YI79G0jz47neKFx5Pid4s2GDJdGalWGv90bVbiLQ" />
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
            <a class="text-on-primary-container hover:text-on-tertiary-container hover:underline font-body-md text-body-md" href="{{ route('home') }}">Home</a>
            <a class="text-on-primary-container hover:text-on-tertiary-container hover:underline font-body-md text-body-md" href="{{ route('events.index') }}">Acara</a>
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
@endsection
