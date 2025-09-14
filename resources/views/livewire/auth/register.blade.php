<div class="min-h-screen w-full flex items-center justify-center bg-gradient-to-br from-blue-100 to-purple-200">
    <div class="w-full max-w-4xl bg-white/60 backdrop-blur-md p-12 rounded-2xl shadow-2xl space-y-8">
        <h2 class="text-5xl font-extrabold text-center text-gray-800 mb-8">
            Daftar
        </h2>

        <form wire:submit.prevent="register" class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="col-span-2">
                <input type="text" wire:model="name" placeholder="Nama Lengkap"
                    class="w-full px-6 py-4 border rounded-xl text-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror">
                @error('name')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <input type="email" wire:model="email" placeholder="Alamat Email"
                    class="w-full px-6 py-4 border rounded-xl text-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror">
                @error('email')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <input type="password" wire:model="password" placeholder="Password"
                    class="w-full px-6 py-4 border rounded-xl text-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password') border-red-500 @enderror">
                @error('password')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-span-2">
                <input type="password" wire:model="password_confirmation" placeholder="Konfirmasi Password"
                    class="w-full px-6 py-4 border rounded-xl text-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password_confirmation') border-red-500 @enderror">
                @error('password_confirmation')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-span-2">
                <button type="submit"
                    class="w-full py-5 text-2xl bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl shadow-md hover:from-blue-700 hover:to-purple-700 transition">
                    Daftar
                </button>
            </div>
        </form>

        @if ($errorMessage)
            <p class="text-red-500 mt-6 text-center text-lg">{{ $errorMessage }}</p>
        @endif

        <p class="mt-8 text-center text-gray-600 text-xl">
            Sudah Punya Akun?
            <a href="{{ route('login') }}" class="text-blue-600 font-semibold hover:underline">Masuk</a>
        </p>
    </div>
</div>
