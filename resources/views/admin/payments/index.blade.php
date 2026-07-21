@extends('layouts.admin')

@section('title', 'Verifikasi Pembayaran')

@section('content')
<div class="w-full space-y-6">
    <!-- Flash Success Message -->
    @if (session('success'))
        <div class="bg-tertiary-fixed text-on-tertiary-fixed font-label-lg text-label-lg p-4 rounded-xl shadow-md flex items-center gap-3 border border-on-tertiary-container/20" id="flash-message">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">check_circle</span>
            <span>{{ session('success') }}</span>
            <button class="ml-auto" onclick="document.getElementById('flash-message').remove()">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
    @endif

    <!-- Subheader -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <p class="text-sm text-on-surface-variant">Kelola dan validasi bukti transfer peserta seminar secara efisien dan akurat dari database.</p>
    </div>

    <!-- Top Stats Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <div class="bg-surface-container-lowest p-5 rounded-2xl border border-outline-variant/30 shadow-sm flex items-center gap-4">
            <div class="w-12 h-12 rounded-xl bg-secondary-container/20 flex items-center justify-center text-secondary">
                <span class="material-symbols-outlined text-2xl">pending_actions</span>
            </div>
            <div>
                <p class="text-xs font-semibold text-on-surface-variant uppercase tracking-wider">Menunggu</p>
                <h3 class="text-2xl font-bold text-on-surface">{{ $pendingCount ?? 0 }}</h3>
            </div>
        </div>

        <div class="bg-surface-container-lowest p-5 rounded-2xl border border-outline-variant/30 shadow-sm flex items-center gap-4">
            <div class="w-12 h-12 rounded-xl bg-[#02C39A]/10 flex items-center justify-center text-[#009a79]">
                <span class="material-symbols-outlined text-2xl">check_circle</span>
            </div>
            <div>
                <p class="text-xs font-semibold text-on-surface-variant uppercase tracking-wider">Dikonfirmasi</p>
                <h3 class="text-2xl font-bold text-on-surface">{{ $confirmedCount ?? 0 }}</h3>
            </div>
        </div>

        <div class="bg-surface-container-lowest p-5 rounded-2xl border border-outline-variant/30 shadow-sm flex items-center gap-4">
            <div class="w-12 h-12 rounded-xl bg-error-container/30 flex items-center justify-center text-error">
                <span class="material-symbols-outlined text-2xl">cancel</span>
            </div>
            <div>
                <p class="text-xs font-semibold text-on-surface-variant uppercase tracking-wider">Ditolak</p>
                <h3 class="text-2xl font-bold text-on-surface">{{ $rejectedCount ?? 0 }}</h3>
            </div>
        </div>
    </div>

    <!-- Filters & Search Bar -->
    <div class="flex flex-col sm:flex-row justify-between items-stretch sm:items-center gap-4">
        <div class="flex gap-1.5 p-1 bg-surface-container rounded-xl w-full sm:w-auto">
            <a href="{{ route('admin.payments.index') }}" class="px-4 py-1.5 rounded-lg text-xs font-semibold bg-primary-container text-white shadow-sm transition-all">Semua</a>
            <a href="{{ route('admin.payments.index') }}?status=pending" class="px-4 py-1.5 rounded-lg text-xs font-semibold text-on-surface hover:bg-surface-container-highest transition-all">Menunggu</a>
            <a href="{{ route('admin.payments.index') }}?status=confirmed" class="px-4 py-1.5 rounded-lg text-xs font-semibold text-on-surface hover:bg-surface-container-highest transition-all">Selesai</a>
        </div>
        <div class="relative w-full sm:w-80">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-lg">search</span>
            <input class="w-full pl-10 pr-4 py-2 bg-surface-container-lowest border border-outline-variant rounded-xl focus:ring-2 focus:ring-secondary focus:border-secondary transition-all outline-none text-xs" placeholder="Cari nama peserta atau acara..." type="text" />
        </div>
    </div>

    <!-- Table Container -->
    <div class="bg-surface-container-lowest rounded-2xl shadow-sm overflow-hidden border border-outline-variant/30 w-full">
        
        <!-- Desktop Table View (md+) -->
        <div class="hidden md:block w-full overflow-x-auto">
            <table class="w-full text-left border-collapse text-sm">
                <thead>
                    <tr class="bg-surface-container-low border-b border-outline-variant/50 text-xs font-semibold text-primary uppercase tracking-wider">
                        <th class="px-3 py-3 text-center w-10">No</th>
                        <th class="px-3 py-3 whitespace-nowrap">Peserta</th>
                        <th class="px-3 py-3">Acara</th>
                        <th class="px-3 py-3 whitespace-nowrap">Tanggal</th>
                        <th class="px-3 py-3 whitespace-nowrap">Harga</th>
                        <th class="px-3 py-3 whitespace-nowrap">Bukti Transfer</th>
                        <th class="px-3 py-3 whitespace-nowrap">Status</th>
                        <th class="px-3 py-3 text-center whitespace-nowrap">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant/20 text-on-surface">
                    @forelse ($payments as $payment)
                        <tr class="hover:bg-surface-container-low/50 transition-colors">
                            <td class="px-3 py-3 text-center font-medium text-xs text-on-surface-variant">{{ $loop->iteration }}</td>
                            <td class="px-3 py-3 whitespace-nowrap">
                                <div class="flex items-center gap-2.5">
                                    <div class="w-8 h-8 rounded-full bg-primary-container/10 flex items-center justify-center text-primary-container font-bold text-xs">
                                        {{ strtoupper(substr($payment->registration->user->name ?? 'User', 0, 2)) }}
                                    </div>
                                    <div>
                                        <p class="font-semibold text-xs text-on-surface leading-tight">{{ $payment->registration->user->name ?? 'Peserta' }}</p>
                                        <p class="text-[11px] text-on-surface-variant">{{ $payment->registration->user->email ?? '-' }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-3 py-3">
                                <div class="max-w-[200px]">
                                    <span class="font-medium text-xs text-on-surface block leading-tight line-clamp-2">{{ $payment->registration->event->title ?? 'Acara' }}</span>
                                </div>
                            </td>
                            <td class="px-3 py-3 whitespace-nowrap text-xs text-on-surface-variant">
                                {{ \Carbon\Carbon::parse($payment->created_at)->format('d M Y') }}
                            </td>
                            <td class="px-3 py-3 whitespace-nowrap text-xs font-semibold text-on-surface">
                                @if (empty($payment->registration->event->price) || $payment->registration->event->price == 0)
                                    Free
                                @else
                                    Rp {{ number_format($payment->registration->event->price, 0, ',', '.') }}
                                @endif
                            </td>
                            <td class="px-3 py-3 whitespace-nowrap text-xs">
                                @if ($payment->proof_image)
                                    <a href="{{ Str::startsWith($payment->proof_image, 'http') ? $payment->proof_image : asset('storage/' . $payment->proof_image) }}" target="_blank" class="inline-flex items-center gap-1 text-secondary hover:underline font-medium">
                                        <span class="material-symbols-outlined text-[16px]">image</span> Lihat Bukti
                                    </a>
                                @else
                                    <span class="text-on-surface-variant text-xs font-italic">Tidak Ada</span>
                                @endif
                            </td>
                            <td class="px-3 py-3 whitespace-nowrap text-xs">
                                @if ($payment->status === 'confirmed' || $payment->status === 'dikonfirmasi')
                                    <span class="px-2.5 py-0.5 rounded-full bg-[#02C39A]/15 text-[#009a79] font-medium text-[11px] border border-[#02C39A]/30">Dikonfirmasi</span>
                                @elseif ($payment->status === 'rejected' || $payment->status === 'ditolak')
                                    <span class="px-2.5 py-0.5 rounded-full bg-error-container/40 text-error font-medium text-[11px] border border-error/20">Ditolak</span>
                                @else
                                    <span class="px-2.5 py-0.5 rounded-full bg-secondary-container/30 text-on-secondary-container font-medium text-[11px] border border-secondary-container/40">Menunggu</span>
                                @endif
                            </td>
                            <td class="px-3 py-3 whitespace-nowrap text-center text-xs">
                                @if ($payment->status === 'pending')
                                    <div class="flex items-center justify-center gap-1.5">
                                        <form action="{{ route('admin.payments.update', $payment->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="status" value="confirmed" />
                                            <button type="submit" class="p-1.5 bg-[#02C39A]/10 text-[#009a79] rounded-lg hover:bg-[#02C39A] hover:text-white transition-colors" title="Konfirmasi Pembayaran">
                                                <span class="material-symbols-outlined text-[18px]">check</span>
                                            </button>
                                        </form>
                                        <form action="{{ route('admin.payments.update', $payment->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="status" value="rejected" />
                                            <button type="submit" class="p-1.5 bg-error-container/30 text-error rounded-lg hover:bg-error hover:text-white transition-colors" title="Tolak Pembayaran">
                                                <span class="material-symbols-outlined text-[18px]">close</span>
                                            </button>
                                        </form>
                                    </div>
                                @else
                                    <span class="text-on-surface-variant text-[11px]">Terverifikasi</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="px-4 py-8 text-center text-on-surface-variant text-sm">
                                Belum ada data pembayaran terdaftar di database.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Mobile Card View (< md) -->
        <div class="block md:hidden p-4 space-y-4">
            @forelse ($payments as $payment)
                <div class="bg-surface-container-low border border-outline-variant/30 rounded-xl p-4 shadow-sm flex flex-col gap-3">
                    <div class="flex items-center justify-between gap-2 border-b border-outline-variant/20 pb-2">
                        <div class="flex items-center gap-2">
                            <div class="w-7 h-7 rounded-full bg-primary-container/10 flex items-center justify-center text-primary-container font-bold text-xs">
                                {{ strtoupper(substr($payment->registration->user->name ?? 'User', 0, 2)) }}
                            </div>
                            <div>
                                <p class="font-semibold text-xs text-on-surface">{{ $payment->registration->user->name ?? 'Peserta' }}</p>
                            </div>
                        </div>
                        <span class="px-2.5 py-0.5 rounded-full text-[11px] font-medium {{ $payment->status === 'confirmed' ? 'bg-[#02C39A]/15 text-[#009a79]' : ($payment->status === 'rejected' ? 'bg-error-container/40 text-error' : 'bg-secondary-container/30 text-on-secondary-container') }}">
                            {{ ucfirst($payment->status ?? 'Menunggu') }}
                        </span>
                    </div>

                    <div class="text-xs space-y-1">
                        <p class="font-medium text-primary text-sm">{{ $payment->registration->event->title ?? 'Judul Acara' }}</p>
                        <p class="text-on-surface-variant flex items-center gap-1">
                            <span class="material-symbols-outlined text-[15px]">calendar_today</span>
                            {{ \Carbon\Carbon::parse($payment->created_at)->format('d M Y') }}
                        </p>
                    </div>

                    <div class="flex items-center justify-between pt-1 border-t border-outline-variant/20 text-xs">
                        <div class="font-semibold text-on-surface text-sm">
                            @if (empty($payment->registration->event->price) || $payment->registration->event->price == 0)
                                Free
                            @else
                                Rp {{ number_format($payment->registration->event->price, 0, ',', '.') }}
                            @endif
                        </div>
                        @if ($payment->proof_image)
                            <a href="{{ Str::startsWith($payment->proof_image, 'http') ? $payment->proof_image : asset('storage/' . $payment->proof_image) }}" target="_blank" class="inline-flex items-center gap-1 text-secondary hover:underline font-medium">
                                <span class="material-symbols-outlined text-[16px]">image</span> Bukti Transfer
                            </a>
                        @endif
                    </div>

                    @if ($payment->status === 'pending')
                        <div class="flex items-center gap-2 pt-2 border-t border-outline-variant/30">
                            <form action="{{ route('admin.payments.update', $payment->id) }}" method="POST" class="flex-1">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="status" value="confirmed" />
                                <button type="submit" class="w-full py-2 px-3 bg-[#02C39A]/10 hover:bg-[#02C39A] text-[#009a79] hover:text-white text-xs font-medium rounded-lg flex items-center justify-center gap-1 transition-colors">
                                    <span class="material-symbols-outlined text-[16px]">check</span> Konfirmasi
                                </button>
                            </form>
                            <form action="{{ route('admin.payments.update', $payment->id) }}" method="POST" class="flex-1">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="status" value="rejected" />
                                <button type="submit" class="w-full py-2 px-3 bg-error-container/30 hover:bg-error text-error hover:text-white text-xs font-medium rounded-lg flex items-center justify-center gap-1 transition-colors">
                                    <span class="material-symbols-outlined text-[16px]">close</span> Tolak
                                </button>
                            </form>
                        </div>
                    @endif
                </div>
            @empty
                <div class="text-center py-8 text-on-surface-variant text-sm">
                    Belum ada data pembayaran.
                </div>
            @endforelse
        </div>

        <!-- Pagination Footer -->
        <div class="px-4 py-4 border-t border-outline-variant/30 flex items-center justify-between gap-4">
            @if (isset($payments) && method_exists($payments, 'links'))
                <div class="w-full">
                    {{ $payments->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
