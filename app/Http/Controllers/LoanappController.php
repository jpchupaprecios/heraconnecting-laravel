<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoanApp;
class LoanappController extends Controller
{
    public function index()
    {
        $loanapp = [];//Loan::all();
        return view('pages.loanapp.index', compact('loanapp'));
    }
}
