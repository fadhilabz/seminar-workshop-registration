@extends('layouts.app')

@section('title', 'Tambah Acara Baru')

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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }
        body {
            background-color: #f0fbff; /* Base Level 0 */
        }
        .form-card {
            box-shadow: 0 12px 24px -10px rgba(0, 9, 23, 0.05);
        }
        input:focus, textarea:focus, select:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(2, 128, 144, 0.2);
        }
    </style>


<!-- Top Navigation Bar -->
<header class="bg-primary-container docked full-width top-0 shadow-sm h-20 z-50 sticky">
<div class="flex justify-between items-center w-full px-margin-desktop max-w-container-max mx-auto h-full">
<div class="flex items-center gap-base">
<span class="font-headline-md text-headline-md font-bold text-on-tertiary-container dark:text-tertiary-fixed">SeminarKu</span>
</div>
<nav class="hidden md:flex items-center gap-gutter">
<a class="font-label-lg text-label-lg text-on-primary-container hover:text-on-tertiary-container transition-colors" href="{{ route('home') }}">Home</a>
<a class="font-label-lg text-label-lg text-on-tertiary-container font-bold border-b-2 border-on-tertiary-container pb-1" href="{{ route('events.index') }}">Acara</a>
<a class="font-label-lg text-label-lg text-on-primary-container hover:text-on-tertiary-container transition-colors" href="#">Tentang</a>
</nav>
<div class="flex items-center gap-4">
<a href="{{ route('login') }}" class="font-label-lg text-label-lg text-on-primary-container hover:text-on-tertiary-container transition-colors scale-95 active:scale-90 transition-transform">Login</a>
<a href="{{ route('register') }}" class="bg-secondary text-on-primary px-6 py-2 rounded-lg font-label-lg text-label-lg scale-95 active:scale-90 transition-transform hover:bg-secondary/90">Register</a>
</div>
</div>
</header>
<main class="max-w-4xl mx-auto px-margin-mobile md:px-margin-desktop py-12">
<!-- Breadcrumb & Header -->
<div class="mb-10">
<div class="flex items-center gap-2 text-on-primary-container mb-4">
<span class="material-symbols-outlined text-sm">arrow_back</span>
<a class="font-label-md text-label-md hover:underline" href="#">Kembali ke Dashboard</a>
</div>
<h1 class="font-headline-lg text-headline-lg text-primary">Tambah Acara Baru</h1>
<p class="font-body-md text-on-surface-variant mt-2">Lengkapi detail acara di bawah ini untuk mempublikasikan seminar atau workshop Anda.</p>
</div>
<!-- Form Section -->
<form class="space-y-gutter" id="event-form">
    @csrf
