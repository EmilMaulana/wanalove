<div class="min-h-screen w-full flex items-center justify-center bg-gradient-to-br from-blue-100 to-purple-200">
    <div class="w-full max-w-4xl bg-white/60 backdrop-blur-md p-16 rounded-2xl shadow-2xl space-y-8">
        <h2 class="text-5xl font-extrabold text-center text-gray-800 mb-12">
            Masuk
        </h2>

        <form wire:submit.prevent="login" class="space-y-6">
            <div>
                <input type="email" wire:model="email" placeholder="Alamat Email"
                    class="w-full px-8 py-5 border rounded-2xl text-xl focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror"
                    required>
                @error('email')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <input type="password" wire:model="password" placeholder="Password"
                    class="w-full px-8 py-5 border rounded-2xl text-xl focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password') border-red-500 @enderror"
                    required>
                @error('password')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button type="submit"
                    class="w-full py-6 text-2xl bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-2xl shadow-md hover:from-blue-700 hover:to-purple-700 transition">
                    Login
                </button>
            </div>
        </form>

        @if ($errorMessage)
            <p class="text-red-500 mt-6 text-center text-lg">{{ $errorMessage }}</p>
        @endif

        <p class="mt-8 text-center text-gray-600 text-xl">
            Belum punya akun?
            <a href="{{ route('register') }}" class="text-blue-600 font-semibold hover:underline">Register</a>
        </p>
    </div>
</div>
