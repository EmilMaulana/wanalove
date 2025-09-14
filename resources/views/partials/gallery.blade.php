<section id="gallery" title="Our Gallery"
         class="relative min-h-screen py-24 sm:py-32 md:py-36 bg-cover bg-center flex flex-col items-center justify-center"
         style="background-image: url('{{ asset('images/background/wedding-picture.webp') }}'); font-family: 'Poppins', sans-serif;">

    {{-- Gradient Overlay --}}
    <div class="absolute inset-0 bg-gradient-to-b from-black/40 to-black/40 z-0"></div>

    {{-- Content --}}
    <div class="relative z-10 max-w-6xl mx-auto text-center px-4 sm:px-6 lg:px-8 w-full">

        {{-- Title --}}
        <h2 class="text-4xl sm:text-5xl md:text-6xl font-bold text-white mb-4 sm:mb-6">
            Our Gallery
        </h2>
        <p class="mb-8 sm:mb-12 md:mb-16 text-lg sm:text-xl md:text-2xl text-white/90 italic">
            Kenangan indah perjalanan cinta kami 💖
        </p>

        {{-- Cover Video --}}
        <div class="mb-8 sm:mb-12 md:mb-16 relative group overflow-hidden rounded-2xl shadow-lg w-full max-w-4xl mx-auto">
            <img src="{{ asset('images/background/wedding-couples.webp') }}" alt="Wedding-Couples"
                 class="w-full h-64 sm:h-80 md:h-[500px] object-cover transform transition-transform duration-500 group-hover:scale-105"
                 loading="lazy" />
            <button id="open-video-btn"
                    class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20"
                    aria-label="Open Video Modal">
                <div class="w-16 sm:w-20 md:w-24 h-16 sm:h-20 md:h-24 rounded-full bg-[#6B7A41] flex items-center justify-center hover:bg-[#5c6939] transition-colors duration-300 shadow-lg">
                    <i class="fas fa-play text-white text-2xl sm:text-3xl md:text-4xl ml-1"></i>
                </div>
            </button>
        </div>

        {{-- Gallery Grid --}}
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3 sm:gap-4 md:gap-5">
            @foreach (range(1, 8) as $i)
                <img src="{{ asset("images/gallery/couples-{$i}.webp") }}"
                     alt="Gallery {{ $i }}"
                     class="gallery-img w-full h-36 sm:h-44 md:h-60 object-cover rounded-xl shadow-md cursor-pointer transform transition-transform duration-500 hover:scale-105"
                     loading="lazy" />
            @endforeach
        </div>
    </div>

    {{-- Video Modal --}}
    <div id="videoModal" class="hidden fixed inset-0 bg-black/80 flex items-center justify-center z-50 p-4">
        <div class="relative bg-white rounded-2xl shadow-lg overflow-hidden w-full max-w-3xl animate-fade-in">
            <button id="close-video-btn"
                    class="absolute top-3 right-3 text-gray-600 hover:text-gray-900 text-3xl font-bold">&times;</button>
            <iframe id="teaserIframe" width="100%" height="300" class="sm:h-[400px] md:h-[500px]" frameborder="0"
                    allow="autoplay; fullscreen" allowfullscreen></iframe>
        </div>
    </div>

    {{-- Lightbox Modal --}}
    <div id="lightbox" class="hidden fixed inset-0 bg-black/80 flex items-center justify-center z-50 p-4">
        <button id="closeLightbox"
                class="absolute top-3 right-3 text-white text-3xl font-bold hover:text-gray-300">&times;</button>
        <img id="lightboxImg" src="" alt="Gallery Preview"
             class="max-h-[90vh] max-w-[90vw] rounded-2xl shadow-lg object-contain animate-zoom-in" />
    </div>
</section>
