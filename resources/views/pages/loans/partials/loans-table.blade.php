{{-- resources/views/components/loans-table.blade.php --}}

@php
    $loans = [
        [
            "id" => "LOAN-2023-001",
            "borrower" => "John Smith",
            "address" => "123 Main St, New York, NY",
            "amount" => "$1,250,000",
            "status" => "Approved",
            "date" => "Mar 12, 2025",
            "type" => "Construction",
        ],
        [
            "id" => "LOAN-2023-002",
            "borrower" => "Sarah Johnson",
            "address" => "456 Park Ave, Los Angeles, CA",
            "amount" => "$850,000",
            "status" => "In Review",
            "date" => "Mar 10, 2025",
            "type" => "Purchase",
        ],
        [
            "id" => "LOAN-2023-003",
            "borrower" => "Michael Brown",
            "address" => "789 Oak Dr, Miami, FL",
            "amount" => "$2,100,000",
            "status" => "Pending",
            "date" => "Mar 8, 2025",
            "type" => "Refinance",
        ],
        [
            "id" => "LOAN-2023-004",
            "borrower" => "Emily Davis",
            "address" => "321 Pine St, Chicago, IL",
            "amount" => "$750,000",
            "status" => "Approved",
            "date" => "Mar 5, 2025",
            "type" => "Construction",
        ],
        [
            "id" => "LOAN-2023-005",
            "borrower" => "Robert Wilson",
            "address" => "654 Maple Ave, Houston, TX",
            "amount" => "$1,500,000",
            "status" => "Funded",
            "date" => "Mar 3, 2025",
            "type" => "Purchase",
        ],
        [
            "id" => "LOAN-2023-006",
            "borrower" => "Jennifer Lee",
            "address" => "987 Cedar Ln, Seattle, WA",
            "amount" => "$950,000",
            "status" => "Closed",
            "date" => "Feb 28, 2025",
            "type" => "Refinance",
        ],
        [
            "id" => "LOAN-2023-007",
            "borrower" => "David Miller",
            "address" => "246 Elm St, Boston, MA",
            "amount" => "$1,800,000",
            "status" => "In Review",
            "date" => "Feb 25, 2025",
            "type" => "Construction",
        ],
        [
            "id" => "LOAN-2023-008",
            "borrower" => "Lisa Garcia",
            "address" => "135 Walnut Ave, San Francisco, CA",
            "amount" => "$2,500,000",
            "status" => "Pending",
            "date" => "Feb 22, 2025",
            "type" => "Purchase",
        ],
        [
            "id" => "LOAN-2023-009",
            "borrower" => "James Taylor",
            "address" => "864 Birch Dr, Denver, CO",
            "amount" => "$1,100,000",
            "status" => "Approved",
            "date" => "Feb 20, 2025",
            "type" => "Refinance",
        ],
        [
            "id" => "LOAN-2023-010",
            "borrower" => "Patricia Martinez",
            "address" => "753 Spruce St, Atlanta, GA",
            "amount" => "$1,350,000",
            "status" => "Funded",
            "date" => "Feb 18, 2025",
            "type" => "Construction",
        ],
    ];
@endphp

<div class="space-y-4">
    <div class="rounded-md border">
        <div class="w-full overflow-auto">
            <table class="w-full caption-bottom text-sm">
                <thead class="[&_tr]:border-b">
                <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Loan ID</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Borrower</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 hidden md:table-cell">Property Address</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Amount</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Status</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 hidden md:table-cell">Date</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 hidden md:table-cell">Type</th>
                    <th class="h-12 px-4 text-right align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Actions</th>
                </tr>
                </thead>
                <tbody class="[&_tr:last-child]:border-0">
                @foreach($loans as $loan)
                    <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 font-medium">{{ $loan['id'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">{{ $loan['borrower'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 hidden md:table-cell">{{ $loan['address'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">{{ $loan['amount'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">
                            @php
                                $badgeClass = match($loan['status']) {
                                    'Approved' => 'border-transparent bg-primary text-primary-foreground',
                                    'In Review' => 'border-transparent bg-secondary text-secondary-foreground',
                                    'Pending' => 'text-foreground',
                                    'Funded' => 'border-transparent bg-emerald-500 text-emerald-50',
                                    'Closed' => 'border-transparent bg-primary text-primary-foreground',
                                    default => 'border-transparent bg-destructive text-destructive-foreground'
                                };
                            @endphp
                            <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 {{ $badgeClass }}">
                                {{ $loan['status'] }}
                            </span>
                        </td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 hidden md:table-cell">{{ $loan['date'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 hidden md:table-cell">{{ $loan['type'] }}</td>
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
                                    <div class="py-1 px-2 text-sm font-medium">Actions</div>
                                    <a href="#" class="relative flex cursor-default select-none items-center rounded-sm px-2 py-1.5 text-sm outline-none hover:bg-accent hover:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4">
                                            <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                        <span>View Details</span>
                                    </a>
                                    <a href="#" class="relative flex cursor-default select-none items-center rounded-sm px-2 py-1.5 text-sm outline-none hover:bg-accent hover:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4">
                                            <path d="M12 20h9"></path>
                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                        </svg>
                                        <span>Edit</span>
                                    </a>
                                    <a href="#" class="relative flex cursor-default select-none items-center rounded-sm px-2 py-1.5 text-sm outline-none hover:bg-accent hover:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="7 10 12 15 17 10"></polyline>
                                            <line x1="12" x2="12" y1="15" y2="3"></line>
                                        </svg>
                                        <span>Download Documents</span>
                                    </a>
                                    <div class="h-px my-1 -mx-1 bg-muted"></div>
                                    <a href="#" class="relative flex cursor-default select-none items-center rounded-sm px-2 py-1.5 text-sm outline-none text-red-500 hover:bg-accent hover:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4">
                                            <path d="M3 6h18"></path>
                                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                            <line x1="10" x2="10" y1="11" y2="17"></line>
                                            <line x1="14" x2="14" y1="11" y2="17"></line>
                                        </svg>
                                        <span>Delete</span>
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="flex items-center justify-end space-x-2">
        <button type="button" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-8 px-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 mr-1">
                <path d="m15 18-6-6 6-6"></path>
            </svg>
            Previous
        </button>
        <button type="button" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-8 px-3">
            Next
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 ml-1">
                <path d="m9 18 6-6-6-6"></path>
            </svg>
        </button>
    </div>
</div>