<div class="bg-surface-container-lowest p-gutter rounded-[24px] form-card border border-outline-variant/30">
<div class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
<!-- Title Section -->
<div class="md:col-span-2 space-y-2">
<label class="font-label-lg text-label-lg text-primary" for="judul">Judul Acara</label>
<input class="w-full px-4 py-3 rounded-xl border border-outline-variant bg-white text-on-surface focus:border-secondary transition-all" id="judul" name="judul" placeholder="Contoh: Modern UI Design Masterclass 2024" type="text"/>
<p class="text-error font-label-md text-label-md hidden" id="error-judul">Judul acara wajib diisi.</p>
</div>
<!-- Description Section -->
<div class="md:col-span-2 space-y-2">
<label class="font-label-lg text-label-lg text-primary" for="deskripsi">Deskripsi</label>
<textarea class="w-full px-4 py-3 rounded-xl border border-outline-variant bg-white text-on-surface focus:border-secondary transition-all" id="deskripsi" name="deskripsi" placeholder="Tuliskan detail mengenai agenda, pembicara, dan manfaat acara..." rows="5"></textarea>
<p class="text-error font-label-md text-label-md hidden" id="error-deskripsi">Deskripsi minimal 50 karakter.</p>
</div>
<!-- Category & Status -->
<div class="space-y-2">
<label class="font-label-lg text-label-lg text-primary" for="kategori">Kategori</label>
<select class="w-full px-4 py-3 rounded-xl border border-outline-variant bg-white text-on-surface focus:border-secondary transition-all" id="kategori" name="kategori">
<option value="">Pilih Kategori</option>
<option value="teknologi">Teknologi</option>
<option value="bisnis">Bisnis</option>
<option value="kesehatan">Kesehatan</option>
<option value="desain">Desain</option>
</select>
<p class="text-error font-label-md text-label-md hidden" id="error-kategori">Silakan pilih kategori acara.</p>
</div>
<div class="space-y-2">
<label class="font-label-lg text-label-lg text-primary" for="status">Status</label>
<select class="w-full px-4 py-3 rounded-xl border border-outline-variant bg-white text-on-surface focus:border-secondary transition-all" id="status" name="status">
<option value="draft">Draft</option>
<option value="published">Published</option>
</select>
</div>
<!-- Type Radio -->
<div class="md:col-span-2 space-y-3">
<label class="font-label-lg text-label-lg text-primary">Tipe Acara</label>
<div class="flex gap-gutter">
<label class="flex items-center gap-3 cursor-pointer group">
<input checked="" class="w-5 h-5 text-secondary border-outline focus:ring-secondary" name="tipe" type="radio" value="seminar"/>
<span class="font-body-md text-on-surface">Seminar</span>
</label>
<label class="flex items-center gap-3 cursor-pointer group">
<input class="w-5 h-5 text-secondary border-outline focus:ring-secondary" name="tipe" type="radio" value="workshop"/>
<span class="font-body-md text-on-surface">Workshop</span>
</label>
</div>
</div>
<!-- Date & Location -->
<div class="space-y-2">
<label class="font-label-lg text-label-lg text-primary" for="tanggal">Tanggal Pelaksanaan</label>
<div class="relative">
<input class="w-full px-4 py-3 rounded-xl border border-outline-variant bg-white text-on-surface focus:border-secondary transition-all" id="tanggal" name="tanggal" type="datetime-local"/>
</div>
<p class="text-error font-label-md text-label-md hidden" id="error-tanggal">Pilih tanggal yang valid.</p>
</div>
<div class="space-y-2">
<label class="font-label-lg text-label-lg text-primary" for="lokasi">Lokasi / Tautan Zoom</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-3.5 text-outline text-lg">location_on</span>
<input class="w-full pl-10 pr-4 py-3 rounded-xl border border-outline-variant bg-white text-on-surface focus:border-secondary transition-all" id="lokasi" name="lokasi" placeholder="Nama Gedung atau Link Meeting" type="text"/>
</div>
<p class="text-error font-label-md text-label-md hidden" id="error-lokasi">Lokasi atau tautan wajib diisi.</p>
</div>
<!-- Quota & Price -->
<div class="space-y-2">
<label class="font-label-lg text-label-lg text-primary" for="kuota">Kuota Peserta</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-3.5 text-outline text-lg">group</span>
<input class="w-full pl-10 pr-4 py-3 rounded-xl border border-outline-variant bg-white text-on-surface focus:border-secondary transition-all" id="kuota" min="1" name="kuota" placeholder="100" type="number"/>
</div>
<p class="text-error font-label-md text-label-md hidden" id="error-kuota">Masukkan jumlah kuota (min. 1).</p>
</div>
<div class="space-y-2">
<label class="font-label-lg text-label-lg text-primary" for="harga">Harga Tiket (IDR)</label>
<div class="relative">
<span class="absolute left-4 top-3.5 text-outline font-bold">Rp</span>
<input class="w-full pl-12 pr-4 py-3 rounded-xl border border-outline-variant bg-white text-on-surface focus:border-secondary transition-all" id="harga" min="0" name="harga" placeholder="0 (Gratis)" type="number"/>
</div>
</div>
<!-- Image Upload with Preview -->
<div class="md:col-span-2 space-y-4 pt-4 border-t border-outline-variant/30">
<label class="font-label-lg text-label-lg text-primary">Poster Acara</label>
<div class="grid grid-cols-1 md:grid-cols-2 gap-gutter items-center">
<div class="border-2 border-dashed border-outline-variant rounded-xl p-8 flex flex-col items-center justify-center bg-surface-container-low hover:bg-surface-container transition-all cursor-pointer" id="image-drop-zone">
<span class="material-symbols-outlined text-4xl text-secondary mb-2">cloud_upload</span>
<p class="font-label-lg text-label-lg text-primary">Klik atau seret gambar ke sini</p>
<p class="font-label-md text-label-md text-on-surface-variant mt-1">PNG, JPG up to 5MB</p>
<input accept="image/*" class="hidden" id="gambar" name="gambar" type="file"/>
</div>
<div class="relative group hidden" id="preview-container">
<div class="w-full h-48 rounded-xl overflow-hidden border border-outline-variant shadow-sm bg-surface-container-highest">
<img class="w-full h-full object-cover" data-alt="A clean, minimalist corporate poster design for a seminar in high-resolution, featuring a professional office setting with soft natural lighting and seafoam green color accents. The aesthetic is modern and academic, with white space and high contrast teal elements. High-quality photographic style consistent with a premium educational platform." id="image-preview" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBY0dKFd9i-5pu1XYaRUM5HQUL3wXyU1hKZZJnr0RRMzuE_2r0NbflKCj2k0DwJCHG4xdcn0hnUUKN1z5LsmpNr-vQbBr9hiGlL77JaKHCiQHOqF_J8NJ19PsfEg82eQYiw4lzVq2cH7sdR8mGtN8AUxMg9A6Din2-gtmYRAGP_djGPOspJZypdVBP5QV-b2oSVTqurvKCskJnekxFqrI-e9ppixEaqCBAuYCECrb6v5n7IeD4x0yBcHQ"/>
</div>
<button class="absolute top-2 right-2 bg-error text-white p-1 rounded-full shadow-lg opacity-0 group-hover:opacity-100 transition-opacity" id="remove-image" type="button">
<span class="material-symbols-outlined">close</span>
</button>
</div>
<div class="h-48 rounded-xl border border-outline-variant border-dotted flex items-center justify-center text-on-surface-variant bg-surface-container-low font-label-md" id="preview-placeholder">
                                Belum ada poster terpilih
                            </div>
