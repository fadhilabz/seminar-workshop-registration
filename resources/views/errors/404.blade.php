@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-[60vh] px-6 py-24 bg-background">
    <div class="text-center">
        <h1 class="text-9xl font-black text-secondary">404</h1>
        <p class="text-2xl font-bold tracking-tight text-primary sm:text-4xl">
            Uh-oh!
        </p>
        <p class="mt-4 text-on-surface-variant">
            Halaman yang Anda cari tidak dapat ditemukan.
        </p>
        <a href="{{ route('home') }}"
            class="inline-block px-6 py-3 mt-6 text-label-lg font-label-lg text-white transition bg-secondary rounded-lg hover:bg-secondary/90 focus:outline-none focus:ring">
            Kembali ke Beranda
        </a>
    </div>
</div>
@endsection
