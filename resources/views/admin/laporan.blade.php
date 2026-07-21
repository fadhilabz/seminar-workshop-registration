@extends('layouts.admin')
@section('title', 'Laporan Statistik')
@section('content')
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Custom Header -->
<header class="bg-primary-container text-white px-margin-desktop py-12 flex flex-col justify-center">
<h1 class="font-headline-lg text-headline-lg">Laporan &amp; Statistik</h1>
<p class="font-body-md text-body-md opacity-80 mt-1">Ringkasan data seminar dan workshop</p>
</header>
<!-- Content Canvas -->
<div class="px-margin-desktop -mt-8 space-y-6 pb-12">
<!-- Filter Row -->
<div class="bg-surface-container-lowest rounded-xl p-4 flex flex-col md:flex-row justify-between items-center card-elevation">
<div class="flex items-center gap-4 w-full md:w-auto">
<label class="font-label-lg text-on-surface-variant">Periode:</label>
<select class="bg-surface-container-low border border-outline-variant/30 rounded-lg px-4 py-2 font-body-md text-on-surface focus:ring-2 focus:ring-secondary outline-none transition-all">
<option>Minggu ini</option>
<option selected="">Bulan ini</option>
<option>Tahun ini</option>
</select>
</div>
<button class="mt-4 md:mt-0 w-full md:w-auto bg-[#028090] text-white px-6 py-2.5 rounded-lg font-label-lg flex items-center justify-center gap-2 hover:brightness-110 active:scale-95 transition-all">
<span class="material-symbols-outlined text-[20px]">picture_as_pdf</span>
                    Export PDF
                </button>
</div>
<!-- Stats Row -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter">
<!-- Card 1 -->
<div class="bg-surface-container-lowest p-6 rounded-[24px] card-elevation flex flex-col border border-outline-variant/10">
<div class="flex justify-between items-start mb-4">
<div class="p-3 bg-secondary-container rounded-xl text-on-secondary-container">
<span class="material-symbols-outlined">payments</span>
</div>
<span class="text-secondary font-label-md bg-secondary/10 px-2 py-1 rounded-full">+12%</span>
</div>
<span class="font-label-md text-on-surface-variant uppercase tracking-wider">Total Pendapatan</span>
<span class="font-headline-md text-headline-md text-on-surface mt-1">Rp 52.500.000</span>
</div>
<!-- Card 2 -->
<div class="bg-surface-container-lowest p-6 rounded-[24px] card-elevation flex flex-col border border-outline-variant/10">
<div class="flex justify-between items-start mb-4">
<div class="p-3 bg-tertiary-fixed rounded-xl text-on-tertiary-fixed">
<span class="material-symbols-outlined">group</span>
</div>
<span class="text-tertiary font-label-md bg-tertiary-fixed-dim/20 px-2 py-1 rounded-full">+8%</span>
</div>
<span class="font-label-md text-on-surface-variant uppercase tracking-wider">Total Peserta</span>
<span class="font-headline-md text-headline-md text-on-surface mt-1">348</span>
</div>
<!-- Card 3 -->
<div class="bg-surface-container-lowest p-6 rounded-[24px] card-elevation flex flex-col border border-outline-variant/10">
<div class="flex justify-between items-start mb-4">
<div class="p-3 bg-primary-fixed rounded-xl text-on-primary-fixed">
<span class="material-symbols-outlined">task_alt</span>
</div>
</div>
<span class="font-label-md text-on-surface-variant uppercase tracking-wider">Acara Selesai</span>
<span class="font-headline-md text-headline-md text-on-surface mt-1">18</span>
</div>
<!-- Card 4 -->
<div class="bg-surface-container-lowest p-6 rounded-[24px] card-elevation flex flex-col border border-outline-variant/10">
<div class="flex justify-between items-start mb-4">
<div class="p-3 bg-surface-container-highest rounded-xl text-on-surface">
<span class="material-symbols-outlined">analytics</span>
</div>
</div>
<span class="font-label-md text-on-surface-variant uppercase tracking-wider">Rata-rata Peserta</span>
<span class="font-headline-md text-headline-md text-on-surface mt-1">19/acara</span>
</div>
</div>
<!-- Bento Grid Content -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
<!-- Chart Placeholder -->
<div class="lg:col-span-2 bg-surface-container-lowest p-8 rounded-[24px] card-elevation border border-outline-variant/10 flex flex-col h-[420px]">
<div class="flex justify-between items-center mb-8">
<h3 class="font-headline-md text-on-surface">Grafik Pendaftaran per Bulan</h3>
<div class="flex gap-2">
<span class="flex items-center gap-1 font-label-md text-on-surface-variant">
<span class="w-3 h-3 bg-secondary rounded-full"></span> Peserta
                            </span>
