<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Willkommen') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Hero Section -->
            <div class="bg-gradient-to-r from-orange-500 to-beige-400 rounded-lg shadow-xl mb-12 overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="p-8 flex items-center">
                        <div>
                            <h1 class="text-4xl font-bold text-white mb-4">Authentisches Street Food</h1>
                            <p class="text-white text-lg mb-6">Die besten Burger, Wraps und mehr - frisch und mit viel Liebe zubereitet!</p>
                            <div>
                                <a href="{{ route('menu') }}" class="bg-white text-orange-600 hover:bg-orange-100 px-6 py-3 rounded-lg font-semibold inline-flex items-center transition-all duration-300">
                                    Menü entdecken
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="relative h-64 md:h-auto bg-white/10 flex items-center justify-center p-8">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none" stroke="white" stroke-width="1.5" class="w-48 h-48">
                            <path d="M12 20h40v28H12z" fill="rgba(255,255,255,0.2)"/>
                            <path d="M16 48v4"/>
                            <path d="M48 48v4"/>
                            <path d="M19 20L10 8h44l-9 12"/>
                            <circle cx="24" cy="36" r="3"/>
                            <circle cx="40" cy="36" r="3"/>
                            <path d="M24 29v-6M40 29v-6"/>
                            <path d="M20 14h24"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Features Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <!-- Feature 1 -->
                <div class="bg-white overflow-hidden shadow-sm rounded-lg border border-gray-100 hover:shadow-md transition-all duration-300">
                    <div class="p-6">
                        <div class="text-orange-500 mb-4 flex justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-700 mb-2 text-center">Frische Zutaten</h3>
                        <p class="text-gray-600 text-center">Wir verwenden nur die frischesten Zutaten für unsere Gerichte. Täglich frisch eingekauft, lokal und saisonal.</p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white overflow-hidden shadow-sm rounded-lg border border-gray-100 hover:shadow-md transition-all duration-300">
                    <div class="p-6">
                        <div class="text-orange-500 mb-4 flex justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-700 mb-2 text-center">Schneller Service</h3>
                        <p class="text-gray-600 text-center">Unser schneller und freundlicher Service sorgt dafür, dass Sie nicht lange auf Ihr Essen warten müssen.</p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white overflow-hidden shadow-sm rounded-lg border border-gray-100 hover:shadow-md transition-all duration-300">
                    <div class="p-6">
                        <div class="text-orange-500 mb-4 flex justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-700 mb-2 text-center">Online Bestellen</h3>
                        <p class="text-gray-600 text-center">Bestellen Sie bequem online und holen Sie Ihr Essen ab oder lassen Sie es sich nach Hause liefern.</p>
                    </div>
                </div>
            </div>

            <!-- Popular Items Section -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Unsere beliebtesten Gerichte</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Item 1 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
                        <div class="h-48 bg-beige-100 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="w-24 h-24 text-orange-500" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="32" cy="32" r="24"/>
                                <path d="M20 26h24M20 32h24M20 38h24"/>
                                <path d="M30 20l-4 24M34 20l4 24"/>
                            </svg>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-gray-800 mb-1">Classic Burger</h3>
                            <p class="text-gray-600 text-sm mb-2">Mit 100% Rindfleisch, Käse, Salat und unserer Spezialsauce</p>
                            <div class="flex justify-between items-center">
                                <span class="font-bold text-orange-500">€9,90</span>
                                <a href="{{ route('menu') }}" class="bg-orange-500 text-white px-3 py-1 rounded-md text-sm">Bestellen</a>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
                        <div class="h-48 bg-beige-100 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="w-24 h-24 text-orange-500" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="16" y="12" width="32" height="40" rx="4"/>
                                <path d="M20 16h24M20 24h24M20 32h24M20 40h24M20 48h24"/>
                            </svg>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-gray-800 mb-1">Veggie Wrap</h3>
                            <p class="text-gray-600 text-sm mb-2">Gefüllt mit Gemüse, Avocado und hausgemachtem Hummus</p>
                            <div class="flex justify-between items-center">
                                <span class="font-bold text-orange-500">€8,50</span>
                                <a href="{{ route('menu') }}" class="bg-orange-500 text-white px-3 py-1 rounded-md text-sm">Bestellen</a>
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
                        <div class="h-48 bg-beige-100 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="w-24 h-24 text-orange-500" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M16 48h32l4-24H12z"/>
                                <path d="M32 48v-24M12 24l12-8M52 24l-12-8"/>
                                <circle cx="32" cy="16" r="4"/>
                            </svg>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-gray-800 mb-1">Loaded Fries</h3>
                            <p class="text-gray-600 text-sm mb-2">Knusprige Pommes mit Käsesoße, Speck und Jalapeños</p>
                            <div class="flex justify-between items-center">
                                <span class="font-bold text-orange-500">€7,50</span>
                                <a href="{{ route('menu') }}" class="bg-orange-500 text-white px-3 py-1 rounded-md text-sm">Bestellen</a>
                            </div>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
                        <div class="h-48 bg-beige-100 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="w-24 h-24 text-orange-500" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 48h40v-8H12z"/>
                                <path d="M12 40l6-24h28l6 24M24 24v8M40 24v8"/>
                                <path d="M24 32h16"/>
                            </svg>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-gray-800 mb-1">BBQ Pulled Pork</h3>
                            <p class="text-gray-600 text-sm mb-2">Saftiges Pulled Pork mit BBQ-Sauce und Coleslaw</p>
                            <div class="flex justify-between items-center">
                                <span class="font-bold text-orange-500">€10,90</span>
                                <a href="{{ route('menu') }}" class="bg-orange-500 text-white px-3 py-1 rounded-md text-sm">Bestellen</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center mt-8">
                    <a href="{{ route('menu') }}" class="bg-orange-500 text-white px-6 py-3 rounded-lg font-semibold inline-flex items-center transition-all duration-300 hover:bg-orange-600">
                        Komplette Speisekarte
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Our Services Section -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Unsere Dienstleistungen</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Catering -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
                        <div class="h-48 bg-orange-100 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="w-24 h-24 text-orange-500" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M16 24h32v24H16z"/>
                                <path d="M20 24v-8c0-3.3 2.7-6 6-6h12c3.3 0 6 2.7 6 6v8"/>
                                <path d="M12 30h6M12 36h6M12 42h6M46 30h6M46 36h6M46 42h6"/>
                                <path d="M28 32h8M26 38h12"/>
                            </svg>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-lg text-gray-800 mb-2">Catering</h3>
                            <p class="text-gray-600 text-sm mb-3">Unsere Catering-Dienste für Ihre Veranstaltungen, Feiern und Events.</p>
                            <a href="{{ route('catering') }}" class="text-orange-500 hover:text-orange-600 font-medium inline-flex items-center">
                                Mehr erfahren
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Foodtruck Rental -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
                        <div class="h-48 bg-orange-100 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="w-24 h-24 text-orange-500" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M8 44h48v-8H8z"/>
                                <path d="M8 36V20h28l12 16"/>
                                <circle cx="18" cy="44" r="4"/>
                                <circle cx="46" cy="44" r="4"/>
                                <path d="M24 28V20M36 28v-4"/>
                                <path d="M36 36H16M48 36H44"/>
                            </svg>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-lg text-gray-800 mb-2">Foodtruck Mieten</h3>
                            <p class="text-gray-600 text-sm mb-3">Mieten Sie unseren Foodtruck für Ihre Veranstaltung oder Firmenfeier.</p>
                            <a href="{{ route('services.foodtruck') }}" class="text-orange-500 hover:text-orange-600 font-medium inline-flex items-center">
                                Mehr erfahren
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Photobooth Rental -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
                        <div class="h-48 bg-orange-100 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="w-24 h-24 text-orange-500" fill="none" stroke="currentColor" stroke-width="1.5">
                                <rect x="12" y="16" width="40" height="32" rx="2"/>
                                <rect x="20" y="24" width="24" height="16" rx="1"/>
                                <circle cx="48" cy="20" r="2"/>
                                <path d="M32 40v8M24 48h16"/>
                            </svg>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-lg text-gray-800 mb-2">Photobooth Mieten</h3>
                            <p class="text-gray-600 text-sm mb-3">Photobooth für Ihre Veranstaltung - für unvergessliche Erinnerungen.</p>
                            <a href="{{ route('services.photobooth') }}" class="text-orange-500 hover:text-orange-600 font-medium inline-flex items-center">
                                Mehr erfahren
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- DJ & Music -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
                        <div class="h-48 bg-orange-100 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="w-24 h-24 text-orange-500" fill="none" stroke="currentColor" stroke-width="1.5">
                                <circle cx="32" cy="32" r="24"/>
                                <path d="M32 16v16"/>
                                <path d="M24 24h16"/>
                                <path d="M24 32c0 4.4 3.6 8 8 8s8-3.6 8-8"/>
                                <path d="M20 44a16 16 0 0024 0"/>
                            </svg>
                        </div>
                        {{-- <div class="p-4">
                            <h3 class="font-bold text-lg text-gray-800 mb-2">DJ & Musik</h3>
                            <p class="text-gray-600 text-sm mb-3">Professionelle DJ-Services für Ihre Veranstaltung, Party oder Event.</p>
                            <a href="{{ route('services.music') }}" class="text-orange-500 hover:text-orange-600 font-medium inline-flex items-center">
                                Mehr erfahren
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>

            <!-- Merch Section -->
            {{-- <div class="mb-12 bg-white rounded-lg shadow-sm border border-gray-100 p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Street Food Merch</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="col-span-2">
                        <p class="text-gray-600 mb-4">Zeigen Sie Ihre Liebe zu unserem Street Food mit unserer exklusiven Merchandise-Kollektion. T-Shirts, Caps, Taschen und mehr - alle mit unserem ikonischen Logo.</p>
                        <p class="text-gray-600 mb-4">Unsere Produkte sind aus hochwertigen Materialien gefertigt und perfekt für echte Street-Food-Fans.</p>
                        <div class="mt-6">
                            <a href="{{ route('merch') }}" class="bg-orange-500 text-white px-6 py-3 rounded-lg font-semibold inline-flex items-center transition-all duration-300 hover:bg-orange-600">
                                Zum Shop
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="w-32 h-32 text-orange-500" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M16 16h32v32H16z"/>
                            <path d="M24 12v8M40 12v8M24 48v4M40 48v4"/>
                            <path d="M12 28h8M44 28h8"/>
                            <circle cx="32" cy="32" r="8"/>
                        </svg>
                    </div>
                </div>
            </div> --}}

            <!-- Location Section -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-8 mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Besuche uns</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <div class="aspect-w-16 aspect-h-9 bg-beige-100 rounded-lg mb-4 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 text-orange-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg text-gray-800 mb-2">Unser Hauptstandort</h3>
                        <p class="text-gray-600 mb-4">Hauptstraße 123, 1010 Wien</p>
                        <p class="text-gray-600 mb-1"><span class="font-bold">Montag - Freitag:</span> 11:00 - 22:00</p>
                        <p class="text-gray-600 mb-1"><span class="font-bold">Samstag:</span> 12:00 - 23:00</p>
                        <p class="text-gray-600"><span class="font-bold">Sonntag:</span> 12:00 - 21:00</p>
                    </div>
                    <div class="bg-beige-100 rounded-lg h-64 md:h-auto flex items-center justify-center text-orange-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Newsletter Section -->
            <div class="bg-gradient-to-r from-orange-500 to-beige-400 rounded-lg shadow-xl p-8">
                <div class="text-center">
                    <h2 class="text-2xl font-bold text-white mb-2">Bleibe auf dem Laufenden</h2>
                    <p class="text-white mb-6">Melde dich für unseren Newsletter an und erhalte exklusive Angebote und Updates.</p>
                    <div class="max-w-lg mx-auto">
                        <div class="flex flex-col sm:flex-row gap-2">
                            <input type="email" placeholder="Deine E-Mail-Adresse" class="px-4 py-3 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-orange-300">
                            <button class="bg-white text-orange-600 hover:bg-orange-100 px-6 py-3 rounded-lg font-semibold transition-all duration-300 sm:w-auto w-full">
                                Anmelden
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>