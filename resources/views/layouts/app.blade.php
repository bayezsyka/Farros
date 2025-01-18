<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Farros</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Borel&display=swap" rel="stylesheet">


</head>
<body>
    @yield('content')
    @include('partials.footer')

<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800, // Durasi animasi dalam ms
    once: true, // Animasi hanya sekali saat scroll
  });
</script>

</body>
</html>
