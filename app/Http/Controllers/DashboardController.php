<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use App\Models\Payment;
class DashboardController extends Controller
{
    public function index()
    {
        // Lógica para obtener datos para el dashboard
        $recentLoans = Loan::orderBy('date', 'desc')->take(5)->get();
        $upcomingPayments = Payment::where('status', 'Upcoming')->orderBy('due_date')->take(5)->get();

        return view('pages.dashboard.index', compact('recentLoans', 'upcomingPayments'));
    }
}
