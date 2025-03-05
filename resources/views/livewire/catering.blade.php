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

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
                <!-- Left Column: Info & Packages -->
                <div class="lg:col-span-1">
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
                
                <!-- Right Column: Multi-step Form -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-8 mb-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">Catering anfragen</h2>
                        
                        @if ($success)
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                                <p class="text-center">Vielen Dank für Ihre Anfrage! Wir werden uns in Kürze bei Ihnen melden.</p>
                                <div class="mt-4 text-center">
                                    <button 
                                        wire:click="$set('success', false)"
                                        class="bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700 transition-colors duration-200"
                                    >
                                        Neue Anfrage starten
                                    </button>
                                </div>
                            </div>
                        @else
                            <!-- Progress Bar -->
                            <div class="mb-8">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-sm text-gray-600">Schritt {{ $currentStep }} von {{ $totalSteps }}</span>
                                    <span class="text-sm text-gray-600">{{ floor(($currentStep / $totalSteps) * 100) }}% abgeschlossen</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-orange-500 h-2.5 rounded-full" style="width: {{ ($currentStep / $totalSteps) * 100 }}%"></div>
                                </div>
                            </div>
                            
                            <!-- Step Navigation Pills -->
                            <div class="flex justify-between mb-8">
                                <button 
                                    wire:click="goToStep(1)" 
                                    class="flex flex-col items-center justify-center {{ $currentStep >= 1 ? 'text-orange-500' : 'text-gray-400' }}"
                                >
                                    <div class="flex items-center justify-center w-8 h-8 mb-1 {{ $currentStep >= 1 ? 'bg-orange-500 text-white' : 'bg-gray-200 text-gray-500' }} rounded-full">
                                        1
                                    </div>
                                    <span class="text-xs">Persönliche Daten</span>
                                </button>
                                
                                <button 
                                    wire:click="goToStep(2)" 
                                    class="flex flex-col items-center justify-center {{ $currentStep >= 2 ? 'text-orange-500' : 'text-gray-400' }}"
                                >
                                    <div class="flex items-center justify-center w-8 h-8 mb-1 {{ $currentStep >= 2 ? 'bg-orange-500 text-white' : 'bg-gray-200 text-gray-500' }} rounded-full">
                                        2
                                    </div>
                                    <span class="text-xs">Veranstaltungsdetails</span>
                                </button>
                                
                                <button 
                                    wire:click="goToStep(3)" 
                                    class="flex flex-col items-center justify-center {{ $currentStep >= 3 ? 'text-orange-500' : 'text-gray-400' }}"
                                >
                                    <div class="flex items-center justify-center w-8 h-8 mb-1 {{ $currentStep >= 3 ? 'bg-orange-500 text-white' : 'bg-gray-200 text-gray-500' }} rounded-full">
                                        3
                                    </div>
                                    <span class="text-xs">Catering-Optionen</span>
                                </button>
                                
                                <button 
                                    wire:click="goToStep(4)" 
                                    class="flex flex-col items-center justify-center {{ $currentStep >= 4 ? 'text-orange-500' : 'text-gray-400' }}"
                                >
                                    <div class="flex items-center justify-center w-8 h-8 mb-1 {{ $currentStep >= 4 ? 'bg-orange-500 text-white' : 'bg-gray-200 text-gray-500' }} rounded-full">
                                        4
                                    </div>
                                    <span class="text-xs">Zusätzliche Info</span>
                                </button>
                            </div>
                            
                            <!-- Form Steps -->
                            <form wire:submit.prevent="submit">
                                <!-- Step 1: Personal Information -->
                                <div class="{{ $currentStep == 1 ? 'block' : 'hidden' }}">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Persönliche Daten</h3>
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                        <div>
                                            <label for="name" class="block text-gray-700 font-medium mb-2">Name *</label>
                                            <input type="text" id="name" wire:model="name" class="w-full border-gray-300 rounded-md shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200 focus:ring-opacity-50">
                                            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                        </div>
                                        
                                        <div>
                                            <label for="email" class="block text-gray-700 font-medium mb-2">E-Mail *</label>
                                            <input type="email" id="email" wire:model="email" class="w-full border-gray-300 rounded-md shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200 focus:ring-opacity-50">
                                            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                        <div>
                                            <label for="phone" class="block text-gray-700 font-medium mb-2">Telefon *</label>
                                            <input type="text" id="phone" wire:model="phone" class="w-full border-gray-300 rounded-md shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200 focus:ring-opacity-50">
                                            @error('phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                        </div>
                                        
                                        <div>
                                            <label for="company" class="block text-gray-700 font-medium mb-2">Unternehmen <span class="text-gray-400">(optional)</span></label>
                                            <input type="text" id="company" wire:model="company" class="w-full border-gray-300 rounded-md shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200 focus:ring-opacity-50">
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Step 2: Event Information -->
                                <div class="{{ $currentStep == 2 ? 'block' : 'hidden' }}">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Veranstaltungsdetails</h3>
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                        <div>
                                            <label for="event_type" class="block text-gray-700 font-medium mb-2">Veranstaltungsart *</label>
                                            <select id="event_type" wire:model="event_type" class="w-full border-gray-300 rounded-md shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200 focus:ring-opacity-50">
                                                <option value="">-- Bitte wählen --</option>
                                                @foreach($availableEventTypes as $value => $label)
                                                    <option value="{{ $value }}">{{ $label }}</option>
                                                @endforeach
                                            </select>
                                            @error('event_type') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                        </div>
                                        
                                        <div>
                                            <label for="event_date" class="block text-gray-700 font-medium mb-2">Datum *</label>
                                            <input type="date" id="event_date" wire:model="event_date" class="w-full border-gray-300 rounded-md shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200 focus:ring-opacity-50">
                                            @error('event_date') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                        <div>
                                            <label for="start_time" class="block text-gray-700 font-medium mb-2">Startzeit *</label>
                                            <input type="time" id="start_time" wire:model="start_time" class="w-full border-gray-300 rounded-md shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200 focus:ring-opacity-50">
                                            @error('start_time') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                        </div>
                                        
                                        <div>
                                            <label for="end_time" class="block text-gray-700 font-medium mb-2">Endzeit *</label>
                                            <input type="time" id="end_time" wire:model="end_time" class="w-full border-gray-300 rounded-md shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200 focus:ring-opacity-50">
                                            @error('end_time') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <label for="venue_name" class="block text-gray-700 font-medium mb-2">Veranstaltungsort <span class="text-gray-400">(optional)</span></label>
                                        <input type="text" id="venue_name" wire:model="venue_name" class="w-full border-gray-300 rounded-md shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200 focus:ring-opacity-50">
                                    </div>
                                    
                                    <div class="mb-4">
                                        <label for="venue_address" class="block text-gray-700 font-medium mb-2">Adresse des Veranstaltungsortes *</label>
                                        <input type="text" id="venue_address" wire:model="venue_address" class="w-full border-gray-300 rounded-md shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200 focus:ring-opacity-50">
                                        @error('venue_address') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                    </div>
                                    
                                    <div class="mb-4">
                                        <label for="guests" class="block text-gray-700 font-medium mb-2">Anzahl der Gäste *</label>
                                        <input type="number" id="guests" wire:model="guests" min="10" class="w-full border-gray-300 rounded-md shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200 focus:ring-opacity-50">
                                        @error('guests') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                        <p class="text-sm text-gray-500 mt-1">Mindestanzahl: 10 Personen</p>
                                    </div>
                                </div>
                                
                                <!-- Step 3: Catering Requirements -->
                                <div class="{{ $currentStep == 3 ? 'block' : 'hidden' }}">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Catering-Optionen</h3>
                                    
                                    <div class="mb-6">
                                        <label class="block text-gray-700 font-medium mb-3">Paket auswählen *</label>
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                            <div>
                                                <label for="basic-package" class="cursor-pointer block p-4 border rounded-lg 
                                                    {{ $package === 'basic' ? 'border-orange-500 bg-orange-50' : 'border-gray-200' }} 
                                                    hover:border-orange-500 transition-colors duration-200"
                                                >
                                                    <div class="flex items-start">
                                                        <input type="radio" id="basic-package" name="package" value="basic" wire:model="package" class="mt-1 text-orange-500 focus:ring-orange-500">
                                                        <div class="ml-2">
                                                            <span class="block font-medium text-gray-700">Basic Paket</span>
                                                            <span class="block text-sm text-gray-500">€25/Person</span>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            
                                            <div>
                                                <label for="premium-package" class="cursor-pointer block p-4 border rounded-lg 
                                                    {{ $package === 'premium' ? 'border-orange-500 bg-orange-50' : 'border-gray-200' }} 
                                                    hover:border-orange-500 transition-colors duration-200"
                                                >
                                                    <div class="flex items-start">
                                                        <input type="radio" id="premium-package" name="package" value="premium" wire:model="package" class="mt-1 text-orange-500 focus:ring-orange-500">
                                                        <div class="ml-2">
                                                            <span class="block font-medium text-gray-700">Premium Paket</span>
                                                            <span class="block text-sm text-gray-500">€35/Person</span>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            
                                            <div>
                                                <label for="deluxe-package" class="cursor-pointer block p-4 border rounded-lg 
                                                    {{ $package === 'deluxe' ? 'border-orange-500 bg-orange-50' : 'border-gray-200' }} 
                                                    hover:border-orange-500 transition-colors duration-200"
                                                >
                                                    <div class="flex items-start">
                                                        <input type="radio" id="deluxe-package" name="package" value="deluxe" wire:model="package" class="mt-1 text-orange-500 focus:ring-orange-500">
                                                        <div class="ml-2">
                                                            <span class="block font-medium text-gray-700">Deluxe Paket</span>
                                                            <span class="block text-sm text-gray-500">€45/Person</span>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        @error('package') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                    </div>
                                    
                                    <div class="mb-6">
                                        <label class="block text-gray-700 font-medium mb-3">Besondere Ernährungswünsche</label>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                            @foreach($availableDietaryRequirements as $value => $label)
                                                <label class="inline-flex items-center">
                                                    <input type="checkbox" wire:model="dietary_requirements" value="{{ $value }}" class="text-orange-500 focus:ring-orange-500">
                                                    <span class="ml-2">{{ $label }}</span>
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>
                                    
                                    <div class="mb-6">
                                        <label class="block text-gray-700 font-medium mb-3">Zusätzliche Leistungen</label>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                            @foreach($availableAdditionalServices as $value => $label)
                                                <label class="inline-flex items-center">
                                                    <input type="checkbox" wire:model="additional_services" value="{{ $value }}" class="text-orange-500 focus:ring-orange-500">
                                                    <span class="ml-2">{{ $label }}</span>
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <label for="budget" class="block text-gray-700 font-medium mb-2">Ungefähres Budget <span class="text-gray-400">(optional)</span></label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <span class="text-gray-500">€</span>
                                            </div>
                                            <input type="number" id="budget" wire:model="budget" class="pl-10 w-full border-gray-300 rounded-md shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200 focus:ring-opacity-50">
                                        </div>
                                        @error('budget') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                    </div>
                                    
                                    <!-- Price Estimation -->
                                    @if($guests && is_numeric($guests) && $guests >= 10)
                                        <div class="mt-6 p-4 bg-orange-50 border border-orange-200 rounded-lg">
                                            <h4 class="font-medium text-gray-700 mb-2">Preisschätzung:</h4>
                                            <div class="flex justify-between">
                                                <span>{{ $package == 'basic' ? 'Basic' : ($package == 'premium' ? 'Premium' : 'Deluxe') }} Paket für {{ $guests }} Personen</span>
                                                <span class="font-bold">€{{ number_format($this->estimatedPrice, 2, ',', '.') }}</span>
                                            </div>
                                            <p class="text-sm text-gray-500 mt-2">Dies ist eine ungefähre Schätzung. Der endgültige Preis kann je nach zusätzlichen Leistungen und speziellen Anforderungen variieren.</p>
                                        </div>
                                    @endif
                                </div>
                                
                                <!-- Step 4: Additional Information -->
                                <div class="{{ $currentStep == 4 ? 'block' : 'hidden' }}">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Zusätzliche Informationen</h3>
                                    
                                    <div class="mb-6">
                                        <label for="message" class="block text-gray-700 font-medium mb-2">Besondere Wünsche oder Anmerkungen</label>
                                        <textarea id="message" wire:model="message" rows="4" class="w-full border-gray-300 rounded-md shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200 focus:ring-opacity-50"></textarea>
                                    </div>
                                    
                                    <div class="mb-6">
                                        <label class="block text-gray-700 font-medium mb-2">Wie haben Sie von uns erfahren?</label>
                                        <select wire:model="how_heard" class="w-full border-gray-300 rounded-md shadow-sm focus:border-orange-500 focus:ring focus:ring-orange-200 focus:ring-opacity-50">
                                            <option value="">-- Bitte wählen --</option>
                                            @foreach($availableHowHeard as $value => $label)
                                                <option value="{{ $value }}">{{ $label }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Summary of the inquiry -->
                                    <div class="mb-6 p-4 bg-gray-50 border border-gray-200 rounded-lg">
                                        <h4 class="font-semibold text-gray-800 mb-3">Zusammenfassung Ihrer Anfrage</h4>
                                        
                                        <div class="space-y-3">
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                                <div>
                                                    <p class="text-sm font-medium text-gray-500">Name:</p>
                                                    <p>{{ $name }}</p>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-medium text-gray-500">E-Mail:</p>
                                                    <p>{{ $email }}</p>
                                                </div>
                                            </div>
                                            
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                                <div>
                                                    <p class="text-sm font-medium text-gray-500">Veranstaltungsart:</p>
                                                    <p>{{ $availableEventTypes[$event_type] ?? 'Nicht angegeben' }}</p>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-medium text-gray-500">Datum:</p>
                                                    <p>{{ $event_date ? date('d.m.Y', strtotime($event_date)) : 'Nicht angegeben' }}</p>
                                                </div>
                                            </div>
                                            
                                            <div>
                                                <p class="text-sm font-medium text-gray-500">Ausgewähltes Paket:</p>
                                                <p>{{ $package == 'basic' ? 'Basic' : ($package == 'premium' ? 'Premium' : 'Deluxe') }} Paket für {{ $guests }} Personen</p>
                                            </div>
                                            
                                            @if(count($dietary_requirements) > 0)
                                                <div>
                                                    <p class="text-sm font-medium text-gray-500">Ernährungswünsche:</p>
                                                    <ul class="list-disc ml-5">
                                                        @foreach($dietary_requirements as $requirement)
                                                            <li>{{ $availableDietaryRequirements[$requirement] }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            
                                            @if(count($additional_services) > 0)
                                                <div>
                                                    <p class="text-sm font-medium text-gray-500">Zusätzliche Leistungen:</p>
                                                    <ul class="list-disc ml-5">
                                                        @foreach($additional_services as $service)
                                                            <li>{{ $availableAdditionalServices[$service] }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            
                                            <div>
                                                <p class="text-sm font-medium text-gray-500">Geschätzter Preis:</p>
                                                <p class="font-bold text-orange-600">€{{ number_format($this->estimatedPrice, 2, ',', '.') }}</p>
                                                <p class="text-xs text-gray-500">Endgültiger Preis kann je nach zusätzlichen Leistungen variieren.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Navigation Buttons -->
                                <div class="flex justify-between mt-8">
                                    <button 
                                        type="button" 
                                        wire:click="previousStep" 
                                        class="{{ $currentStep == 1 ? 'invisible' : '' }} bg-gray-200 text-gray-700 py-2 px-4 rounded-md hover:bg-gray-300 transition-colors duration-200"
                                    >
                                        Zurück
                                    </button>
                                    
                                    @if($currentStep < $totalSteps)
                                        <button 
                                            type="button" 
                                            wire:click="nextStep" 
                                            class="bg-orange-500 text-white py-2 px-6 rounded-md hover:bg-orange-600 transition-colors duration-200"
                                        >
                                            Weiter
                                        </button>
                                    @else
                                        <button 
                                            type="submit" 
                                            class="bg-orange-500 text-white py-2 px-6 rounded-md hover:bg-orange-600 transition-colors duration-200"
                                        >
                                            Anfrage senden
                                        </button>
                                    @endif
                                </div>
                            </form>
                        @endif
                    </div>
                    
                    <!-- FAQ Section -->
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
            
            <!-- Testimonials -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-8 mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Das sagen unsere Kunden</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
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
                <button wire:click="goToStep(1)" class="bg-white text-orange-600 hover:bg-orange-100 px-8 py-3 rounded-lg font-semibold text-lg transition-all duration-300">
                    Jetzt anfragen
                </button>
            </div>
        </div>
    </div>
</div>