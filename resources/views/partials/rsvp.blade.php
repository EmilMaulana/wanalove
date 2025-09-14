<section id="rsvp" title="RSVP" 
         class="relative bg-cover bg-center bg-no-repeat py-16 sm:py-24 min-h-[500px]"
         style="background-image: url('{{ asset('images/background/wedding-picture.webp') }}')">
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="relative z-10 max-w-3xl mx-auto text-center px-4 sm:px-6 lg:px-8 font-poppins">
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">RSVP</h2>
        <p class="mb-8 sm:mb-10 text-base sm:text-lg text-white italic">
            Beri tahu kami jika kamu bisa hadir di hari spesial kami 💌
        </p>
        <form action="{{ route('rsvp.submit') }}" method="POST"
              class="space-y-6 text-left bg-white/20 backdrop-blur-md p-6 sm:p-8 rounded-2xl shadow-lg border border-white/30">
            @csrf
            <div>
                <label for="name" class="block mb-1 font-medium text-sm sm:text-base text-white">Nama Lengkap</label>
                <input type="text" id="name" name="name" required
                       placeholder="Masukkan nama kamu"
                       class="w-full bg-white/40 backdrop-blur-md border border-white/50 rounded-lg 
                              px-3 sm:px-4 py-2.5 sm:py-3 text-white placeholder-gray-200 
                              focus:outline-none focus:ring-2 focus:ring-primary" />
            </div>
            <div>
                <label for="attendance" class="block mb-1 font-medium text-sm sm:text-base text-white">
                    Apakah kamu akan hadir?
                </label>
                <select id="attendance" name="attendance" required
                        class="w-full bg-white/40 backdrop-blur-md border border-white/50 rounded-lg 
                               px-3 sm:px-4 py-2.5 sm:py-3 text-white focus:outline-none focus:ring-2 focus:ring-primary">
                    <option value="">Pilih Salah Satu</option>
                    <option value="yes">Ya, Saya akan hadir</option>
                    <option value="no">Maaf, Saya tidak akan hadir</option>
                </select>
            </div>

            {{-- Pesan --}}
            <div>
                <label for="message" class="block mb-1 font-medium text-sm sm:text-base text-white">Pesan</label>
                <textarea id="message" name="message" rows="4"
                          placeholder="Tuliskan pesanmu..."
                          class="w-full bg-white/40 backdrop-blur-md border border-white/50 rounded-lg 
                                 px-3 sm:px-4 py-2.5 sm:py-3 text-white placeholder-gray-200 
                                 focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
            </div>

            {{-- Submit --}}
            <div class="text-center">
                <x-button class="rounded-full text-center">
                    <i class="fas fa-paper-plane mr-2"></i> Kirim
                </x-button>
            </div>
        </form>

    </div>
</section>
