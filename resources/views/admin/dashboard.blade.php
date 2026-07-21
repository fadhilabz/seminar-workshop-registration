@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    <!-- Card 1 -->
    <div class="card border-t-4 border-[#028090]">
        <div class="p-6">
            <div class="text-sm text-gray-500 uppercase font-semibold">Total Acara</div>
            <div class="text-3xl font-bold mt-2 text-[#0D2137]">{{ $totalEvents ?? 0 }}</div>
        </div>
    </div>
    <!-- Card 2 -->
    <div class="card border-t-4 border-[#02C39A]">
        <div class="p-6">
            <div class="text-sm text-gray-500 uppercase font-semibold">Total Peserta</div>
            <div class="text-3xl font-bold mt-2 text-[#0D2137]">{{ $totalRegistrations ?? 0 }}</div>
        </div>
    </div>
    <!-- Card 3 -->
    <div class="card border-t-4 border-[#0D2137]">
        <div class="p-6">
            <div class="text-sm text-gray-500 uppercase font-semibold">Menunggu Verifikasi</div>
            <div class="text-3xl font-bold mt-2 text-[#0D2137]">{{ $pendingPayments ?? 0 }}</div>
        </div>
    </div>
    <!-- Card 4 -->
    <div class="card border-t-4 border-[#028090]">
        <div class="p-6">
            <div class="text-sm text-gray-500 uppercase font-semibold">Total Sertifikat</div>
            <div class="text-3xl font-bold mt-2 text-[#0D2137]">{{ $totalCertificates ?? 0 }}</div>
        </div>
    </div>
</div>
@endsection
