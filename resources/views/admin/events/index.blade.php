@extends('layouts.admin')

@section('title', 'Kelola Acara')

@section('content')
<!-- TopNavBar -->

<!-- Main Content -->
<main class="flex-grow w-full max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-12">
    <!-- Flash Message -->
    <div class="success-flash fixed top-24 left-1/2 -translate-x-1/2 z-40 w-full max-w-md px-4" id="flash-message">
        <div class="bg-tertiary-fixed text-on-tertiary-fixed font-label-lg text-label-lg p-4 rounded-xl shadow-lg flex items-center gap-3 border border-on-tertiary-container/20">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">check_circle</span>
            <span>Berhasil! Acara baru telah berhasil dipublikasikan.</span>
            <button class="ml-auto" onclick="document.getElementById('flash-message').remove()">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
    </div>
    <!-- Header Section -->
    <div class="flex flex-col md:flex-row md:items-center justify-between mb-10 gap-6">
        <div>
            <h1 class="font-headline-lg text-headline-lg text-primary mb-2">Kelola Acara</h1>
            <p class="font-body-md text-body-md text-on-surface-variant">Pantau, edit, dan kelola semua daftar seminar yang terdaftar.</p>
        </div>
        <a href="{{ route('admin.events.create') }}" class="flex items-center gap-2 bg-on-tertiary-container text-primary-container font-label-lg text-label-lg px-8 py-4 rounded-full shadow-md hover:scale-[1.02] active:scale-95 transition-all duration-200">
            <span class="material-symbols-outlined">add</span>
            Tambah Acara
        </a>
    </div>
    <!-- Table Container -->
    <div class="bg-surface-container-lowest rounded-[24px] shadow-[0_12px_40px_-12px_rgba(0,9,23,0.05)] border border-outline-variant/30 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-surface-container-low border-b border-outline-variant/50">
                        <th class="px-6 py-5 font-label-lg text-label-lg text-primary">No</th>
                        <th class="px-6 py-5 font-label-lg text-label-lg text-primary">Gambar</th>
                        <th class="px-6 py-5 font-label-lg text-label-lg text-primary">Judul</th>
                        <th class="px-6 py-5 font-label-lg text-label-lg text-primary">Kategori</th>
                        <th class="px-6 py-5 font-label-lg text-label-lg text-primary">Tipe</th>
                        <th class="px-6 py-5 font-label-lg text-label-lg text-primary">Tanggal</th>
                        <th class="px-6 py-5 font-label-lg text-label-lg text-primary">Harga</th>
                        <th class="px-6 py-5 font-label-lg text-label-lg text-primary">Status</th>
                        <th class="px-6 py-5 font-label-lg text-label-lg text-primary text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant/20">
                    <!-- Row 1 -->
                    <tr class="hover:bg-tertiary-fixed/5 transition-colors group">
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface">1</td>
                        <td class="px-6 py-4">
                            <div class="w-16 h-10 rounded-lg overflow-hidden bg-surface-dim">
                                <img class="w-full h-full object-cover" data-alt="A professional high-angle photograph of a modern corporate seminar hall with elegant navy blue seating and soft ambient lighting. The atmosphere is academic and focused, featuring a large digital screen at the front displaying complex data charts in teal and seafoam colors. The overall aesthetic is clean, corporate, and minimalist with high contrast." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA9qyPYLlcdNHapfxqar6Qgvb9LOWXWZXFrdq86xXkeLzVml2pSXBe5uU5Y7FJm8JC-BHDLwQsM8nW1nW1lKHyIE6mH8jyINwQ4g5hCMDu61kNsdEEK59tlTaIY6LYks9hMZIDtbH1Ccu3AHJVCtiH-AXfGz8f5V8RtjWEzKB-EVZg_vV-Ysv5tQ8uCub3ZDebDhGrt2yoSzHfbYbHwQKiHT4Mr1uWEYStbVngjGls9uyyJCMj2GUxoXQ" />
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="max-w-[200px]">
                                <span class="font-label-lg text-label-lg text-primary block truncate">Mastering UI/UX Design 2024</span>
                                <span class="text-[10px] text-on-surface-variant uppercase tracking-wider">ID: EV-8821</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface">Design</td>
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface">Online</td>
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface">12 Okt 2024</td>
                        <td class="px-6 py-4 font-label-lg text-label-lg text-secondary">Rp 150.000</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full bg-on-tertiary-container/10 text-on-tertiary-container font-label-md text-label-md border border-on-tertiary-container/20">Published</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-center gap-3">
                                <a href="{{ route('admin.events.edit', 1) }}" class="p-2 text-secondary hover:bg-secondary/10 rounded-lg transition-all inline-block" title="Edit">
                                    <span class="material-symbols-outlined">edit</span>
                                </a>
                                <form action="{{ route('admin.events.destroy', 1) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-error hover:bg-error/10 rounded-lg transition-all" title="Hapus">
                                        <span class="material-symbols-outlined">delete</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 2 -->
                    <tr class="hover:bg-tertiary-fixed/5 transition-colors group">
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface">2</td>
                        <td class="px-6 py-4">
                            <div class="w-16 h-10 rounded-lg overflow-hidden bg-surface-dim">
                                <img class="w-full h-full object-cover" data-alt="A vibrant digital marketing workshop scene with professionals engaged in collaborative learning around laptop screens. The lighting is bright and airy, reflecting a modern workspace with seafoam and navy accents in the decor. High-quality corporate photography style with a shallow depth of field focusing on the creative energy of the participants." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjo_v-eEfrqkCCbViX0WF1OC8CgS2INM71wpIebHRZoqflMM7VSm4Vtpnw2IIyKvTFJIgVsz1iv_g-y62FaNVlSjq3UeGIMkyrSSyQy0sey29G-Xi2apgnIv93EIbn4Vq4wkJ0FQgGMOoP88LtaFl38UL-78JjXGZBpxkcpU5jgkNwsNQInEZ0gZwUnX6R0wrL8YQOSvXOXbSNCnRhcfeRWIcBl2xVCaMRKlVJ5cbzvQWOncu0oCzCdA" />
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="max-w-[200px]">
                                <span class="font-label-lg text-label-lg text-primary block truncate">Digital Marketing Trends</span>
                                <span class="text-[10px] text-on-surface-variant uppercase tracking-wider">ID: EV-8822</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface">Marketing</td>
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface">Offline</td>
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface">15 Nov 2024</td>
                        <td class="px-6 py-4 font-label-lg text-label-lg text-secondary">Free</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full bg-outline/10 text-outline font-label-md text-label-md border border-outline/20">Draft</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-center gap-3">
                                <a href="{{ route('admin.events.edit', 1) }}" class="p-2 text-secondary hover:bg-secondary/10 rounded-lg transition-all inline-block" title="Edit">
                                    <span class="material-symbols-outlined">edit</span>
                                </a>
                                <form action="{{ route('admin.events.destroy', 1) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-error hover:bg-error/10 rounded-lg transition-all" title="Hapus">
                                        <span class="material-symbols-outlined">delete</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 3 -->
                    <tr class="hover:bg-tertiary-fixed/5 transition-colors group">
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface">3</td>
                        <td class="px-6 py-4">
                            <div class="w-16 h-10 rounded-lg overflow-hidden bg-surface-dim">
                                <img class="w-full h-full object-cover" data-alt="A futuristic tech seminar background featuring abstract data streams and holographic projections. The color scheme is dominated by deep navy blue and neon teal highlights. The setting suggests a high-stakes technology conference with a focus on artificial intelligence and innovation, presented in a crisp, high-resolution architectural style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBCrNo000jOlqRmtafKxzBYrvlPKNYl5M9ZpRdi6-5JbQRxVTK4BAciN2sesSrXb1szRnTf68T0-P9nxvKz8lTdsRzWeiiXGgGtBFnhaIcZjKcoqmQCzXcSAgEKVsbyCqC4P42NJVG3IB6byt3fnfo5nH1F9CIv9MtmcYf-jLOJm-MScLlEiiuFaQqjUoevn4ieBygLg5JpphNpSrnv6ou55hpav1Dzp-rGvDkur-TnJZYPqPknQzLKSw" />
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="max-w-[200px]">
                                <span class="font-label-lg text-label-lg text-primary block truncate">AI in Healthcare Summit</span>
                                <span class="text-[10px] text-on-surface-variant uppercase tracking-wider">ID: EV-8823</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface">Technology</td>
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface">Hybrid</td>
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface">20 Des 2024</td>
                        <td class="px-6 py-4 font-label-lg text-label-lg text-secondary">Rp 450.000</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full bg-error/10 text-error font-label-md text-label-md border border-error/20">Cancelled</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-center gap-3">
                                <a href="{{ route('admin.events.edit', 1) }}" class="p-2 text-secondary hover:bg-secondary/10 rounded-lg transition-all inline-block" title="Edit">
                                    <span class="material-symbols-outlined">edit</span>
                                </a>
                                <form action="{{ route('admin.events.destroy', 1) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-error hover:bg-error/10 rounded-lg transition-all" title="Hapus">
                                        <span class="material-symbols-outlined">delete</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 4 -->
                    <tr class="hover:bg-tertiary-fixed/5 transition-colors group">
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface">4</td>
                        <td class="px-6 py-4">
                            <div class="w-16 h-10 rounded-lg overflow-hidden bg-surface-dim">
                                <img class="w-full h-full object-cover" data-alt="A serene and professional educational setting with a focus on business leadership. The scene shows a diverse group of academic scholars and industry experts in a bright, modern glass-walled conference room. The color palette incorporates professional navy blues with refreshing seafoam accents, conveying a sense of trust and high-value education." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCf3h9P3h2qxq49MhB0r9eV4Y8WM_7KENEn_kx3oe09d-Nrc6SGEsC9K0cCoAOHIVjFaWXscgWFdnkjpKFRLnxdD58oBkkbAfOhB2Yf8zlednF0NqQAquluFRYnNifFanIawv0rIOtTmme2vJ0O_QDbdxYfk6Bs878_nSpTL8Whu_kqCvWRk-Wax5UemB0j8mnbc0d870IooGVUw-uKltenf7O1l9EtZzHzHH4u1Y2Ju-kZMlOzXG73PA" />
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="max-w-[200px]">
                                <span class="font-label-lg text-label-lg text-primary block truncate">Leadership Workshop 101</span>
                                <span class="text-[10px] text-on-surface-variant uppercase tracking-wider">ID: EV-8824</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface">Business</td>
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface">Offline</td>
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface">05 Jan 2025</td>
                        <td class="px-6 py-4 font-label-lg text-label-lg text-secondary">Rp 200.000</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full bg-on-tertiary-container/10 text-on-tertiary-container font-label-md text-label-md border border-on-tertiary-container/20">Published</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center justify-center gap-3">
                                <a href="{{ route('admin.events.edit', 1) }}" class="p-2 text-secondary hover:bg-secondary/10 rounded-lg transition-all inline-block" title="Edit">
                                    <span class="material-symbols-outlined">edit</span>
                                </a>
                                <form action="{{ route('admin.events.destroy', 1) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-error hover:bg-error/10 rounded-lg transition-all" title="Hapus">
                                        <span class="material-symbols-outlined">delete</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Pagination -->
        <div class="px-6 py-6 border-t border-outline-variant/30 flex flex-col md:flex-row items-center justify-between gap-4">
            <p class="font-body-md text-body-md text-on-surface-variant">Menampilkan 1-4 dari 45 acara</p>
            <div class="flex items-center gap-2">
                <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-outline-variant hover:bg-surface-container-high transition-colors">
                    <span class="material-symbols-outlined">chevron_left</span>
                </button>
                <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-on-tertiary-container text-white font-label-lg text-label-lg">1</button>
                <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-outline-variant hover:bg-surface-container-high transition-colors font-label-lg text-label-lg">2</button>
                <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-outline-variant hover:bg-surface-container-high transition-colors font-label-lg text-label-lg">3</button>
                <span class="px-2 text-outline">...</span>
                <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-outline-variant hover:bg-surface-container-high transition-colors font-label-lg text-label-lg">12</button>
                <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-outline-variant hover:bg-surface-container-high transition-colors">
                    <span class="material-symbols-outlined">chevron_right</span>
                </button>
            </div>
        </div>
    </div>
