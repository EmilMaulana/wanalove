<section id="bride" title="The Bride" 
         class="relative bg-cover bg-center bg-no-repeat py-20 sm:py-28 min-h-[400px] transition-all duration-700 ease-in-out"
         style="background-image: url('{{ asset('images/background/wedding-picture.webp') }}')">
    
    {{-- Overlay --}}
    <div class="absolute inset-0 bg-black/40 transition-opacity duration-700 ease-in-out"></div>

    {{-- Kontainer flex center --}}
    <div class="relative z-10 flex flex-col md:flex-row items-center justify-center gap-x-8 gap-y-8 md:gap-y-0 p-6 sm:p-10 h-full">

        {{-- Deskripsi Bride --}}
        <div
            class="bg-white/40 backdrop-blur-md text-white p-4 sm:p-6 rounded-lg shadow-xl w-full md:w-2/3 max-w-3xl h-[380px] sm:h-[450px] flex flex-col justify-between transition-all duration-500 ease-in-out">
            <div class="space-y-3 sm:space-y-4">
                <p class="text-base sm:text-lg leading-relaxed text-justify">
                    Seorang wanita yang anggun dalam sikap, lembut dalam tutur kata, dan kuat dalam prinsip. Ia
                    tumbuh menjadi pribadi yang penuh kasih, menghargai kebersamaan, dan selalu menebarkan
                    kebaikan dalam setiap langkah hidupnya.
                </p>
                <p class="text-base sm:text-lg leading-relaxed text-justify">
                    Di mata orang-orang terdekatnya, ia adalah sosok yang penyayang, bijaksana, dan setia.
                    Dengan ketulusan hati dan semangat yang tak pernah padam, ia siap memulai perjalanan baru,
                    membangun kehidupan yang penuh cinta dan makna bersama pasangan pilihannya.
                </p>
            </div>
            <div class="flex justify-center mt-3 sm:mt-4">
                <x-button class="transition-transform duration-300 hover:scale-105">Save the Date</x-button>
            </div>
        </div>

        {{-- Foto Bride --}}
        <div
            class="relative group bg-white/40 backdrop-blur-md p-3 sm:p-4 rounded-lg shadow-xl w-full max-w-xs sm:max-w-sm h-[380px] sm:h-[450px] overflow-hidden transition-transform duration-500 ease-in-out">
            <img src="{{ asset('images/invitation/bride.webp') }}" alt="bride"
                class="rounded w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-in-out"
                loading="lazy" />
            <div
                class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out">
                <p class="text-white text-lg sm:text-2xl font-semibold">Mrs Arifa</p>
            </div>
        </div>

    </div>
</section>
