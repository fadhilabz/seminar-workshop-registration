<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Payment::with(['registration.user', 'registration.event'])->latest()->paginate(10);
        $pendingCount = Payment::where('status', 'pending')->count();
        $confirmedCount = Payment::where('status', 'confirmed')->count();
        $rejectedCount = Payment::where('status', 'rejected')->count();

        return view('admin.payments.index', compact('payments', 'pendingCount', 'confirmedCount', 'rejectedCount'));
    }

    public function show($id)
    {
        $payment = Payment::with(['registration.user', 'registration.event'])->findOrFail($id);
        return view('admin.payments.show', compact('payment'));
    }

    public function update(Request $request, string $id)
    {
        $payment = Payment::findOrFail($id);
        $status = $request->input('status');

        if (in_array($status, ['confirmed', 'rejected', 'pending'])) {
            $payment->update([
                'status' => $status,
                'verified_at' => $status === 'confirmed' ? now() : null,
            ]);
            return redirect()->back()->with('success', 'Status pembayaran berhasil diperbarui.');
        }

        return redirect()->back()->with('error', 'Status pembayaran tidak valid.');
    }

    public function destroy(string $id)
    {
        $payment = Payment::findOrFail($id);
        $payment->delete();

        return redirect()->back()->with('success', 'Data pembayaran berhasil dihapus.');
    }
}
