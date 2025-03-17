<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loans = Loan::all();
        return view('pages.loans.index', compact('loans'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Loan $loan)
    {
        return view('pages.loans.show', compact('loan'));
    }

    public function pipeline()
    {
        // Lógica para obtener préstamos por estado para la vista pipeline
        $pipeline = [
            'Application' => Loan::where('status', 'Application')->get(),
            'Under Review' => Loan::where('status', 'In Review')->get(),
            'Pending Approval' => Loan::where('status', 'Pending')->get(),
            'Approved' => Loan::where('status', 'Approved')->get(),
            'Funded' => Loan::where('status', 'Funded')->get(),
            'Closed' => Loan::where('status', 'Closed')->get(),
        ];

        return view('pages.loans.pipeline', compact('pipeline'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
