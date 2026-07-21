<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Lupa Kata Sandi - SeminarKu</title>
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-background {
            background: radial-gradient(circle at top left, rgba(2, 128, 144, 0.05) 0%, transparent 40%),
                        radial-gradient(circle at bottom right, rgba(2, 195, 154, 0.05) 0%, transparent 40%);
        }
        .fade-in {
            animation: fadeIn 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-surface font-body-md text-on-surface min-h-screen flex flex-col glass-background">
<header class="w-full h-20 flex items-center px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
    <div class="font-headline-md text-headline-md font-bold text-primary-container">
        <a href="/">SeminarKu</a>
    </div>
</header>

<main class="flex-grow flex items-center justify-center px-margin-mobile">
    <!-- Auth Card -->
    <div class="bg-surface-container-lowest p-base md:p-gutter rounded-[24px] shadow-[0_12px_40px_-12px_rgba(13,33,55,0.05)] w-full max-w-[480px] fade-in border border-outline-variant/30">
        <div class="p-6 md:p-8">
            <div class="mb-8 flex flex-col items-center text-center">
                <div class="w-16 h-16 bg-surface-container-high rounded-full flex items-center justify-center mb-6">
                    <span class="material-symbols-outlined text-secondary text-[32px]">lock_reset</span>
                </div>
                <h1 class="font-headline-lg text-headline-lg text-on-surface mb-2">Lupa Kata Sandi?</h1>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-[320px]">
                    Masukkan email Anda untuk menerima instruksi pemulihan kata sandi
                </p>
            </div>
            
            <x-auth-session-status class="mb-4 text-green-600 font-bold text-center" :status="session('status')" />

            <!-- Form -->
            <form class="space-y-6" method="POST" action="{{ route('password.email') }}" id="forgotPasswordForm">
                @csrf
                <div class="space-y-2">
                    <label class="font-label-lg text-label-lg text-on-surface-variant ml-1" for="email">Email</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-outline group-focus-within:text-secondary transition-colors">
                            <span class="material-symbols-outlined text-[20px]">mail</span>
                        </div>
                        <input class="w-full pl-11 pr-4 py-4 bg-surface-container-lowest border border-on-surface/10 rounded-xl focus:ring-2 focus:ring-secondary/20 focus:border-secondary outline-none transition-all font-body-md placeholder:text-outline-variant" id="email" name="email" value="{{ old('email') }}" placeholder="nama@email.com" required autofocus type="email"/>
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-sm" />
                </div>
                
                <button class="w-full bg-secondary hover:bg-[#02707d] text-white py-4 rounded-xl font-label-lg text-body-md transition-all duration-200 transform active:scale-[0.98] shadow-lg shadow-secondary/10 flex items-center justify-center gap-2 group" type="submit">
                    <span>Kirim Instruksi</span>
                    <span class="material-symbols-outlined text-[20px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                </button>
            </form>
            
            <div class="mt-8 pt-8 border-t border-outline-variant/20 text-center">
                <a class="inline-flex items-center gap-2 font-label-lg text-secondary hover:text-[#02707d] transition-colors group" href="{{ route('login') }}">
                    <span class="material-symbols-outlined text-[18px]">arrow_back</span>
                    Kembali ke halaman Login
                </a>
            </div>
        </div>
    </div>
</main>

<footer class="w-full py-8 px-margin-mobile text-center mt-auto">
    <p class="font-label-md text-label-md text-on-primary-container">
        © 2024 SeminarKu. All rights reserved.
    </p>
</footer>

<script>
    const form = document.getElementById('forgotPasswordForm');

    form.addEventListener('submit', (e) => {
        const btn = form.querySelector('button[type="submit"]');
        btn.classList.add('opacity-70', 'cursor-not-allowed');
    });

    const input = document.getElementById('email');
    input.addEventListener('focus', () => {
        input.parentElement.classList.add('scale-[1.01]');
    });
    input.addEventListener('blur', () => {
        input.parentElement.classList.remove('scale-[1.01]');
    });
</script>
</body>
</html>
