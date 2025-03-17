{{-- resources/views/components/processes-table.blade.php --}}

@php
    $processes = [
        [
            "id" => "PROC-2023-001",
            "name" => "Loan Underwriting",
            "loanId" => "LOAN-2023-001",
            "type" => "Underwriting",
            "status" => "In Progress",
            "progress" => 65,
            "assignee" => "John Doe",
            "startDate" => "Mar 10, 2025",
            "dueDate" => "Mar 17, 2025",
        ],
        [
            "id" => "PROC-2023-002",
            "name" => "Document Verification",
            "loanId" => "LOAN-2023-002",
            "type" => "Underwriting",
            "status" => "Pending",
            "progress" => 20,
            "assignee" => "Jane Smith",
            "startDate" => "Mar 12, 2025",
            "dueDate" => "Mar 19, 2025",
        ],
        [
            "id" => "PROC-2023-003",
            "name" => "Closing Preparation",
            "loanId" => "LOAN-2023-003",
            "type" => "Closing",
            "status" => "On Hold",
            "progress" => 40,
            "assignee" => "Robert Johnson",
            "startDate" => "Mar 8, 2025",
            "dueDate" => "Mar 15, 2025",
        ],
        [
            "id" => "PROC-2023-004",
            "name" => "Funding Disbursement",
            "loanId" => "LOAN-2023-004",
            "type" => "Funding",
            "status" => "Completed",
            "progress" => 100,
            "assignee" => "Sarah Williams",
            "startDate" => "Mar 5, 2025",
            "dueDate" => "Mar 12, 2025",
        ],
        [
            "id" => "PROC-2023-005",
            "name" => "Insurance Verification",
            "loanId" => "LOAN-2023-005",
            "type" => "Servicing",
            "status" => "In Progress",
            "progress" => 75,
            "assignee" => "Michael Brown",
            "startDate" => "Mar 7, 2025",
            "dueDate" => "Mar 14, 2025",
        ],
        [
            "id" => "PROC-2023-006",
            "name" => "Title Search",
            "loanId" => "LOAN-2023-006",
            "type" => "Underwriting",
            "status" => "Completed",
            "progress" => 100,
            "assignee" => "Emily Davis",
            "startDate" => "Mar 3, 2025",
            "dueDate" => "Mar 10, 2025",
        ],
        [
            "id" => "PROC-2023-007",
            "name" => "Appraisal Review",
            "loanId" => "LOAN-2023-007",
            "type" => "Underwriting",
            "status" => "In Progress",
            "progress" => 50,
            "assignee" => "David Wilson",
            "startDate" => "Mar 9, 2025",
            "dueDate" => "Mar 16, 2025",
        ],
        [
            "id" => "PROC-2023-008",
            "name" => "Loan Closing",
            "loanId" => "LOAN-2023-008",
            "type" => "Closing",
            "status" => "Pending",
            "progress" => 10,
            "assignee" => "Lisa Martinez",
            "startDate" => "Mar 14, 2025",
            "dueDate" => "Mar 21, 2025",
        ],
        [
            "id" => "PROC-2023-009",
            "name" => "Payment Processing",
            "loanId" => "LOAN-2023-009",
            "type" => "Servicing",
            "status" => "In Progress",
            "progress" => 30,
            "assignee" => "James Taylor",
            "startDate" => "Mar 11, 2025",
            "dueDate" => "Mar 18, 2025",
        ],
        [
            "id" => "PROC-2023-010",
            "name" => "Draw Request Review",
            "loanId" => "LOAN-2023-010",
            "type" => "Funding",
            "status" => "On Hold",
            "progress" => 60,
            "assignee" => "Patricia Anderson",
            "startDate" => "Mar 6, 2025",
            "dueDate" => "Mar 13, 2025",
        ],
    ];
@endphp

<div class="space-y-4">
    <div class="rounded-md border">
        <div class="w-full overflow-auto">
            <table class="w-full caption-bottom text-sm">
                <thead class="[&_tr]:border-b">
                <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Process ID</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Name</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 hidden md:table-cell">Loan ID</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 hidden md:table-cell">Type</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Status</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 hidden md:table-cell">Progress</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 hidden md:table-cell">Assignee</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 hidden md:table-cell">Due Date</th>
                    <th class="h-12 px-4 text-right align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">Actions</th>
                </tr>
                </thead>
                <tbody class="[&_tr:last-child]:border-0">
                @foreach($processes as $process)
                    <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 font-medium">{{ $process['id'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">{{ $process['name'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 hidden md:table-cell">{{ $process['loanId'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 hidden md:table-cell">{{ $process['type'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0">
                            @php
                                $badgeClass = match($process['status']) {
                                    'Completed' => 'border-transparent bg-emerald-500 text-emerald-50',
                                    'In Progress' => 'border-transparent bg-primary text-primary-foreground',
                                    'Pending' => 'text-foreground',
                                    'On Hold' => 'border-transparent bg-secondary text-secondary-foreground',
                                    default => 'border-transparent bg-primary text-primary-foreground'
                                };
                            @endphp
                            <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 {{ $badgeClass }}">
                                {{ $process['status'] }}
                            </span>
                        </td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 hidden md:table-cell">
                            <div class="flex items-center gap-2">
                                <div class="h-2 w-[60px] overflow-hidden rounded-full bg-secondary">
                                    <div class="h-full bg-primary" style="width: {{ $process['progress'] }}%;"></div>
                                </div>
                                <span class="text-xs">{{ $process['progress'] }}%</span>
                            </div>
                        </td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 hidden md:table-cell">{{ $process['assignee'] }}</td>
                        <td class="p-4 align-middle [&:has([role=checkbox])]:pr-0 hidden md:table-cell">{{ $process['dueDate'] }}</td>
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
                                            <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                        </svg>
                                        <span>Start Process</span>
                                    </a>
                                    <a href="#" class="relative flex cursor-default select-none items-center rounded-sm px-2 py-1.5 text-sm outline-none hover:bg-accent hover:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4">
                                            <rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect>
                                        </svg>
                                        <span>Pause Process</span>
                                    </a>
                                    <a href="#" class="relative flex cursor-default select-none items-center rounded-sm px-2 py-1.5 text-sm outline-none hover:bg-accent hover:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                        <span>Extend Deadline</span>
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
