<div>
    <!-- Menu Categories -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-100 mb-8">
        <div class="overflow-x-auto py-3 px-2">
            <div class="flex space-x-2 justify-center">
                <button 
                    wire:click="setCategory('burgers')" 
                    class="px-4 py-2 rounded-lg transition-all duration-200 flex items-center justify-center whitespace-nowrap {{ $activeCategory === 'burgers' ? 'bg-orange-500 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}"
                >
                    Burgers
                </button>
                <button 
                    wire:click="setCategory('drinks')" 
                    class="px-4 py-2 rounded-lg transition-all duration-200 flex items-center justify-center whitespace-nowrap {{ $activeCategory === 'drinks' ? 'bg-orange-500 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}"
                >
                    Getränke
                </button>
                <button 
                    wire:click="setCategory('snacks')" 
                    class="px-4 py-2 rounded-lg transition-all duration-200 flex items-center justify-center whitespace-nowrap {{ $activeCategory === 'snacks' ? 'bg-orange-500 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}"
                >
                    Snacks
                </button>
            </div>
        </div>
    </div>

    <!-- Menu Items -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
        @foreach ($activeProducts as $product)
        <div class="bg-white rounded-lg overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
            <div class="h-48 bg-beige-100 flex items-center justify-center relative">
                @if($product->img_src)
                    <img src="{{ $product->img_src }}" alt="{{ $product->img_alt }}" class="w-full h-full object-cover">
                @else
                    <!-- Fallback SVG for products without images -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="w-24 h-24 text-orange-500" fill="none" stroke="currentColor" stroke-width="1.5">
                        @if($product->type === 'burger')
                            <circle cx="32" cy="32" r="24"/>
                            <path d="M20 26h24M20 32h24M20 38h24"/>
                            <path d="M30 20l-4 24M34 20l4 24"/>
                        @elseif($product->type === 'drink')
                            <path d="M24 20l-4 32h24l-4-32z"/>
                            <path d="M20 20h24"/>
                            <path d="M20 28h24"/>
                            <path d="M32 52v-24"/>
                        @elseif($product->type === 'snack')
                            <path d="M16 48h32l4-24H12z"/>
                            <path d="M32 48v-24M12 24l12-8M52 24l-12-8"/>
                            <circle cx="32" cy="16" r="4"/>
                        @endif
                    </svg>
                @endif
            </div>
            <div class="p-4">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="font-bold text-gray-800">{{ $product->name }}</h3>
                    <span class="font-bold text-orange-500">{{ $product->formattedPrice() }}</span>
                </div>
                
                @if($product->type === 'burger' && $product->burger)
                    <p class="text-gray-600 text-sm mb-3">{{ $product->burger->ingredients }}</p>
                @elseif($product->type === 'snack' && $product->snack && $product->snack->ingredients)
                    <p class="text-gray-600 text-sm mb-3">{{ $product->snack->ingredients }}</p>
                @endif
                
                <button class="bg-orange-500 text-white w-full py-2 rounded-md text-sm hover:bg-orange-600 transition-colors duration-200">
                    Zum Warenkorb hinzufügen
                </button>
            </div>
        </div>
        @endforeach
    </div>
</div>