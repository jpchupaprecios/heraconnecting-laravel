{{-- resources/views/components/upcoming-payments.blade.php --}}

@php
    $payments = [
        [
            "id" => "PAY-2023-001",
            "loanId" => "LOAN-2023-001",
            "amount" => "$12,500",
            "dueDate" => "Mar 15, 2025",
            "status" => "Upcoming",
        ],
        [
            "id" => "PAY-2023-002",
            "loanId" => "LOAN-2022-045",
            "amount" => "$8,750",
            "dueDate" => "Mar 18, 2025",
            "status" => "Upcoming",
        ],
        [
            "id" => "PAY-2023-003",
            "loanId" => "LOAN-2023-003",
            "amount" => "$21,000",
            "dueDate" => "Mar 20, 2025",
            "status" => "Upcoming",
        ],
        [
            "id" => "PAY-2023-004",
            "loanId" => "LOAN-2022-078",
            "amount" => "$7,500",
            "dueDate" => "Mar 25, 2025",
            "status" => "Upcoming",
        ],
        [
            "id" => "PAY-2023-005",
            "loanId" => "LOAN-2023-005",
            "amount" => "$15,000",
            "dueDate" => "Mar 30, 2025",
            "status" => "Upcoming",
        ],
    ];
@endphp

<div class="space-y-4">
    @foreach($payments as $payment)
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium">{{ $payment['loanId'] }}</p>
                <p class="text-sm text-muted-foreground">Due: {{ $payment['dueDate'] }}</p>
            </div>
            <div class="flex items-center space-x-2">
                <p class="text-sm font-medium">{{ $payment['amount'] }}</p>
                <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-primary/50 text-foreground">
                {{ $payment['status'] }}
            </span>
            </div>
        </div>
    @endforeach
</div>
