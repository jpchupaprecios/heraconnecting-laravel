{{-- resources/views/pages/loans/index.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-between p-6">
        <div>
            <h1 class="text-3xl font-bold tracking-tight">Loans</h1>
            <p class="text-muted-foreground">Manage and track all loan applications</p>
        </div>
        <button class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4">
                <path d="M5 12h14"></path>
                <path d="M12 5v14"></path>
            </svg>
            New Loan
        </button>
    </div>
    <div class="p-6 pt-0 space-y-4">
        @include('pages.loans.partials.loans-filter')

        <div x-data="{ activeTab: 'table' }" class="space-y-4">
            <div class="inline-flex h-10 items-center justify-center rounded-md bg-muted p-1 text-muted-foreground">
                <button
                    @click="activeTab = 'table'"
                    :class="{ 'bg-background text-foreground shadow-sm': activeTab === 'table' }"
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50">
                    Table View
                </button>
                <button
                    @click="activeTab = 'pipeline'"
                    :class="{ 'bg-background text-foreground shadow-sm': activeTab === 'pipeline' }"
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50">
                    Pipeline View
                </button>
            </div>

            <div x-show="activeTab === 'table'" class="space-y-4">
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                    <div class="flex flex-col space-y-1.5 p-6 pb-0">
                        <h3 class="text-2xl font-semibold leading-none tracking-tight">All Loans</h3>
                        <p class="text-sm text-muted-foreground">A comprehensive list of all loan applications</p>
                    </div>
                    <div class="p-6">
                        @include('pages.loans.partials.loans-table')
                    </div>
                </div>
            </div>

            <div x-show="activeTab === 'pipeline'" class="space-y-4" style="display: none;">
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                    <div class="flex flex-col space-y-1.5 p-6 pb-0">
                        <h3 class="text-2xl font-semibold leading-none tracking-tight">Loan Pipeline</h3>
                        <p class="text-sm text-muted-foreground">View loans by their current status</p>
                    </div>
                    <div class="p-6">
                        @include('pages.loans.partials.loans-pipeline')
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
