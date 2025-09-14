@extends('layouts.app')

@section('title', 'How We Meet')

@section('content')
    <header class="relative bg-cover bg-center h-72 text-white"
        style="background-image: url('{{ asset('images/background/wedding-picture.webp') }}');">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10 flex flex-col justify-center items-center h-full text-center fade-up delay-1">
            <h1 class="text-4xl font-bold">How We Meet ❤️</h1>
            <p class="text-lg mt-2">Bab pertama dari kisah cinta kami</p>
        </div>
    </header>

    <main
        class="max-w-4xl mx-auto px-6 py-12 space-y-10 text-gray-800 bg-white/40 backdrop-blur-md rounded-lg shadow-lg mt-8">
        <div class="flex justify-center fade-up delay-2">
            <img src="{{ asset('images/details/first-meet.webp') }}" alt="Pertemuan Pertama"
                class="rounded-lg shadow-lg w-full md:w-2/3">
        </div>

        <div class="flex items-center justify-center gap-4 fade-up delay-3">
            <span class="h-px bg-gray-300 flex-1"></span>
            <i class="fas fa-heart text-red-400 text-xl"></i>
            <span class="h-px bg-gray-300 flex-1"></span>
        </div>

        <div class="bg-white/60 backdrop-blur-md rounded-lg shadow p-6 space-y-6 text-justify fade-up delay-3">
            <p>Semuanya berawal di suatu sore yang cerah, ketika takdir memutuskan untuk mempertemukan dua jiwa.
                Dalam momen itu, sapaan sederhana “Halo” berubah menjadi percakapan panjang yang penuh tawa dan rasa nyaman.
            </p>
            <p>Hari berganti minggu, minggu berganti bulan, dan kami semakin menyadari bahwa ada banyak kesamaan,
                mulai dari mimpi, cara pandang, hingga nilai-nilai hidup yang membuat kami semakin dekat.</p>
            <p>Lewat candaan, perjalanan kecil, dan obrolan larut malam, kami mengerti bahwa hubungan ini bukan sekadar
                pertemanan.
                Kami menemukan belahan hati yang selama ini kami cari.</p>
        </div>

        <div class="bg-white/60 backdrop-blur-md p-6 rounded-lg shadow text-center text-gray-700 italic fade-up delay-4">
            "Pertemuan ini mungkin kebetulan, tapi cinta ini adalah pilihan yang akan kami jaga selamanya."
        </div>

        <div class="flex justify-center fade-up delay-5">
            <a href="{{ url('invitation#love-story') }}"
                class="bg-[#6B7A41] text-white px-5 py-2 rounded shadow hover:bg-[#5c6939] transition flex items-center gap-2">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
    </main>

    <footer class="bg-white/60 backdrop-blur-md text-center py-6 mt-12 rounded-t-lg shadow-lg fade-up delay-5">
        <p>"Setiap kisah cinta itu indah, tapi kisah kita adalah favoritku."</p>
    </footer>
@endsection
