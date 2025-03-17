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
use App\Http\Controllers\InvestorsController;
use App\Http\Controllers\UnderwriterController;
use App\Http\Controllers\DSCRController;
use App\Http\Controllers\LoanappController;
use App\Http\Controllers\NotificationsController;
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

    // AGREGAR ACA DEBAJO
    // Enlaces directos principales
    Route::get('loanapp', [LoanappController::class, 'loanapp'])->name('loanapp.index');
    Route::get('dscr', [DSCRController::class, 'dscr'])->name('dscr.index');
    Route::get('underwriter', [UnderwriterController::class, 'underwriter'])->name('underwriter.index');
    Route::get('draws/funded', [DrawController::class, 'funded'])->name('draws.funded');

    // Documentos
    Route::get('documents/loanapp', [DocumentController::class, 'loanapp'])->name('documents.loanapp');
    Route::get('documents/loi', [DocumentController::class, 'loi'])->name('documents.loi');
    Route::get('documents/loandoc', [DocumentController::class, 'loandoc'])->name('documents.loandoc');
    Route::get('documents/reactiveloanpp', [DocumentController::class, 'reactiveloanpp'])->name('documents.reactiveloanpp');
    Route::get('documents/website-requests', [DocumentController::class, 'websiteRequests'])->name('documents.website-requests');

    // Dashboard
    Route::get('dashboard/loans', [DashboardController::class, 'loans'])->name('dashboard.loans');
    Route::get('dashboard/draws', [DashboardController::class, 'draws'])->name('dashboard.draws');
    Route::get('dashboard/servicing', [DashboardController::class, 'servicing'])->name('dashboard.servicing');

    // Processes
    Route::get('processes/closed-loans', [ProcessController::class, 'closedLoans'])->name('processes.closed-loans');
    Route::get('processes/search-loans', [ProcessController::class, 'searchLoans'])->name('processes.search-loans');

    // Draws
    Route::get('draws/inspection-request', [DrawController::class, 'inspectionRequest'])->name('draws.inspection-request');
    Route::get('draws/project', [DrawController::class, 'project'])->name('draws.project');
    Route::get('draws/sold-loans', [DrawController::class, 'soldLoans'])->name('draws.sold-loans');
    Route::get('draws/old-project', [DrawController::class, 'oldProject'])->name('draws.old-project');
    Route::get('draws/orders', [DrawController::class, 'orders'])->name('draws.orders');
    Route::get('draws/loan-order', [DrawController::class, 'loanOrder'])->name('draws.loan-order');
    Route::get('draws/request-form', [DrawController::class, 'requestForm'])->name('draws.request-form');
    Route::get('draws/mortgage-statement', [DrawController::class, 'mortgageStatement'])->name('draws.mortgage-statement');
    Route::get('draws/budget-review', [DrawController::class, 'budgetReview'])->name('draws.budget-review');
    Route::get('draws/list-budget-review', [DrawController::class, 'listBudgetReview'])->name('draws.list-budget-review');

    // Capital Partner
    Route::get('partners/tapes', [PartnerController::class, 'tapes'])->name('partners.tapes');
    Route::get('partners/wallet', [PartnerController::class, 'wallet'])->name('partners.wallet');
    Route::get('partners/capital-partner', [PartnerController::class, 'capitalPartner'])->name('partners.capital-partner');
    Route::get('partners/netfunding', [PartnerController::class, 'netfunding'])->name('partners.netfunding');
    Route::get('partners/fci-boarding-tape', [PartnerController::class, 'fciBoardingTape'])->name('partners.fci-boarding-tape');

    // Servicing
    Route::get('servicing/payoff-requests', [ServicingController::class, 'payoffRequests'])->name('servicing.payoff-requests');
    Route::get('servicing/sold-loans', [ServicingController::class, 'soldLoans'])->name('servicing.sold-loans');
    Route::get('servicing/payment-reminder', [ServicingController::class, 'paymentReminder'])->name('servicing.payment-reminder');
    Route::get('servicing/batch-insurance', [ServicingController::class, 'batchInsurance'])->name('servicing.batch-insurance');
    Route::get('servicing/expired-insurance', [ServicingController::class, 'expiredInsurance'])->name('servicing.expired-insurance');
    Route::get('servicing/loan-extension', [ServicingController::class, 'loanExtension'])->name('servicing.loan-extension');
    Route::get('servicing/record-draws', [ServicingController::class, 'recordDraws'])->name('servicing.record-draws');
    Route::get('servicing/reviews-doc', [ServicingController::class, 'reviewsDoc'])->name('servicing.reviews-doc');
    Route::get('servicing/title-policy', [ServicingController::class, 'titlePolicy'])->name('servicing.title-policy');
    Route::get('servicing/loans-company', [ServicingController::class, 'loansCompany'])->name('servicing.loans-company');
    Route::get('servicing/onboarding', [ServicingController::class, 'onboarding'])->name('servicing.onboarding');
    Route::get('servicing/nsf-late-ach', [ServicingController::class, 'nsfLateAch'])->name('servicing.nsf-late-ach');
    Route::get('servicing/closing-docs', [ServicingController::class, 'closingDocs'])->name('servicing.closing-docs');

    // Investors
    Route::get('investors/participants', [InvestorsController::class, 'participants'])->name('investors.participants');
    Route::get('investors/ach-els', [InvestorsController::class, 'achEls'])->name('investors.ach-els');

    Route::get('notifications', [NotificationsController::class, 'index'])->name('notifications.index');

});

require __DIR__.'/auth.php';
