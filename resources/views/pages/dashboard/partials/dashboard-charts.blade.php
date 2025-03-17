{{-- resources/views/components/dashboard-charts.blade.php --}}

<div x-data="{ activeTab: 'monthly' }" class="rounded-lg border bg-card text-card-foreground shadow-sm">
    <div class="flex flex-col space-y-1.5 p-6">
        <h3 class="text-2xl font-semibold leading-none tracking-tight">Loan Performance</h3>
        <p class="text-sm text-muted-foreground">View loan performance metrics over time</p>
        <div class="mt-4">
            <div class="inline-flex h-10 items-center justify-center rounded-md bg-muted p-1 text-muted-foreground">
                <button
                    @click="activeTab = 'monthly'"
                    :class="{ 'bg-background text-foreground shadow-sm': activeTab === 'monthly' }"
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50">
                    Monthly
                </button>
                <button
                    @click="activeTab = 'quarterly'"
                    :class="{ 'bg-background text-foreground shadow-sm': activeTab === 'quarterly' }"
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50">
                    Quarterly
                </button>
                <button
                    @click="activeTab = 'yearly'"
                    :class="{ 'bg-background text-foreground shadow-sm': activeTab === 'yearly' }"
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50">
                    Yearly
                </button>
            </div>
        </div>
    </div>
    <div class="p-6 pt-0">
        <div class="h-[300px] w-full">
            <!-- Placeholder for chart -->
            <div class="flex h-full items-center justify-center text-muted-foreground">Loan Performance Chart</div>
        </div>
    </div>
</div>
