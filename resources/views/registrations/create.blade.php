@extends('layouts.app')

@section('title', 'Daftar Acara - SeminarKu')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- TopNavBar -->
<header class="bg-primary-container shadow-sm docked full-width top-0 z-50">
<nav class="flex justify-between items-center w-full px-margin-desktop max-w-container-max mx-auto h-20">
<div class="font-headline-md text-headline-md font-bold text-on-tertiary-container">SeminarKu</div>
<div class="hidden md:flex gap-8 items-center">
<a class="text-on-primary-container hover:text-on-tertiary-container transition-colors font-label-lg text-label-lg" href="{{ route('home') }}">Home</a>
<a class="text-on-tertiary-container font-bold border-b-2 border-on-tertiary-container pb-1 font-label-lg text-label-lg" href="{{ route('events.index') }}">Acara</a>
<a class="text-on-primary-container hover:text-on-tertiary-container transition-colors font-label-lg text-label-lg" href="#">Tentang</a>
<div class="flex gap-4 ml-4">
<button class="px-6 py-2 rounded-lg font-label-lg text-label-lg text-on-tertiary-container hover:bg-primary/10 transition-all duration-200 scale-95 active:scale-90">Login</button>
<button class="px-6 py-2 rounded-lg font-label-lg text-label-lg bg-secondary text-on-secondary hover:brightness-110 transition-all duration-200 scale-95 active:scale-90">Register</button>
</div>
</div>
<!-- Mobile Toggle -->
<button class="md:hidden text-on-primary-container">
<span class="material-symbols-outlined">menu</span>
</button>
</nav>
</header>
<!-- Hero Section -->
<section class="bg-primary-container py-16 px-margin-mobile md:px-margin-desktop">
<div class="max-w-7xl mx-auto text-center md:text-left">
<h1 class="font-headline-xl text-headline-xl text-on-primary mb-2">Form Pendaftaran Acara</h1>
<p class="font-body-lg text-body-lg text-on-tertiary-container opacity-90">Seminar Nasional Teknologi AI 2025</p>
</div>
</section>
<!-- Main Content -->
<main class="flex-grow py-12 px-margin-mobile md:px-margin-desktop">
<div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-8">
<!-- Registration Form Card -->
<div class="lg:col-span-7 bg-surface-container-lowest rounded-xl shadow-[0_12px_40px_-12px_rgba(13,33,55,0.05)] border border-outline-variant p-8 md:p-10">
<h2 class="font-headline-md text-headline-md text-on-surface mb-8">Informasi Pendaftar</h2>
<form class="space-y-6" id="registrationForm">
    @csrf
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<!-- Nama Lengkap -->
<div class="flex flex-col gap-2">
<label class="font-label-lg text-label-lg text-on-surface-variant">Nama Lengkap</label>
<input class="bg-surface-container text-on-surface-variant border-outline-variant rounded-lg p-3 font-body-md text-body-md cursor-not-allowed" readonly="" type="text" value="Ahmad Rifai"/>
</div>
<!-- Email -->
<div class="flex flex-col gap-2">
<label class="font-label-lg text-label-lg text-on-surface-variant">Email</label>
<input class="bg-surface-container text-on-surface-variant border-outline-variant rounded-lg p-3 font-body-md text-body-md cursor-not-allowed" readonly="" type="email" value="ahmad.rifai@example.com"/>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<!-- No Telepon -->
<div class="flex flex-col gap-2">
<label class="font-label-lg text-label-lg text-on-surface">No. Telepon</label>
<input class="bg-white border border-outline-variant rounded-lg p-3 font-body-md text-body-md input-focus-ring transition-all-200" placeholder="0812-3456-7890" required="" type="tel"/>
</div>
<!-- Institusi -->
<div class="flex flex-col gap-2">
<label class="font-label-lg text-label-lg text-on-surface">Institusi</label>
<input class="bg-white border border-outline-variant rounded-lg p-3 font-body-md text-body-md input-focus-ring transition-all-200" placeholder="Nama Universitas / Perusahaan" required="" type="text"/>
</div>
</div>
<!-- Catatan -->
<div class="flex flex-col gap-2">
<label class="font-label-lg text-label-lg text-on-surface">Catatan Tambahan (Opsional)</label>
<textarea class="bg-white border border-outline-variant rounded-lg p-3 font-body-md text-body-md input-focus-ring transition-all-200" placeholder="Sebutkan jika ada alergi makanan atau kebutuhan khusus..." rows="4"></textarea>
</div>
<!-- Kirim Button (Desktop Hidden) -->
<div class="pt-4 lg:hidden">
<button class="w-full bg-[#028090] text-white font-label-lg text-label-lg py-4 rounded-xl hover:brightness-110 active:scale-[0.98] transition-all duration-200 shadow-md" type="submit">
                            Kirim Pendaftaran
                        </button>
