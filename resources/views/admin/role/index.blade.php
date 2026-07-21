@extends('layouts.admin')

@section('title', 'Manajemen Role Pengguna')

@section('content')
<div class="w-full space-y-6">
    <!-- Subheader -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <p class="text-sm text-on-surface-variant">Kelola role dan hak akses pengguna sistem (Admin / User).</p>
    </div>

    <!-- Flash Messages -->
    @if (session('success'))
        <div class="bg-tertiary-fixed text-on-tertiary-fixed font-label-lg text-label-lg p-4 rounded-xl shadow-md flex items-center gap-3 border border-on-tertiary-container/20" id="flash-message">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">check_circle</span>
            <span>{{ session('success') }}</span>
            <button class="ml-auto" onclick="document.getElementById('flash-message').remove()">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
    @endif

    @if (session('error'))
        <div class="bg-error-container text-error p-4 rounded-xl shadow-md flex items-center gap-3 border border-error/20" id="flash-message-error">
            <span class="material-symbols-outlined">error</span>
            <span>{{ session('error') }}</span>
            <button class="ml-auto" onclick="document.getElementById('flash-message-error').remove()">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
    @endif

    <!-- Table / Mobile Cards Container -->
    <div class="bg-surface-container-lowest rounded-2xl shadow-sm overflow-hidden border border-outline-variant/30 w-full">
        
        <!-- Desktop Table View (visible on md+) -->
        <div class="hidden md:block w-full overflow-x-auto">
            <table class="w-full text-left border-collapse text-sm">
                <thead>
                    <tr class="bg-surface-container-low border-b border-outline-variant/50 text-xs font-semibold text-primary uppercase tracking-wider">
                        <th class="px-4 py-3 text-center w-12">No</th>
                        <th class="px-4 py-3 whitespace-nowrap">Nama</th>
                        <th class="px-4 py-3 whitespace-nowrap">Email</th>
                        <th class="px-4 py-3 whitespace-nowrap">Role Saat Ini</th>
                        <th class="px-4 py-3 whitespace-nowrap">Aksi Ubah Role</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant/20 text-on-surface">
                    @forelse ($users as $index => $user)
                        <tr class="hover:bg-surface-container-low/50 transition-colors">
                            <td class="px-4 py-3 text-center font-medium text-xs text-on-surface-variant">{{ $index + 1 }}</td>
                            <td class="px-4 py-3 whitespace-nowrap font-semibold text-xs text-primary">
                                <div class="flex items-center gap-2.5">
                                    <div class="w-7 h-7 rounded-full bg-primary-container/10 flex items-center justify-center text-primary-container font-bold text-xs">
                                        {{ strtoupper(substr($user->name, 0, 2)) }}
                                    </div>
                                    <span>{{ $user->name }}</span>
                                </div>
                            </td>
                            <td class="px-4 py-3 whitespace-nowrap text-xs text-on-surface-variant">{{ $user->email }}</td>
                            <td class="px-4 py-3 whitespace-nowrap text-xs">
                                @if ($user->role === 'admin')
                                    <span class="px-2.5 py-0.5 rounded-full bg-on-tertiary-container text-white font-semibold text-[11px]">
                                        Admin
                                    </span>
                                @else
                                    <span class="px-2.5 py-0.5 rounded-full bg-surface-variant text-on-surface-variant font-medium text-[11px]">
                                        User
                                    </span>
                                @endif
                            </td>
                            <td class="px-4 py-3 whitespace-nowrap text-xs">
                                <form action="{{ route('admin.role.update', $user) }}" method="POST" class="flex items-center gap-2 max-w-xs">
                                    @csrf
                                    @method('PATCH')
                                    <select name="role" class="px-3 py-1.5 bg-white border border-outline-variant rounded-lg text-xs font-medium focus:ring-2 focus:ring-secondary focus:border-secondary outline-none" {{ auth()->id() === $user->id ? 'disabled' : '' }}>
                                        <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>User</option>
                                        <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                                    </select>

                                    @if (auth()->id() === $user->id)
                                        <button type="button" disabled class="px-3 py-1.5 bg-outline/20 text-outline text-xs rounded-lg font-medium cursor-not-allowed">
                                            Ubah
                                        </button>
                                    @else
                                        <button type="submit" class="px-3 py-1.5 bg-primary-container text-white text-xs rounded-lg font-medium hover:brightness-110 active:scale-95 transition-all shadow-sm">
                                            Ubah
                                        </button>
                                    @endif
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-4 py-8 text-center text-on-surface-variant text-sm">
                                Belum ada pengguna terdaftar.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Mobile Card View (visible on mobile < md) -->
        <div class="block md:hidden p-4 space-y-4">
            @forelse ($users as $index => $user)
                <div class="bg-surface-container-low border border-outline-variant/30 rounded-xl p-4 shadow-sm flex flex-col gap-3">
                    <div class="flex items-center justify-between gap-2 border-b border-outline-variant/20 pb-2">
                        <div class="flex items-center gap-2.5">
                            <div class="w-8 h-8 rounded-full bg-primary-container/10 flex items-center justify-center text-primary-container font-bold text-xs">
                                {{ strtoupper(substr($user->name, 0, 2)) }}
                            </div>
                            <div>
                                <p class="font-semibold text-xs text-on-surface leading-tight">{{ $user->name }}</p>
                                <p class="text-[11px] text-on-surface-variant">{{ $user->email }}</p>
                            </div>
                        </div>
                        <span class="px-2.5 py-0.5 rounded-full text-[11px] font-semibold {{ $user->role === 'admin' ? 'bg-on-tertiary-container text-white' : 'bg-surface-variant text-on-surface-variant' }}">
                            {{ ucfirst($user->role) }}
                        </span>
                    </div>

                    <div class="pt-1">
                        <form action="{{ route('admin.role.update', $user) }}" method="POST" class="flex items-center gap-2">
                            @csrf
                            @method('PATCH')
                            <select name="role" class="flex-1 px-3 py-2 bg-white border border-outline-variant rounded-lg text-xs font-medium focus:ring-2 focus:ring-secondary focus:border-secondary outline-none" {{ auth()->id() === $user->id ? 'disabled' : '' }}>
                                <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>User</option>
                                <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                            </select>

                            @if (auth()->id() === $user->id)
                                <button type="button" disabled class="px-4 py-2 bg-outline/20 text-outline text-xs rounded-lg font-medium cursor-not-allowed">
                                    Ubah
                                </button>
                            @else
                                <button type="submit" class="px-4 py-2 bg-primary-container text-white text-xs rounded-lg font-medium hover:brightness-110 active:scale-95 transition-all shadow-sm">
                                    Ubah
                                </button>
                            @endif
                        </form>
                    </div>
                </div>
            @empty
                <div class="text-center py-8 text-on-surface-variant text-sm">
                    Belum ada pengguna terdaftar.
                </div>
            @endforelse
        </div>

    </div>
</div>
@endsection
