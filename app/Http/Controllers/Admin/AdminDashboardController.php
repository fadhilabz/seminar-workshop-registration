<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Registration;
use App\Models\Payment;
use App\Models\Certificate;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalEvents = Event::count();
        $totalRegistrations = Registration::count();
        $pendingPayments = Payment::where('status', 'pending')->count();
        $totalCertificates = Certificate::count();

        return view('admin.dashboard', compact(
            'totalEvents',
            'totalRegistrations',
            'pendingPayments',
            'totalCertificates'
        ));
    }
}
