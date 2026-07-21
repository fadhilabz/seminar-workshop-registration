@extends('layouts.admin')

@section('title', 'Verifikasi Pembayaran | SeminarKu Admin')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
<!-- TopNavBar -->
<header class="bg-primary-container docked full-width top-0 shadow-sm h-4 z-50 sticky">
    
</header>
<!-- Hero Section -->
<section class="bg-primary-container py-16">
    <div class="max-w-7xl mx-auto px-margin-desktop">
        <h1 class="font-headline-xl text-headline-xl text-white mb-4">Verifikasi Pembayaran</h1>
        <p class="text-on-primary-container font-body-lg text-body-lg max-w-2xl">Kelola dan validasi bukti transfer peserta seminar secara efisien dan akurat dalam satu dashboard terintegrasi.</p>
    </div>
</section>
<!-- Main Content -->
<main class="max-w-7xl mx-auto px-margin-desktop py-12 -mt-12">
    <!-- Top Stats -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter mb-10">
        <div class="bg-surface-container-lowest p-6 rounded-3xl shadow-[0_12px_24px_rgba(13,33,55,0.05)] border border-outline-variant/30 flex items-center gap-5 transition-transform hover:-translate-y-1">
            <div class="w-14 h-14 rounded-2xl bg-secondary-container/20 flex items-center justify-center text-secondary">
                <span class="material-symbols-outlined text-3xl">pending_actions</span>
            </div>
            <div>
                <p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Menunggu</p>
                <h3 class="font-headline-lg text-headline-lg text-on-surface">12</h3>
            </div>
        </div>
        <div class="bg-surface-container-lowest p-6 rounded-3xl shadow-[0_12px_24px_rgba(13,33,55,0.05)] border border-outline-variant/30 flex items-center gap-5 transition-transform hover:-translate-y-1">
            <div class="w-14 h-14 rounded-2xl bg-[#02C39A]/10 flex items-center justify-center text-[#009a79]">
                <span class="material-symbols-outlined text-3xl">check_circle</span>
            </div>
            <div>
                <p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Dikonfirmasi</p>
                <h3 class="font-headline-lg text-headline-lg text-on-surface">48</h3>
            </div>
        </div>
        <div class="bg-surface-container-lowest p-6 rounded-3xl shadow-[0_12px_24px_rgba(13,33,55,0.05)] border border-outline-variant/30 flex items-center gap-5 transition-transform hover:-translate-y-1">
            <div class="w-14 h-14 rounded-2xl bg-error-container/30 flex items-center justify-center text-error">
                <span class="material-symbols-outlined text-3xl">cancel</span>
            </div>
            <div>
                <p class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Ditolak</p>
                <h3 class="font-headline-lg text-headline-lg text-on-surface">3</h3>
            </div>
        </div>
    </div>
    <!-- Filters & Search -->
    <div class="flex flex-col md:flex-row justify-between items-center mb-8 gap-6">
        <div class="flex gap-2 p-1 bg-surface-container rounded-2xl w-full md:w-auto">
            <button class="px-6 py-2 rounded-xl font-label-lg text-label-lg bg-primary-container text-white shadow-sm transition-all">Semua</button>
            <button class="px-6 py-2 rounded-xl font-label-lg text-label-lg text-on-surface hover:bg-surface-container-highest transition-all">Menunggu</button>
            <button class="px-6 py-2 rounded-xl font-label-lg text-label-lg text-on-surface hover:bg-surface-container-highest transition-all">Selesai</button>
        </div>
        <div class="relative w-full md:w-96">
            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
            <input class="w-full pl-12 pr-4 py-3 bg-surface-container-lowest border border-outline-variant rounded-2xl focus:ring-2 focus:ring-secondary focus:border-secondary transition-all outline-none text-body-md" placeholder="Cari nama peserta atau acara..." type="text" />
        </div>
    </div>
    <!-- Table Container -->
    <div class="bg-surface-container-lowest rounded-[24px] shadow-[0_12px_24px_rgba(13,33,55,0.05)] overflow-hidden border border-outline-variant/30">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-surface-container text-on-surface">
                        <th class="px-6 py-5 font-label-lg text-label-lg uppercase tracking-wider">No</th>
                        <th class="px-6 py-5 font-label-lg text-label-lg uppercase tracking-wider">Peserta</th>
                        <th class="px-6 py-5 font-label-lg text-label-lg uppercase tracking-wider">Acara</th>
                        <th class="px-6 py-5 font-label-lg text-label-lg uppercase tracking-wider">Tanggal</th>
                        <th class="px-6 py-5 font-label-lg text-label-lg uppercase tracking-wider">Harga</th>
                        <th class="px-6 py-5 font-label-lg text-label-lg uppercase tracking-wider">Bukti</th>
                        <th class="px-6 py-5 font-label-lg text-label-lg uppercase tracking-wider">Status</th>
                        <th class="px-6 py-5 font-label-lg text-label-lg uppercase tracking-wider text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant/20">
                    <!-- Row 1 -->
                    <tr class="table-row-hover transition-colors">
                        <td class="px-6 py-5 font-body-md text-body-md text-on-surface">01</td>
                        <td class="px-6 py-5">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-primary-container/10 flex items-center justify-center text-primary-container font-bold">AS</div>
                                <div>
                                    <p class="font-label-lg text-label-lg text-on-surface">Adit Sopo</p>
                                    <p class="text-[12px] text-on-surface-variant">adit.s@gmail.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-5 font-body-md text-body-md text-on-surface">UI/UX Advanced 2024</td>
                        <td class="px-6 py-5 font-body-md text-body-md text-on-surface">12 Okt 2024</td>
                        <td class="px-6 py-5 font-label-lg text-label-lg text-on-surface">Rp 250.000</td>
                        <td class="px-6 py-5">
                            <button class="flex items-center gap-2 text-secondary hover:underline font-label-lg">
                                <span class="material-symbols-outlined text-lg">image</span> Lihat
                            </button>
                        </td>
                        <td class="px-6 py-5">
                            <span class="px-3 py-1 bg-secondary-container/30 text-on-secondary-container rounded-full text-[12px] font-bold">Menunggu</span>
                        </td>
                        <td class="px-6 py-5">
                            <div class="flex justify-center gap-2">
                                <button class="p-2 bg-[#02C39A]/10 text-[#009a79] rounded-lg hover:bg-[#02C39A] hover:text-white transition-all shadow-sm active:scale-95" title="Confirm">
                                    <span class="material-symbols-outlined">check</span>
                                </button>
                                <button class="p-2 bg-error-container/30 text-error rounded-lg hover:bg-error hover:text-white transition-all shadow-sm active:scale-95" title="Reject">
                                    <span class="material-symbols-outlined">close</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 2 -->
                    <tr class="table-row-hover transition-colors">
                        <td class="px-6 py-5 font-body-md text-body-md text-on-surface">02</td>
                        <td class="px-6 py-5">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-primary-container/10 flex items-center justify-center text-primary-container font-bold">BN</div>
                                <div>
                                    <p class="font-label-lg text-label-lg text-on-surface">Budi Nugraha</p>
                                    <p class="text-[12px] text-on-surface-variant">budi.nug@outlook.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-5 font-body-md text-body-md text-on-surface">Next.js 14 Workshop</td>
                        <td class="px-6 py-5 font-body-md text-body-md text-on-surface">13 Okt 2024</td>
                        <td class="px-6 py-5 font-label-lg text-label-lg text-on-surface">Rp 450.000</td>
                        <td class="px-6 py-5">
                            <button class="flex items-center gap-2 text-secondary hover:underline font-label-lg">
                                <span class="material-symbols-outlined text-lg">image</span> Lihat
                            </button>
                        </td>
                        <td class="px-6 py-5">
                            <span class="px-3 py-1 bg-secondary-container/30 text-on-secondary-container rounded-full text-[12px] font-bold">Menunggu</span>
                        </td>
                        <td class="px-6 py-5">
                            <div class="flex justify-center gap-2">
                                <button class="p-2 bg-[#02C39A]/10 text-[#009a79] rounded-lg hover:bg-[#02C39A] hover:text-white transition-all shadow-sm active:scale-95">
                                    <span class="material-symbols-outlined">check</span>
                                </button>
                                <button class="p-2 bg-error-container/30 text-error rounded-lg hover:bg-error hover:text-white transition-all shadow-sm active:scale-95">
                                    <span class="material-symbols-outlined">close</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 3 -->
                    <tr class="table-row-hover transition-colors">
                        <td class="px-6 py-5 font-body-md text-body-md text-on-surface">03</td>
                        <td class="px-6 py-5">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-primary-container/10 flex items-center justify-center text-primary-container font-bold">CR</div>
                                <div>
                                    <p class="font-label-lg text-label-lg text-on-surface">Citra Rahayu</p>
                                    <p class="text-[12px] text-on-surface-variant">citra.rah@gmail.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-5 font-body-md text-body-md text-on-surface">Digital Marketing 101</td>
                        <td class="px-6 py-5 font-body-md text-body-md text-on-surface">14 Okt 2024</td>
                        <td class="px-6 py-5 font-label-lg text-label-lg text-on-surface">Rp 150.000</td>
                        <td class="px-6 py-5">
                            <button class="flex items-center gap-2 text-secondary hover:underline font-label-lg">
                                <span class="material-symbols-outlined text-lg">image</span> Lihat
                            </button>
                        </td>
                        <td class="px-6 py-5">
                            <span class="px-3 py-1 bg-secondary-container/30 text-on-secondary-container rounded-full text-[12px] font-bold">Menunggu</span>
                        </td>
                        <td class="px-6 py-5">
                            <div class="flex justify-center gap-2">
                                <button class="p-2 bg-[#02C39A]/10 text-[#009a79] rounded-lg hover:bg-[#02C39A] hover:text-white transition-all shadow-sm active:scale-95">
                                    <span class="material-symbols-outlined">check</span>
                                </button>
                                <button class="p-2 bg-error-container/30 text-error rounded-lg hover:bg-error hover:text-white transition-all shadow-sm active:scale-95">
                                    <span class="material-symbols-outlined">close</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 4 -->
                    <tr class="table-row-hover transition-colors">
                        <td class="px-6 py-5 font-body-md text-body-md text-on-surface">04</td>
                        <td class="px-6 py-5">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-primary-container/10 flex items-center justify-center text-primary-container font-bold">DA</div>
                                <div>
                                    <p class="font-label-lg text-label-lg text-on-surface">Dian Anggraini</p>
                                    <p class="text-[12px] text-on-surface-variant">dian_a@yahoo.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-5 font-body-md text-body-md text-on-surface">Cyber Security Essentials</td>
                        <td class="px-6 py-5 font-body-md text-body-md text-on-surface">15 Okt 2024</td>
                        <td class="px-6 py-5 font-label-lg text-label-lg text-on-surface">Rp 500.000</td>
                        <td class="px-6 py-5">
                            <button class="flex items-center gap-2 text-secondary hover:underline font-label-lg">
                                <span class="material-symbols-outlined text-lg">image</span> Lihat
                            </button>
                        </td>
                        <td class="px-6 py-5">
                            <span class="px-3 py-1 bg-[#02C39A]/20 text-[#009a79] rounded-full text-[12px] font-bold">Dikonfirmasi</span>
                        </td>
                        <td class="px-6 py-5 text-center">
                            <span class="text-on-surface-variant text-[12px]">Sudah diverifikasi</span>
                        </td>
                    </tr>
                    <!-- Row 5 -->
                    <tr class="table-row-hover transition-colors">
                        <td class="px-6 py-5 font-body-md text-body-md text-on-surface">05</td>
                        <td class="px-6 py-5">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-primary-container/10 flex items-center justify-center text-primary-container font-bold">EK</div>
                                <div>
                                    <p class="font-label-lg text-label-lg text-on-surface">Eko Kurniawan</p>
                                    <p class="text-[12px] text-on-surface-variant">eko.kurn@gmail.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-5 font-body-md text-body-md text-on-surface">DevOps Masterclass</td>
                        <td class="px-6 py-5 font-body-md text-body-md text-on-surface">16 Okt 2024</td>
                        <td class="px-6 py-5 font-label-lg text-label-lg text-on-surface">Rp 600.000</td>
                        <td class="px-6 py-5">
                            <button class="flex items-center gap-2 text-secondary hover:underline font-label-lg">
                                <span class="material-symbols-outlined text-lg">image</span> Lihat
                            </button>
                        </td>
                        <td class="px-6 py-5">
                            <span class="px-3 py-1 bg-error-container/40 text-error rounded-full text-[12px] font-bold">Ditolak</span>
                        </td>
                        <td class="px-6 py-5 text-center">
                            <span class="text-on-surface-variant text-[12px]">Ditolak - Bukti tidak valid</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Pagination -->
        <div class="px-6 py-4 bg-surface-container flex justify-between items-center border-t border-outline-variant/20">
            <p class="font-label-md text-label-md text-on-surface-variant">Menampilkan 1-5 dari 63 transaksi</p>
            <div class="flex gap-2">
                <button class="p-2 bg-surface-container-lowest border border-outline-variant rounded-lg text-on-surface hover:bg-surface-container-highest transition-colors disabled:opacity-50" disabled="">
                    <span class="material-symbols-outlined">chevron_left</span>
                </button>
                <button class="px-4 py-2 bg-primary-container text-white rounded-lg font-label-lg">1</button>
                <button class="px-4 py-2 bg-surface-container-lowest border border-outline-variant rounded-lg text-on-surface hover:bg-surface-container-highest transition-colors">2</button>
                <button class="px-4 py-2 bg-surface-container-lowest border border-outline-variant rounded-lg text-on-surface hover:bg-surface-container-highest transition-colors">3</button>
                <button class="p-2 bg-surface-container-lowest border border-outline-variant rounded-lg text-on-surface hover:bg-surface-container-highest transition-colors">
                    <span class="material-symbols-outlined">chevron_right</span>
                </button>
            </div>
        </div>
    </div>
