{{-- resources/views/components/insurance-table.blade.php --}}

@php
    $insurances = [
        [
            "id" => "INS-2023-001",
            "loanId" => "LOAN-2023-001",
            "property" => "123 Main St, New York, NY",
            "type" => "Hazard",
            "provider" => "State Farm",
            "policyNumber" => "SF-12345678",
            "status" => "Active",
            "expirationDate" => "Dec 15, 2025",
            "coverageAmount" => "$1,500,000",
        ],
        [
            "id" => "INS-2023-002",
            "loanId" => "LOAN-2023-002",
            "property" => "456 Park Ave, Los Angeles, CA",
            "type" => "Flood",
            "provider" => "Allstate",
            "policyNumber" => "AL-87654321",
            "status" => "Active",
            "expirationDate" => "Nov 20, 2025",
            "coverageAmount" => "$1,000,000",
        ],
        [
            "id" => "INS-2023-003",
            "loanId" => "LOAN-2023-003",
            "property" => "789 Oak Dr, Miami, FL",
            "type" => "Hazard",
            "provider" => "Progressive",
            "policyNumber" => "PG-23456789",
            "status" => "Expiring Soon",
            "expirationDate" => "Apr 10, 2025",
            "coverageAmount" => "$2,200,000",
        ],
        [
            "id" => "INS-2023-004",
            "loanId" => "LOAN-2023-004",
            "property" => "321 Pine St, Chicago, IL",
            "type" => "Liability",
            "provider" => "Nationwide",
            "policyNumber" => "NW-34567890",
            "status" => "Active",
            "expirationDate" => "Oct 5, 2025",
            "coverageAmount" => "$800,000",
        ],
        [
            "id" => "INS-2023-005",
            "loanId" => "LOAN-2023-005",
            "property" => "654 Maple Ave, Houston, TX",
            "type" => "Hazard",
            "provider" => "Liberty Mutual",
            "policyNumber" => "LM-45678901",
            "status" => "Expired",
            "expirationDate" => "Feb 28, 2025",
            "coverageAmount" => "$1,600,000",
        ],
        [
            "id" => "INS-2023-006",
            "loanId" => "LOAN-2023-006",
            "property" => "987 Cedar Ln, Seattle, WA",
            "type" => "Flood",
            "provider" => "USAA",
            "policyNumber" => "US-56789012",
            "status" => "Active",
            "expirationDate" => "Sep 15, 2025",
            "coverageAmount" => "$1,100,000",
        ],
        [
            "id" => "INS-2023-007",
            "loanId" => "LOAN-2023-007",
            "property" => "246 Elm St, Boston, MA",
            "type" => "Hazard",
            "provider" => "Farmers",
            "policyNumber" => "FR-67890123",
            "status" => "Expiring Soon",
            "expirationDate" => "Apr 25, 2025",
            "coverageAmount" => "$1,900,000",
        ],
        [
            "id" => "INS-2023-008",
            "loanId" => "LOAN-2023-008",
            "property" => "135 Walnut Ave, San Francisco, CA",
            "type" => "Liability",
            "provider" => "Travelers",
            "policyNumber" => "TR-78901234",
            "status" => "Active",
            "expirationDate" => "Aug 10, 2025",
            "coverageAmount" => "$2,600,000",
        ],
        [
            "id" => "INS-2023-009",
            "loanId" => "LOAN-2023-009",
            "property" => "864 Birch Dr, Denver, CO",
            "type" => "Hazard",
            "provider" => "American Family",
            "policyNumber" => "AF-89012345",
            "status" => "Expired",
            "expirationDate" => "Mar 5, 2025",
            "coverageAmount" => "$1,200,000",
        ],
        [
            "id" => "INS-2023-010",
            "loanId" => "LOAN-2023-010",
            "property" => "753 Spruce St, Atlanta, GA",
            "type" => "Flood",
            "provider" => "Geico",
            "policyNumber" => "GE-90123456",
            "status" => "Active",
            "expirationDate" => "Jul 20, 2025",
            "coverageAmount" => "$1,400,000",
        ],
    ];
@endphp

<div class="space-y-4">
    <div class="rounded-md border">
        <div class="w-full overflow-auto">
            <table class="w-full caption-bottom text-sm">
                <thead class="[&_tr]:border-b">
                <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Insurance ID</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Loan ID</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 hidden md:table-cell">Property</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 hidden md:table-cell">Type</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Provider</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Status</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 hidden md:table-cell">Expiration</th>
                    <th class="h-12 px-4 text-right align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Actions</th>
                </tr>
                </thead>
                <tbody class="[&_tr:last-child]:border-0">
                @foreach($insurances as $insurance)
                    <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 font-medium">{{ $insurance['id'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">{{ $insurance['loanId'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 hidden md:table-cell">{{ $insurance['property'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 hidden md:table-cell">{{ $insurance['type'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">{{ $insurance['provider'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">
                            @php
                                $badgeClass = match($insurance['status']) {
                                    'Active' => 'border-transparent bg-emerald-500 text-emerald-50',
                                    'Expiring Soon' => 'border-transparent bg-primary text-primary-foreground',
                                    'Expired' => 'border-transparent bg-destructive text-destructive-foreground',
                                    default => 'text-foreground'
                                };
                            @endphp
                            <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 {{ $badgeClass }}">
                                {{ $insurance['status'] }}
                            </span>
                        </td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 hidden md:table-cell">{{ $insurance['expirationDate'] }}</td>
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
                                            <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path>
                                            <polyline points="14 2 14 8 20 8"></polyline>
                                            <line x1="16" x2="8" y1="13" y2="13"></line>
                                            <line x1="16" x2="8" y1="17" y2="17"></line>
                                            <line x1="10" x2="8" y1="9" y2="9"></line>
                                        </svg>
                                        <span>View Policy</span>
                                    </a>
                                    <a href="#" class="relative flex cursor-default select-none items-center rounded-sm px-2 py-1.5 text-sm outline-none hover:bg-accent hover:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4">
                                            <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"></path>
                                            <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"></path>
                                        </svg>
                                        <span>Send Reminder</span>
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
