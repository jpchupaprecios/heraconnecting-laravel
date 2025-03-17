{{-- resources/views/components/payments-table.blade.php --}}

@php
    $payments = [
        [
            "id" => "PMT-2023-001",
            "loanId" => "LOAN-2023-001",
            "borrower" => "John Smith",
            "amount" => "$12,500",
            "status" => "Paid",
            "dueDate" => "Mar 1, 2025",
            "paidDate" => "Mar 1, 2025",
            "type" => "Principal & Interest",
        ],
        [
            "id" => "PMT-2023-002",
            "loanId" => "LOAN-2023-002",
            "borrower" => "Sarah Johnson",
            "amount" => "$8,750",
            "status" => "Upcoming",
            "dueDate" => "Mar 15, 2025",
            "paidDate" => "-",
            "type" => "Principal & Interest",
        ],
        [
            "id" => "PMT-2023-003",
            "loanId" => "LOAN-2023-003",
            "borrower" => "Michael Brown",
            "amount" => "$21,000",
            "status" => "Overdue",
            "dueDate" => "Mar 5, 2025",
            "paidDate" => "-",
            "type" => "Principal & Interest",
        ],
        [
            "id" => "PMT-2023-004",
            "loanId" => "LOAN-2023-004",
            "borrower" => "Emily Davis",
            "amount" => "$7,500",
            "status" => "Upcoming",
            "dueDate" => "Mar 20, 2025",
            "paidDate" => "-",
            "type" => "Principal & Interest",
        ],
        [
            "id" => "PMT-2023-005",
            "loanId" => "LOAN-2023-005",
            "borrower" => "Robert Wilson",
            "amount" => "$15,000",
            "status" => "Paid",
            "dueDate" => "Mar 1, 2025",
            "paidDate" => "Feb 28, 2025",
            "type" => "Principal & Interest",
        ],
        [
            "id" => "PMT-2023-006",
            "loanId" => "LOAN-2023-006",
            "borrower" => "Jennifer Lee",
            "amount" => "$9,500",
            "status" => "Upcoming",
            "dueDate" => "Mar 25, 2025",
            "paidDate" => "-",
            "type" => "Principal & Interest",
        ],
        [
            "id" => "PMT-2023-007",
            "loanId" => "LOAN-2023-007",
            "borrower" => "David Miller",
            "amount" => "$18,000",
            "status" => "Overdue",
            "dueDate" => "Mar 3, 2025",
            "paidDate" => "-",
            "type" => "Principal & Interest",
        ],
        [
            "id" => "PMT-2023-008",
            "loanId" => "LOAN-2023-008",
            "borrower" => "Lisa Garcia",
            "amount" => "$25,000",
            "status" => "Upcoming",
            "dueDate" => "Mar 30, 2025",
            "paidDate" => "-",
            "type" => "Principal & Interest",
        ],
        [
            "id" => "PMT-2023-009",
            "loanId" => "LOAN-2023-009",
            "borrower" => "James Taylor",
            "amount" => "$11,000",
            "status" => "Paid",
            "dueDate" => "Mar 5, 2025",
            "paidDate" => "Mar 4, 2025",
            "type" => "Principal & Interest",
        ],
        [
            "id" => "PMT-2023-010",
            "loanId" => "LOAN-2023-010",
            "borrower" => "Patricia Martinez",
            "amount" => "$13,500",
            "status" => "Upcoming",
            "dueDate" => "Mar 18, 2025",
            "paidDate" => "-",
            "type" => "Principal & Interest",
        ],
    ];
@endphp

<div class="space-y-4">
    <div class="rounded-md border">
        <div class="w-full overflow-auto">
            <table class="w-full caption-bottom text-sm">
                <thead class="[&_tr]:border-b">
                <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Payment ID</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Loan ID</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 hidden md:table-cell">Borrower</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Amount</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Status</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 hidden md:table-cell">Due Date</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 hidden md:table-cell">Paid Date</th>
                    <th class="h-12 px-4 text-right align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Actions</th>
                </tr>
                </thead>
                <tbody class="[&_tr:last-child]:border-0">
                @foreach($payments as $payment)
                    <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 font-medium">{{ $payment['id'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">{{ $payment['loanId'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 hidden md:table-cell">{{ $payment['borrower'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">{{ $payment['amount'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">
                            @php
                                $badgeClass = match($payment['status']) {
                                    'Paid' => 'border-transparent bg-emerald-500 text-emerald-50',
                                    'Upcoming' => 'text-foreground',
                                    'Overdue' => 'border-transparent bg-destructive text-destructive-foreground',
                                    default => 'border-transparent bg-primary text-primary-foreground'
                                };
                            @endphp
                            <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 {{ $badgeClass }}">
                                {{ $payment['status'] }}
                            </span>
                        </td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 hidden md:table-cell">{{ $payment['dueDate'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 hidden md:table-cell">{{ $payment['paidDate'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 text-right">
                            <div x-data="{ open: false }" class="relative">
                                <button @click="open = !open" @click.outside="open = false" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input hover:bg-accent hover:text-accent-foreground h-8 w-8 p-0">
                                    <span class="sr-only">Open menu</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </button>
                                <div x-show="open"
                                     x-transition:enter="transition ease-out duration-100"
                                     x-transition:enter-start="transform opacity-0 scale-95"
                                     x-transition:enter-end="transform opacity-100 scale-100"
                                     x-transition:leave="transition ease-in duration-75"
                                     x-transition:leave-start="transform opacity-100 scale-100"
                                     x-transition:leave-end="transform opacity-0 scale-95"
                                     class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                     style="display: none;">
