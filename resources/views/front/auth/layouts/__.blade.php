<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etat Civil - @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('ressources/css/auth.css') }}">

    <link rel="icon" type="image/png" sizes="60x60" href="{{ asset('resources/img/LogoAIF.svg') }}">
</head>
<body style="background: linear-gradient(90deg,rgba(255, 159, 14, 1) 0%, rgba(232, 219, 197, 1) 50%, rgba(0, 154, 73, 1) 100%);">

    <div class="container">
        @yield('auth-content')
    </div>

    <script src="{{ asset('ressources/js/auth.js') }}"></script>
</body>
</html>
