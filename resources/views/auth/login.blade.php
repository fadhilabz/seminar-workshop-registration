<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Login - SeminarKu</title>
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
            },
            "fontSize": {
                    "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}],
                    "label-md": ["12px", {"lineHeight": "1.2", "fontWeight": "500"}],
                    "label-lg": ["14px", {"lineHeight": "1.2", "fontWeight": "600"}],
                    "headline-xl": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "headline-lg-mobile": ["24px", {"lineHeight": "1.2", "fontWeight": "700"}],
                    "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "headline-md": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                    "headline-lg": ["32px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "700"}]
            }
          },
        },
      }
    </script>
    <style>
        body {
            background-color: #E8F4F8; /* Base Level 0 */
            font-family: 'Montserrat', sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .login-card {
            box-shadow: 0 12px 24px -4px rgba(13, 33, 55, 0.05); /* 5% Opacity Navy Shadow */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .login-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 16px 32px -4px rgba(13, 33, 55, 0.1); /* 10% Opacity Navy Shadow */
        }
    </style>
</head>
<body class="min-h-screen flex flex-col selection:bg-secondary-container selection:text-on-secondary-container">
<!-- Header / Navigation (Suppressed for focused Login task) -->
<header class="w-full flex justify-center py-base">
</header>
<main class="flex-grow flex items-center justify-center px-margin-mobile md:px-0 py-12">
    <!-- Main Login Container -->
    <div class="w-full max-w-[1000px] flex flex-col md:flex-row bg-surface-container-lowest rounded-[24px] overflow-hidden login-card">
        <!-- Left Side: Visual Content -->
        <div class="hidden md:block w-1/2 relative bg-primary-container overflow-hidden">
            <div class="absolute inset-0 opacity-40">
                <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB6Kv3YUxyi-ogy-0Eeq0L042RFaEYFShjql7mpTjRz_wRNRz11mXR6e2lq1oXfHuglcKlTkoyPoFCtGtj9TVt4tsJxYe6mFCE8y8zLfqW5cVKavkNUW0gLSHsi6QED87oXcMJnxEn1Pp2VS4sDjB8bGuZ6UMW8wosumT2n6jlJWiT23DdMim3aibMO1rOckCLZ_c8ymQGN5MXCzCA1mB0XFdN_SX8-r91vnI3jqeauFYNVl930M9ki7g"/>
            </div>
            <div class="relative z-10 p-12 h-full flex flex-col justify-end bg-gradient-to-t from-primary-container/80 to-transparent">
                <h2 class="font-headline-lg text-headline-lg text-white mb-4">Akses Pengetahuan Tanpa Batas</h2>
                <p class="font-body-md text-body-md text-on-primary-container">Gabung dengan ribuan profesional dan mahasiswa dalam ekosistem seminar paling terorganisir.</p>
            </div>
        </div>
        <!-- Right Side: Login Form -->
        <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
            <div class="mb-8">
                <h1 class="font-headline-lg text-headline-lg text-on-surface mb-2">Selamat Datang</h1>
                <p class="font-body-md text-body-md text-on-surface-variant">Silakan masuk ke akun Anda untuk melanjutkan.</p>
            </div>

            <x-auth-session-status class="mb-4 text-green-600" :status="session('status')" />

            <form class="space-y-6" method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Email Input -->
                <div class="space-y-2">
                    <label class="font-label-lg text-label-lg text-on-surface" for="email">Alamat Email</label>
                    <div class="relative flex items-center">
                        <span class="material-symbols-outlined absolute left-4 text-outline">mail</span>
                        <input class="w-full pl-12 pr-4 py-4 rounded-xl border border-on-surface/10 bg-white focus:ring-2 focus:ring-on-secondary-container focus:border-on-secondary-container transition-all outline-none font-body-md text-body-md" id="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="nama@email.com" type="email"/>
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-sm" />
                </div>
                <!-- Password Input -->
                <div class="space-y-2">
                    <div class="flex justify-between items-center">
                        <label class="font-label-lg text-label-lg text-on-surface" for="password">Kata Sandi</label>
                        @if (Route::has('password.request'))
                            <a class="font-label-md text-label-md text-secondary hover:underline transition-all" href="{{ route('password.request') }}">Lupa Kata Sandi?</a>
                        @endif
                    </div>
                    <div class="relative flex items-center">
                        <span class="material-symbols-outlined absolute left-4 text-outline">lock</span>
                        <input class="w-full pl-12 pr-12 py-4 rounded-xl border border-on-surface/10 bg-white focus:ring-2 focus:ring-on-secondary-container focus:border-on-secondary-container transition-all outline-none font-body-md text-body-md" id="password" name="password" required autocomplete="current-password" placeholder="••••••••" type="password"/>
                        <button class="absolute right-4 text-outline hover:text-on-surface transition-colors" type="button">
                            <span class="material-symbols-outlined">visibility</span>
                        </button>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-sm" />
                </div>
                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-secondary shadow-sm focus:ring-on-secondary-container" name="remember">
                        <span class="ms-2 text-sm text-on-surface-variant">{{ __('Ingat saya') }}</span>
                    </label>
                </div>
                <!-- Login Button -->
                <button class="w-full py-4 bg-secondary text-white rounded-xl font-label-lg text-label-lg shadow-sm hover:shadow-md hover:scale-[1.01] active:scale-[0.98] transition-all duration-200" type="submit">
                    Login
                </button>
            </form>
            <!-- Divider -->
            <div class="my-8 flex items-center gap-4">
                <div class="flex-grow h-px bg-on-surface/10"></div>
                <span class="font-label-md text-label-md text-outline">Atau masuk dengan</span>
                <div class="flex-grow h-px bg-on-surface/10"></div>
            </div>
            <!-- Social Login (Extra interaction) -->
            <div class="grid grid-cols-2 gap-4">
                <button class="flex items-center justify-center gap-2 py-3 border border-on-surface/10 rounded-xl hover:bg-surface-container transition-colors">
                    <img alt="Google" class="w-5 h-5" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAeNY5zJi9xbsGkDjlxDrUMTZ6XVbralbrs-xgQSCYFQ2fN3nLt7dOCMiTZtyJN9riKtPmKok5dGweetDhJaaIgR3KQ7VYURCWtltCF4QYXOFuZgKRB9gbFHriXj7GszYPp2ZvYJEGm0GVte3g7q2I4id01XdrnJz7F0rKrxMauOcJxNwwDyiVGMy6-CdNn_zqW2Nta4uuk5jYqWt2Lx7C44yABlgVxLg534mWtUq7TcZcpcHWotgIlqQ"/>
                    <span class="font-label-lg text-label-lg text-on-surface">Google</span>
                </button>
                <button class="flex items-center justify-center gap-2 py-3 border border-on-surface/10 rounded-xl hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined text-[#1877F2]" style="font-variation-settings: 'FILL' 1;">face_nod</span>
                    <span class="font-label-lg text-label-lg text-on-surface">Facebook</span>
                </button>
            </div>
            <!-- Sign Up Link -->
            <p class="mt-8 text-center font-body-md text-body-md text-on-surface-variant">
                Belum punya akun? 
                <a class="text-on-secondary-container font-bold hover:underline" href="{{ route('register') }}">Daftar Sekarang</a>
            </p>
        </div>
    </div>
</main>

<script>
    // Micro-interaction for password toggle
    document.querySelectorAll('button[type="button"]').forEach(btn => {
        btn.addEventListener('click', function() {
            const input = this.previousElementSibling;
            const icon = this.querySelector('.material-symbols-outlined');
            if (input.type === 'password') {
                input.type = 'text';
                icon.textContent = 'visibility_off';
            } else {
                input.type = 'password';
                icon.textContent = 'visibility';
            }
        });
    });

    // Simple form validation feedback
    const loginForm = document.querySelector('form');
    loginForm.addEventListener('submit', function(e) {
        const btn = this.querySelector('button[type="submit"]');
        btn.textContent = 'Sedang masuk...';
        btn.classList.add('opacity-70', 'cursor-not-allowed');
    });
</script>
</body>
</html>