</main>
<!-- Footer -->
<footer class="bg-primary-container full-width mt-auto">
    <div class="flex flex-col md:flex-row justify-between items-center w-full px-margin-desktop py-12 max-w-container-max mx-auto gap-8">
        <div class="flex flex-col items-center md:items-start gap-4">
            <span class="font-headline-md text-headline-md font-bold text-on-tertiary-container">SeminarKu</span>
            <p class="font-body-md text-body-md text-on-primary-container max-w-xs text-center md:text-left">
                Platform terbaik untuk menemukan dan mengelola seminar berkualitas.
            </p>
        </div>
        <div class="flex flex-wrap justify-center gap-8">
            <a class="font-body-md text-body-md text-on-primary-container hover:text-on-tertiary-container hover:underline transition-all" href="{{ route('home') }}">Home</a>
            <a class="font-body-md text-body-md text-on-primary-container hover:text-on-tertiary-container hover:underline transition-all" href="{{ route('events.index') }}">Acara</a>
            <a class="font-body-md text-body-md text-on-primary-container hover:text-on-tertiary-container hover:underline transition-all" href="#">Tentang</a>
            <a class="font-body-md text-body-md text-on-primary-container hover:text-on-tertiary-container hover:underline transition-all" href="#">Privacy Policy</a>
            <a class="font-body-md text-body-md text-on-primary-container hover:text-on-tertiary-container hover:underline transition-all" href="#">Terms of Service</a>
        </div>
    </div>
    <div class="border-t border-on-primary-container/10 py-6 text-center">
        <p class="font-body-md text-body-md text-on-primary-container/60">© 2024 SeminarKu. All rights reserved.</p>
    </div>
</footer>
@endsection
