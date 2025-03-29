{{-- resources/views/components/loans-pipeline.blade.php --}}

@php
    $pipelineStages = [
        [
            "title" => "Application",
            "loans" => [
                [
                    "id" => "LOAN-2023-011",
                    "borrower" => "Thomas Anderson",
                    "address" => "123 Matrix St, San Francisco, CA",
                    "amount" => "$1,200,000",
                    "date" => "Mar 14, 2025",
                ],
                [
                    "id" => "LOAN-2023-012",
                    "borrower" => "Olivia Parker",
                    "address" => "456 Ocean Ave, San Diego, CA",
                    "amount" => "$950,000",
                    "date" => "Mar 13, 2025",
                ],
                [
                    "id" => "LOAN-2023-013",
                    "borrower" => "William Chen",
                    "address" => "789 Mountain View, Portland, OR",
                    "amount" => "$1,100,000",
                    "date" => "Mar 12, 2025",
                ],
            ],
        ],
        [
            "title" => "Under Review",
            "loans" => [
                [
                    "id" => "LOAN-2023-002",
                    "borrower" => "Sarah Johnson",
                    "address" => "456 Park Ave, Los Angeles, CA",
                    "amount" => "$850,000",
                    "date" => "Mar 10, 2025",
                ],
                [
                    "id" => "LOAN-2023-007",
                    "borrower" => "David Miller",
                    "address" => "246 Elm St, Boston, MA",
                    "amount" => "$1,800,000",
                    "date" => "Feb 25, 2025",
                ],
            ],
        ],
        [
            "title" => "Pending Approval",
            "loans" => [
                [
                    "id" => "LOAN-2023-003",
                    "borrower" => "Michael Brown",
                    "address" => "789 Oak Dr, Miami, FL",
                    "amount" => "$2,100,000",
                    "date" => "Mar 8, 2025",
                ],
                [
                    "id" => "LOAN-2023-008",
                    "borrower" => "Lisa Garcia",
                    "address" => "135 Walnut Ave, San Francisco, CA",
                    "amount" => "$2,500,000",
                    "date" => "Feb 22, 2025",
                ],
            ],
        ],
        [
            "title" => "Approved",
            "loans" => [
                [
                    "id" => "LOAN-2023-001",
                    "borrower" => "John Smith",
                    "address" => "123 Main St, New York, NY",
                    "amount" => "$1,250,000",
                    "date" => "Mar 12, 2025",
                ],
                [
                    "id" => "LOAN-2023-004",
                    "borrower" => "Emily Davis",
                    "address" => "321 Pine St, Chicago, IL",
                    "amount" => "$750,000",
                    "date" => "Mar 5, 2025",
                ],
                [
                    "id" => "LOAN-2023-009",
                    "borrower" => "James Taylor",
                    "address" => "864 Birch Dr, Denver, CO",
                    "amount" => "$1,100,000",
                    "date" => "Feb 20, 2025",
                ],
            ],
        ],
        [
            "title" => "Funded",
            "loans" => [
                [
                    "id" => "LOAN-2023-005",
                    "borrower" => "Robert Wilson",
                    "address" => "654 Maple Ave, Houston, TX",
                    "amount" => "$1,500,000",
                    "date" => "Mar 3, 2025",
                ],
                [
                    "id" => "LOAN-2023-010",
                    "borrower" => "Patricia Martinez",
                    "address" => "753 Spruce St, Atlanta, GA",
                    "amount" => "$1,350,000",
                    "date" => "Feb 18, 2025",
                ],
            ],
        ],
        [
            "title" => "Closed",
            "loans" => [
                [
                    "id" => "LOAN-2023-006",
                    "borrower" => "Jennifer Lee",
                    "address" => "987 Cedar Ln, Seattle, WA",
                    "amount" => "$950,000",
                    "date" => "Feb 28, 2025",
                ],
            ],
        ],
    ];
@endphp

<div class="flex space-x-4 overflow-auto pb-4">
    @foreach($pipelineStages as $stage)
        <div class="min-w-[300px] max-w-[300px] rounded-lg border bg-card text-card-foreground shadow-sm">
            <div class="flex flex-col space-y-1.5 p-6 pb-2">
                <h3 class="text-sm font-medium flex justify-between">
                    {{ $stage['title'] }}
                    <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-primary/50 text-foreground">
                    {{ count($stage['loans']) }}
                </span>
                </h3>
            </div>
            <div class="p-0">
                <div class="h-[500px] overflow-auto">
                    <div class="p-4 pt-0 space-y-3">
                        @foreach($stage['loans'] as $loan)
                            <div class="p-3 cursor-pointer hover:bg-accent rounded-lg border bg-card text-card-foreground shadow-sm">
                                <div class="space-y-2">
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm font-medium">{{ $loan['id'] }}</span>
                                        <span class="text-sm font-bold">{{ $loan['amount'] }}</span>
                                    </div>
                                    <div class="text-sm">{{ $loan['borrower'] }}</div>
                                    <div class="text-xs text-muted-foreground truncate">{{ $loan['address'] }}</div>
                                    <div class="text-xs text-muted-foreground">{{ $loan['date'] }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
