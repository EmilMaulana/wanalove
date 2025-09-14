@extends('layouts.app')

@section('title', 'Our Journey')

@section('content')
    <div class="bg-[url('{{ asset('images/background/wedding-picture.webp') }}')] bg-cover bg-center bg-fixed font-poppins">
        <header class="relative bg-cover bg-center h-72 text-white"
            style="background-image: url('{{ asset('images/details/first-meet.webp') }}');">
            <div class="absolute inset-0 bg-black/50"></div>
            <div class="relative z-10 flex flex-col justify-center items-center h-full text-center fade-up delay-1">
                <h1 class="text-4xl font-bold">Our Journey</h1>
                <p class="text-lg italic mt-2">Perjalanan cinta yang kita rajut bersama 🌿</p>
            </div>
        </header>
        <main
            class="max-w-4xl mx-auto px-6 py-12 space-y-10 text-gray-800 bg-white/40 backdrop-blur-md rounded-lg shadow-lg mt-8">
            <div class="flex justify-center fade-up delay-2">
                <img src="{{ asset('images/details/second-meet.webp') }}" alt="Perjalanan Cinta"
                    class="rounded-lg shadow-lg w-full md:w-2/3">
            </div>

            <div class="flex items-center justify-center gap-4 fade-up delay-3">
                <span class="h-px bg-gray-300 flex-1"></span>
                <i class="fas fa-road text-green-500 text-xl"></i>
                <span class="h-px bg-gray-300 flex-1"></span>
            </div>

            <div class="bg-white/60 backdrop-blur-md p-6 rounded-lg shadow space-y-6 text-justify fade-up delay-3">
                <p>Dari pertemuan pertama yang tak terduga, kita mulai menapaki jalan ini bersama. Ada tawa, air mata,
                    bahkan perdebatan kecil yang justru membuat kita semakin mengerti satu sama lain.</p>
                <p>Kita berjalan melewati berbagai fase — dari sekadar teman, menjadi sahabat, hingga akhirnya pasangan yang
                    saling menguatkan. Setiap perjalanan membawa pelajaran baru, dan setiap pelajaran menguatkan cinta kita.
                </p>
                <p>Kini, melihat kembali semua langkah yang telah kita lalui, aku sadar… tak ada perjalanan yang lebih indah
                    selain berjalan bersamamu.</p>
            </div>

            <div
                class="bg-white/60 backdrop-blur-md p-6 rounded-lg shadow text-center text-gray-700 italic fade-up delay-4">
                "Perjalanan ini bukan hanya tentang ke mana kita pergi, tapi dengan siapa kita berjalan."
            </div>

            <div class="flex justify-center fade-up delay-5">
                <a href="{{ route('invitation') }}#love-story"
                    class="bg-[#6B7A41] text-white px-5 py-2 rounded shadow hover:bg-[#5c6939] transition flex items-center gap-2">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </main>
        <footer class="bg-white/60 backdrop-blur-md text-center py-6 mt-12 rounded-t-lg shadow-lg fade-up delay-5">
            <p>"Setiap kisah cinta itu indah, tapi kisah kita adalah favoritku."</p>
        </footer>
    </div>
@endsection
