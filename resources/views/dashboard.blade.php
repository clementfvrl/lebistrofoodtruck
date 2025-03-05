<x-app-layout>
    <!-- Hero Section with Image -->
    <div class="relative overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/header.jpg') }}" alt="Street Food" class="w-full h-full object-cover">
            <!-- Dark Overlay for better text readability -->
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>
        
        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
            <div class="text-center sm:text-left">
                <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl md:text-6xl">
                    <span class="block">Authentisches Street Food</span>
                    <span class="block text-orange-400">Einzigartiges Geschmackserlebnis</span>
                </h1>
                <p class="mt-6 max-w-lg mx-auto sm:mx-0 text-xl text-gray-100 sm:max-w-3xl">
                    Entdecke die Vielfalt unserer handgemachten Burger, Wraps und mehr - frisch und mit Liebe zubereitet!
                </p>
                <div class="mt-10 sm:flex sm:justify-start">
                    <div class="rounded-md shadow">
                        <a href="{{ route('menu') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-orange-600 bg-white hover:bg-gray-100 md:py-4 md:text-lg md:px-10" wire:navigate>
                            Unser Menü
                        </a>
                    </div>
                    <div class="mt-3 sm:mt-0 sm:ml-3">
                        <a href="{{ route('catering') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-orange-500 hover:bg-orange-600 md:py-4 md:text-lg md:px-10" wire:navigate>
                            Catering anfragen
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
                <livewire:featured-products />
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
                            <a href="{{ route('catering') }}" class="text-orange-500 hover:text-orange-600 font-medium inline-flex items-center" wire:navigate>
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
                            <a href="{{ route('services.foodtruck') }}" class="text-orange-500 hover:text-orange-600 font-medium inline-flex items-center" wire:navigate>
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
                            <a href="{{ route('services.photobooth') }}" class="text-orange-500 hover:text-orange-600 font-medium inline-flex items-center" wire:navigate>
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
                        <div class="p-4">
                            <h3 class="font-bold text-lg text-gray-800 mb-2">DJ & Musik</h3>
                            <p class="text-gray-600 text-sm mb-3">Professionelle DJ-Services für Ihre Veranstaltung, Party oder Event.</p>
                            <a href="{{ route('services.music') }}" class="text-orange-500 hover:text-orange-600 font-medium inline-flex items-center" wire:navigate>
                                Mehr erfahren
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Foodora Partnership Section -->
            <div class="mb-12 bg-white rounded-lg shadow-sm border border-gray-100 p-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                    <div class="md:col-span-2">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Lieferung mit unserem Partner</h2>
                        <p class="text-gray-600 mb-4">Keine Zeit, uns zu besuchen? Kein Problem! Wir liefern unsere köstlichen Street Food Gerichte direkt zu Ihnen nach Hause - schnell und bequem über unseren Lieferpartner Foodora.</p>
                        <p class="text-gray-600 mb-4">Bestellen Sie einfach online und genießen Sie unsere frisch zubereiteten Burger, Wraps und mehr, ohne Ihr Zuhause verlassen zu müssen.</p>
                        <div class="mt-6">
                            <a href="https://www.foodora.at/restaurant/fyih/le-bistro-foodtruck-fyih" target="_blank" class="bg-pink-500 text-white px-6 py-3 rounded-lg font-semibold inline-flex items-center transition-all duration-300 hover:bg-pink-600">
                                Jetzt bei Foodora bestellen
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <!-- Foodora Logo -->
                        <svg width="200" height="50" viewBox="0 0 93 30" fill="none" xmlns="http://www.w3.org/2000/svg" data-testid="brand-icon-text" aria-hidden="true" focusable="false"><g clip-path="url(#clip0_2955_10038)"><path d="M0 11.8481C0 7.69484 2.74768 5 7.0066 5C8.23249 5 9.44781 5.22193 10.4306 5.60238V9.51254C9.58519 9.1638 8.61293 8.94187 7.66181 8.94187C5.27344 8.94187 4.56538 10.358 4.51254 11.6896H8.36987V15.5469H4.40686V24.0224H0V11.8481Z" fill="#DF1067"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M9.04626 16.9524C9.04626 12.3553 12.1955 9.50198 16.5178 9.50198C20.8402 9.50198 23.9894 12.3553 23.9894 16.9524C23.9894 21.5495 20.8402 24.4029 16.5178 24.4029C12.1955 24.4029 9.04626 21.5495 9.04626 16.9524ZM16.5178 20.4399C18.2827 20.4399 19.5086 19.0238 19.5086 16.963C19.5086 14.9022 18.2827 13.4861 16.5178 13.4861C14.753 13.4861 13.5271 14.9022 13.5271 16.963C13.5271 19.0238 14.753 20.4399 16.5178 20.4399Z" fill="#DF1067"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M32.2747 9.50198C27.9524 9.50198 24.8031 12.3553 24.8031 16.9524C24.8031 21.5495 27.963 24.4029 32.2747 24.4029C36.597 24.4029 39.7463 21.5495 39.7463 16.9524C39.7463 12.3553 36.597 9.50198 32.2747 9.50198ZM35.2655 16.963C35.2655 19.0238 34.0396 20.4399 32.2747 20.4399C30.5099 20.4399 29.2945 19.0238 29.284 16.963C29.284 14.9022 30.5099 13.4861 32.2747 13.4861C34.0396 13.4861 35.2655 14.9022 35.2655 16.963Z" fill="#DF1067"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M40.5706 16.8467C40.5706 12.7463 43.1281 9.56537 46.4993 9.56537C48.6446 9.56537 50.4412 10.8441 50.9801 12.7146V5.38043H55.387V17.1743C55.387 21.4967 52.4279 24.4029 48.0211 24.4029C43.5825 24.4029 40.5706 21.3593 40.5706 16.8467ZM48.0105 20.4399C49.7754 20.4399 50.9696 19.0554 50.9696 16.963C50.9696 14.8705 49.7754 13.4861 48.0105 13.4861C46.2457 13.4861 45.0515 14.8705 45.0515 16.963C45.0515 19.0449 46.2457 20.4399 48.0105 20.4399Z" fill="#DF1067"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M63.7463 9.50198C59.424 9.50198 56.2747 12.3553 56.2747 16.9524C56.2747 21.5495 59.424 24.4029 63.7463 24.4029C68.0686 24.4029 71.2179 21.5495 71.2179 16.9524C71.2179 12.3553 68.0686 9.50198 63.7463 9.50198ZM66.737 16.963C66.737 19.0238 65.5111 20.4399 63.7463 20.4399C61.9814 20.4399 60.7555 19.0238 60.7555 16.963C60.7555 14.9022 61.9814 13.4861 63.7463 13.4861C65.5111 13.4861 66.737 14.9022 66.737 16.963Z" fill="#DF1067"></path><path d="M78.2562 9.51251C78.8797 9.51251 79.4504 9.56535 79.9999 9.75558V13.6129C79.7251 13.5601 79.2918 13.5072 78.8586 13.5072C77.3685 13.5072 76.5442 14.2998 76.5442 15.8216V24.033H72.1373V15.5574C72.1479 11.8163 74.4834 9.51251 78.2562 9.51251Z" fill="#DF1067"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M81.2998 13.6235C82.0395 13.4861 83.0963 13.4016 83.9101 13.4016C86.7423 13.4016 88.0421 14.3527 88.0421 16.1281V17.2166C87.4186 15.6209 86.0871 14.7754 84.1531 14.7754C81.1835 14.7754 79.313 16.6248 79.313 19.5627C79.313 22.5007 81.1941 24.3501 84.1531 24.3501C86.0871 24.3501 87.4186 23.5152 88.0421 21.9088V24.033H92.3856V15.6103C92.3856 11.6684 89.7542 9.52313 84.4807 9.52313C83.4451 9.52313 82.1663 9.60767 81.2998 9.76619V13.6235ZM87.9893 19.4571C87.9893 20.3553 87.1439 20.9789 85.8651 20.9789C84.5864 20.9789 83.741 20.3553 83.741 19.4571C83.741 18.5588 84.5864 17.9353 85.8651 17.9353C87.1439 17.9353 87.9893 18.5588 87.9893 19.4571Z" fill="#DF1067"></path></g><defs><clipPath id="clip0_2955_10038"><rect width="93" height="19.4029" fill="white" transform="translate(0 5)"></rect></clipPath></defs></svg>
                    </div>
                </div>
            </div>

            <!-- Merch Section -->
            <div class="mb-12 bg-white rounded-lg shadow-sm border border-gray-100 p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Street Food Merch</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="col-span-2">
                        <p class="text-gray-600 mb-4">Zeigen Sie Ihre Liebe zu unserem Street Food mit unserer exklusiven Merchandise-Kollektion. T-Shirts, Caps, Taschen und mehr - alle mit unserem ikonischen Logo.</p>
                        <p class="text-gray-600 mb-4">Unsere Produkte sind aus hochwertigen Materialien gefertigt und perfekt für echte Street-Food-Fans.</p>
                        <div class="mt-6">
                            <a href="{{ route('merch') }}" class="bg-orange-500 text-white px-6 py-3 rounded-lg font-semibold inline-flex items-center transition-all duration-300 hover:bg-orange-600" wire:navigate>
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
            </div>

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
                    <div class="bg-beige-100 rounded-lg h-64 md:h-auto overflow-hidden">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21228.182822437047!2d14.278218034765604!3d48.31202760000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47739751fd4dd095%3A0xc8dc0daf738fa9f6!2sLe%20Bistro%20Foodtruck!5e0!3m2!1sfr!2sfr!4v1741200849281!5m2!1sfr!2sfr" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="w-full h-full"
                        ></iframe>
                    </div>
                </div>
            </div>

            <!-- Newsletter Section -->
            <div class="bg-gradient-to-r from-orange-500 to-beige-400 rounded-lg shadow-xl p-8">
                <div class="text-center">
                    <h2 class="text-2xl font-bold text-white mb-2">Bleibe auf dem Laufenden</h2>
                    <p class="text-white mb-6">Melde dich für unseren Newsletter an und erhalte exklusive Angebote und Updates.</p>
                    <livewire:newsletter-subscription />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>