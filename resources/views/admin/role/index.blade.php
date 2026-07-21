@extends('layouts.admin')
@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Manajemen Role Pengguna') }}
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
                            <li><a href="{{ route('admin.dashboard') }}" class="block p-2 rounded hover:bg-gray-100" style="color: #028090;">Dashboard</a></li>
                            <li><a href="#" class="block p-2 rounded hover:bg-gray-100" style="color: #028090;">Kelola Acara</a></li>
                            <li><a href="#" class="block p-2 rounded hover:bg-gray-100" style="color: #028090;">Kelola Peserta</a></li>
                            <li><a href="#" class="block p-2 rounded hover:bg-gray-100" style="color: #028090;">Verifikasi Bayar</a></li>
                            <li><a href="{{ route('admin.role.index') }}" class="block p-2 rounded hover:bg-gray-100 bg-gray-100 font-semibold" style="color: #028090;">Manajemen Role</a></li>
                            <li><a href="#" class="block p-2 rounded hover:bg-gray-100" style="color: #028090;">Laporan</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="w-full md:w-3/4">
                
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif
                
                @if (session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <span class="block sm:inline">{{ session('error') }}</span>
                    </div>
                @endif

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 overflow-x-auto">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">No</th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Nama</th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Email</th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Role Saat Ini</th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $index => $user)
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $index + 1 }}</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $user->name }}</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $user->email }}</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            @if($user->role === 'admin')
                                                <span class="relative inline-block px-3 py-1 font-semibold text-white leading-tight">
                                                    <span aria-hidden class="absolute inset-0 rounded-full" style="background-color: #028090;"></span>
                                                    <span class="relative">Admin</span>
                                                </span>
                                            @else
                                                <span class="relative inline-block px-3 py-1 font-semibold text-gray-800 leading-tight">
                                                    <span aria-hidden class="absolute inset-0 bg-gray-200 rounded-full"></span>
                                                    <span class="relative">User</span>
                                                </span>
                                            @endif
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <form action="{{ route('admin.role.update', $user) }}" method="POST" class="flex items-center space-x-2">
                                                @csrf
                                                @method('PATCH')
                                                <select name="role" class="block w-full mt-1 text-sm rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" {{ auth()->id() === $user->id ? 'disabled' : '' }}>
                                                    <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>User</option>
                                                    <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                                                </select>
                                                
                                                @if(auth()->id() === $user->id)
                                                    <button type="button" disabled class="px-4 py-2 bg-gray-400 text-white rounded text-sm cursor-not-allowed">
                                                        Ubah
                                                    </button>
                                                @else
                                                    <button type="submit" class="px-4 py-2 text-white rounded text-sm hover:opacity-90" style="background-color: #0D2137;">
                                                        Ubah
                                                    </button>
                                                @endif
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection
