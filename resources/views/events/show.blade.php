@extends('layouts.app')

@section('title', 'Detail Acara')

@section('content')




<main class="max-w-container-max mx-auto px-margin-desktop py-12">
<div class="mb-4">
    <a href="{{ route('events.index') }}" class="inline-flex items-center gap-2 text-on-surface-variant hover:text-secondary transition-colors font-label-lg">
        <span class="material-symbols-outlined">arrow_back</span>
        Kembali ke Acara
    </a>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">
<!-- Left Column: Content (60%) -->
<div class="lg:col-span-7 space-y-8">
<!-- Large Image Banner -->
<div class="relative w-full aspect-video rounded-3xl overflow-hidden shadow-xl group">
<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A professional academic seminar hall with a large digital screen showcasing a high-tech presentation. The atmosphere is sophisticated and modern, with soft navy blue lighting and teal accents. Audience members are blurred in the foreground, creating depth. The image captures a sense of innovation, professional growth, and academic excellence in a light-filled contemporary space." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_BlRpzru16FujielaKOFiY0mWVStA36hN90VaaJNnCwajfYtZMDORP4kiq4ed68JytYjSm1f9MACjMCIHy8_WRnLsepwI6DP9EZDuwyilKwfIrl0cm3YgwOGiW5U8tggK6eJo0uREiATFm-k5_uFCvLyz53u22tAaxfX1TURnX2hY9IJ2MfcDaZBFmCAGcvj7zZju4OhaEYg-zlKN6oZlau--CNq8qbHS4geLpQcZ0prluGybfgG_Bw"/>
<div class="absolute top-6 left-6">
<span class="px-4 py-2 bg-on-tertiary-container text-white font-label-md text-label-md rounded-full shadow-lg flex items-center gap-2">
<span class="material-symbols-outlined text-[18px]">verified</span>
                            Seminar Nasional
                        </span>
</div>
</div>
<!-- Event Identity -->
<div class="space-y-4">
<div class="flex flex-wrap gap-2">
<span class="px-3 py-1 bg-secondary-container text-on-secondary-container rounded-full font-label-md text-label-md">Teknologi</span>
<span class="px-3 py-1 bg-surface-container-high text-outline rounded-full font-label-md text-label-md">Artificial Intelligence</span>
</div>
<h1 class="font-headline-xl text-headline-xl text-primary leading-tight">
                        Transformasi Digital: Masa Depan AI dalam Ekosistem Bisnis 2025
                    </h1>
</div>
<!-- Details Grid -->
<div class="grid grid-cols-2 md:grid-cols-4 gap-4 p-6 bg-surface-container-lowest rounded-3xl border border-outline-variant/30">
<div class="flex flex-col gap-1">
<span class="text-outline font-label-md text-label-md">Tanggal</span>
<div class="flex items-center gap-2 font-label-lg text-label-lg text-primary">
<span class="material-symbols-outlined text-secondary">calendar_today</span>
                            15 Des 2024
                        </div>
</div>
<div class="flex flex-col gap-1">
<span class="text-outline font-label-md text-label-md">Waktu</span>
<div class="flex items-center gap-2 font-label-lg text-label-lg text-primary">
<span class="material-symbols-outlined text-secondary">schedule</span>
                            09:00 WIB
                        </div>
</div>
<div class="flex flex-col gap-1">
<span class="text-outline font-label-md text-label-md">Lokasi</span>
<div class="flex items-center gap-2 font-label-lg text-label-lg text-primary">
<span class="material-symbols-outlined text-secondary">location_on</span>
                            Jakarta
                        </div>
</div>
<div class="flex flex-col gap-1">
<span class="text-outline font-label-md text-label-md">Sisa Kuota</span>
<div class="flex items-center gap-2 font-label-lg text-label-lg text-on-tertiary-container">
<span class="material-symbols-outlined">person</span>
                            45 Kursi
                        </div>
</div>
</div>
<!-- Description -->
<div class="space-y-6">
<h2 class="font-headline-md text-headline-md text-primary">Tentang Acara</h2>
<div class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed space-y-4">
<p>
                            Selamat datang di seminar eksklusif yang dirancang khusus untuk para profesional dan inovator yang ingin mendalami potensi AI dalam dunia bisnis. Dalam sesi ini, kita akan menjelajahi bagaimana model bahasa besar dan visi komputer mengubah cara operasional perusahaan modern.
                        </p>
