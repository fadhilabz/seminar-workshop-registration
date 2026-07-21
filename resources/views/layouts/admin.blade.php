<!doctype html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Admin Dashboard - SeminarKu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-background text-on-background font-body-md selection:bg-on-tertiary-container selection:text-white overflow-x-hidden min-h-screen flex">

    <!-- Admin Sidebar -->
    <aside class="w-64 bg-primary-container text-white min-h-screen shadow-xl flex flex-col fixed left-0 top-0 z-40">
        <div class="p-6 border-b border-white/10">
            <h1 class="text-2xl font-bold tracking-wider text-white">SeminarKu<span class="text-tertiary-fixed text-sm align-top ml-1">Admin</span></h1>
        </div>
        <nav class="flex-1 p-4 space-y-2">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 p-3 rounded-lg hover:bg-white/10 transition-colors {{ request()->routeIs('admin.dashboard') ? 'bg-white/10 text-tertiary-fixed' : 'text-gray-300 hover:text-white' }}">
                <span class="material-symbols-outlined">dashboard</span>
                Dashboard
            </a>
            <a href="{{ route('admin.events.index') }}" class="flex items-center gap-3 p-3 rounded-lg hover:bg-white/10 transition-colors {{ request()->routeIs('admin.events.*') ? 'bg-white/10 text-tertiary-fixed' : 'text-gray-300 hover:text-white' }}">
                <span class="material-symbols-outlined">event</span>
                Events
            </a>
            <a href="{{ route('admin.payments.index') }}" class="flex items-center gap-3 p-3 rounded-lg hover:bg-white/10 transition-colors {{ request()->routeIs('admin.payments.*') ? 'bg-white/10 text-tertiary-fixed' : 'text-gray-300 hover:text-white' }}">
                <span class="material-symbols-outlined">payments</span>
                Payments
            </a>
            <a href="{{ route('admin.certificates.index') }}" class="flex items-center gap-3 p-3 rounded-lg hover:bg-white/10 transition-colors {{ request()->routeIs('admin.certificates.*') ? 'bg-white/10 text-tertiary-fixed' : 'text-gray-300 hover:text-white' }}">
                <span class="material-symbols-outlined">workspace_premium</span>
                Certificates
            </a>
            <a href="{{ route('admin.role.index') }}" class="flex items-center gap-3 p-3 rounded-lg hover:bg-white/10 transition-colors {{ request()->routeIs('admin.role.*') ? 'bg-white/10 text-tertiary-fixed' : 'text-gray-300 hover:text-white' }}">
                <span class="material-symbols-outlined">group</span>
                Role / Users
            </a>
            <a href="{{ route('admin.laporan') }}" class="flex items-center gap-3 p-3 rounded-lg hover:bg-white/10 transition-colors {{ request()->routeIs('admin.laporan') ? 'bg-white/10 text-tertiary-fixed' : 'text-gray-300 hover:text-white' }}">
                <span class="material-symbols-outlined">bar_chart</span>
                Laporan
            </a>
        </nav>
        <div class="p-4 border-t border-white/10">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="flex items-center gap-3 p-3 w-full text-left rounded-lg text-red-400 hover:bg-white/10 hover:text-red-300 transition-colors">
                    <span class="material-symbols-outlined">logout</span>
                    Logout
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content Area -->
    <main class="flex-1 ml-64 p-8">
        <!-- Admin Header -->
        <header class="flex justify-between items-center mb-8 pb-4 border-b border-gray-200">
            <h2 class="text-2xl font-bold text-gray-800">@yield('title', 'Admin Panel')</h2>
            <div class="flex items-center gap-4">
                <span class="text-sm text-gray-600">Welcome, {{ Auth::user()->name }}</span>
            </div>
        </header>

        <!-- Page Content -->
        @yield('content')
    </main>

</body>
</html>
