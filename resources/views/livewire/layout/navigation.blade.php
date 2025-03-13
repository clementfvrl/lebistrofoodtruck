<nav x-data="{ open: false }" class="bg-orange-500 border-b border-orange-300">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center">
                        <div class="w-12 h-12 mr-3">
                            <img src="/images/logo.svg" alt="Le Bistro Foodtruck logo" class="rounded-md" />
                        </div>
                        <div class="text-2xl font-bold text-white">LBF</div>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-white" wire:navigate>
                        {{ __('Startseite') }}
                    </x-nav-link>
                    <x-nav-link :href="route('menu')" :active="request()->routeIs('menu')" class="text-white" wire:navigate>
                        {{ __('Speisekarte') }}
                    </x-nav-link>
                    <x-nav-link :href="route('catering')" :active="request()->routeIs('catering')" class="text-white" wire:navigate>
                        {{ __('Catering') }}
                    </x-nav-link>
                    
                    <!-- Services Dropdown -->
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 pt-1 text-white font-medium text-sm leading-5 hover:text-orange-300 focus:outline-none transition duration-150 ease-in-out">
                                    {{ __('Services') }}
                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link :href="route('services.foodtruck')" wire:navigate>
                                {{ __('Foodtruck Mieten') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('services.photobooth')" wire:navigate>
                                {{ __('Photobooth Mieten') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('services.music')" wire:navigate>
                                {{ __('DJ & Musik') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                    
                    <x-nav-link :href="route('merch')" :active="request()->routeIs('merch')" class="text-white" wire:navigate>
                        {{ __('Merch') }}
                    </x-nav-link>
                    <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')" class="text-white" wire:navigate>
                        {{ __('Kontakt') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        @auth
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-orange-600 hover:bg-orange-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        @else
                            <a href="{{ route('login') }}" class="text-white hover:text-orange-200 mr-4" wire:navigate>{{ __('Anmelden') }}</a>
                            <a href="{{ route('register') }}" class="bg-white text-orange-600 hover:bg-orange-100 px-4 py-2 rounded-md" wire:navigate>{{ __('Registrieren') }}</a>
                        @endauth
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile')"  wire:navigate>
                            {{ __('Profil') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <button wire:click="logout" class="w-full text-start">
                            <x-dropdown-link>
                                {{ __('Abmelden') }}
                            </x-dropdown-link>
                        </button>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-orange-200 hover:bg-orange-600 focus:outline-none focus:bg-orange-600 focus:text-orange-200 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-orange-400">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-white" wire:navigate>
                {{ __('Startseite') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('menu')" :active="request()->routeIs('menu')" class="text-white" wire:navigate>
                {{ __('Speisekarte') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('catering')" :active="request()->routeIs('catering')" class="text-white" wire:navigate>
                {{ __('Catering') }}
            </x-responsive-nav-link>
            
            <!-- Services Dropdown Mobile -->
            <div x-data="{ open: false }" class="border-l-4 border-transparent">
                <button @click="open = !open" class="flex items-center w-full pl-3 pr-4 py-2 text-white hover:text-orange-200">
                    <span>{{ __('Services') }}</span>
                    <svg class="ml-auto h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        :class="{'rotate-180': open}">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="open" class="pl-4">
                    <x-responsive-nav-link :href="route('services.foodtruck')" :active="request()->routeIs('services.foodtruck')" class="text-white" wire:navigate>
                        {{ __('Foodtruck Mieten') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('services.photobooth')" :active="request()->routeIs('services.photobooth')" class="text-white" wire:navigate>
                        {{ __('Photobooth Mieten') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('services.music')" :active="request()->routeIs('services.music')" class="text-white" wire:navigate>
                        {{ __('DJ & Musik') }}
                    </x-responsive-nav-link>
                </div>
            </div>
            
            <x-responsive-nav-link :href="route('merch')" :active="request()->routeIs('merch')" class="text-white" wire:navigate>
                {{ __('Merch') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('contact')" :active="request()->routeIs('contact')" class="text-white" wire:navigate>
                {{ __('Kontakt') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        @auth
        <div class="pt-4 pb-1 border-t border-orange-300">
            <div class="px-4">
                <div class="font-medium text-base text-white">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-white">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile')" class="text-white" wire:navigate>
                    {{ __('Profil') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <button wire:click="logout" class="w-full text-start">
                    <x-responsive-nav-link class="text-white">
                        {{ __('Abmelden') }}
                    </x-responsive-nav-link>
                </button>
            </div>
        </div>
        @else
        <div class="pt-4 pb-1 border-t border-orange-300">
            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('login')" class="text-white" wire:navigate>
                    {{ __('Anmelden') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('register')" class="text-white" wire:navigate>
                    {{ __('Registrieren') }}
                </x-responsive-nav-link>
            </div>
        </div>
        @endauth
    </div>
</nav>