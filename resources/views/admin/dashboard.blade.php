<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <!-- Inject custom styles for the background -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col md:flex-row gap-6">
            
            <!-- Sidebar -->
            <div class="w-full md:w-1/4">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h3 class="font-bold text-lg mb-4" style="color: #0D2137;">Menu Admin</h3>
                        <ul class="space-y-2">
                            <li><a href="{{ route('admin.dashboard') }}" class="block p-2 rounded hover:bg-gray-100 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-100 font-semibold' : '' }}" style="color: #028090;">Dashboard</a></li>
                            <li><a href="#" class="block p-2 rounded hover:bg-gray-100" style="color: #028090;">Kelola Acara</a></li>
                            <li><a href="#" class="block p-2 rounded hover:bg-gray-100" style="color: #028090;">Kelola Peserta</a></li>
                            <li><a href="#" class="block p-2 rounded hover:bg-gray-100" style="color: #028090;">Verifikasi Bayar</a></li>
                            <li><a href="{{ route('admin.role.index') }}" class="block p-2 rounded hover:bg-gray-100 {{ request()->routeIs('admin.role.*') ? 'bg-gray-100 font-semibold' : '' }}" style="color: #028090;">Manajemen Role</a></li>
                            <li><a href="#" class="block p-2 rounded hover:bg-gray-100" style="color: #028090;">Laporan</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="w-full md:w-3/4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Card 1 -->
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-t-4" style="border-color: #028090;">
                        <div class="p-6">
                            <div class="text-sm text-gray-500 uppercase font-semibold">Total Acara</div>
                            <div class="text-3xl font-bold mt-2" style="color: #0D2137;">12</div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-t-4" style="border-color: #02C39A;">
                        <div class="p-6">
                            <div class="text-sm text-gray-500 uppercase font-semibold">Total Peserta</div>
                            <div class="text-3xl font-bold mt-2" style="color: #0D2137;">1,245</div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-t-4" style="border-color: #0D2137;">
                        <div class="p-6">
                            <div class="text-sm text-gray-500 uppercase font-semibold">Menunggu Verifikasi</div>
                            <div class="text-3xl font-bold mt-2" style="color: #0D2137;">34</div>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-t-4" style="border-color: #028090;">
                        <div class="p-6">
                            <div class="text-sm text-gray-500 uppercase font-semibold">Total Sertifikat</div>
                            <div class="text-3xl font-bold mt-2" style="color: #0D2137;">890</div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</x-app-layout>
