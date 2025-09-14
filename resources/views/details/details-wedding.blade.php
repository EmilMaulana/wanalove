@extends('layouts.app')

@section('title', 'The Wedding')

@section('content')
    <header class="relative bg-cover bg-center h-72 text-white"
        style="background-image: url('{{ asset('images/background/wedding-picture.webp') }}');">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10 flex flex-col justify-center items-center h-full text-center fade-up delay-1">
            <h1 class="text-4xl font-bold">The Wedding 💍</h1>
            <p class="text-lg mt-2">Hari ketika dua hati menjadi satu</p>
        </div>
    </header>

    <main
        class="max-w-4xl mx-auto px-6 py-12 space-y-10 text-gray-800 
              bg-white/40 backdrop-blur-md rounded-lg shadow-lg mt-8">
        <div class="flex justify-center fade-up delay-2">
            <img src="{{ asset('images/details/fourth-meet.webp') }}" alt="Hari Pernikahan"
                class="rounded-lg shadow-lg w-full md:w-2/3">
        </div>

        <div class="flex items-center justify-center gap-4 fade-up delay-3">
            <span class="h-px bg-gray-300 flex-1"></span>
            <i class="fas fa-church text-pink-500 text-xl"></i>
            <span class="h-px bg-gray-300 flex-1"></span>
        </div>

        <div
            class="bg-white/60 backdrop-blur-md p-6 rounded-lg shadow 
                space-y-6 text-justify fade-up delay-3">
            <p>Hari yang kami tunggu akhirnya tiba. Suasana penuh cinta dan kebahagiaan terasa sejak pagi hari, ketika
                keluarga, sahabat, dan orang-orang tercinta berkumpul untuk menyaksikan janji suci kami.</p>
            <p>Setiap senyum, setiap doa, dan setiap pelukan menjadi bagian tak terlupakan dari momen ini. Gaun putih,
                setelan rapi, dan kilau cincin hanyalah simbol — yang terpenting adalah hati kami yang kini bersatu
                selamanya.</p>
            <p>Pernikahan ini bukanlah akhir dari perjalanan, melainkan awal dari bab baru yang akan kami tulis bersama,
                penuh cinta, tawa, dan impian yang ingin kami wujudkan.</p>
        </div>

        <div
            class="bg-white/60 backdrop-blur-md p-6 rounded-lg shadow 
                text-center text-gray-700 italic fade-up delay-4">
            "Pernikahan adalah janji untuk mencintai, menghargai, dan menjaga, bukan hanya di hari yang indah, tapi juga di
            setiap badai yang datang."
        </div>

        <div class="flex justify-center fade-up delay-5">
            <a href="{{ url('index#love-story') }}"
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
