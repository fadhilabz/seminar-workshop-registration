<header
    class="bg-[#0D2137] fixed top-0 left-0 right-0 z-50 shadow-sm h-20 flex items-center"
>
    <nav
        class="flex justify-between items-center w-full px-margin-desktop max-w-container-max mx-auto h-20"
    >
        <div
            class="font-headline-md text-headline-md font-bold text-[#02C39A]"
        >
            <a href="{{ route('home') }}">SeminarKu</a>
        </div>
        <div class="hidden md:flex gap-8 items-center">
            @guest
                <a
                    class="font-label-lg text-label-lg transition-all {{ request()->routeIs('home') ? 'text-white font-semibold' : 'text-[#A8C8D8] hover:text-white' }}"
                    href="{{ route('home') }}"
                    >Home</a
                >
                <a
                    class="font-label-lg text-label-lg transition-all {{ request()->routeIs('events.index') ? 'text-white font-semibold' : 'text-[#A8C8D8] hover:text-white' }}"
                    href="{{ route('events.index') }}"
                    >Acara</a
                >
                <a
                    class="font-label-lg text-label-lg transition-all {{ request()->routeIs('about') ? 'text-white font-semibold' : 'text-[#A8C8D8] hover:text-white' }}"
                    href="{{ route('about') }}"
                    >Tentang</a
                >
            @endguest
            @auth
                <a
                    class="font-label-lg text-label-lg transition-all {{ request()->routeIs('dashboard') ? 'text-white font-semibold' : 'text-[#A8C8D8] hover:text-white' }}"
                    href="{{ route('dashboard') }}"
                    >Dashboard</a
                >
                @if(auth()->user()->role === 'admin')
                <a
                    class="font-label-lg text-label-lg transition-all {{ request()->routeIs('admin.dashboard') ? 'text-white font-semibold' : 'text-[#A8C8D8] hover:text-white' }}"
                    href="{{ route('admin.dashboard') }}"
                    >Admin</a
                >
                @endif
            @endauth
        </div>
        <div class="flex items-center gap-4">
            @guest
                <a href="{{ route('login') }}"
                    class="font-label-lg text-label-lg text-[#A8C8D8] px-6 py-2 hover:text-white transition-all duration-200 rounded-lg scale-95 active:scale-90"
                >
                    Login
                </a>
                <a href="{{ route('register') }}"
                    class="font-label-lg text-label-lg bg-[#02C39A] text-[#0D2137] font-semibold px-6 py-2 rounded-lg hover:opacity-90 transition-all duration-200 scale-95 active:scale-90"
                >
                    Daftar
                </a>
            @endguest
            @auth
                <form method="POST" action="{{ route('logout') }}" class="m-0">
                    @csrf
                    <button type="submit"
                        class="font-label-lg text-label-lg bg-[#028090] text-white px-6 py-2 rounded-lg hover:opacity-90 transition-all duration-200 scale-95 active:scale-90"
                    >
                        Logout
                    </button>
                </form>
            @endauth
        </div>
    </nav>
</header>