<p>
                            Pembicara utama kami berasal dari jajaran eksekutif teknologi global yang telah sukses mengimplementasikan solusi berbasis AI untuk meningkatkan efisiensi hingga 40%. Anda tidak hanya akan mendapatkan teori, tetapi juga studi kasus nyata yang aplikatif.
                        </p>
</div>
<!-- Highlights -->
<div class="bg-surface-container-low rounded-3xl p-8 space-y-4">
<h3 class="font-label-lg text-label-lg text-primary uppercase tracking-widest">Apa yang akan Anda dapatkan?</h3>
<ul class="space-y-3">
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-on-tertiary-container mt-0.5">check_circle</span>
<span class="text-on-surface">E-Certificate Resmi SeminarKu &amp; Partner</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-on-tertiary-container mt-0.5">check_circle</span>
<span class="text-on-surface">Materi Eksklusif PDF &amp; Toolkit Bisnis AI</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-on-tertiary-container mt-0.5">check_circle</span>
<span class="text-on-surface">Networking dengan 200+ Profesional lainnya</span>
</li>
</ul>
</div>
</div>
</div>
<!-- Right Column: Registration Card (40%) -->
<div class="lg:col-span-5 relative h-full">
<div class="sticky sticky-card p-8 bg-white rounded-[32px] shadow-2xl shadow-primary/5 border border-outline-variant/20 space-y-8">
<div>
<span class="text-outline font-label-md text-label-md block mb-1">Harga Tiket</span>
<div class="flex items-baseline gap-2">
<span class="text-headline-lg font-headline-lg text-primary">Rp 250.000</span>
<span class="text-outline line-through text-label-md">Rp 500.000</span>
</div>
<p class="text-on-tertiary-container font-label-md text-label-md mt-2 flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]">local_offer</span>
                            Hemat 50% hingga besok!
                        </p>
</div>
<div class="space-y-4">
<div class="flex justify-between items-center text-label-lg">
<span class="text-on-surface">Slot Tersedia</span>
<span class="text-primary font-bold">155 / 200</span>
</div>
<div class="w-full h-3 bg-surface-container-highest rounded-full overflow-hidden">
<div class="h-full bg-on-tertiary-container transition-all duration-1000 ease-out" style="width: 77%"></div>
</div>
</div>
<div class="space-y-3">
<a href="{{ route('register') }}" class="w-full py-4 bg-on-tertiary-container text-white rounded-2xl font-label-lg text-headline-md flex items-center justify-center gap-2 hover:brightness-110 active:scale-95 transition-all duration-200">
                            Daftar Sekarang
                            <span class="material-symbols-outlined">arrow_forward</span>
</a>
<p class="text-center text-outline text-label-md">
                            Transaksi aman &amp; terverifikasi oleh SeminarKu
                        </p>
</div>
<div class="pt-6 border-t border-outline-variant/30 grid grid-cols-3 gap-4 text-center">
<div class="space-y-1">
<span class="material-symbols-outlined text-secondary">verified_user</span>
<span class="block text-[10px] uppercase font-bold text-outline">Terpercaya</span>
</div>
<div class="space-y-1">
<span class="material-symbols-outlined text-secondary">account_balance_wallet</span>
<span class="block text-[10px] uppercase font-bold text-outline">Refundable</span>
</div>
<div class="space-y-1">
<span class="material-symbols-outlined text-secondary">support_agent</span>
<span class="block text-[10px] uppercase font-bold text-outline">24/7 CS</span>
</div>
</div>
</div>
</div>
</div>
<!-- Related Events Section -->
<section class="mt-24 space-y-8">
<div class="flex justify-between items-end">
<div class="space-y-2">
<h2 class="font-headline-lg text-headline-lg text-primary">Acara Serupa</h2>
<p class="text-on-surface-variant font-body-md text-body-md">Mungkin Anda juga tertarik dengan topik-topik ini.</p>
</div>
<a class="text-secondary font-label-lg text-label-lg flex items-center gap-2 hover:gap-3 transition-all duration-300" href="#">
                    Lihat Semua
                    <span class="material-symbols-outlined">east</span>