</div>
</div>
</div>
</div>
<!-- Action Buttons -->
<div class="flex flex-col md:flex-row items-center justify-end gap-4 mt-8">
<button class="w-full md:w-auto px-10 py-3 rounded-xl font-label-lg text-label-lg text-secondary border border-secondary hover:bg-secondary/5 transition-all" type="button">Batal</button>
<button class="w-full md:w-auto px-10 py-3 rounded-xl font-label-lg text-label-lg bg-on-tertiary-container text-white shadow-md hover:shadow-lg hover:scale-[1.02] active:scale-[0.98] transition-all" type="submit">Simpan Acara</button>
</div>
</form>
</main>
<!-- Footer -->
<footer class="bg-primary-container full-width mt-20">
<div class="flex flex-col md:flex-row justify-between items-center w-full px-margin-desktop py-12 max-w-container-max mx-auto">
<div class="mb-6 md:mb-0">
<span class="font-headline-md text-headline-md font-bold text-on-tertiary-container">SeminarKu</span>
<p class="font-body-md text-on-primary-container mt-2">Pusat edukasi dan pengembangan profesional.</p>
</div>
<div class="flex flex-wrap justify-center gap-gutter mb-6 md:mb-0">
<a class="font-body-md text-body-md text-on-primary-container hover:text-on-tertiary-container hover:underline" href="{{ route('home') }}">Home</a>
<a class="font-body-md text-body-md text-on-primary-container hover:text-on-tertiary-container hover:underline" href="{{ route('events.index') }}">Acara</a>
<a class="font-body-md text-body-md text-on-primary-container hover:text-on-tertiary-container hover:underline" href="#">Tentang</a>
<a class="font-body-md text-body-md text-on-primary-container hover:text-on-tertiary-container hover:underline" href="#">Privacy Policy</a>
<a class="font-body-md text-body-md text-on-primary-container hover:text-on-tertiary-container hover:underline" href="#">Terms of Service</a>
</div>
<div class="font-body-md text-body-md text-on-primary-container opacity-75">
                © 2024 SeminarKu. All rights reserved.
            </div>
</div>
</footer>
<script>
        // Image Preview Logic
        const imageInput = document.getElementById('gambar');
        const dropZone = document.getElementById('image-drop-zone');
        const previewContainer = document.getElementById('preview-container');
        const previewPlaceholder = document.getElementById('preview-placeholder');
        const imagePreview = document.getElementById('image-preview');
        const removeImageBtn = document.getElementById('remove-image');

        dropZone.addEventListener('click', () => imageInput.click());

        imageInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    previewContainer.classList.remove('hidden');
                    previewPlaceholder.classList.add('hidden');
                }
                reader.readAsDataURL(file);
            }
        });

        removeImageBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            imageInput.value = '';
            imagePreview.src = 'placeholder';
            previewContainer.classList.add('hidden');
            previewPlaceholder.classList.remove('hidden');
        });

        // Form Validation & Submission
        const form = document.getElementById('event-form');
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            let isValid = true;

            const fields = [
                { id: 'judul', error: 'error-judul', condition: val => val.length > 0 },
                { id: 'deskripsi', error: 'error-deskripsi', condition: val => val.length >= 50 },
                { id: 'kategori', error: 'error-kategori', condition: val => val !== '' },
                { id: 'tanggal', error: 'error-tanggal', condition: val => val !== '' },
                { id: 'lokasi', error: 'error-lokasi', condition: val => val.length > 0 },
                { id: 'kuota', error: 'error-kuota', condition: val => val > 0 }
            ];

            fields.forEach(field => {
                const input = document.getElementById(field.id);
                const error = document.getElementById(field.error);
                if (!field.condition(input.value)) {
                    error.classList.remove('hidden');
                    input.classList.add('border-error');
                    isValid = false;
                } else {
                    error.classList.add('hidden');
                    input.classList.remove('border-error');
                }
            });

            if (isValid) {
                alert('Selamat! Acara Anda telah berhasil diajukan.');
                // Here you would typically send data to server
            } else {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        });

        // Visual Interaction for inputs
        document.querySelectorAll('input, textarea, select').forEach(el => {
            el.addEventListener('focus', () => {
                el.parentElement.classList.add('scale-[1.01]');
                el.parentElement.style.transition = 'transform 0.2s ease-out';
            });
            el.addEventListener('blur', () => {
                el.parentElement.classList.remove('scale-[1.01]');
            });
        });
    </script>

@endsection
