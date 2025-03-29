<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$loanApp = LoanApp::all();
        $loan = new \stdClass();

        // ID y datos básicos
        $loan->id = 1;
        $loan->property_address = '123 Fake Street';
        $loan->city = 'Example City';
        $loan->state = 'FL';
        $loan->zip = '33000';
        $loan->county = 'Dade';

        // Roles y asignaciones
        $loan->processor_specialist = '216';    // Ej. "ALEXANDRA GARCIA B"
        $loan->processor_analyst = '210';      // Ej. "ANA FEDERICA AGUIAR"
        $loan->account_rep = '650';            // Ej. "AaróN GarcíA"
        $loan->broker_party = 'machi leads';   // Ej. "machi leads"

        // Campos adicionales que usa tu vista
        $loan->property_type = '1'; // Single Family
        $loan->is_new_construction = false;
        $loan->number_of_properties = 1;
        $loan->number_of_units = 2;
        $loan->occupancy = '1'; // Rented
        $loan->pre_rehab_sqft = 1200;
        $loan->post_rehab_sqft = 1400;
        $loan->legal_description = 'Lot 25, Block 3, Example Subdivision';
        $loan->apn = '12345-67890';

        // Data for evaluation
        $loan->acquisition_date = '2025-01-01';
        $loan->purchase_price = 150000;
        $loan->budget = 50000;
        $loan->cost_spent_to_date = 10000;
        $loan->appraisal_date = '2025-02-15';
        $loan->appraisal_source = '1'; // AMC

        // Property Insurance
        $loan->property_insurance_policy_number = 'ABC123';
        $loan->property_insurance_expiration_date = '2026-01-01';

        // General Liability Insurance
        $loan->general_liability_insurance_policy_number = 'XYZ987';
        $loan->general_liability_insurance_expiration_date = '2026-06-01';

        // Flood Insurance
        $loan->flood_insurance_policy_number = 'FLOOD999';
        $loan->flood_insurance_monthly_cost = 120.00;
        $loan->flood_insurance_average_3months = 110.00;
        $loan->flood_insurance_expiration_date = '2026-08-01';

        // Gastos anuales y renta
        $loan->annual_taxes = 2500;
        $loan->annual_insurance = 1200;
        $loan->annual_hoa = 600;
        $loan->is_currently_rented = true;
        $loan->market_rent = 1300;
        $loan->actual_rent = 1200;

        // Valoraciones
        $loan->aiv = 200000;
        $loan->arv = 230000;

        // Contacto
        $loan->contact_point_trinity_name = 'John Doe';
        $loan->contact_point_trinity_phone = '555-1234';

        // Creamos una lista de "tareas" (también stdClass o array de objetos)
        $task1 = new \stdClass();
        $task1->description = 'Define The Processor Of This Loan';
        $task1->status = 'Active';
        $task1->assigned_to = 'Santiago Chacon';
        $task1->notes = 'Lorem ipsum dolor sit amet';

        $task2 = new \stdClass();
        $task2->description = 'Define Pre-Rehab Sq. Ft';
        $task2->status = 'Pending';
        $task2->assigned_to = 'Santiago Chacon';
        $task2->notes = 'Se requiere verificar las dimensiones';

        // Añadimos las tareas al loan
        // (Puedes hacerlo como un array normal o una Collection)
        $loan->tasks = [$task1, $task2];
        return view('pages.chat.index', compact('loan'));
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
