<section id="gift" title="Wedding Gift" 
         class="relative bg-cover bg-center bg-no-repeat py-16 sm:py-24 min-h-[500px]"
         style="background-image: url('{{ asset('images/background/wedding-picture.webp') }}')">

    {{-- Overlay --}}
    <div class="absolute inset-0 bg-black/50"></div>

    {{-- Content --}}
    <div class="relative z-10 max-w-4xl mx-auto p-6 sm:p-10 text-center">

        {{-- Title --}}
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">Wedding Gift</h2>
        <p class="mb-10 text-base sm:text-lg text-white/90 italic gift-animate gift-delay-1">
            Doa dan hadiahmu sangat berarti bagi kami ✨
        </p>

        {{-- Bank & E-Wallet Info --}}
        <div class="grid gap-5 sm:gap-6 sm:grid-cols-3 mb-10">
            @foreach ([
                ['icon' => 'university', 'color' => 'text-yellow-300', 'bank' => 'BCA', 'info' => 'No. Akun: 1234567890', 'name' => 'Mr Evril & Mrs Arifa'],
                ['icon' => 'university', 'color' => 'text-blue-300', 'bank' => 'Mandiri', 'info' => 'No. Akun: 9876543210', 'name' => 'Mr Evril & Mrs Arifa'],
                ['icon' => 'mobile-alt', 'color' => 'text-green-300', 'bank' => 'GoPay', 'info' => 'No. HP: 0812-3456-7890', 'name' => 'Mr Evril & Mrs Arifa'],
            ] as $gift)
                <div class="bg-white/20 backdrop-blur-md rounded-2xl shadow-lg p-4 sm:p-5 border border-white/30 gift-animate text-center">
                    <h3 class="text-lg sm:text-xl font-semibold mb-3 flex items-center justify-center gap-2 text-white">
                        <i class="fas fa-{{ $gift['icon'] }} {{ $gift['color'] }}"></i> {{ $gift['bank'] }}
                    </h3>
                    <p class="text-sm sm:text-base text-white"><strong>{{ $gift['info'] }}</strong></p>
                    <p class="text-sm sm:text-base text-white"><strong>Nama:</strong> {{ $gift['name'] }}</p>
                </div>
            @endforeach
        </div>

        {{-- Gift Confirmation Form --}}
        <form action="{{ route('gift.submit') }}" method="POST"
              class="bg-white/20 backdrop-blur-md rounded-2xl shadow-lg p-6 sm:p-8 border border-white/30 space-y-6 text-left gift-animate gift-delay-4">
            @csrf

            {{-- Nama --}}
            <div>
                <label for="gift-name" class="block mb-1 font-medium text-sm sm:text-base text-white">Nama Lengkap</label>
                <input type="text" id="gift-name" name="name" required
                       placeholder="Masukkan namamu..."
                       class="w-full bg-white/40 backdrop-blur-md border border-white/50 rounded-lg 
                              px-3 sm:px-4 py-2.5 sm:py-3 text-white placeholder-gray-200 
                              focus:outline-none focus:ring-2 focus:ring-primary" />
            </div>

            {{-- Pesan --}}
            <div>
                <label for="gift-message" class="block mb-1 font-medium text-sm sm:text-base text-white">Pesan</label>
                <textarea id="gift-message" name="message" rows="3"
                          placeholder="Tulis pesan atau doa..."
                          class="w-full bg-white/40 backdrop-blur-md border border-white/50 rounded-lg 
                                 px-3 sm:px-4 py-2.5 sm:py-3 text-white placeholder-gray-200 
                                 focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
            </div>

            {{-- Submit Button --}}
            <div class="text-center">
                <x-button class="rounded-full">
                    <i class="fas fa-gift mr-2"></i> Konfirmasi Hadiah
                </x-button>
            </div>
        </form>
    </div>
</section>
