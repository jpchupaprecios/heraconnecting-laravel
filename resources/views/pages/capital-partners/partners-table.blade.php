{{-- resources/views/components/partners-table.blade.php --}}

@php
    $partners = [
        [
            "id" => "CP-2023-001",
            "name" => "Blackstone Capital",
            "type" => "Private Equity",
            "aum" => "$5.2B",
            "status" => "Active",
            "contactName" => "Richard Black",
            "contactEmail" => "richard@blackstonecapital.com",
            "contactPhone" => "(212) 555-1234",
            "region" => "Northeast",
            "portfolioCount" => 12,
            "totalInvestment" => "$450M",
        ],
        [
            "id" => "CP-2023-002",
            "name" => "Pacific Ventures",
            "type" => "Venture Capital",
            "aum" => "$1.8B",
            "status" => "Active",
            "contactName" => "Jennifer Lee",
            "contactEmail" => "jlee@pacificventures.com",
            "contactPhone" => "(415) 555-6789",
            "region" => "West",
            "portfolioCount" => 8,
            "totalInvestment" => "$220M",
        ],
        [
            "id" => "CP-2023-003",
            "name" => "Midwest Financial Group",
            "type" => "Bank",
            "aum" => "$12.5B",
            "status" => "Active",
            "contactName" => "Robert Johnson",
            "contactEmail" => "rjohnson@midwestfinancial.com",
            "contactPhone" => "(312) 555-4321",
            "region" => "Midwest",
            "portfolioCount" => 15,
            "totalInvestment" => "$780M",
        ],
        [
            "id" => "CP-2023-004",
            "name" => "Southern Trust",
            "type" => "Bank",
            "aum" => "$8.7B",
            "status" => "Active",
            "contactName" => "Emily Davis",
            "contactEmail" => "edavis@southerntrust.com",
            "contactPhone" => "(404) 555-8765",
            "region" => "Southeast",
            "portfolioCount" => 10,
            "totalInvestment" => "$350M",
        ],
        [
            "id" => "CP-2023-005",
            "name" => "Global Investments Ltd",
            "type" => "Hedge Fund",
            "aum" => "$3.5B",
            "status" => "Inactive",
            "contactName" => "Michael Wong",
            "contactEmail" => "mwong@globalinvestments.com",
            "contactPhone" => "(646) 555-9876",
            "region" => "International",
            "portfolioCount" => 5,
            "totalInvestment" => "$180M",
        ],
        [
            "id" => "CP-2023-006",
            "name" => "Lone Star Capital",
            "type" => "Private Equity",
            "aum" => "$2.1B",
            "status" => "Active",
            "contactName" => "Sarah Martinez",
            "contactEmail" => "smartinez@lonestarcapital.com",
            "contactPhone" => "(512) 555-2345",
            "region" => "Southwest",
            "portfolioCount" => 7,
            "totalInvestment" => "$210M",
        ],
        [
            "id" => "CP-2023-007",
            "name" => "Atlantic Partners",
            "type" => "Venture Capital",
            "aum" => "$1.2B",
            "status" => "Active",
            "contactName" => "David Wilson",
            "contactEmail" => "dwilson@atlanticpartners.com",
            "contactPhone" => "(617) 555-3456",
            "region" => "Northeast",
            "portfolioCount" => 6,
            "totalInvestment" => "$150M",
        ],
        [
            "id" => "CP-2023-008",
            "name" => "Mountain States Bank",
            "type" => "Bank",
            "aum" => "$6.8B",
            "status" => "Active",
            "contactName" => "Lisa Thompson",
            "contactEmail" => "lthompson@mountainstatesbank.com",
            "contactPhone" => "(303) 555-4567",
            "region" => "West",
            "portfolioCount" => 9,
            "totalInvestment" => "$320M",
        ],
        [
            "id" => "CP-2023-009",
            "name" => "Coastal Investments",
            "type" => "Hedge Fund",
            "aum" => "$4.3B",
            "status" => "Active",
            "contactName" => "James Taylor",
            "contactEmail" => "jtaylor@coastalinvestments.com",
            "contactPhone" => "(305) 555-5678",
            "region" => "Southeast",
            "portfolioCount" => 11,
            "totalInvestment" => "$380M",
        ],
        [
            "id" => "CP-2023-010",
            "name" => "Heartland Financial",
            "type" => "Bank",
            "aum" => "$7.5B",
            "status" => "Inactive",
            "contactName" => "Patricia Anderson",
            "contactEmail" => "panderson@heartlandfinancial.com",
            "contactPhone" => "(816) 555-6789",
            "region" => "Midwest",
            "portfolioCount" => 4,
            "totalInvestment" => "$120M",
        ],
    ];
@endphp

<div class="space-y-4">
    <div class="rounded-md border">
        <div class="w-full overflow-auto">
            <table class="w-full caption-bottom text-sm">
                <thead class="[&_tr]:border-b">
                <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Partner</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 hidden md:table-cell">Type</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">AUM</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Status</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 hidden md:table-cell">Contact</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 hidden md:table-cell">Region</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 hidden md:table-cell">Portfolios</th>
                    <th class="h-12 px-4 text-right align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Actions</th>
                </tr>
                </thead>
                <tbody class="[&_tr:last-child]:border-0">
                @foreach($partners as $partner)
                    <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">
                            <div class="flex items-center gap-3">
                                <div class="relative h-10 w-10 flex-shrink-0 overflow-hidden rounded-full">
                                    <img src="{{ asset('placeholder.svg') }}?height=40&width=40" class="h-full w-full object-cover" />
                                    <div class="absolute inset-0 flex h-full w-full items-center justify-center rounded-full bg-muted text-sm font-medium">
                                        {{ implode('', array_map(fn($word) => substr($word, 0, 1), explode(' ', $partner['name']))) }}
                                    </div>
                                </div>
                                <div>
                                    <div class="font-medium">{{ $partner['name'] }}</div>
                                    <div class="text-xs text-muted-foreground">{{ $partner['id'] }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 hidden md:table-cell">
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 text-muted-foreground">
                                    <rect width="16" height="20" x="4" y="2" rx="2" ry="2"></rect>
                                    <path d="M9 22v-4h6v4"></path>
                                    <path d="M8 6h.01"></path>
                                    <path d="M16 6h.01"></path>
                                    <path d="M12 6h.01"></path>
                                    <path d="M12 10h.01"></path>
                                    <path d="M12 14h.01"></path>
                                    <path d="M16 10h.01"></path>
                                    <path d="M16 14h.01"></path>
                                    <path d="M8 10h.01"></path>
                                    <path d="M8 14h.01"></path>
                                </svg>
                                <span>{{ $partner['type'] }}</span>
                            </div>
                        </td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">{{ $partner['aum'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">
                            <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 {{ $partner['status'] === 'Active' ? 'border-transparent bg-primary text-primary-foreground' : 'border-transparent bg-secondary text-secondary-foreground' }}">
                                {{ $partner['status'] }}
                            </span>
                        </td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 hidden md:table-cell">
                            <div class="text-sm">
                                <div>{{ $partner['contactName'] }}</div>
                                <div class="text-xs text-muted-foreground flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-3 w-3">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                    {{ $partner['contactPhone'] }}
                                </div>
                            </div>
                        </td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 hidden md:table-cell">{{ $partner['region'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 hidden md:table-cell">
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 text-muted-foreground">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span>{{ $partner['portfolioCount'] }}</span>
                            </div>
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
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        </svg>
                                        <span>View Portfolios</span>
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
