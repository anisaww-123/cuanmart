<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CuanMart - Minimarket Paling Hemat')</title>
    
    <!-- 1. Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- 2. PANGGIL FILE CSS KUSTOM YANG DIPISAH DI FOLDER PUBLIC/CSS/ -->
    <link rel="stylesheet" href="{{ asset('css/cuanmart.css') }}">

    <!-- 3. FontAwesome Icon CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-100 font-sans antialiased text-slate-800">

    <!-- Memanggil Komponen Navbar -->
    @include('components.navbar')

    <!-- Tempat Isi Konten Utama -->
    <main>
        @yield('content')
    </main>

    <!-- Panggil File JavaScript di folder public/js/ -->
    <script src="{{ asset('js/cuanmart.js') }}"></script>
</body>
</html>