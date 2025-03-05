<div>
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Unsere beliebtesten Gerichte</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($featuredProducts as $product)
        <div class="bg-white rounded-lg overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
            <div class="h-48 bg-beige-100 flex items-center justify-center">
                @if($product->img_src)
                    <img src="{{ $product->img_src }}" alt="{{ $product->img_alt }}" class="w-full h-full object-cover">
                @else
                    <!-- Fallback SVG icons -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="w-24 h-24 text-orange-500" fill="none" stroke="currentColor" stroke-width="2">
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
                <h3 class="font-bold text-gray-800 mb-1">{{ $product->name }}</h3>
                
                @if($product->type === 'burger' && $product->burger)
                    <p class="text-gray-600 text-sm mb-2">{{ Str::limit($product->burger->ingredients, 100) }}</p>
                @elseif($product->type === 'snack' && $product->snack && $product->snack->ingredients)
                    <p class="text-gray-600 text-sm mb-2">{{ Str::limit($product->snack->ingredients, 100) }}</p>
                @elseif($product->type === 'drink' && $product->drink && $product->drink->description)
                    <p class="text-gray-600 text-sm mb-2">{{ Str::limit($product->drink->description, 100) }}</p>
                @endif
                
                <div class="flex justify-between items-center">
                    <span class="font-bold text-orange-500">€{{ number_format($product->price, 2, ',', '.') }}</span>
                    <a href="{{ route('menu') }}" class="bg-orange-500 text-white px-3 py-1 rounded-md text-sm" wire:navigate>Bestellen</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    <div class="flex justify-center mt-8">
        <a href="{{ route('menu') }}" class="bg-orange-500 text-white px-6 py-3 rounded-lg font-semibold inline-flex items-center transition-all duration-300 hover:bg-orange-600" wire:navigate>
            Komplette Speisekarte
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </a>
    </div>
</div>