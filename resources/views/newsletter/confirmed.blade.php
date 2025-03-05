<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="text-center">
                        <div class="text-6xl mb-4 text-green-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        
                        <h1 class="text-3xl font-bold mb-3">Vielen Dank für Ihre Anmeldung!</h1>
                        <p class="text-lg text-gray-600 mb-8">
                            Ihre E-Mail-Adresse wurde erfolgreich bestätigt. Sie erhalten ab sofort Updates zu unseren neuesten Angeboten und Events.
                        </p>
                        
                        <div>
                            <a href="{{ route('dashboard') }}" class="bg-orange-500 text-white px-6 py-3 rounded-lg font-semibold inline-flex items-center transition-all duration-300 hover:bg-orange-600" wire:navigate>
                                Zurück zur Startseite
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>