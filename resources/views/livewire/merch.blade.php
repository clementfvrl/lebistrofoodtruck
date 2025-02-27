<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Hero Section -->
            <div class="bg-gradient-to-r from-orange-500 to-beige-400 rounded-lg shadow-xl mb-12 overflow-hidden">
                <div class="p-8 text-center">
                    <h1 class="text-4xl font-bold text-white mb-4">Street Food Merch</h1>
                    <p class="text-white text-lg">Zeige deine Liebe zu unseren Burgern und Street Food mit unserer exklusiven Merchandise-Kollektion!</p>
                </div>
            </div>

            <!-- Category Filter -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-100 mb-8">
                <div class="overflow-x-auto py-3 px-2">
                    <div class="flex space-x-2 justify-center">
                        @foreach ($categories as $key => $category)
                        <button 
                            wire:click="setCategory('{{ $key }}')" 
                            class="px-4 py-2 rounded-lg transition-all duration-200 flex items-center justify-center whitespace-nowrap {{ $activeCategory === $key ? 'bg-orange-500 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}"
                        >
                            {{ $category }}
                        </button>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-12">
                @forelse ($filteredItems as $item)
                <div class="bg-white rounded-lg overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
                    <div class="h-48 bg-beige-100 flex items-center justify-center relative">
                        <!-- In a real app, you would display actual images here -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-16 h-16 text-orange-500" fill="none" stroke="currentColor" stroke-width="1.5">
                            @if(str_contains($item['name'], 'T-Shirt') || str_contains($item['name'], 'Hoodie') || str_contains($item['name'], 'Tank Top'))
                            <path d="M3 6l2-2h14l2 2M3 6v15h18V6M3 6h18" />
                            <path d="M8 6v2c0 0 1-1 4-1s4 1 4 1V6" />
                            @elseif(str_contains($item['name'], 'Cap') || str_contains($item['name'], 'Beanie'))
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M12 12h.01M8 12h.01M16 12h.01"/>
                            @elseif(str_contains($item['name'], 'Tasse') || str_contains($item['name'], 'Mug'))
                            <path d="M17 5V2H7v3M17 5H7M7 5a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2"/>
                            <path d="M19 7h2v4h-2"/>
                            @elseif(str_contains($item['name'], 'Poster'))
                            <rect x="3" y="3" width="18" height="18" rx="2"/>
                            <path d="M8 7h8M8 11h8M8 15h8"/>
                            @elseif(str_contains($item['name'], 'Socken'))
                            <path d="M3 6l3 16h4l3-16M17 6l-3 16h-4"/>
                            <path d="M3 6h14"/>
                            @elseif(str_contains($item['name'], 'Schlüsselanhänger'))
                            <circle cx="12" cy="6" r="4"/>
                            <path d="M12 10v8M8 18h8"/>
                            @elseif(str_contains($item['name'], 'Sticker'))
                            <path d="M3.85 8.62a4 4 0 014.78-4.77 4 4 0 016.74 0 4 4 0 014.78 4.78 4 4 0 010 6.74 4 4 0 01-4.77 4.78 4 4 0 01-6.75 0 4 4 0 01-4.78-4.77 4 4 0 010-6.76z"/>
                            @elseif(str_contains($item['name'], 'Schürze'))
                            <path d="M8 4h8M6 8h12l-1 12H7L6 8z"/>
                            <path d="M6 8l-2-4M18 8l2-4M12 8v12"/>
                            @elseif(str_contains($item['name'], 'Bag'))
                            <rect x="3" y="6" width="18" height="14" rx="2"/>
                            <path d="M3 10h18M8 6V4a2 2 0 012-2h4a2 2 0 012 2v2"/>
                            @else
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M12 16v.01M12 8v4"/>
                            @endif
                        </svg>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-gray-800">{{ $item['name'] }}</h3>
                            <span class="font-bold text-orange-500">€{{ number_format($item['price'], 2, ',', '.') }}</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-3">{{ $item['description'] }}</p>
                        
                        @if(count($item['sizes']) > 1)
                        <div class="mb-3">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Größe</label>
                            <select class="w-full border-gray-300 rounded-md shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200 focus:ring-opacity-50 text-sm">
                                @foreach($item['sizes'] as $size)
                                <option value="{{ $size }}">{{ $size }}</option>
                                @endforeach
                            </select>
                        </div>
                        @endif
                        
                        <button class="bg-orange-500 text-white w-full py-2 rounded-md text-sm hover:bg-orange-600 transition-colors duration-200">
                            In den Warenkorb
                        </button>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-500">Keine Produkte gefunden.</p>
                </div>
                @endforelse
            </div>

            <!-- Info Sections -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <!-- Shipping Info -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Versand & Lieferung</h2>
                    
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <div>
                                <h3 class="font-medium text-gray-800">Schneller Versand</h3>
                                <p class="text-gray-600 text-sm">Lieferung innerhalb von 2-4 Werktagen innerhalb Österreichs.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <div>
                                <h3 class="font-medium text-gray-800">Versandkosten</h3>
                                <p class="text-gray-600 text-sm">€4,95 pro Bestellung. Kostenloser Versand ab €50 Bestellwert.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                            <div>
                                <h3 class="font-medium text-gray-800">Einfache Rücksendung</h3>
                                <p class="text-gray-600 text-sm">14 Tage Rückgaberecht für ungetragene Artikel in Originalverpackung.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Payment Info -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Zahlung & Sicherheit</h2>
                    
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                            </svg>
                            <div>
                                <h3 class="font-medium text-gray-800">Sichere Bezahlung</h3>
                                <p class="text-gray-600 text-sm">Wir akzeptieren Kreditkarte, PayPal, Sofortüberweisung und Rechnung.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            <div>
                                <h3 class="font-medium text-gray-800">Datenschutz</h3>
                                <p class="text-gray-600 text-sm">Alle Daten werden verschlüsselt übertragen und sicher verarbeitet.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <div>
                                <h3 class="font-medium text-gray-800">Hilfe & Support</h3>
                                <p class="text-gray-600 text-sm">Bei Fragen kontaktieren Sie uns unter shop@streetfood.at oder +43 123 456 789.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Newsletter Section -->
            <div class="bg-gradient-to-r from-orange-500 to-beige-400 rounded-lg shadow-xl p-8 text-center mb-12">
                <h2 class="text-2xl font-bold text-white mb-2">Bleibe auf dem Laufenden</h2>
                <p class="text-white mb-6">Abonniere unseren Newsletter und erhalte 10% Rabatt auf deine erste Bestellung sowie exklusive Angebote.</p>
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