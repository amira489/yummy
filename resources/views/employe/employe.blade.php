<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Interface Employé - Yummy</title>
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
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .font-amaticsc {
            font-family: 'Amatic SC', cursive;
        }
    </style>
</head>
<body class="bg-white text-gray-800 min-h-screen flex flex-col">
    <header class="border-b border-gray-200">
        <nav class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="text-2xl font-extrabold text-gray-900">
                Yummy
                <span class="text-red-600">.</span>
                <span class="ml-2 text-base font-normal text-gray-600">Mode Employé</span>
            </div>
            <ul class="text-sm text-gray-500 font-normal flex items-center gap-4">

                <li>
                </li>
                <li>
                    <a href="#" class="text-red-700 font-semibold">Mode employé</a>
                </li>
            </ul>
        <div><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<!-- Lien de déconnexion -->
<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Se déconnecter
</a></div>
        </nav>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-10 flex-grow">
        <h2 class="font-amaticsc text-4xl text-gray-900 mb-10">Interface Employé</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Demande de congés -->
            <div class="border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow cursor-pointer">
                <h3 class="text-xl font-semibold mb-3 text-gray-900">Demande de congés</h3>
                <p class="text-gray-600 text-sm mb-5">Soumettez une demande de congé .</p>
                <a href="{{ route('conges.create') }}" class="bg-red-700 hover:bg-red-800 text-white text-sm font-semibold py-2 px-4 rounded-full w-full text-center block">
        Demander un congé
    </a>
            </div>

            <!-- Modifier et supprimer -->
            <div class="border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow cursor-pointer">
                <h3 class="text-xl font-semibold mb-3 text-gray-900">Modifier / Supprimer</h3>
                <p class="text-gray-600 text-sm mb-5">Modifiez ou supprimez les informations nécessaires.</p>

                <a href="{{ route('conges.mesdemandes') }}" class="bg-red-700 hover:bg-red-800 text-white text-sm font-semibold py-2 px-4 rounded-full w-full text-center block">
    Gérer mes demandes
</a>

            </div>

            <!-- Consulter les commandes -->
            <div class="border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow cursor-pointer">
                <h3 class="text-xl font-semibold mb-3 text-gray-900">Consulter les commandes</h3>
                <p class="text-gray-600 text-sm mb-5">Visualisez toutes les commandes en cours et passées.</p>
                <a href="{{ route('employe.commandes') }}" class="bg-red-700 hover:bg-red-800 text-white text-sm font-semibold py-2 px-4 rounded-full w-full text-center block">
    Voir les commandes
</a>

            </div>

            <!-- Tables réservées -->
            <div class="border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow cursor-pointer">
                <h3 class="text-xl font-semibold mb-3 text-gray-900">Tables réservées</h3>
                <p class="text-gray-600 text-sm mb-5">Consultez les réservations de tables.</p>
                <a href="{{ route('employe.reservations') }}" class="bg-red-700 hover:bg-red-800 text-white text-sm font-semibold py-2 px-4 rounded-full w-full text-center block">
    Voir les réservations
</a>

            </div>
        </div>
    </main>

    {{-- ✅ Inclure correctement le footer --}}
    @include('layouts.footer')
</body>
</html>
