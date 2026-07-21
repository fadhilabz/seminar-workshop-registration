@extends('layouts.admin')

@section('title', 'Kelola Acara')

@section('content')
<div class="w-full space-y-6">
    <!-- Flash Message -->
    @if (session('success'))
        <div class="bg-tertiary-fixed text-on-tertiary-fixed font-label-lg text-label-lg p-4 rounded-xl shadow-md flex items-center gap-3 border border-on-tertiary-container/20" id="flash-message">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">check_circle</span>
            <span>{{ session('success') }}</span>
            <button class="ml-auto" onclick="document.getElementById('flash-message').remove()">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
    @endif

    <!-- Header Section -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <p class="text-sm text-on-surface-variant">Pantau, edit, dan kelola semua daftar seminar & workshop yang terdaftar.</p>
        </div>
        <a href="{{ route('admin.events.create') }}" class="inline-flex items-center justify-center gap-2 bg-on-tertiary-container text-white font-medium text-sm px-5 py-2.5 rounded-xl shadow hover:brightness-110 active:scale-95 transition-all">
            <span class="material-symbols-outlined text-[20px]">add</span>
            <span>Tambah Acara</span>
        </a>
    </div>

    <!-- Table / Mobile Cards Container -->
    <div class="bg-surface-container-lowest rounded-2xl shadow-sm border border-outline-variant/30 overflow-hidden w-full">
        
        <!-- Desktop Table View (visible on md+) -->
        <div class="hidden md:block w-full overflow-x-auto">
            <table class="w-full text-left border-collapse text-sm">
                <thead>
                    <tr class="bg-surface-container-low border-b border-outline-variant/50 text-xs font-semibold text-primary uppercase tracking-wider">
                        <th class="px-3 py-3 text-center w-10">No</th>
                        <th class="px-3 py-3 w-16">Gambar</th>
                        <th class="px-3 py-3">Judul</th>
                        <th class="px-3 py-3 whitespace-nowrap">Kategori</th>
                        <th class="px-3 py-3 whitespace-nowrap">Tipe</th>
                        <th class="px-3 py-3 whitespace-nowrap">Tanggal</th>
                        <th class="px-3 py-3 whitespace-nowrap">Harga</th>
                        <th class="px-3 py-3 whitespace-nowrap">Status</th>
                        <th class="px-3 py-3 text-center whitespace-nowrap">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant/20 text-on-surface">
                    @forelse ($events ?? [] as $event)
                        <tr class="hover:bg-surface-container-low/50 transition-colors">
                            <td class="px-3 py-3 text-center font-medium text-xs text-on-surface-variant">{{ $loop->iteration }}</td>
                            <td class="px-3 py-3">
                                <div class="w-12 h-9 rounded-lg overflow-hidden bg-surface-dim border border-outline-variant/20">
                                    <img class="w-full h-full object-cover" src="{{ $event->image ?? 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800' }}" alt="{{ $event->title }}" />
                                </div>
                            </td>
                            <td class="px-3 py-3">
                                <div class="max-w-[220px]">
                                    <span class="font-semibold text-primary block leading-tight line-clamp-2">{{ $event->title }}</span>
                                    <span class="text-[10px] text-on-surface-variant uppercase tracking-wider">ID: EV-{{ str_pad($event->id, 4, '0', STR_PAD_LEFT) }}</span>
                                </div>
                            </td>
                            <td class="px-3 py-3 whitespace-nowrap text-xs text-on-surface-variant">{{ $event->category->name ?? 'Umum' }}</td>
                            <td class="px-3 py-3 whitespace-nowrap text-xs">
                                <span class="px-2 py-0.5 rounded-md bg-secondary-container/50 text-on-secondary-container font-medium text-[11px]">
                                    {{ $event->type }}
                                </span>
                            </td>
                            <td class="px-3 py-3 whitespace-nowrap text-xs text-on-surface-variant">{{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}</td>
                            <td class="px-3 py-3 whitespace-nowrap text-xs font-semibold text-secondary">
                                @if (empty($event->price) || $event->price == 0)
                                    Free
                                @else
                                    Rp {{ number_format($event->price, 0, ',', '.') }}
                                @endif
                            </td>
                            <td class="px-3 py-3 whitespace-nowrap text-xs">
                                <span class="px-2.5 py-0.5 rounded-full bg-on-tertiary-container/10 text-on-tertiary-container font-medium text-[11px] border border-on-tertiary-container/20">
                                    {{ ucfirst($event->status) }}
                                </span>
                            </td>
                            <td class="px-3 py-3 whitespace-nowrap text-center">
                                <div class="flex items-center justify-center gap-1.5">
                                    <a href="{{ route('admin.events.edit', $event->id) }}" class="p-1.5 text-secondary hover:bg-secondary/10 rounded-lg transition-colors" title="Edit">
                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                    </a>
                                    <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-1.5 text-error hover:bg-error/10 rounded-lg transition-colors" title="Hapus" onclick="return confirm('Yakin ingin menghapus acara ini?')">
                                            <span class="material-symbols-outlined text-[18px]">delete</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="px-4 py-8 text-center text-on-surface-variant text-sm">
                                Belum ada data acara.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Mobile Card View (visible on mobile < md) -->
        <div class="block md:hidden p-4 space-y-4">
            @forelse ($events ?? [] as $event)
                <div class="bg-surface-container-low border border-outline-variant/30 rounded-xl p-4 shadow-sm flex flex-col gap-3">
                    <div class="w-full h-36 rounded-lg overflow-hidden bg-surface-dim">
                        <img class="w-full h-full object-cover" src="{{ $event->image ?? 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800' }}" alt="{{ $event->title }}" />
                    </div>
                    
                    <div class="flex flex-col gap-1">
                        <div class="flex items-center justify-between gap-2">
                            <span class="text-[10px] text-on-surface-variant uppercase tracking-wider font-semibold">ID: EV-{{ str_pad($event->id, 4, '0', STR_PAD_LEFT) }}</span>
                            <span class="px-2 py-0.5 rounded-full bg-on-tertiary-container/10 text-on-tertiary-container text-[11px] font-medium border border-on-tertiary-container/20">
                                {{ ucfirst($event->status) }}
                            </span>
                        </div>
                        <h3 class="text-base text-primary font-bold line-clamp-2">{{ $event->title }}</h3>
                    </div>

                    <div class="flex items-center gap-2 flex-wrap text-xs">
                        <span class="px-2.5 py-0.5 bg-surface-variant text-on-surface-variant rounded-md font-medium">
                            {{ $event->category->name ?? 'Umum' }}
                        </span>
                        <span class="px-2.5 py-0.5 bg-secondary-container text-on-secondary-container rounded-md font-medium">
                            {{ $event->type }}
                        </span>
                    </div>

                    <div class="flex items-center justify-between text-xs pt-1">
                        <div class="flex items-center gap-1 text-on-surface-variant">
                            <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                            <span>{{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}</span>
                        </div>
                        <div class="font-bold text-secondary text-sm">
                            @if (empty($event->price) || $event->price == 0)
                                Free
                            @else
                                Rp {{ number_format($event->price, 0, ',', '.') }}
                            @endif
                        </div>
                    </div>

                    <div class="flex items-center gap-2 pt-3 border-t border-outline-variant/30">
                        <a href="{{ route('admin.events.edit', $event->id) }}" class="flex-1 py-2 px-3 bg-secondary/10 hover:bg-secondary/20 text-secondary text-xs font-medium rounded-lg flex items-center justify-center gap-1 transition-colors">
                            <span class="material-symbols-outlined text-[16px]">edit</span>
                            <span>Edit</span>
                        </a>
                        <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" class="flex-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-full py-2 px-3 bg-error/10 hover:bg-error/20 text-error text-xs font-medium rounded-lg flex items-center justify-center gap-1 transition-colors" onclick="return confirm('Yakin ingin menghapus acara ini?')">
                                <span class="material-symbols-outlined text-[16px]">delete</span>
                                <span>Hapus</span>
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <div class="text-center py-8 text-on-surface-variant text-sm">
                    Belum ada data acara.
                </div>
            @endforelse
        </div>

        <!-- Pagination Footer -->
        <div class="px-4 py-4 border-t border-outline-variant/30 flex items-center justify-between gap-4">
            @if (isset($events) && method_exists($events, 'links'))
                <div class="w-full">
                    {{ $events->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