</div>
</form>
</div>
<!-- Payment & Upload Sidebar -->
<aside class="lg:col-span-5 space-y-8">
<!-- Payment Box -->
<div class="payment-box-gradient rounded-xl p-8 border border-[#D1E4EB] shadow-sm">
<div class="flex justify-between items-center mb-6">
<span class="font-label-lg text-label-lg text-secondary uppercase tracking-wider">Detail Pembayaran</span>
<span class="material-symbols-outlined text-secondary">account_balance_wallet</span>
</div>
<div class="space-y-4">
<div class="flex justify-between items-baseline">
<span class="font-body-md text-body-md text-on-surface-variant">Total Biaya:</span>
<span class="font-headline-md text-headline-md text-on-surface">Rp 150.000</span>
</div>
<div class="bg-white/50 rounded-lg p-4 space-y-2 border border-white/40">
<div class="flex justify-between items-center">
<p class="font-label-md text-label-md text-on-surface-variant">Transfer Bank (BCA)</p>
<button class="text-secondary hover:underline font-label-md text-label-md" onclick="navigator.clipboard.writeText('1234567890')">Salin</button>
</div>
<p class="font-headline-md text-headline-md text-secondary font-bold">1234567890</p>
<p class="font-label-lg text-label-lg text-on-surface">a/n SeminarKu</p>
</div>
<div class="flex items-center gap-2 text-error pt-2">
<span class="material-symbols-outlined text-sm">schedule</span>
<p class="font-label-md text-label-md font-bold">Batas: 3 hari setelah daftar</p>
</div>
</div>
</div>
<!-- Proof Upload -->
<div class="bg-surface-container-lowest rounded-xl p-8 border border-outline-variant">
<h3 class="font-label-lg text-label-lg text-on-surface mb-4">Bukti Pembayaran</h3>
<div class="border-2 border-dashed border-outline-variant rounded-xl p-8 flex flex-col items-center justify-center text-center hover:border-secondary transition-colors cursor-pointer group" id="dropzone">
<span class="material-symbols-outlined text-4xl text-outline mb-3 group-hover:text-secondary transition-colors">cloud_upload</span>
<p class="font-body-md text-body-md text-on-surface-variant mb-1">Klik atau tarik file ke sini</p>
<p class="font-label-md text-label-md text-outline">JPG, PNG, atau PDF (Maks. 2MB)</p>
<input class="hidden" id="fileInput" type="file"/>
</div>
</div>
<!-- Submit Button -->
<button class="hidden lg:block w-full bg-[#028090] text-white font-label-lg text-label-lg py-4 rounded-xl hover:brightness-110 active:scale-[0.98] transition-all duration-200 shadow-lg" onclick="document.getElementById('registrationForm').requestSubmit()" type="button">
                    Kirim Pendaftaran
                </button>
</aside>
</div>
</main>
<!-- Footer -->
<footer class="bg-primary-container mt-auto">
<div class="flex flex-col md:flex-row justify-between items-center w-full px-margin-desktop py-12 max-w-container-max mx-auto">
<div class="mb-6 md:mb-0">
<div class="font-headline-md text-headline-md font-bold text-on-tertiary-container mb-2">SeminarKu</div>
<p class="font-body-md text-body-md text-on-primary-container">© 2024 SeminarKu. All rights reserved.</p>
</div>
<div class="flex flex-wrap justify-center gap-6 md:gap-12">
<a class="font-body-md text-body-md text-on-primary-container hover:text-on-tertiary-container hover:underline" href="{{ route('home') }}">Home</a>
<a class="font-body-md text-body-md text-on-primary-container hover:text-on-tertiary-container hover:underline" href="{{ route('events.index') }}">Acara</a>
<a class="font-body-md text-body-md text-on-primary-container hover:text-on-tertiary-container hover:underline" href="#">Tentang</a>
<a class="font-body-md text-body-md text-on-primary-container hover:text-on-tertiary-container hover:underline" href="#">Privacy Policy</a>
<a class="font-body-md text-body-md text-on-primary-container hover:text-on-tertiary-container hover:underline" href="#">Terms of Service</a>
</div>
</div>
</footer>
@endsection