</main>
<!-- Footer -->
<footer class="bg-primary-container py-12">
    <div class="flex flex-col md:flex-row justify-between items-center w-full px-margin-desktop py-12 max-w-container-max mx-auto">
        <div class="mb-8 md:mb-0">
            <span class="font-headline-md text-headline-md font-bold text-on-tertiary-container">SeminarKu</span>
            <p class="mt-4 text-on-primary-container font-body-md text-body-md max-w-xs">Platform edukasi terpercaya untuk pengembangan karir dan kompetensi profesional Anda.</p>
        </div>
        <div class="flex flex-col items-center md:items-end gap-6">
            <div class="flex gap-8">
                <a class="font-body-md text-body-md text-on-primary-container hover:text-on-tertiary-container hover:underline" href="{{ route('home') }}">Home</a>
                <a class="font-body-md text-body-md text-on-primary-container hover:text-on-tertiary-container hover:underline" href="{{ route('events.index') }}">Acara</a>
                <a class="font-body-md text-body-md text-on-primary-container hover:text-on-tertiary-container hover:underline" href="#">Tentang</a>
                <a class="font-body-md text-body-md text-on-primary-container hover:text-on-tertiary-container hover:underline" href="#">Privacy Policy</a>
            </div>
            <p class="font-body-md text-body-md text-on-primary-container">© 2024 SeminarKu. All rights reserved.</p>
        </div>
    </div>
</footer>
<!-- Micro-interaction Scripts -->
@endsection
