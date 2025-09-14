@extends('layouts.app')

@section('title', 'The Proposal - Love Story')

@section('content')
    <header class="relative bg-cover bg-center h-72 text-white"
        style="background-image: url('{{ asset('images/background/wedding-picture.webp') }}');">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10 flex flex-col justify-center items-center h-full text-center fade-up delay-1">
            <h1 class="text-4xl font-bold">The Proposal</h1>
            <p class="text-lg mt-2">Saat aku berkata, “Will you marry me?” 💍</p>
        </div>
    </header>

    <main
        class="max-w-4xl mx-auto px-6 py-12 space-y-10 text-gray-800 
              bg-white/40 backdrop-blur-md rounded-lg shadow-lg mt-8">
        <div class="flex justify-center fade-up delay-2">
            <img src="{{ asset('images/details/third-meet.webp') }}" alt="Momen Lamaran"
                class="rounded-lg shadow-lg w-full md:w-2/3">
        </div>

        <div class="flex items-center justify-center gap-4 fade-up delay-3">
            <span class="h-px bg-gray-300 flex-1"></span>
            <i class="fas fa-ring text-yellow-400 text-xl"></i>
            <span class="h-px bg-gray-300 flex-1"></span>
        </div>

        <div
            class="bg-white/60 backdrop-blur-md p-6 rounded-lg shadow 
                space-y-6 text-justify text-gray-700 fade-up delay-3">
            <p>Hari itu terasa istimewa sejak awal. Aku merencanakannya dengan hati-hati,
                menyusun setiap detail agar momen ini menjadi kenangan yang tak terlupakan.</p>
            <p>Dengan cincin yang tersembunyi di sakuku, aku mengajakmu ke tempat favorit kita.
                Udara sore itu terasa hangat, dihiasi cahaya matahari yang perlahan tenggelam.</p>
            <p>Saat aku berlutut dan mengucapkan, “Will you marry me?”, aku melihat matamu berkaca-kaca.
                Senyummu adalah jawaban terindah yang pernah aku terima.</p>
        </div>

        <div
            class="bg-white/60 backdrop-blur-md p-6 rounded-lg shadow text-center 
                text-gray-700 italic fade-up delay-4">
            "Bukan hanya cincin yang kuletakkan di jarimu, tapi juga seluruh hatiku untuk selamanya."
        </div>

        <div class="flex justify-center fade-up delay-5">
            <a href="{{ url('invitation#love-story') }}"
                class="bg-[#6B7A41] text-white px-5 py-2 rounded shadow hover:bg-[#5c6939] 
                transition flex items-center gap-2">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
    </main>

    <footer
        class="bg-white/60 backdrop-blur-md text-center py-6 mt-12 rounded-t-lg 
                 shadow-lg fade-up delay-5">
        <p>"Setiap kisah cinta itu indah, tapi kisah kita adalah favoritku."</p>
    </footer>
@endsection
