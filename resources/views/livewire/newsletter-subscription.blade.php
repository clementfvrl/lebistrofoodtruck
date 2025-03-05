<div>
    <div class="max-w-lg mx-auto">
        @if ($success)
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                <p>{{ $message }}</p>
            </div>
        @endif

        @if ($error)
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <p>{{ $message }}</p>
            </div>
        @endif

        <form wire:submit.prevent="submit">
            <div class="flex flex-col sm:flex-row gap-2">
                <input type="email" wire:model.lazy="email" placeholder="Deine E-Mail-Adresse" class="px-4 py-3 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-orange-300" required>
                <button type="submit" class="bg-white text-orange-600 hover:bg-orange-100 px-6 py-3 rounded-lg font-semibold transition-all duration-300 sm:w-auto w-full">
                    <span wire:loading.remove>Anmelden</span>
                <span wire:loading>
                    <svg class="animate-spin h-5 w-5 text-orange-600 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </span>
                </button>
            </div>
            @error('email') <span class="text-white mt-1 block">{{ $message }}</span> @enderror
        </form>
    </div>
</div>