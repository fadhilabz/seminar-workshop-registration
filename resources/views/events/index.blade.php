@extends('layouts.app')

@section('title', 'Semua Acara')

@section('content')




<main class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-12">
<!-- Header Section -->
<header class="mb-12">
<h1 class="font-headline-xl text-headline-xl text-primary mb-4">Semua Acara</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                Temukan berbagai seminar dan workshop berkualitas untuk meningkatkan kompetensi profesional dan akademik Anda.
            </p>
</header>
<!-- Search and Filter Bar -->
<div class="flex flex-col lg:flex-row gap-6 mb-12 items-start lg:items-center">
<!-- Search Input -->
<div class="relative w-full lg:max-w-md">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">search</span>
<input class="w-full pl-12 pr-4 py-4 rounded-xl border border-outline-variant bg-white focus:outline-none focus:ring-2 focus:ring-secondary/20 focus:border-secondary transition-all font-body-md text-body-md" placeholder="Cari seminar atau workshop..." type="text"/>
</div>
<!-- Filter Chips -->
<div class="flex items-center gap-3 overflow-x-auto pb-2 lg:pb-0 w-full lg:w-auto">
<button class="px-6 py-2.5 rounded-full bg-secondary text-white font-label-lg text-label-lg whitespace-nowrap transition-standard">Semua</button>
<button class="px-6 py-2.5 rounded-full bg-white border border-outline-variant text-on-surface-variant hover:bg-surface-container font-label-lg text-label-lg whitespace-nowrap transition-standard">Seminar</button>
<button class="px-6 py-2.5 rounded-full bg-white border border-outline-variant text-on-surface-variant hover:bg-surface-container font-label-lg text-label-lg whitespace-nowrap transition-standard">Workshop</button>
</div>
<!-- Category Dropdown -->
<div class="relative w-full lg:w-64">
<select class="w-full px-4 py-4 rounded-xl border border-outline-variant bg-white appearance-none focus:outline-none focus:ring-2 focus:ring-secondary/20 focus:border-secondary font-label-lg text-label-lg cursor-pointer">
<option value="">Semua Kategori</option>
<option value="tech">Teknologi</option>
<option value="business">Bisnis &amp; Marketing</option>
<option value="health">Kesehatan</option>
<option value="education">Pendidikan</option>
</select>
<span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-outline">expand_more</span>
</div>
</div>
<!-- Event Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
    @forelse ($events as $event)
        <div class="bg-white rounded-[24px] overflow-hidden shadow-soft card-hover transition-standard flex flex-col h-full border border-outline-variant/30">
            <div class="h-56 relative overflow-hidden">
                <img class="w-full h-full object-cover transition-standard hover:scale-105" 
                     src="{{ $event->image ?? 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800' }}" 
                     alt="{{ $event->title }}"/>
                <div class="absolute top-4 left-4">
                    @if (strtolower($event->type) === 'workshop')
                        <span class="px-3 py-1.5 bg-secondary-container text-on-secondary-container rounded-full text-label-md font-label-md uppercase tracking-wider">
                            {{ $event->type }}
                        </span>
                    @else
                        <span class="px-3 py-1.5 bg-tertiary-container text-tertiary-fixed rounded-full text-label-md font-label-md uppercase tracking-wider">
                            {{ $event->type }}
                        </span>
                    @endif
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <div class="flex items-center gap-2 mb-3 text-secondary">
                    <span class="material-symbols-outlined text-[18px]">calendar_today</span>
                    <span class="font-label-md text-label-md">{{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}</span>
                </div>
                <h3 class="font-headline-md text-headline-md text-primary mb-3 line-clamp-2">{{ $event->title }}</h3>
                <div class="flex items-center gap-2 mb-6 text-on-surface-variant">
                    @if (\Illuminate\Support\Str::contains(strtolower($event->location ?? ''), 'online') || \Illuminate\Support\Str::contains(strtolower($event->location ?? ''), 'zoom') || \Illuminate\Support\Str::contains(strtolower($event->location ?? ''), 'webinar'))
                        <span class="material-symbols-outlined text-[18px]">videocam</span>
                    @else
                        <span class="material-symbols-outlined text-[18px]">location_on</span>
                    @endif
                    <span class="font-body-md text-body-md">{{ $event->location ?? 'Online' }}</span>
                </div>
                <div class="mt-auto flex items-center justify-between">
                    <span class="font-headline-md text-headline-md text-on-tertiary-container">
                        @if (empty($event->price) || $event->price == 0)
                            Gratis
                        @else
                            Rp {{ number_format($event->price, 0, ',', '.') }}
                        @endif
                    </span>
                    <a href="{{ route('events.show', $event->id) }}" class="inline-block px-6 py-2.5 bg-on-tertiary-container text-white rounded-full font-label-lg text-label-lg scale-95 active:scale-90 transition-transform shadow-sm hover:brightness-110">Daftar</a>
                </div>
            </div>
        </div>
    @empty
        <div class="col-span-full text-center py-12 text-on-surface-variant font-body-lg">
            Tidak ada event yang ditemukan.
        </div>
    @endforelse
</div>
<!-- Pagination -->
<div class="pb-12">
    {{ $events->links() }}
</div>
</main>



@endsection