</a>
</div>
<!-- Bento-style/Card Grid -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<!-- Card 1 -->
<div class="group bg-white p-4 rounded-[24px] border border-outline-variant/20 hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
<div class="relative w-full aspect-[4/3] rounded-2xl overflow-hidden mb-4">
<img class="w-full h-full object-cover" data-alt="A futuristic workspace with holographic UI elements glowing in soft seafoam green. High-end professional laptop and digital accessories sit on a clean white desk. The lighting is bright and ethereal, reflecting a corporate modern aesthetic with navy and teal highlights. Depth of field focuses on the sharp digital interface." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAKAl8W3VNfJVTQy70wrOyHnGITAMr2fkMfFEkGbTJmZO93TCcVf_c6ucdo4xn6GT1tOFoXCMAJtizTOl0yvI1RquYIeAncgz_nKaq7mJoTT6_UeCXo8IF8tLrHPNw3T4XaYsD3IGCfMfNIs6v2NX7q3AimucORVE--oSgLsMHDD0LKnv9JTl2gm7VUMJ6Bv1CTtgMZo2JEht7uKZlgyFrHHQbX-G6LVOlrFrPdzwzAg7K2ySgnHtkLzg"/>
</div>
<div class="space-y-3">
<span class="px-3 py-1 bg-surface-container-low text-secondary rounded-full font-label-md text-label-md">Webinar</span>
<h3 class="font-headline-md text-headline-md text-primary line-clamp-2">Mastering UI/UX Strategy for Fintech</h3>
<div class="flex justify-between items-center pt-2">
<span class="text-on-tertiary-container font-bold">Gratis</span>
<span class="text-outline text-label-md flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]">calendar_today</span>
                                20 Des
                            </span>
</div>
</div>
</div>
<!-- Card 2 -->
<div class="group bg-white p-4 rounded-[24px] border border-outline-variant/20 hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
<div class="relative w-full aspect-[4/3] rounded-2xl overflow-hidden mb-4">
<img class="w-full h-full object-cover" data-alt="A high-altitude shot of a bustling metropolitan business district at dawn. Deep navy blue shadows contrast with vibrant seafoam green city lights and modern glass skyscrapers. The atmosphere is professional, ambitious, and clean, representing urban growth and economic strategy. The morning light is crisp and blue-toned." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBrSzl7gDkm8igEwucSsGofl-9tOJ4uWIJiv6vxr9RwyZ-jXHYFSnTYegP8Q_th8WxoDdG3t8bdlevwLW6JvdkPFD8hLvQhXfWbAOj49-0TmFqsHweyI4iE4sbEmpSw2YT5Kz1xched7RsCS4BQaoHdZjt78pp_fwKGnr6nzBCnOeN9-UPN2mXJFZ-rIq0hoja2qj6eDrreI-CIIdQuvESIRuq8wETeZx9H0GAjN4gvQLcv_CdJkAaSjw"/>
</div>
<div class="space-y-3">
<span class="px-3 py-1 bg-surface-container-low text-secondary rounded-full font-label-md text-label-md">Workshop</span>
<h3 class="font-headline-md text-headline-md text-primary line-clamp-2">Creative Content Marketing for Startups</h3>
<div class="flex justify-between items-center pt-2">
<span class="text-primary font-bold">Rp 150.000</span>
<span class="text-outline text-label-md flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]">calendar_today</span>
                                22 Des
                            </span>
</div>
</div>
</div>
<!-- Card 3 -->
<div class="group bg-white p-4 rounded-[24px] border border-outline-variant/20 hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
<div class="relative w-full aspect-[4/3] rounded-2xl overflow-hidden mb-4">
<img class="w-full h-full object-cover" data-alt="Close-up of high-tech server racks with glowing teal and navy blue LED indicators. The environment is a clean, hyper-modern data center with metallic surfaces and soft ambient lighting. Symbolizing data security and cloud computing infrastructure. The mood is highly professional, reliable, and advanced." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCyw32vYhWzF0n0HVi1Yb5hs_-i1nGiQhFTNq8w6BAvoTvFBTRv5JkmItVaPKETMOLJon5TWWBuzmP1hnFMCp1XzSEDvuJlAFEHq8nR4Xxf26t75IzxChSRmW_iwFHvrLbj000D93XuD6fRfaun5T-RYCyVazpbWtZ-JHSYyZDEILgZm6mfkJ2lbt7QS9b1VqVfC1seIw-XAONexUPZ-5xnZhMF2vvmJpmZXmQ4nR1LDUYSNxpsY2U6JQ"/>
</div>
<div class="space-y-3">
<span class="px-3 py-1 bg-surface-container-low text-secondary rounded-full font-label-md text-label-md">Seminar</span>
<h3 class="font-headline-md text-headline-md text-primary line-clamp-2">Cybersecurity Trends &amp; Data Protection</h3>
<div class="flex justify-between items-center pt-2">
<span class="text-primary font-bold">Rp 300.000</span>
<span class="text-outline text-label-md flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]">calendar_today</span>
                                25 Des
                            </span>
</div>
</div>
</div>
</div>
</section>
</main>



@endsection
