<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Lupa Kata Sandi - SeminarKu</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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

</body>
</html>
