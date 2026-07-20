@extends('layouts.app')

@section('title', 'Daftar Acara - SeminarKu')

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
                    "tertiary": "#000c07",
                    "secondary-container": "#92edff",
                    "outline": "#74777d",
                    "on-tertiary": "#ffffff",
                    "tertiary-fixed-dim": "#40deb3",
                    "tertiary-fixed": "#65fbcf",
                    "surface-container-low": "#eaf6fa",
                    "primary-container": "#0d2137",
                    "on-error": "#ffffff",
                    "primary": "#000917",
                    "error": "#ba1a1a",
                    "surface-container-highest": "#d9e5e8",
                    "outline-variant": "#c4c6cd",
                    "on-surface-variant": "#44474d",
                    "on-primary-fixed": "#081c32",
                    "inverse-surface": "#273235",
                    "surface": "#f0fbff",
                    "surface-container-lowest": "#ffffff",
                    "secondary-fixed": "#9eefff",
                    "background": "#f0fbff",
                    "surface-bright": "#f0fbff",
                    "secondary-fixed-dim": "#77d4e5",
                    "inverse-on-surface": "#e7f3f7",
                    "secondary": "#006876",
                    "on-primary-container": "#7689a4",
                    "tertiary-container": "#00261c",
                    "surface-container": "#e4f0f4",
                    "primary-fixed": "#d2e4ff",
                    "on-secondary-fixed": "#001f24",
                    "surface-tint": "#4d6079",
                    "on-tertiary-fixed-variant": "#00513e",
                    "on-secondary-fixed-variant": "#004e59",
                    "surface-dim": "#d0dce0",
                    "surface-variant": "#d9e5e8",
                    "primary-fixed-dim": "#b5c8e5",
                    "on-secondary-container": "#006d7b",
                    "error-container": "#ffdad6",
                    "on-surface": "#121d20",
                    "on-primary": "#ffffff",
                    "on-background": "#121d20",
                    "on-tertiary-container": "#009a79",
                    "on-tertiary-fixed": "#002117",
                    "surface-container-high": "#deeaee",
                    "inverse-primary": "#b5c8e5",
                    "on-secondary": "#ffffff",
                    "on-primary-fixed-variant": "#364860",
                    "on-error-container": "#93000a"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "margin-mobile": "16px",
                    "container-max": "1280px",
                    "gutter": "24px",
                    "base": "8px",
                    "margin-desktop": "48px"
            },
            "fontFamily": {
                    "label-lg": ["Montserrat"],
                    "body-lg": ["Montserrat"],
                    "headline-md": ["Montserrat"],
                    "headline-lg-mobile": ["Montserrat"],
                    "headline-lg": ["Montserrat"],
                    "body-md": ["Montserrat"],
                    "headline-xl": ["Montserrat"],
                    "label-md": ["Montserrat"]
            },
            "fontSize": {
                    "label-lg": ["14px", {"lineHeight": "1.2", "fontWeight": "600"}],
                    "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "headline-md": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                    "headline-lg-mobile": ["24px", {"lineHeight": "1.2", "fontWeight": "700"}],
                    "headline-lg": ["32px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                    "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}],
                    "headline-xl": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "label-md": ["12px", {"lineHeight": "1.2", "fontWeight": "500"}]
            }
          },
        },
      }
    </script>
<style>
        body { font-family: 'Montserrat', sans-serif; background-color: #f0fbff; color: #121d20; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 48; }
        .input-focus-ring:focus { border-color: #006876; outline: none; box-shadow: 0 0 0 2px rgba(0, 104, 118, 0.1); }
        .transition-all-200 { transition: all 0.2s ease-in-out; }
        .payment-box-gradient { background: linear-gradient(135deg, #e8f4f8 0%, #d1e4eb 100%); }
    </style>


<!-- TopNavBar -->
<header class="bg-primary-container shadow-sm docked full-width top-0 z-50">
<nav class="flex justify-between items-center w-full px-margin-desktop max-w-container-max mx-auto h-20">
<div class="font-headline-md text-headline-md font-bold text-on-tertiary-container">SeminarKu</div>
<div class="hidden md:flex gap-8 items-center">
<a class="text-on-primary-container hover:text-on-tertiary-container transition-colors font-label-lg text-label-lg" href="{{ route(\'home\') }}">Home</a>
<a class="text-on-tertiary-container font-bold border-b-2 border-on-tertiary-container pb-1 font-label-lg text-label-lg" href="{{ route(\'events.index\') }}">Acara</a>
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
<a class="font-body-md text-body-md text-on-primary-container hover:text-on-tertiary-container hover:underline" href="{{ route(\'home\') }}">Home</a>
<a class="font-body-md text-body-md text-on-primary-container hover:text-on-tertiary-container hover:underline" href="{{ route(\'events.index\') }}">Acara</a>
<a class="font-body-md text-body-md text-on-primary-container hover:text-on-tertiary-container hover:underline" href="#">Tentang</a>
<a class="font-body-md text-body-md text-on-primary-container hover:text-on-tertiary-container hover:underline" href="#">Privacy Policy</a>
<a class="font-body-md text-body-md text-on-primary-container hover:text-on-tertiary-container hover:underline" href="#">Terms of Service</a>
</div>
</div>
</footer>
<script>
        // Micro-interaction for file upload
        const dropzone = document.getElementById('dropzone');
        const fileInput = document.getElementById('fileInput');

        dropzone.addEventListener('click', () => fileInput.click());

        dropzone.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropzone.classList.add('border-secondary', 'bg-secondary/5');
        });

        dropzone.addEventListener('dragleave', () => {
            dropzone.classList.remove('border-secondary', 'bg-secondary/5');
        });

        dropzone.addEventListener('drop', (e) => {
            e.preventDefault();
            dropzone.classList.remove('border-secondary', 'bg-secondary/5');
            const files = e.dataTransfer.files;
            if(files.length > 0) {
                handleFiles(files[0]);
            }
        });

        fileInput.addEventListener('change', (e) => {
            if(e.target.files.length > 0) {
                handleFiles(e.target.files[0]);
            }
        });

        function handleFiles(file) {
            dropzone.innerHTML = `
                <span class="material-symbols-outlined text-4xl text-on-tertiary-container mb-2">check_circle</span>
                <p class="font-body-md text-body-md text-on-surface">${file.name}</p>
                <p class="font-label-md text-label-md text-secondary">Berhasil diunggah</p>
            `;
        }

        // Form submission simulation
        document.getElementById('registrationForm').onsubmit = function(e) {
            e.preventDefault();
            const btn = e.target.querySelector('button[type="submit"]') || document.querySelector('button[onclick*="registrationForm"]');
            const originalText = btn.innerText;
            btn.innerText = "Mengirim...";
            btn.disabled = true;
            
            setTimeout(() => {
                alert('Pendaftaran Anda telah diterima! Kami akan melakukan verifikasi pembayaran dalam 1x24 jam.');
                btn.innerText = originalText;
                btn.disabled = false;
            }, 1500);
        };
    </script>

@endsection
