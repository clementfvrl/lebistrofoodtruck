<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Hero Section -->
            <div class="bg-gradient-to-r from-orange-500 to-beige-400 rounded-lg shadow-xl mb-12 overflow-hidden">
                <div class="p-8 text-center">
                    <h1 class="text-4xl font-bold text-white mb-4">Kontakt</h1>
                    <p class="text-white text-lg">Wir freuen uns, von Ihnen zu hören! Senden Sie uns eine Nachricht und wir melden uns bei Ihnen.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-12">
                <!-- Left Column: Contact Form -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Schreiben Sie uns</h2>
                    
                    @if ($success)
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                            <p>Vielen Dank für Ihre Nachricht! Wir werden uns so schnell wie möglich bei Ihnen melden.</p>
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
                            <label for="subject" class="block text-gray-700 font-medium mb-2">Betreff *</label>
                            <input type="text" id="subject" wire:model="subject" class="w-full border-gray-300 rounded-md shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200 focus:ring-opacity-50">
                            @error('subject') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 font-medium mb-2">Nachricht *</label>
                            <textarea id="message" wire:model="message" rows="6" class="w-full border-gray-300 rounded-md shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200 focus:ring-opacity-50"></textarea>
                            @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        
                        <button type="submit" class="w-full bg-orange-500 text-white py-3 px-6 rounded-lg font-semibold hover:bg-orange-600 transition-colors duration-200">
                            Nachricht senden
                        </button>
                    </form>
                </div>
                
                <!-- Right Column: Contact Info -->
                <div>
                    <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-8 mb-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">Unsere Kontaktdaten</h2>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="bg-orange-100 rounded-full w-10 h-10 flex items-center justify-center mr-4 mt-1 shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800 mb-1">Adresse</h3>
                                    <p class="text-gray-600">Hauptstraße 123<br>1010 Wien, Österreich</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="bg-orange-100 rounded-full w-10 h-10 flex items-center justify-center mr-4 mt-1 shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800 mb-1">Telefon</h3>
                                    <p class="text-gray-600">+43 123 456 789</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="bg-orange-100 rounded-full w-10 h-10 flex items-center justify-center mr-4 mt-1 shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800 mb-1">E-Mail</h3>
                                    <p class="text-gray-600">info@streetfood.at</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="bg-orange-100 rounded-full w-10 h-10 flex items-center justify-center mr-4 mt-1 shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800 mb-1">Öffnungszeiten</h3>
                                    <p class="text-gray-600">
                                        Montag - Freitag: 11:00 - 22:00<br>
                                        Samstag: 12:00 - 23:00<br>
                                        Sonntag: 12:00 - 21:00
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Social Media -->
                    <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">Folgen Sie uns</h2>
                        
                        <div class="flex space-x-4 mb-6">
                            <a href="#" class="bg-orange-100 rounded-full w-10 h-10 flex items-center justify-center text-orange-500 hover:bg-orange-200 transition-colors duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </a>
                            <a href="#" class="bg-orange-100 rounded-full w-10 h-10 flex items-center justify-center text-orange-500 hover:bg-orange-200 transition-colors duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </a>
                            <a href="#" class="bg-orange-100 rounded-full w-10 h-10 flex items-center justify-center text-orange-500 hover:bg-orange-200 transition-colors duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                                </svg>
                            </a>
                            <a href="#" class="bg-orange-100 rounded-full w-10 h-10 flex items-center justify-center text-orange-500 hover:bg-orange-200 transition-colors duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                                </svg>
                            </a>
                        </div>
                        
                        <p class="text-gray-600">Folgen Sie uns auf unseren sozialen Medien, um stets über unsere neuesten Gerichte, Sonderangebote und Events informiert zu sein.</p>
                    </div>
                </div>
            </div>
            
            <!-- Map Section -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-8 mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Wo Sie uns finden</h2>
                
                <div class="h-96 bg-beige-100 rounded-lg flex items-center justify-center">
                    <!-- In a real application, this would be a map embed -->
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-orange-500 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                        </svg>
                        <p class="text-gray-700 font-medium">Hier würde die interaktive Karte erscheinen.</p>
                        <p class="text-gray-600 mt-2">Hauptstraße 123, 1010 Wien, Österreich</p>
                    </div>
                </div>
            </div>
            
            <!-- FAQ Section -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-8 mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Häufig gestellte Fragen</h2>
                
                <div class="space-y-4">
                    <div x-data="{ open: false }" class="border-b border-gray-200 pb-4">
                        <button @click="open = !open" class="flex justify-between items-center w-full text-left font-semibold text-gray-800">
                            <span>Haben Sie einen Lieferservice?</span>
                            <svg class="h-5 w-5 text-gray-500" :class="{'transform rotate-180': open}" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="open" class="mt-2 text-gray-600">
                            <p>Ja, wir liefern innerhalb von Wien. Bestellungen können telefonisch oder über unsere Website aufgegeben werden. Die Lieferzeit beträgt in der Regel 30-45 Minuten.</p>
                        </div>
                    </div>
                    
                    <div x-data="{ open: false }" class="border-b border-gray-200 pb-4">
                        <button @click="open = !open" class="flex justify-between items-center w-full text-left font-semibold text-gray-800">
                            <span>Gibt es vegetarische oder vegane Optionen?</span>
                            <svg class="h-5 w-5 text-gray-500" :class="{'transform rotate-180': open}" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="open" class="mt-2 text-gray-600">
                            <p>Ja, wir bieten eine Vielzahl von vegetarischen und veganen Optionen an. Diese sind in unserer Speisekarte mit einem entsprechenden Symbol gekennzeichnet.</p>
                        </div>
                    </div>
                    
                    <div x-data="{ open: false }" class="border-b border-gray-200 pb-4">
                        <button @click="open = !open" class="flex justify-between items-center w-full text-left font-semibold text-gray-800">
                            <span>Können Sie auch größere Gruppen bewirten?</span>
                            <svg class="h-5 w-5 text-gray-500" :class="{'transform rotate-180': open}" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="open" class="mt-2 text-gray-600">
                            <p>Selbstverständlich! Für größere Gruppen bieten wir spezielle Catering-Optionen an. Bitte kontaktieren Sie uns für weitere Details oder schauen Sie sich unsere Catering-Seite an.</p>
                        </div>
                    </div>
                    
                    <div x-data="{ open: false }" class="border-b border-gray-200 pb-4">
                        <button @click="open = !open" class="flex justify-between items-center w-full text-left font-semibold text-gray-800">
                            <span>Bieten Sie auch glutenfreie Optionen an?</span>
                            <svg class="h-5 w-5 text-gray-500" :class="{'transform rotate-180': open}" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="open" class="mt-2 text-gray-600">
                            <p>Ja, wir haben glutenfreie Optionen in unserem Angebot. Diese sind in der Speisekarte entsprechend gekennzeichnet. Bitte informieren Sie uns bei Bestellung über Allergien oder Unverträglichkeiten.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>