</div>
</div>
<div class="flex-1 bg-[#E8F4F8] border-2 border-dashed border-outline-variant/50 rounded-xl relative flex items-end justify-between px-8 py-4 overflow-hidden">
<!-- Simulated Bar Chart -->
<div class="flex flex-col items-center flex-1">
<div class="bar-animate w-8 sm:w-12 bg-secondary/80 rounded-t-lg" style="height: 45%;"></div>
<span class="mt-2 font-label-md text-on-surface-variant">Jan</span>
</div>
<div class="flex flex-col items-center flex-1">
<div class="bar-animate w-8 sm:w-12 bg-secondary/80 rounded-t-lg" style="height: 60%; animation-delay: 0.1s;"></div>
<span class="mt-2 font-label-md text-on-surface-variant">Feb</span>
</div>
<div class="flex flex-col items-center flex-1">
<div class="bar-animate w-8 sm:w-12 bg-secondary/80 rounded-t-lg" style="height: 35%; animation-delay: 0.2s;"></div>
<span class="mt-2 font-label-md text-on-surface-variant">Mar</span>
</div>
<div class="flex flex-col items-center flex-1">
<div class="bar-animate w-8 sm:w-12 bg-secondary/80 rounded-t-lg" style="height: 85%; animation-delay: 0.3s;"></div>
<span class="mt-2 font-label-md text-on-surface-variant">Apr</span>
</div>
<div class="flex flex-col items-center flex-1">
<div class="bar-animate w-8 sm:w-12 bg-secondary/80 rounded-t-lg" style="height: 55%; animation-delay: 0.4s;"></div>
<span class="mt-2 font-label-md text-on-surface-variant">Mei</span>
</div>
<div class="flex flex-col items-center flex-1">
<div class="bar-animate w-8 sm:w-12 bg-secondary/80 rounded-t-lg" style="height: 70%; animation-delay: 0.5s;"></div>
<span class="mt-2 font-label-md text-on-surface-variant">Jun</span>
</div>
</div>
</div>
<!-- Secondary Info Panel -->
<div class="bg-primary text-on-primary p-8 rounded-[24px] card-elevation flex flex-col justify-between overflow-hidden relative">

<div class="relative z-10">
<h3 class="font-headline-md mb-2">Insight AI</h3>
<p class="font-body-md opacity-70">Berdasarkan data bulan ini, pendaftaran meningkat 15% pada hari Selasa dan Rabu. Pertimbangkan untuk meluncurkan promosi di hari tersebut.</p>
</div>
<div class="relative z-10 mt-8 space-y-4">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed">
<span class="material-symbols-outlined">trending_up</span>
</div>
<div>
<div class="font-label-lg">Pertumbuhan Peserta</div>
<div class="font-body-md opacity-70">+124 peserta baru</div>
</div>
</div>
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-tertiary-fixed flex items-center justify-center text-on-tertiary-fixed">
<span class="material-symbols-outlined">star</span>
</div>
<div>
<div class="font-label-lg">Rating Kepuasan</div>
<div class="font-body-md opacity-70">4.8 / 5.0 (Rata-rata)</div>
</div>
</div>
</div>
<button class="relative z-10 mt-8 w-full py-3 bg-white text-primary font-label-lg rounded-lg hover:bg-opacity-90 transition-all">
                        Lihat Detail Analitik
                    </button>
</div>
</div>
<!-- Table Section -->
<div class="bg-surface-container-lowest rounded-[24px] card-elevation border border-outline-variant/10 overflow-hidden">
<div class="px-8 py-6 border-b border-outline-variant/20 flex justify-between items-center">
<h3 class="font-headline-md text-on-surface">Acara Terpopuler</h3>
<button class="text-secondary font-label-lg hover:underline">Lihat Semua</button>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead class="bg-surface-container text-on-surface-variant font-label-lg uppercase tracking-wider">
<tr>
<th class="px-8 py-4 font-medium">Nama Acara</th>
<th class="px-8 py-4 font-medium">Peserta</th>
<th class="px-8 py-4 font-medium">Pendapatan</th>
<th class="px-8 py-4 font-medium">Status</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/10 font-body-md text-on-surface">
<tr class="hover:bg-secondary/5 transition-colors group">
<td class="px-8 py-5">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-variant flex items-center justify-center text-secondary">
<span class="material-symbols-outlined">code</span>
</div>
<span class="font-semibold">Web Development Bootcamp 2024</span>
</div>
</td>
<td class="px-8 py-5">120</td>
<td class="px-8 py-5">Rp 18.000.000</td>
<td class="px-8 py-5">
<span class="bg-secondary/10 text-secondary px-3 py-1 rounded-full text-label-md font-bold uppercase">Berjalan</span>
</td>
</tr>
<tr class="hover:bg-secondary/5 transition-colors group">
<td class="px-8 py-5">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-variant flex items-center justify-center text-secondary">
<span class="material-symbols-outlined">brush</span>
</div>
<span class="font-semibold">UI/UX Design Strategy</span>
</div>
</td>
<td class="px-8 py-5">85</td>
<td class="px-8 py-5">Rp 12.750.000</td>
<td class="px-8 py-5">
<span class="bg-tertiary-fixed/30 text-on-tertiary-fixed-variant px-3 py-1 rounded-full text-label-md font-bold uppercase">Selesai</span>
</td>
</tr>
<tr class="hover:bg-secondary/5 transition-colors group">
<td class="px-8 py-5">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-variant flex items-center justify-center text-secondary">
<span class="material-symbols-outlined">trending_up</span>
</div>
<span class="font-semibold">Digital Marketing Masterclass</span>
</div>
</td>
<td class="px-8 py-5">98</td>
<td class="px-8 py-5">Rp 14.700.000</td>
<td class="px-8 py-5">
<span class="bg-tertiary-fixed/30 text-on-tertiary-fixed-variant px-3 py-1 rounded-full text-label-md font-bold uppercase">Selesai</span>
</td>
</tr>
<tr class="hover:bg-secondary/5 transition-colors group">
<td class="px-8 py-5">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-variant flex items-center justify-center text-secondary">
<span class="material-symbols-outlined">data_object</span>
</div>
<span class="font-semibold">Data Science for Business</span>
</div>
</td>
<td class="px-8 py-5">45</td>
<td class="px-8 py-5">Rp 7.050.000</td>
<td class="px-8 py-5">
<span class="bg-secondary/10 text-secondary px-3 py-1 rounded-full text-label-md font-bold uppercase">Berjalan</span>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
@endsection
