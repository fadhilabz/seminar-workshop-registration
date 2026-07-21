@extends('layouts.admin')

@section('title', 'Edit Acara')

@section('content')
<div class="w-full max-w-4xl mx-auto space-y-6">
    <!-- Breadcrumb & Header -->
    <div class="flex items-center justify-between">
        <div>
            <div class="flex items-center gap-2 text-on-surface-variant mb-2">
                <a class="font-medium text-xs hover:underline flex items-center gap-1" href="{{ route('admin.events.index') }}">
                    <span class="material-symbols-outlined text-[16px]">arrow_back</span>
                    <span>Kembali ke Daftar Acara</span>
                </a>
            </div>
            <h1 class="text-2xl font-bold text-primary">Edit Acara: {{ $event->title }}</h1>
            <p class="text-sm text-on-surface-variant mt-1">Perbarui detail dan informasi acara di bawah ini.</p>
        </div>
    </div>

    <!-- Form Section -->
    <form action="{{ route('admin.events.update', $event->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <div class="bg-surface-container-lowest p-6 sm:p-8 rounded-2xl border border-outline-variant/30 shadow-sm space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                <!-- Title -->
                <div class="md:col-span-2 space-y-2">
                    <label class="font-semibold text-sm text-primary" for="title">Judul Acara <span class="text-error">*</span></label>
                    <input class="w-full px-4 py-3 rounded-xl border border-outline-variant bg-white text-on-surface focus:border-secondary focus:ring-2 focus:ring-secondary/20 transition-all text-sm @error('title') border-error @enderror" 
                           id="title" 
                           name="title" 
                           value="{{ old('title', $event->title) }}" 
                           placeholder="Contoh: Modern UI Design Masterclass 2024" 
                           required 
                           type="text"/>
                    @error('title')
                        <p class="text-error text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Category -->
                <div class="space-y-2">
                    <label class="font-semibold text-sm text-primary" for="category_id">Kategori</label>
                    <select class="w-full px-4 py-3 rounded-xl border border-outline-variant bg-white text-on-surface focus:border-secondary focus:ring-2 focus:ring-secondary/20 transition-all text-sm @error('category_id') border-error @enderror" 
                            id="category_id" 
                            name="category_id">
                        <option value="">Pilih Kategori</option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}" {{ old('category_id', $event->category_id) == $cat->id ? 'selected' : '' }}>
                                {{ $cat->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <p class="text-error text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Status -->
                <div class="space-y-2">
                    <label class="font-semibold text-sm text-primary" for="status">Status</label>
                    <select class="w-full px-4 py-3 rounded-xl border border-outline-variant bg-white text-on-surface focus:border-secondary focus:ring-2 focus:ring-secondary/20 transition-all text-sm @error('status') border-error @enderror" 
                            id="status" 
                            name="status">
                        <option value="upcoming" {{ old('status', $event->status) == 'upcoming' ? 'selected' : '' }}>Upcoming</option>
                        <option value="published" {{ old('status', $event->status) == 'published' ? 'selected' : '' }}>Published</option>
                        <option value="draft" {{ old('status', $event->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="cancelled" {{ old('status', $event->status) == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                    </select>
                    @error('status')
                        <p class="text-error text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Event Type (Seminar / Workshop) -->
                <div class="md:col-span-2 space-y-2">
                    <label class="font-semibold text-sm text-primary block">Tipe Acara</label>
                    <div class="flex items-center gap-6 pt-1">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input class="w-4 h-4 text-secondary border-outline focus:ring-secondary" 
                                   name="type" 
                                   type="radio" 
                                   value="Seminar" 
                                   {{ old('type', strtolower($event->type)) == 'seminar' || strtolower($event->type) == 'seminar' ? 'checked' : '' }}/>
                            <span class="text-sm font-medium text-on-surface">Seminar</span>
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input class="w-4 h-4 text-secondary border-outline focus:ring-secondary" 
                                   name="type" 
                                   type="radio" 
                                   value="Workshop" 
                                   {{ old('type', strtolower($event->type)) == 'workshop' || strtolower($event->type) == 'workshop' ? 'checked' : '' }}/>
                            <span class="text-sm font-medium text-on-surface">Workshop</span>
                        </label>
                    </div>
                    @error('type')
                        <p class="text-error text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Date & Time -->
                <div class="space-y-2">
                    <label class="font-semibold text-sm text-primary" for="date">Tanggal & Waktu <span class="text-error">*</span></label>
                    <input class="w-full px-4 py-3 rounded-xl border border-outline-variant bg-white text-on-surface focus:border-secondary focus:ring-2 focus:ring-secondary/20 transition-all text-sm @error('date') border-error @enderror" 
                           id="date" 
                           name="date" 
                           value="{{ old('date', $event->date ? \Carbon\Carbon::parse($event->date)->format('Y-m-d\TH:i') : '') }}" 
                           required 
                           type="datetime-local"/>
                    @error('date')
                        <p class="text-error text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Location -->
                <div class="space-y-2">
                    <label class="font-semibold text-sm text-primary" for="location">Lokasi / Tautan Zoom</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3 top-3.5 text-outline text-lg pointer-events-none">location_on</span>
                        <input class="w-full pl-10 pr-4 py-3 rounded-xl border border-outline-variant bg-white text-on-surface focus:border-secondary focus:ring-2 focus:ring-secondary/20 transition-all text-sm @error('location') border-error @enderror" 
                               id="location" 
                               name="location" 
                               value="{{ old('location', $event->location) }}" 
                               placeholder="Hotel Indonesia, Jakarta atau Online via Zoom" 
                               type="text"/>
                    </div>
                    @error('location')
                        <p class="text-error text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Quota -->
                <div class="space-y-2">
                    <label class="font-semibold text-sm text-primary" for="quota">Kuota Peserta</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3 top-3.5 text-outline text-lg pointer-events-none">group</span>
                        <input class="w-full pl-10 pr-4 py-3 rounded-xl border border-outline-variant bg-white text-on-surface focus:border-secondary focus:ring-2 focus:ring-secondary/20 transition-all text-sm @error('quota') border-error @enderror" 
                               id="quota" 
                               min="1" 
                               name="quota" 
                               value="{{ old('quota', $event->quota) }}" 
                               placeholder="100" 
                               type="number"/>
                    </div>
                    @error('quota')
                        <p class="text-error text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Price -->
                <div class="space-y-2">
                    <label class="font-semibold text-sm text-primary" for="price">Harga Tiket (IDR)</label>
                    <div class="relative">
                        <span class="absolute left-4 top-3.5 text-outline font-bold text-sm pointer-events-none">Rp</span>
                        <input class="w-full pl-12 pr-4 py-3 rounded-xl border border-outline-variant bg-white text-on-surface focus:border-secondary focus:ring-2 focus:ring-secondary/20 transition-all text-sm @error('price') border-error @enderror" 
                               id="price" 
                               min="0" 
                               name="price" 
                               value="{{ old('price', $event->price) }}" 
                               placeholder="0 (Kosongkan atau 0 untuk Gratis)" 
                               type="number"/>
                    </div>
                    @error('price')
                        <p class="text-error text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Image URL -->
                <div class="md:col-span-2 space-y-2">
                    <label class="font-semibold text-sm text-primary" for="image">URL Poster / Gambar Acara</label>
                    <input class="w-full px-4 py-3 rounded-xl border border-outline-variant bg-white text-on-surface focus:border-secondary focus:ring-2 focus:ring-secondary/20 transition-all text-sm @error('image') border-error @enderror" 
                           id="image" 
                           name="image" 
                           value="{{ old('image', $event->image) }}" 
                           placeholder="https://images.unsplash.com/photo-..." 
                           type="url"/>
                    @if ($event->image)
                        <div class="mt-2 flex items-center gap-3">
                            <div class="w-20 h-14 rounded-lg overflow-hidden border border-outline-variant/30">
                                <img src="{{ $event->image }}" alt="Preview" class="w-full h-full object-cover"/>
                            </div>
                            <span class="text-xs text-on-surface-variant">Poster saat ini</span>
                        </div>
                    @endif
                    @error('image')
                        <p class="text-error text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex items-center justify-end gap-3">
            <a href="{{ route('admin.events.index') }}" class="px-6 py-2.5 rounded-xl font-medium text-sm text-on-surface-variant hover:bg-surface-variant transition-colors">
                Batal
            </a>
            <button type="submit" class="px-8 py-2.5 rounded-xl font-medium text-sm bg-on-tertiary-container text-white shadow hover:brightness-110 active:scale-95 transition-all">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection
