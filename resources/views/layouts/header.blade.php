<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Accueil - Yummy</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Polices -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

  <!-- Fichiers CSS des fournisseurs -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Fichier CSS principal -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body>
<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container position-relative d-flex align-items-center justify-content-between">
    <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto me-xl-0">
      <h1 class="sitename">Yummy</h1><span>.</span>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Accueil</a></li>
        <li><a href="#about" class="nav-link">À propos</a></li>
        <li><a href="#events" class="nav-link">Événements</a></li>
        <li><a href="#chefs" class="nav-link">Chefs</a></li>
        <li><a href="#gallery" class="nav-link">Galerie</a></li>
        <li><a href="{{ route('menu') }}" class="{{ request()->is('menu') ? 'active' : '' }} nav-link">Menu</a></li>
        <li><a href="#contact" class="nav-link">Contact</a></li>
@auth
  @if(Auth::user()->role === 'employe')
    <li><a href="{{ route('employe') }}">Mode employe</a></li>
  @endif
@endauth
@auth
  @if(Auth::user()->role === 'client')
    <li><a href="{{ route('client') }}">gerer mes commandes</a></li>
  @endif
@endauth
<!-- Formulaire de déconnexion (caché) -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<!-- Lien de déconnexion -->
<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Se déconnecter
</a>
 </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <!-- Header JavaScript -->
    <script src="{{ asset('assets/js/header.js') }}"></script>

  </div>
</header>
