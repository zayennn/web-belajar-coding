<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MasterCode - Belajar Coding Dari Nol Sampai Siap Kerja</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- pages --}}
    <link rel="stylesheet" href="{{ asset('css/bahasa.css') }}">
    <link rel="stylesheet" href="{{ asset('css/materi.css') }}">

    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!-- 1️⃣ Navbar -->
    @include('components.navbar-landing')

    @yield('content')

    <!-- 🔟 Footer -->
    @include('components.footer-landing')

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>

    {{-- pages --}}
    <script src="{{ asset('js/bahasa.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/materi.css') }}">
    <script src="{{ asset('js/materi.js') }}"></script>
</body>

</html>
