<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>État Civil Côte d'Ivoire - @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('ressources/css/back/style.css') }}">
</head>
<body>
    <!-- Sidebar -->
    @include('back.layouts.nav')

    <!-- Main Content -->
    <div class="main-content">
        @yield('content')
    </div>

    <!-- Mobile Menu Button (visible only on small screens) -->
    <button class="mobile-menu-btn" id="mobileMenuBtn" style="display: none;">
        <i class="fas fa-bars"></i>
    </button>

    <script src="{{ asset('ressources/js/back/main.js') }}"></script>

</body>
</html>
