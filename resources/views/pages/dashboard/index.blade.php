@extends('layouts.app')

@section('content')
    <div class="flex flex-col w-full">
        @include('pages.dashboard.partials.dashboard-header')
        <div class="flex-1 space-y-4 p-8 pt-6 w-full">
            <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                    <div class="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
                        <h3 class="text-sm font-medium">Total Loans</h3>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            class="h-4 w-4 text-muted-foreground"
                        >
                            <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                        </svg>
                    </div>
                    <div class="p-6 pt-0">
                        <div class="text-2xl font-bold">$45.2M</div>
                        <p class="text-xs text-muted-foreground">+20.1% from last month</p>
                    </div>
                </div>
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                    <div class="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
                        <h3 class="text-sm font-medium">Active Loans</h3>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            class="h-4 w-4 text-muted-foreground"
                        >
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>
                    <div class="p-6 pt-0">
                        <div class="text-2xl font-bold">78</div>
                        <p class="text-xs text-muted-foreground">+12 since last month</p>
                    </div>
                </div>
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                    <div class="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
                        <h3 class="text-sm font-medium">Pending Approval</h3>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            class="h-4 w-4 text-muted-foreground"
                        >
                            <rect width="20" height="14" x="2" y="5" rx="2" />
                            <path d="M2 10h20" />
                        </svg>
                    </div>
                    <div class="p-6 pt-0">
                        <div class="text-2xl font-bold">12</div>
                        <p class="text-xs text-muted-foreground">+2 since yesterday</p>
                    </div>
                </div>
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                    <div class="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
                        <h3 class="text-sm font-medium">Closed This Month</h3>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            class="h-4 w-4 text-muted-foreground"
                        >
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                        </svg>
                    </div>
                    <div class="p-6 pt-0">
                        <div class="text-2xl font-bold">9</div>
                        <p class="text-xs text-muted-foreground">+3 since last month</p>
                    </div>
                </div>
            </div>

            <div x-data="{ activeTab: 'overview' }" class="space-y-4">
                <div class="inline-flex h-10 items-center justify-center rounded-md bg-muted p-1 text-muted-foreground">
                    <button
                        @click="activeTab = 'overview'"
                        :class="{ 'bg-background text-foreground shadow-sm': activeTab === 'overview' }"
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50">
                        Overview
                    </button>
                    <button
                        @click="activeTab = 'analytics'"
                        :class="{ 'bg-background text-foreground shadow-sm': activeTab === 'analytics' }"
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50">
                        Analytics
                    </button>
                    <button
                        @click="activeTab = 'reports'"
                        :class="{ 'bg-background text-foreground shadow-sm': activeTab === 'reports' }"
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50">
                        Reports
                    </button>
                </div>

                <div x-show="activeTab === 'overview'" class="space-y-4">
                    @include('pages.dashboard.partials.dashboard-charts')
                    <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-7">
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm col-span-4">
                            <div class="flex flex-col space-y-1.5 p-6">
                                <h3 class="text-2xl font-semibold leading-none tracking-tight">Recent Loans</h3>
                                <p class="text-sm text-muted-foreground">Recently processed loan applications</p>
                            </div>
                            <div class="p-6 pt-0">
                                @include('pages.dashboard.partials.recent-loans')
                            </div>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm col-span-3">
                            <div class="flex flex-col space-y-1.5 p-6">
                                <h3 class="text-2xl font-semibold leading-none tracking-tight">Upcoming Payments</h3>
                                <p class="text-sm text-muted-foreground">Payments due in the next 30 days</p>
                            </div>
                            <div class="p-6 pt-0">
                                @include('pages.dashboard.partials.upcoming-payments')
                            </div>
                        </div>
                    </div>
                </div>

                <div x-show="activeTab === 'analytics'" class="space-y-4" style="display: none;">
                    <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-2">
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm col-span-1">
                            <div class="flex flex-col space-y-1.5 p-6">
                                <h3 class="text-2xl font-semibold leading-none tracking-tight">Loan Distribution by Status</h3>
                            </div>
                            <div class="p-6 pt-0 h-[300px]">
                                <!-- Placeholder for pie chart -->
                                <div class="flex h-full items-center justify-center text-muted-foreground">
                                    Loan Status Distribution Chart
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm col-span-1">
                            <div class="flex flex-col space-y-1.5 p-6">
                                <h3 class="text-2xl font-semibold leading-none tracking-tight">Monthly Loan Volume</h3>
                            </div>
                            <div class="p-6 pt-0 h-[300px]">
                                <!-- Placeholder for bar chart -->
                                <div class="flex h-full items-center justify-center text-muted-foreground">
                                    Monthly Loan Volume Chart
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div x-show="activeTab === 'reports'" class="space-y-4" style="display: none;">
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                        <div class="flex flex-col space-y-1.5 p-6">
                            <h3 class="text-2xl font-semibold leading-none tracking-tight">Available Reports</h3>
                            <p class="text-sm text-muted-foreground">Generate and download reports</p>
                        </div>
                        <div class="p-6 pt-0 h-[400px]">
                            <div class="flex h-full items-center justify-center text-muted-foreground">
                                Reports Module Coming Soon
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
