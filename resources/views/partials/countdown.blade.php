<section id="countdown" title="Hitung Mundur" 
         class="relative bg-cover bg-center bg-no-repeat min-h-screen flex items-center justify-center py-24 sm:py-32"
         style="background-image: url('{{ asset('images/background/wedding-picture.webp') }}')">

    {{-- Overlay --}}
    <div class="absolute inset-0 bg-black/40"></div>

    {{-- Content --}}
    <div class="relative z-10 max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8 font-poppins">

        {{-- Title --}}
        <h2 class="text-4xl sm:text-5xl font-bold text-white mb-8 sm:mb-12">
            Hitung Mundur
        </h2>

        {{-- Timer --}}
        <div class="flex flex-wrap justify-center gap-4 sm:gap-6 text-xl sm:text-2xl font-semibold mb-12 text-white">
            @foreach (['days', 'hours', 'minutes', 'seconds'] as $unit)
                <div class="bg-white/20 backdrop-blur-md px-4 sm:px-6 py-4 sm:py-6 rounded-lg shadow-lg min-w-[90px] sm:min-w-[120px]">
                    <span id="{{ $unit }}"
                          class="block text-4xl sm:text-5xl font-bold animate-pulse">00</span>
                    <span class="text-xs sm:text-sm tracking-widest uppercase text-white">
                        {{ ucfirst($unit) }}
                    </span>
                </div>
            @endforeach
        </div>

        {{-- Button --}}
        <div class="flex justify-center">
            <x-button class="rounded-full">
                <i class="fas fa-calendar-check mr-2"></i> Save the Time
            </x-button>
        </div>

    </div>
</section>
