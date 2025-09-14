<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'Wanna Love' }}</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('images/icons/love-icon.svg') }}" type="image/png">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

  <!-- Custom Style -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <style>
    .fade-out {
      animation: fadeOut 0.8s forwards;
    }
    @keyframes fadeOut {  
      to {
        opacity: 0;
        transform: scale(1.05);
      }
    }
  </style>
</head>
<body class="font-sans">
  <main>
    @yield('content')
  </main>

  <audio id="wedding-music" loop>
    <source src="{{ asset('audio/wedding-music.mp3') }}" type="audio/mpeg">
  </audio>

  <script type="module" src="{{ asset('js/main.js') }}"></script>
</body>
</html>
