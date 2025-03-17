{{-- resources/views/components/portfolios-table.blade.php --}}

@php
    $portfolios = [
        [
            "id" => "PF-2023-001",
            "name" => "Northeast Residential",
            "partnerId" => "CP-2023-001",
            "partnerName" => "Blackstone Capital",
            "loanCount" => 15,
            "totalValue" => "$120M",
            "status" => "Active",
            "performance" => 8.5,
            "riskRating" => "Low",
            "createdDate" => "Jan 15, 2025",
        ],
        [
            "id" => "PF-2023-002",
            "name" => "West Coast Commercial",
            "partnerId" => "CP-2023-002",
            "partnerName" => "Pacific Ventures",
            "loanCount" => 8,
            "totalValue" => "$85M",
            "status" => "Active",
            "performance" => 9.2,
            "riskRating" => "Medium",
            "createdDate" => "Feb 3, 2025",
        ],
        [
            "id" => "PF-2023-003",
            "name" => "Midwest Mixed-Use",
            "partnerId" => "CP-2023-003",
            "partnerName" => "Midwest Financial Group",
            "loanCount" => 12,
            "totalValue" => "$110M",
            "status" => "Active",
            "performance" => 7.8,
            "riskRating" => "Low",
            "createdDate" => "Dec 10, 2024",
        ],
        [
            "id" => "PF-2023-004",
            "name" => "Southern Residential",
            "partnerId" => "CP-2023-004",
            "partnerName" => "Southern Trust",
            "loanCount" => 10,
            "totalValue" => "$95M",
            "status" => "Active",
            "performance" => 8.1,
            "riskRating" => "Medium",
            "createdDate" => "Jan 22, 2025",
        ],
        [
            "id" => "PF-2023-005",
            "name" => "International Commercial",
            "partnerId" => "CP-2023-005",
            "partnerName" => "Global Investments Ltd",
            "loanCount" => 5,
            "totalValue" => "$70M",
            "status" => "Inactive",
            "performance" => 6.5,
            "riskRating" => "High",
            "createdDate" => "Nov 5, 2024",
        ],
        [
            "id" => "PF-2023-006",
            "name" => "Texas Residential",
            "partnerId" => "CP-2023-006",
            "partnerName" => "Lone Star Capital",
            "loanCount" => 7,
            "totalValue" => "$65M",
            "status" => "Active",
            "performance" => 8.7,
            "riskRating" => "Low",
            "createdDate" => "Feb 15, 2025",
        ],
        [
            "id" => "PF-2023-007",
            "name" => "East Coast Mixed-Use",
            "partnerId" => "CP-2023-007",
            "partnerName" => "Atlantic Partners",
            "loanCount" => 6,
            "totalValue" => "$55M",
            "status" => "Active",
            "performance" => 7.9,
            "riskRating" => "Medium",
            "createdDate" => "Jan 8, 2025",
        ],
        [
            "id" => "PF-2023-008",
            "name" => "Mountain Region Commercial",
            "partnerId" => "CP-2023-008",
            "partnerName" => "Mountain States Bank",
            "loanCount" => 9,
            "totalValue" => "$90M",
            "status" => "Active",
            "performance" => 8.3,
            "riskRating" => "Low",
            "createdDate" => "Dec 20, 2024",
        ],
        [
            "id" => "PF-2023-009",
            "name" => "Florida Residential",
            "partnerId" => "CP-2023-009",
            "partnerName" => "Coastal Investments",
            "loanCount" => 11,
            "totalValue" => "$105M",
            "status" => "Active",
            "performance" => 9.0,
            "riskRating" => "Medium",
            "createdDate" => "Feb 5, 2025",
        ],
        [
            "id" => "PF-2023-010",
            "name" => "Midwest Commercial",
            "partnerId" => "CP-2023-010",
            "partnerName" => "Heartland Financial",
            "loanCount" => 4,
            "totalValue" => "$45M",
            "status" => "Inactive",
            "performance" => 6.8,
            "riskRating" => "High",
            "createdDate" => "Nov 15, 2024",
        ],
    ];
@endphp

<div class="space-y-4">
    <div class="rounded-md border">
        <div class="w-full overflow-auto">
            <table class="w-full caption-bottom text-sm">
                <thead class="[&_tr]:border-b">
                <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Portfolio</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 hidden md:table-cell">Partner</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Loans</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Value</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Status</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 hidden md:table-cell">Performance</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 hidden md:table-cell">Risk</th>
                    <th class="h-12 px-4 text-right align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Actions</th>
                </tr>
                </thead>
                <tbody class="[&_tr:last-child]:border-0">
                @foreach($portfolios as $portfolio)
                    <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">
                            <div>
                                <div class="font-medium">{{ $portfolio['name'] }}</div>
                                <div class="text-xs text-muted-foreground">{{ $portfolio['id'] }}</div>
                            </div>
                        </td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 hidden md:table-cell">{{ $portfolio['partnerName'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">{{ $portfolio['loanCount'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">{{ $portfolio['totalValue'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">
                            <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 {{ $portfolio['status'] === 'Active' ? 'border-transparent bg-primary text-primary-foreground' : 'border-transparent bg-secondary text-secondary-foreground' }}">
                                {{ $portfolio['status'] }}
                            </span>
                        </td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 hidden md:table-cell">
                            <div class="flex items-center gap-2">
                                <div class="h-2 w-[60px] overflow-hidden rounded-full bg-secondary">
                                    <div class="h-full bg-primary" style="width: {{ $portfolio['performance'] * 10 }}%;"></div>
                                </div>
                                <span class="text-xs">{{ $portfolio['performance'] }}%</span>
                            </div>
                        </td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 hidden md:table-cell">
                            @php
                                $badgeClass = match($portfolio['riskRating']) {
                                    'Low' => 'border-transparent bg-emerald-500 text-emerald-50',
                                    'Medium' => 'border-transparent bg-primary text-primary-foreground',
                                    'High' => 'border-transparent bg-destructive text-destructive-foreground',
                                    default => 'border-transparent bg-primary text-primary-foreground'
                                };
                            @endphp
                            <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 {{ $badgeClass }}">
                                {{ $portfolio['riskRating'] }}
                            </span>
                        </td>
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
                                        <span>View Loans</span>
                                    </a>
                                    <a href="#" class="relative flex cursor-default select-none items-center rounded-sm px-2 py-1.5 text-sm outline-none hover:bg-accent hover:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4">
                                            <rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect>
                                            <line x1="3" x2="21" y1="9" y2="9"></line>
                                            <line x1="3" x2="21" y1="15" y2="15"></line>
                                            <line x1="9" x2="9" y1="3" y2="21"></line>
                                            <line x1="15" x2="15" y1="3" y2="21"></line>
                                        </svg>
                                        <span>Performance</span>
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
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
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
