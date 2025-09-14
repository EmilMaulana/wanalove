<div class="min-h-screen w-full flex items-center justify-center bg-gradient-to-br from-blue-100 to-purple-200">
    <div class="w-full max-w-4xl bg-white/60 backdrop-blur-md p-16 rounded-2xl shadow-2xl space-y-12">
        <h1 class="text-5xl font-extrabold text-center text-gray-800">
            Dashboard
        </h1>

        <p class="text-2xl text-center text-gray-700">
            Welcome, <span class="font-semibold">{{ $userData['name'] ?? 'User' }}</span>!
        </p>
        <div class="flex justify-center">
            <button wire:click="logout"
                class="px-8 py-4 text-xl bg-gradient-to-r from-red-600 to-pink-600 text-white font-semibold rounded-2xl shadow-md hover:from-red-700 hover:to-pink-700 transition">
                Logout
            </button>
        </div>
    </div>
</div>
