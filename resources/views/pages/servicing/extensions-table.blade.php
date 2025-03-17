{{-- resources/views/components/extensions-table.blade.php --}}

@php
    $extensions = [
        [
            "id" => "EXT-2023-001",
            "loanId" => "LOAN-2023-001",
            "borrower" => "John Smith",
            "originalMaturity" => "Jun 15, 2025",
            "extendedMaturity" => "Dec 15, 2025",
            "status" => "Approved",
            "requestDate" => "Mar 1, 2025",
            "fee" => "$5,000",
        ],
        [
            "id" => "EXT-2023-002",
            "loanId" => "LOAN-2023-002",
            "borrower" => "Sarah Johnson",
            "originalMaturity" => "Jul 20, 2025",
            "extendedMaturity" => "Jan 20, 2026",
            "status" => "Pending",
            "requestDate" => "Mar 10, 2025",
            "fee" => "$3,500",
        ],
        [
            "id" => "EXT-2023-003",
            "loanId" => "LOAN-2023-003",
            "borrower" => "Michael Brown",
            "originalMaturity" => "Aug 5, 2025",
            "extendedMaturity" => "Feb 5, 2026",
            "status" => "Rejected",
            "requestDate" => "Mar 5, 2025",
            "fee" => "$7,000",
        ],
        [
            "id" => "EXT-2023-004",
            "loanId" => "LOAN-2023-004",
            "borrower" => "Emily Davis",
            "originalMaturity" => "Sep 10, 2025",
            "extendedMaturity" => "Mar 10, 2026",
            "status" => "Approved",
            "requestDate" => "Mar 2, 2025",
            "fee" => "$2,500",
        ],
        [
            "id" => "EXT-2023-005",
            "loanId" => "LOAN-2023-005",
            "borrower" => "Robert Wilson",
            "originalMaturity" => "Oct 15, 2025",
            "extendedMaturity" => "Apr 15, 2026",
            "status" => "Pending",
            "requestDate" => "Mar 8, 2025",
            "fee" => "$5,500",
        ],
        [
            "id" => "EXT-2023-006",
            "loanId" => "LOAN-2023-006",
            "borrower" => "Jennifer Lee",
            "originalMaturity" => "Nov 20, 2025",
            "extendedMaturity" => "May 20, 2026",
            "status" => "",
            "requestDate" => "",
            "fee" => "",
        ],
    ];
@endphp

<div class="space-y-4">
    <div class="rounded-md border">
        <div class="w-full overflow-auto">
            <table class="w-full caption-bottom text-sm">
                <thead class="[&_tr]:border-b">
                <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Extension ID</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Loan ID</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 hidden md:table-cell">Borrower</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 hidden md:table-cell">Original Maturity</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 hidden md:table-cell">Extended Maturity</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Status</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 hidden md:table-cell">Request Date</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Fee</th>
                    <th class="h-12 px-4 text-right align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Actions</th>
                </tr>
                </thead>
                <tbody class="[&_tr:last-child]:border-0">
                @foreach($extensions as $extension)
                    <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 font-medium">{{ $extension['id'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">{{ $extension['loanId'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 hidden md:table-cell">{{ $extension['borrower'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 hidden md:table-cell">{{ $extension['originalMaturity'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 hidden md:table-cell">{{ $extension['extendedMaturity'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">
                            @if(!empty($extension['status']))
                                @php
                                    $badgeClass = match($extension['status']) {
                                        'Approved' => 'border-transparent bg-emerald-500 text-emerald-50',
                                        'Pending' => 'border-transparent bg-primary text-primary-foreground',
                                        'Rejected' => 'border-transparent bg-destructive text-destructive-foreground',
                                        default => 'text-foreground'
                                    };
                                @endphp
                                <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 {{ $badgeClass }}">
                                    {{ $extension['status'] }}
                                </span>
                            @endif
                        </td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 hidden md:table-cell">{{ $extension['requestDate'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">{{ $extension['fee'] }}</td>
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
                                            <path d="M9 3H5a2 2 0 0 0-2 2v4"></path>
                                            <path d="M9 21H5a2 2 0 0 1-2-2v-4"></path>
                                            <path d="M3 9h18"></path>
                                            <path d="M21 9v6"></path>
                                            <path d="M15 21h4a2 2 0 0 0 2-2v-4"></path>
                                            <path d="M15 3h4a2 2 0 0 1 2 2v4"></path>
                                        </svg>
                                        <span>Process Request</span>
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
