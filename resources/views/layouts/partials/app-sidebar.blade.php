<aside class="fixed top-0 left-0 z-30 h-full w-[var(--sidebar-width)] border-r bg-background hidden md:block">
    <div class="flex h-full flex-col">
        <div class="flex h-14 items-center border-b px-4">
            <a href="/" class="flex items-center gap-2">
                <div class="flex h-8 w-8 items-center justify-center rounded-md bg-primary"><span class="text-lg font-bold text-primary-foreground">H</span></div>
                <span class="text-lg font-semibold">Heraconnecting</span>
            </a>
        </div>
        <div class="flex-1 overflow-auto py-2">
            <nav class="grid gap-1 px-2">
                <div class="py-2">
                    <h3 class="mb-2 px-4 text-xs font-semibold text-muted-foreground">Main</h3>
                    <div class="grid gap-1">
                        <div class="space-y-1">
                            <a href="/" class="flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium hover:bg-accent hover:text-accent-foreground transparent">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-home h-4 w-4">
                                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span>Dashboard</span>
                            </a>
                            <div class="pl-7 space-y-1"><a href="/dashboard/overview" class="flex items-center gap-3 rounded-md px-3 py-1.5 text-sm font-medium hover:bg-accent hover:text-accent-foreground bg-accent text-accent-foreground"><span>Overview</span></a><a href="/dashboard/pipeline-status" class="flex items-center gap-3 rounded-md px-3 py-1.5 text-sm font-medium hover:bg-accent hover:text-accent-foreground text-muted-foreground"><span>Pipeline Status</span></a><a href="/dashboard/notifications" class="flex items-center gap-3 rounded-md px-3 py-1.5 text-sm font-medium hover:bg-accent hover:text-accent-foreground text-muted-foreground"><span>Notifications</span></a><a href="/dashboard/quick-actions" class="flex items-center gap-3 rounded-md px-3 py-1.5 text-sm font-medium hover:bg-accent hover:text-accent-foreground text-muted-foreground"><span>Quick Actions</span></a></div>
                        </div>
                        <a href="/loans" class="flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium hover:bg-accent hover:text-accent-foreground transparent">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card h-4 w-4">
                                <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                                <line x1="2" x2="22" y1="10" y2="10"></line>
                            </svg>
                            <span>Loans</span>
                        </a>
                        <a href="/documents" class="flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium hover:bg-accent hover:text-accent-foreground transparent">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text h-4 w-4">
                                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                <path d="M10 9H8"></path>
                                <path d="M16 13H8"></path>
                                <path d="M16 17H8"></path>
                            </svg>
                            <span>Documents</span>
                        </a>
                        <a href="/processes" class="flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium hover:bg-accent hover:text-accent-foreground transparent">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layers h-4 w-4">
                                <path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"></path>
                                <path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"></path>
                                <path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"></path>
                            </svg>
                            <span>Processes</span>
                        </a>
                    </div>
                </div>
                <div class="py-2">
                    <h3 class="mb-2 px-4 text-xs font-semibold text-muted-foreground">Finance</h3>
                    <div class="grid gap-1">
                        <a href="/draws-funded" class="flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium hover:bg-accent hover:text-accent-foreground transparent">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet h-4 w-4">
                                <path d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1"></path>
                                <path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"></path>
                            </svg>
                            <span>Draws Funded</span>
                        </a>
                        <a href="/capital-partners" class="flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium hover:bg-accent hover:text-accent-foreground transparent">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-landmark h-4 w-4">
                                <line x1="3" x2="21" y1="22" y2="22"></line>
                                <line x1="6" x2="6" y1="18" y2="11"></line>
                                <line x1="10" x2="10" y1="18" y2="11"></line>
                                <line x1="14" x2="14" y1="18" y2="11"></line>
                                <line x1="18" x2="18" y1="18" y2="11"></line>
                                <polygon points="12 2 20 7 4 7"></polygon>
                            </svg>
                            <span>Capital Partners</span>
                        </a>
                        <a href="/servicing" class="flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium hover:bg-accent hover:text-accent-foreground transparent">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bar-chart3 h-4 w-4">
                                <path d="M3 3v18h18"></path>
                                <path d="M18 17V9"></path>
                                <path d="M13 17V5"></path>
                                <path d="M8 17v-3"></path>
                            </svg>
                            <span>Servicing</span>
                        </a>
                        <a href="/investors" class="flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium hover:bg-accent hover:text-accent-foreground transparent">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users h-4 w-4">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                            <span>Investors</span>
                        </a>
                    </div>
                </div>
                <div class="py-2">
                    <h3 class="mb-2 px-4 text-xs font-semibold text-muted-foreground">Reports</h3>
                    <div class="grid gap-1">
                        <a href="/analytics" class="flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium hover:bg-accent hover:text-accent-foreground transparent">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pie-chart h-4 w-4">
                                <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                            </svg>
                            <span>Analytics</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="mt-auto border-t p-4"><button class="inline-flex items-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent hover:text-accent-foreground h-10 py-2 w-full justify-start px-2" type="button" id="radix-«r0»" aria-haspopup="menu" aria-expanded="false" data-state="closed"><span class="relative flex shrink-0 overflow-hidden rounded-full h-6 w-6 mr-2"><img class="aspect-square h-full w-full" src="/placeholder.svg?height=32&amp;width=32"></span><span>Admin User</span></button></div>
    </div>
</aside>
