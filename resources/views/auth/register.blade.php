<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Register - SeminarKu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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

</body>
</html>
