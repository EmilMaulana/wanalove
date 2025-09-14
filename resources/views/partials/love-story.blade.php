<section id="love-story" title="Love Story" 
         class="relative bg-cover bg-center bg-no-repeat py-20 sm:py-28 min-h-[1000px] transition-all duration-700 ease-in-out"
         style="background-image: url('{{ asset('images/background/wedding-couples.webp') }}')">

    {{-- Overlay --}}
    <div class="absolute inset-0 bg-black/40 transition-opacity duration-700 ease-in-out"></div>

    {{-- Container --}}
    <div class="relative z-10 max-w-6xl mx-auto p-6 sm:p-10 h-full flex items-center justify-center">

        <div class="bg-white/40 backdrop-blur-md text-white p-4 sm:p-8 rounded-2xl shadow-xl flex flex-col md:flex-row items-center gap-6 sm:gap-8 border border-white/50 w-full">

            {{-- Foto Samping --}}
            <div class="w-full md:w-1/2 h-[400px] sm:h-[450px] md:h-[550px]">
                <img src="{{ asset('images/invitation/walk-couples.webp') }}" alt="walk-couples"
                    class="rounded-lg w-full h-full object-cover" loading="lazy" />
            </div>

            {{-- Card Love Story --}}
            <div class="w-full md:w-1/2 h-auto md:h-[550px] grid grid-cols-1 sm:grid-cols-2 sm:grid-rows-2 gap-4">
                @php
                    $lovestory = [
                        [
                            'title' => 'How We Met',
                            'icon' => 'fas fa-heart text-red-400',
                            'url' => '/details-met',
                        ],
                        [
                            'title' => 'Our Journey',
                            'icon' => 'fas fa-road text-green-400',
                            'url' => '/details-journey',
                        ],
                        [
                            'title' => 'The Proposal',
                            'icon' => 'fas fa-ring text-yellow-400',
                            'url' => '/details-proposal',
                        ],
                        [
                            'title' => 'The Wedding',
                            'icon' => 'fas fa-church text-pink-400',
                            'url' => '/details-wedding',
                        ],
                    ];
                @endphp

                @foreach ($lovestory as $story)
                    <div
                        class="group bg-white/40 border border-white/50 backdrop-blur-md p-4 rounded-md shadow transition-all duration-300 hover:shadow-2xl hover:scale-105 flex flex-col justify-between items-center text-center min-h-[180px]">
                        <div class="flex flex-col items-center justify-center flex-grow">
                            <h3 class="text-base sm:text-lg font-bold flex items-center justify-center gap-2">
                                {{ $story['title'] }} <i class="{{ $story['icon'] }} text-lg"></i>
                            </h3>
                        </div>
                        <a href="{{ url($story['url']) }}"
                            class="mb-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-primary text-white px-3 py-1.5 rounded shadow-lg text-xs sm:text-sm">
                            View Details
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
