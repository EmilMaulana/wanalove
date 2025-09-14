<section id="wish" title="Wedding Wishes" 
         class="relative bg-cover bg-center bg-no-repeat py-16 sm:py-24 min-h-[500px]"
         style="background-image: url('{{ asset('images/background/wedding-picture.webp') }}')">
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="relative z-10 max-w-3xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">Wedding Wishes</h2>
        <p class="mb-8 sm:mb-10 text-base sm:text-lg text-white/90 italic">
            Kirimkan doa dan harapan terbaikmu untuk perjalanan cinta kami ✨
        </p>
        <form action="{{ route('wishes.submit') }}" method="POST"
              class="space-y-6 text-left bg-white/20 backdrop-blur-md p-6 sm:p-8 rounded-2xl shadow-lg border border-white/30 wish-zoom-in">
            @csrf
            <div>
                <label for="wish-name" class="block mb-1 font-medium text-sm sm:text-base text-white">
                    Nama Lengkap
                </label>
                <input type="text" id="wish-name" name="name" required
                       placeholder="Masukkan namamu..."
                       class="w-full bg-white/40 backdrop-blur-md border border-white/50 rounded-lg 
                              px-3 sm:px-4 py-2.5 sm:py-3 text-white placeholder-gray-200 
                              focus:outline-none focus:ring-2 focus:ring-primary" />
            </div>
            <div>
                <label for="wish-message" class="block mb-1 font-medium text-sm sm:text-base text-white">
                    Harapanmu
                </label>
                <textarea id="wish-message" name="message" rows="4" required
                          placeholder="Tuliskan doamu di sini..."
                          class="w-full bg-white/40 backdrop-blur-md border border-white/50 rounded-lg 
                                 px-3 sm:px-4 py-2.5 sm:py-3 text-white placeholder-gray-200 
                                 focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
            </div>
            <div class="text-center">
                <x-button class="rounded-full text-center">
                    Kirim<i class="fas fa-dove mr-2"></i> 
                </x-button>
            </div>
        </form>
    </div>
</section>
