<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\ExtensionController;
use App\Http\Controllers\DrawController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ServicingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Partners
    Route::resource('partners', PartnerController::class);

    // Portfolios
    Route::resource('portfolios', PortfolioController::class);

    // Loans
    Route::get('loans/pipeline', [LoanController::class, 'pipeline'])->name('loans.pipeline');
    Route::resource('loans', LoanController::class);

    // Payments
    Route::resource('payments', PaymentController::class);

    // Insurances
    Route::resource('insurances', InsuranceController::class);

    // Extensions
    Route::resource('extensions', ExtensionController::class);

    // Draws
    Route::resource('draws', DrawController::class);

    // Processes
    Route::resource('processes', ProcessController::class);

    // Documents
    Route::resource('documents', DocumentController::class);

    // Servicing
    Route::get('servicing', [ServicingController::class, 'index'])->name('servicing.index');
});

require __DIR__.'/auth.php';
