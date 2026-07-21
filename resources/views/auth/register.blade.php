<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Register - SeminarKu</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-surface": "#121d20",
                    "on-error": "#ffffff",
                    "surface-bright": "#f0fbff",
                    "surface-container-low": "#eaf6fa",
                    "tertiary-fixed": "#65fbcf",
                    "outline-variant": "#c4c6cd",
                    "surface-container": "#e4f0f4",
                    "on-tertiary": "#ffffff",
                    "on-surface-variant": "#44474d",
                    "surface": "#f0fbff",
                    "on-tertiary-fixed": "#002117",
                    "inverse-surface": "#273235",
                    "on-secondary-container": "#006d7b",
                    "on-primary": "#ffffff",
                    "error": "#ba1a1a",
                    "secondary-fixed": "#9eefff",
                    "tertiary-fixed-dim": "#40deb3",
                    "surface-container-high": "#deeaee",
                    "on-error-container": "#93000a",
                    "on-tertiary-fixed-variant": "#00513e",
                    "on-secondary-fixed-variant": "#004e59",
                    "error-container": "#ffdad6",
                    "surface-variant": "#d9e5e8",
                    "surface-container-highest": "#d9e5e8",
                    "secondary": "#006876",
                    "on-background": "#121d20",
                    "secondary-fixed-dim": "#77d4e5",
                    "outline": "#74777d",
                    "background": "#f0fbff",
                    "on-tertiary-container": "#009a79",
                    "primary-container": "#0d2137",
                    "on-secondary-fixed": "#001f24",
                    "inverse-on-surface": "#e7f3f7",
                    "inverse-primary": "#b5c8e5",
                    "on-secondary": "#ffffff",
                    "primary-fixed": "#d2e4ff",
                    "on-primary-container": "#7689a4",
                    "tertiary": "#000c07",
                    "primary-fixed-dim": "#b5c8e5",
                    "surface-dim": "#d0dce0",
                    "on-primary-fixed-variant": "#364860",
                    "surface-tint": "#4d6079",
                    "on-primary-fixed": "#081c32",
                    "secondary-container": "#92edff",
                    "surface-container-lowest": "#ffffff",
                    "tertiary-container": "#00261c",
                    "primary": "#000917"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "margin-desktop": "48px",
                    "gutter": "24px",
                    "margin-mobile": "16px",
                    "base": "8px",
                    "container-max": "1280px"
            },
            "fontFamily": {
                    "body-md": ["Montserrat"],
                    "label-md": ["Montserrat"],
                    "label-lg": ["Montserrat"],
                    "headline-xl": ["Montserrat"],
                    "headline-lg-mobile": ["Montserrat"],
                    "body-lg": ["Montserrat"],
                    "headline-md": ["Montserrat"],
                    "headline-lg": ["Montserrat"]
            }
          },
        },
      }
    </script>
    <style>
        body { font-family: 'Montserrat', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }
        .form-input-shadow {
            box-shadow: 0 2px 4px rgba(13, 33, 55, 0.05);
        }
        .card-elevation {
            box-shadow: 0 12px 24px -10px rgba(18, 29, 32, 0.05);
        }
    </style>
</head>
<body class="bg-background text-on-surface min-h-screen flex flex-col">


