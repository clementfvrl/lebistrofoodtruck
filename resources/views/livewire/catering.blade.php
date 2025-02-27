<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Hero Section -->
            <div class="bg-gradient-to-r from-orange-500 to-beige-400 rounded-lg shadow-xl mb-12 overflow-hidden">
                <div class="p-8 text-center">
                    <h1 class="text-4xl font-bold text-white mb-4">Catering Service</h1>
                    <p class="text-white text-lg">Wir machen Ihre Veranstaltung zu einem kulinarischen Erlebnis mit unserem professionellen Catering-Service.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-12">
                <!-- Left Column: Info -->
                <div>
                    <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-8 mb-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">Unser Catering-Angebot</h2>
                        
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-orange-500 mb-2">Für jede Veranstaltung das passende Menü</h3>
                            <p class="text-gray-600 mb-4">Ob Firmenfeier, Hochzeit, Geburtstag oder private Party - wir bieten maßgeschneiderte Catering-Lösungen für Ihre Veranstaltung.</p>
                        </div>
                        
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-orange-500 mb-2">Frisch und qualitativ hochwertig</h3>
                            <p class="text-gray-600 mb-4">Wir verwenden nur frische, lokale und saisonale Zutaten für unsere Gerichte. Qualität steht bei uns an erster Stelle.</p>
                        </div>
                        
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-orange-500 mb-2">Für jeden Geschmack etwas dabei</h3>
                            <p class="text-gray-600 mb-4">Von klassischen Burgern über vegetarische und vegane Optionen bis hin zu ausgefallenen Street-Food-Kreationen - wir haben für jeden Geschmack das Richtige.</p>
                        </div>
                        
                        <div>
                            <h3 class="text-lg font-semibold text-orange-500 mb-2">Professioneller Service</h3>
                            <p class="text-gray-600">Unser freundliches und erfahrenes Team sorgt für einen reibungslosen Ablauf Ihrer Veranstaltung.</p>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">Catering-Pakete</h2>
                        
                        <div class="space-y-6">
                            <div class="p-4 border border-orange-200 rounded-lg bg-orange-50">
                                <h3 class="text-lg font-semibold text-orange-600 mb-2">Basic Paket</h3>
                                <p class="text-gray-600 mb-2">Perfekt für kleinere Veranstaltungen mit 10-30 Personen.</p>
                                <ul class="list-disc list-inside text-gray-600 mb-2">
                                    <li>Auswahl an 3 verschiedenen Burgern</li>
                                    <li>2 Beilagen-Optionen</li>
                                    <li>Softdrinks inklusive</li>
                                </ul>
                                <p class="font-bold text-orange-600">Ab €25 pro Person</p>
                            </div>
                            
                            <div class="p-4 border border-orange-200 rounded-lg bg-orange-50">
                                <h3 class="text-lg font-semibold text-orange-600 mb-2">Premium Paket</h3>
                                <p class="text-gray-600 mb-2">Ideal für mittlere bis größere Veranstaltungen mit 30-100 Personen.</p>
                                <ul class="list-disc list-inside text-gray-600 mb-2">
                                    <li>Auswahl an 5 verschiedenen Burgern</li>
                                    <li>3 Beilagen-Optionen</li>
                                    <li>Softdrinks und hausgemachte Limonaden</li>
                                    <li>Dessert-Option</li>
                                </ul>
                                <p class="font-bold text-orange-600">Ab €35 pro Person</p>
                            </div>
                            
                            <div class="p-4 border border-orange-200 rounded-lg bg-orange-50">
                                <h3 class="text-lg font-semibold text-orange-600 mb-2">Deluxe Paket</h3>
                                <p class="text-gray-600 mb-2">Für große Veranstaltungen mit mehr als 100 Personen.</p>
                                <ul class="list-disc list-inside text-gray-600 mb-2">
                                    <li>Vollständiges Buffet mit allen unseren Spezialitäten</li>
                                    <li>Live-Cooking-Station</li>
                                    <li>Alle Getränke inklusive (auch alkoholische)</li>
                                    <li>Volle Dessert-Auswahl</li>
                                </ul>
                                <p class="font-bold text-orange-600">Ab €45 pro Person</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column: Contact Form -->
                <div>
                    <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-8 mb-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">Catering anfragen</h2>
                        
                        @if ($success)
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                                <p>Vielen Dank für Ihre Anfrage! Wir werden uns in Kürze bei Ihnen melden.</p>
                            </div>
                        @endif
                        
                        <form wire:submit.prevent="submit">
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 font-medium mb-2">Name *</label>
                                <input type="text" id="name" wire:model="name" class="w-full border-gray-300 rounded-md shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200 focus:ring-opacity-50">
                                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
                            
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 font-medium mb-2">E-Mail *</label>
                                <input type="email" id="email" wire:model="email" class="w-full border-gray-300 rounded-md shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200 focus:ring-opacity-50">
                                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
                            
                            <div class="mb-4">
                                <label for="phone" class="block text-gray-700 font-medium mb-2">Telefon *</label>
                                <input type="text" id="phone" wire:model="phone" class="w-full border-gray-300 rounded-md shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200 focus:ring-opacity-50">
                                @error('phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
                            
                            <div class="mb-4">
                                <label for="date" class="block text-gray-700 font-medium mb-2">Datum der Veranstaltung *</label>
                                <input type="date" id="date" wire:model="date" class="w-full border-gray-300 rounded-md shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200 focus:ring-opacity-50">
                                @error('date') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
                            
                            <div class="mb-4">
                                <label for="guests" class="block text-gray-700 font-medium mb-2">Anzahl der Gäste *</label>
                                <input type="number" id="guests" wire:model="guests" min="10" class="w-full border-gray-300 rounded-md shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200 focus:ring-opacity-50">
                                @error('guests') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
                            
                            <div class="mb-6">
                                <label for="message" class="block text-gray-700 font-medium mb-2">Nachricht / Wünsche</label>
                                <textarea id="message" wire:model="message" rows="4" class="w-full border-gray-300 rounded-md shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200 focus:ring-opacity-50"></textarea>
                            </div>
                            
                            <button type="submit" class="w-full bg-orange-500 text-white py-3 px-6 rounded-lg font-semibold hover:bg-orange-600 transition-colors duration-200">
                                Anfrage senden
                            </button>
                        </form>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">Häufig gestellte Fragen</h2>
                        
                        <div x-data="{ open: false }" class="mb-4">
                            <button @click="open = !open" class="flex justify-between items-center w-full text-left font-semibold text-gray-800 py-2 border-b border-gray-200">
                                <span>Wie lange im Voraus sollte ich buchen?</span>
                                <svg class="h-5 w-5 text-gray-500" :class="{'transform rotate-180': open}" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="open" class="mt-2 text-gray-600">
                                <p>Wir empfehlen Ihnen, mindestens 2-3 Wochen im Voraus zu buchen, besonders für größere Veranstaltungen. In der Hochsaison (Mai-September) sollten Sie noch früher planen.</p>
                            </div>
                        </div>
                        
                        <div x-data="{ open: false }" class="mb-4">
                            <button @click="open = !open" class="flex justify-between items-center w-full text-left font-semibold text-gray-800 py-2 border-b border-gray-200">
                                <span>Gibt es eine Mindestanzahl an Gästen?</span>
                                <svg class="h-5 w-5 text-gray-500" :class="{'transform rotate-180': open}" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="open" class="mt-2 text-gray-600">
                                <p>Ja, für unser Catering benötigen wir mindestens 10 Personen. Für kleinere Gruppen bieten wir auch Take-away-Optionen an.</p>
                            </div>
                        </div>
                        
                        <div x-data="{ open: false }" class="mb-4">
                            <button @click="open = !open" class="flex justify-between items-center w-full text-left font-semibold text-gray-800 py-2 border-b border-gray-200">
                                <span>Können Sie Allergien und Diätwünsche berücksichtigen?</span>
                                <svg class="h-5 w-5 text-gray-500" :class="{'transform rotate-180': open}" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="open" class="mt-2 text-gray-600">
                                <p>Selbstverständlich! Wir bieten vegetarische, vegane und glutenfreie Optionen an. Bitte teilen Sie uns alle Allergien und Diätwünsche bei der Buchung mit.</p>
                            </div>
                        </div>
                        
                        <div x-data="{ open: false }">
                            <button @click="open = !open" class="flex justify-between items-center w-full text-left font-semibold text-gray-800 py-2 border-b border-gray-200">
                                <span>Wie erfolgt die Bezahlung?</span>
                                <svg class="h-5 w-5 text-gray-500" :class="{'transform rotate-180': open}" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="open" class="mt-2 text-gray-600">
                                <p>Wir verlangen eine Anzahlung von 30% bei Buchung. Der Restbetrag ist innerhalb von 7 Tagen nach der Veranstaltung zu bezahlen. Wir akzeptieren Überweisung, EC-Karte und Kreditkarte.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Section -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Impressionen unseres Caterings</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- In a real app, these would be actual images -->
                    <div class="bg-beige-100 aspect-video rounded-lg flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="bg-beige-100 aspect-video rounded-lg flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="bg-beige-100 aspect-video rounded-lg flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>
            </div>
            
            <!-- Testimonials -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-8 mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Das sagen unsere Kunden</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="p-6 bg-orange-50 rounded-lg">
                        <div class="flex text-orange-500 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                        <p class="text-gray-600 mb-4">"Das Catering für unsere Firmenfeier war ein voller Erfolg! Die Burger-Station kam bei allen Mitarbeitern super an und das Team war sehr professionell."</p>
                        <div class="font-semibold text-gray-800">- Michael K., Firmenfeier</div>
                    </div>
                    
                    <div class="p-6 bg-orange-50 rounded-lg">
                        <div class="flex text-orange-500 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                        <p class="text-gray-600 mb-4">"Wir haben für unsere Hochzeit das Premium Paket gebucht und waren begeistert! Die Gäste reden heute noch davon, wie lecker das Essen war."</p>
                        <div class="font-semibold text-gray-800">- Julia & Thomas, Hochzeitsfeier</div>
                    </div>
                    
                    <div class="p-6 bg-orange-50 rounded-lg">
                        <div class="flex text-orange-500 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                        <p class="text-gray-600 mb-4">"Die vegetarischen Optionen waren hervorragend! Als Organisator einer Konferenz mit vielen verschiedenen Ernährungswünschen war das Catering perfekt für uns."</p>
                        <div class="font-semibold text-gray-800">- Sarah M., Konferenzplanung</div>
                    </div>
                </div>
            </div>
            
            <!-- CTA Section -->
            <div class="bg-gradient-to-r from-orange-500 to-beige-400 rounded-lg shadow-xl p-8 text-center mb-12">
                <h2 class="text-2xl font-bold text-white mb-4">Bereit für ein unvergessliches Catering-Erlebnis?</h2>
                <p class="text-white text-lg mb-6">Kontaktieren Sie uns noch heute und lassen Sie uns gemeinsam Ihre Veranstaltung planen.</p>
                <button class="bg-white text-orange-600 hover:bg-orange-100 px-8 py-3 rounded-lg font-semibold text-lg transition-all duration-300">
                    Jetzt anfragen
                </button>
            </div>
        </div>
    </div>
</div>