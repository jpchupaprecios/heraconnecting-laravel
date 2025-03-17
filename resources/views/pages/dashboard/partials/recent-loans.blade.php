{{-- resources/views/components/recent-loans.blade.php --}}

@php
    $loans = [
        [
            "id" => "LOAN-2023-001",
            "address" => "123 Main St, New York, NY",
            "amount" => "$1,250,000",
            "status" => "Approved",
            "date" => "Mar 12, 2025",
            "borrower" => "John Smith",
            "initials" => "JS",
        ],
        [
            "id" => "LOAN-2023-002",
            "address" => "456 Park Ave, Los Angeles, CA",
            "amount" => "$850,000",
            "status" => "In Review",
            "date" => "Mar 10, 2025",
            "borrower" => "Sarah Johnson",
            "initials" => "SJ",
        ],
        [
            "id" => "LOAN-2023-003",
            "address" => "789 Oak Dr, Miami, FL",
            "amount" => "$2,100,000",
            "status" => "Pending",
            "date" => "Mar 8, 2025",
            "borrower" => "Michael Brown",
            "initials" => "MB",
        ],
        [
            "id" => "LOAN-2023-004",
            "address" => "321 Pine St, Chicago, IL",
            "amount" => "$750,000",
            "status" => "Approved",
            "date" => "Mar 5, 2025",
            "borrower" => "Emily Davis",
            "initials" => "ED",
        ],
        [
            "id" => "LOAN-2023-005",
            "address" => "654 Maple Ave, Houston, TX",
            "amount" => "$1,500,000",
            "status" => "Funded",
            "date" => "Mar 3, 2025",
            "borrower" => "Robert Wilson",
            "initials" => "RW",
        ],
    ];
@endphp

<div class="space-y-4">
    @foreach($loans as $loan)
        <div class="flex items-center justify-between space-x-4">
            <div class="flex items-center space-x-4">
                <div class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full">
                    <div class="flex h-full w-full items-center justify-center rounded-full bg-muted text-sm font-medium">
                        {{ $loan['initials'] }}
                    </div>
                </div>
                <div>
                    <p class="text-sm font-medium leading-none">{{ $loan['borrower'] }}</p>
                    <p class="text-sm text-muted-foreground">{{ $loan['address'] }}</p>
                </div>
            </div>
            <div class="flex items-center space-x-2">
                <p class="text-sm font-medium">{{ $loan['amount'] }}</p>
                @php
                    $badgeClass = match($loan['status']) {
                        'Approved' => 'border-transparent bg-primary text-primary-foreground',
                        'In Review' => 'border-transparent bg-secondary text-secondary-foreground',
                        'Pending' => 'text-foreground',
                        'Funded' => 'border-transparent bg-emerald-500 text-emerald-50',
                        default => 'border-transparent bg-primary text-primary-foreground'
                    };
                @endphp
                <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 {{ $badgeClass }}">
                {{ $loan['status'] }}
            </span>
            </div>
        </div>
    @endforeach
</div>