<main class="flex-grow flex items-center justify-center pt-24 pb-12 px-margin-mobile">
    <!-- Registration Card -->
    <div class="relative z-10 w-full max-w-md">
        <div class="bg-surface-container-lowest p-8 md:p-10 rounded-[24px] card-elevation border border-outline/5">
            <div class="text-center mb-10">
                <h1 class="font-headline-lg text-headline-lg text-primary mb-2">Buat Akun Baru</h1>
                <p class="font-body-md text-body-md text-on-surface-variant">Mulai perjalanan akademik Anda bersama SeminarKu hari ini.</p>
            </div>
            
            <form class="space-y-6" method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Full Name -->
                <div class="space-y-2">
                    <label class="font-label-lg text-label-lg text-on-surface ml-1" for="name">Nama Lengkap</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">person</span>
                        <input id="name" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" class="w-full pl-12 pr-4 py-3.5 bg-white border border-on-primary-container/10 rounded-xl focus:ring-2 focus:ring-secondary/20 focus:border-secondary transition-all outline-none text-body-md font-body-md form-input-shadow" placeholder="Masukkan nama lengkap" type="text"/>
                    </div>
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500 text-sm" />
                </div>
                <!-- Email -->
                <div class="space-y-2">
                    <label class="font-label-lg text-label-lg text-on-surface ml-1" for="email">Email</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">mail</span>
                        <input id="email" name="email" value="{{ old('email') }}" required autocomplete="username" class="w-full pl-12 pr-4 py-3.5 bg-white border border-on-primary-container/10 rounded-xl focus:ring-2 focus:ring-secondary/20 focus:border-secondary transition-all outline-none text-body-md font-body-md form-input-shadow" placeholder="contoh@email.com" type="email"/>
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-sm" />
                </div>
                <!-- Password -->
                <div class="space-y-2">
                    <label class="font-label-lg text-label-lg text-on-surface ml-1" for="password">Kata Sandi</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">lock</span>
                        <input id="password" name="password" required autocomplete="new-password" class="w-full pl-12 pr-12 py-3.5 bg-white border border-on-primary-container/10 rounded-xl focus:ring-2 focus:ring-secondary/20 focus:border-secondary transition-all outline-none text-body-md font-body-md form-input-shadow" placeholder="••••••••" type="password"/>
                        <button class="absolute right-4 top-1/2 -translate-y-1/2 text-outline hover:text-secondary" type="button">
                            <span class="material-symbols-outlined">visibility</span>
                        </button>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-sm" />
                </div>
                <!-- Confirm Password -->
                <div class="space-y-2">
                    <label class="font-label-lg text-label-lg text-on-surface ml-1" for="password_confirmation">Konfirmasi Kata Sandi</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">lock_reset</span>
                        <input id="password_confirmation" name="password_confirmation" required autocomplete="new-password" class="w-full pl-12 pr-12 py-3.5 bg-white border border-on-primary-container/10 rounded-xl focus:ring-2 focus:ring-secondary/20 focus:border-secondary transition-all outline-none text-body-md font-body-md form-input-shadow" placeholder="••••••••" type="password"/>
                    </div>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500 text-sm" />
                </div>
                <!-- Register Button -->
                <button class="w-full py-4 bg-secondary text-white font-label-lg text-label-lg rounded-xl hover:bg-secondary/90 hover:-translate-y-0.5 active:scale-95 transition-all duration-200 shadow-md flex justify-center items-center gap-2" type="submit">
                    Daftar Sekarang
                    <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                </button>
            </form>
            
            <div class="mt-8 pt-6 border-t border-outline-variant/30 text-center">
                <p class="font-body-md text-body-md text-on-surface-variant">
                    Sudah punya akun? 
                    <a class="text-secondary font-bold hover:underline" href="{{ route('login') }}">Login di sini</a>
                </p>
            </div>
        </div>
        
        <!-- Trust Footer -->
        <div class="mt-8 flex justify-center items-center gap-6 opacity-60">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-[18px]">verified_user</span>
                <span class="text-label-md font-label-md">Secure SSL</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-[18px]">gpp_good</span>
                <span class="text-label-md font-label-md">Data Privacy</span>
            </div>
        </div>
    </div>
</main>

<!-- Footer -->
<footer class="bg-primary-container text-on-primary-container mt-auto">
    <div class="flex flex-col md:flex-row justify-between items-center w-full px-margin-mobile md:px-margin-desktop py-12 max-w-container-max mx-auto">
        <div class="mb-6 md:mb-0">
            <span class="font-headline-md text-headline-md font-bold text-on-tertiary-container">SeminarKu</span>
            <p class="mt-2 font-body-md text-body-md max-w-xs">Platform terpercaya untuk pendaftaran seminar dan workshop profesional.</p>
        </div>
        <div class="flex flex-col items-center md:items-end gap-4">
            <div class="flex flex-wrap justify-center gap-6">
                <a class="font-body-md text-body-md text-on-primary-container hover:text-on-tertiary-container hover:underline transition-all" href="/">Home</a>
                <a class="font-body-md text-body-md text-on-primary-container hover:text-on-tertiary-container hover:underline transition-all" href="#">Acara</a>
                <a class="font-body-md text-body-md text-on-primary-container hover:text-on-tertiary-container hover:underline transition-all" href="#">Tentang</a>
                <a class="font-body-md text-body-md text-on-primary-container hover:text-on-tertiary-container hover:underline transition-all" href="#">Privacy Policy</a>
            </div>
            <p class="font-body-md text-body-md mt-4 md:mt-0">© 2024 SeminarKu. All rights reserved.</p>
        </div>
    </div>
</footer>

<script>
    const inputs = document.querySelectorAll('input');
    inputs.forEach(input => {
        input.addEventListener('focus', () => {
            const icon = input.parentElement.querySelector('.material-symbols-outlined');
            if (icon) icon.style.color = '#006876';
        });
        input.addEventListener('blur', () => {
            const icon = input.parentElement.querySelector('.material-symbols-outlined');
            if (icon) icon.style.color = '#74777d';
        });
    });

    const visibilityBtn = document.querySelector('button[type="button"]');
    if (visibilityBtn) {
        visibilityBtn.addEventListener('click', function() {
            const passwordInput = this.parentElement.querySelector('input');
            const icon = this.querySelector('.material-symbols-outlined');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.textContent = 'visibility_off';
            } else {
                passwordInput.type = 'password';
                icon.textContent = 'visibility';
            }
        });
    }

    const form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
        const btn = this.querySelector('button[type="submit"]');
        btn.classList.add('opacity-70', 'cursor-not-allowed');
    });
</script>
</body>
</html>
