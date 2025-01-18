<section class="bg-blue-100">
    <!-- Carousel Container -->
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div id="controls-carousel" class="relative w-full" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative overflow-hidden rounded-lg aspect-square">
                @for ($i = 1; $i <= 12; $i++)
                    @php
                        $formattedNumber = sprintf('%02d', $i); // Format angka menjadi dua digit
                        $isActive = $i === 1 ? 'active' : 'hidden'; // Item pertama aktif, lainnya tersembunyi
                    @endphp
                    <div class="{{ $isActive }} duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset("images/gallery/farros{$formattedNumber}.jpg") }}" 
                             class="absolute block w-full h-full object-cover top-0 left-0" 
                             alt="Farros Image {{ $formattedNumber }}">
                    </div>
                @endfor
            </div>
            
            <!-- Slider controls -->
            <button type="button" class="absolute top-1/2 left-2 transform -translate-y-1/2 z-30 flex items-center justify-center h-10 w-10 sm:h-12 sm:w-12 rounded-full bg-white/30 dark:bg-gray-800/30 
                         hover:bg-white/50 dark:hover:bg-gray-800/60 
                         focus:ring-4 focus:ring-white dark:focus:ring-gray-800 
                         focus:outline-none transition" data-carousel-prev>
                <svg class="w-4 h-4 sm:w-6 sm:h-6 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
                     fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </button>
            <button type="button" class="absolute top-1/2 right-2 transform -translate-y-1/2 z-30 flex items-center justify-center h-10 w-10 sm:h-12 sm:w-12 rounded-full bg-white/30 dark:bg-gray-800/30 
                         hover:bg-white/50 dark:hover:bg-gray-800/60 
                         focus:ring-4 focus:ring-white dark:focus:ring-gray-800 
                         focus:outline-none transition" data-carousel-next>
                <svg class="w-4 h-4 sm:w-6 sm:h-6 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
                     fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </div>
</section>
