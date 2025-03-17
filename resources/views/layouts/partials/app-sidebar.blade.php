{{-- resources/views/components/app-sidebar.blade.php --}}

@php
    $currentRoute = request()->route()->getName();

    // Función para verificar si la ruta actual coincide con la proporcionada
    function isActive($routeName) {
        return request()->route()->getName() === $routeName;
    }
@endphp

<aside class="fixed top-0 left-0 z-30 h-full w-[var(--sidebar-width)] border-r bg-background md:block">
    <div class="flex h-full flex-col">
        <div class="flex h-14 items-center border-b px-4">
            <a href="{{ route('dashboard') }}" class="flex items-center gap-2">
                <div class="flex h-8 w-8 items-center justify-center rounded-md bg-primary">
                    <span class="text-lg font-bold text-primary-foreground">H</span>
                </div>
                <span class="text-lg font-semibold">Heraconnecting</span>
            </a>
        </div>
        <div class="flex-1 overflow-auto py-2">
            <nav class="grid gap-1 px-2">
                <div class="py-2">
                    <h3 class="mb-2 px-4 text-xs font-semibold text-muted-foreground">Main</h3>
                    <div class="grid gap-1">
                        <a
                            href="{{ route('dashboard') }}"
                            class="flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium hover:bg-accent hover:text-accent-foreground {{ isActive('dashboard') ? 'bg-accent text-accent-foreground' : 'transparent' }}"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            <span>Dashboard</span>
                        </a>
                        <a
                            href="{{ route('loans.index') }}"
                            class="flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium hover:bg-accent hover:text-accent-foreground {{ isActive('loans.index') ? 'bg-accent text-accent-foreground' : 'transparent' }}"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                                <line x1="2" x2="22" y1="10" y2="10"></line>
                            </svg>
                            <span>Loans</span>
                        </a>
                        <a
                            href="{{ route('documents.index') }}"
                            class="flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium hover:bg-accent hover:text-accent-foreground {{ isActive('documents.index') ? 'bg-accent text-accent-foreground' : 'transparent' }}"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" x2="8" y1="13" y2="13"></line>
                                <line x1="16" x2="8" y1="17" y2="17"></line>
                                <line x1="10" x2="8" y1="9" y2="9"></line>
                            </svg>
                            <span>Documents</span>
                        </a>
                        <a
                            href="{{ route('processes.index') }}"
                            class="flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium hover:bg-accent hover:text-accent-foreground {{ isActive('processes.index') ? 'bg-accent text-accent-foreground' : 'transparent' }}"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                <path d="m21.5 19-9-4-9 4V5l9-4 9 4v14z"></path>
                                <path d="M14.5 5v13.5"></path>
                                <path d="M12.5 3v18"></path>
                                <path d="M8 6v13"></path>
                                <path d="M3 10v8"></path>
                            </svg>
                            <span>Processes</span>
                        </a>
                    </div>
                </div>
                <div class="py-2">
                    <h3 class="mb-2 px-4 text-xs font-semibold text-muted-foreground">Finance</h3>
                    <div class="grid gap-1">
                        <a
                            href="{{ route('draws.index') }}"
                            class="flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium hover:bg-accent hover:text-accent-foreground {{ isActive('draws.index') ? 'bg-accent text-accent-foreground' : 'transparent' }}"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                <path d="M21 12V7H5a2 2 0 0 1 0-4h14v4"></path>
                                <path d="M3 5v14a2 2 0 0 0 2 2h16v-5"></path>
                                <path d="M18 12a2 2 0 0 0 0 4h4v-4Z"></path>
                            </svg>
                            <span>Draws Funded</span>
                        </a>
                        <a
                            href="{{ route('partners.index') }}"
                            class="flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium hover:bg-accent hover:text-accent-foreground {{ isActive('partners.index') ? 'bg-accent text-accent-foreground' : 'transparent' }}"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                <path d="M6 8h.01"></path>
                                <path d="M10 8h.01"></path>
                                <path d="M14 8h.01"></path>
                                <path d="M18 8h.01"></path>
                            </svg>
                            <span>Capital Partners</span>
                        </a>
                        <a
                            href="{{ route('servicing.index') }}"
                            class="flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium hover:bg-accent hover:text-accent-foreground {{ isActive('servicing.index') ? 'bg-accent text-accent-foreground' : 'transparent' }}"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                                <path d="M3 9h18"></path>
                                <path d="M3 15h18"></path>
                                <path d="M9 21V9"></path>
                                <path d="M15 21V9"></path>
                            </svg>
                            <span>Servicing</span>
                        </a>
                        <a
                            href="{{ route('portfolios.index') }}"
                            class="flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium hover:bg-accent hover:text-accent-foreground {{ isActive('portfolios.index') ? 'bg-accent text-accent-foreground' : 'transparent' }}"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
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
                        <a
                            href="#"
                            class="flex items-center gap-3 rounded-md px-3 py-2 text-sm font-medium hover:bg-accent hover:text-accent-foreground {{ isActive('analytics') ? 'bg-accent text-accent-foreground' : 'transparent' }}"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                            </svg>
                            <span>Analytics</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="mt-auto border-t p-4">
            <div x-data="{ open: false }" class="relative">
                <button
                    @click="open = !open"
                    class="w-full flex justify-start items-center px-2 text-sm font-medium rounded-md ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 hover:bg-accent hover:text-accent-foreground h-10">
                    <div class="relative flex h-6 w-6 shrink-0 overflow-hidden rounded-full mr-2">
                        <img class="aspect-square h-full w-full" src="/placeholder.svg?height=32&width=32" />
                        <div class="flex h-full w-full items-center justify-center rounded-full bg-muted">HC</div>
                    </div>
                    <span>Admin User</span>
                </button>

                <div
                    x-show="open"
                    @click.outside="open = false"
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute bottom-full mb-2 left-0 z-50 min-w-[8rem] overflow-hidden rounded-md border bg-popover p-1 text-popover-foreground shadow-md w-56"
                    style="display: none;">
                    <div class="px-2 py-1.5 text-sm font-semibold">My Account</div>
                    <div class="h-px bg-muted my-1"></div>
                    <a href="#" class="relative flex cursor-default select-none items-center rounded-sm px-2 py-1.5 text-sm outline-none hover:bg-accent hover:text-accent-foreground">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4">
                            <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                        <span>Settings</span>
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="relative flex w-full cursor-default select-none items-center rounded-sm px-2 py-1.5 text-sm outline-none hover:bg-accent hover:text-accent-foreground">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" x2="9" y1="12" y2="12"></line>
                            </svg>
                            <span>Log out</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</aside>
