<!DOCTYPE html>
<html lang="fr">
<head>
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
    <meta charset="UTF-8">
    <title>Demande de congé</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-lg mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4 text-gray-800">Demande de congé</h1>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('conges.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="nom" class="block text-sm font-medium text-gray-700">Nom</label>
                <input type="text" id="nom" name="nom" required class="w-full border-gray-300 rounded px-3 py-2 mt-1" value="{{ old('nom') }}">
            </div>

            <div>
                <label for="prenom" class="block text-sm font-medium text-gray-700">Prénom</label>
                <input type="text" id="prenom" name="prenom" required class="w-full border-gray-300 rounded px-3 py-2 mt-1" value="{{ old('prenom') }}">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required class="w-full border-gray-300 rounded px-3 py-2 mt-1" value="{{ old('email') }}">
            </div>

            <div>
                <label for="type" class="block text-sm font-medium text-gray-700">Type de congé</label>
                <select id="type" name="type" required class="w-full border-gray-300 rounded px-3 py-2 mt-1">
                    <option value="">-- Sélectionnez un type --</option>
                    <option value="annuel" {{ old('type') == 'annuel' ? 'selected' : '' }}>Annuel</option>
                    <option value="maladie" {{ old('type') == 'maladie' ? 'selected' : '' }}>Maladie</option>
                    <option value="sans_solde" {{ old('type') == 'sans_solde' ? 'selected' : '' }}>Sans solde</option>
                    <!-- Ajoute d'autres types si besoin -->
                </select>
            </div>

            <div>
                <label for="date_debut" class="block text-sm font-medium text-gray-700">Date de début</label>
                <input type="date" id="date_debut" name="date_debut" required class="w-full border-gray-300 rounded px-3 py-2 mt-1" value="{{ old('date_debut') }}">
            </div>

            <div>
                <label for="date_fin" class="block text-sm font-medium text-gray-700">Date de fin</label>
                <input type="date" id="date_fin" name="date_fin" required class="w-full border-gray-300 rounded px-3 py-2 mt-1" value="{{ old('date_fin') }}">
            </div>

            <div>
                <label for="motif" class="block text-sm font-medium text-gray-700">Motif</label>
                <textarea id="motif" name="motif" rows="4" class="w-full border-gray-300 rounded px-3 py-2 mt-1" placeholder="Motif de la demande...">{{ old('motif') }}</textarea>
            </div>

            <div>
                <button type="submit" class="bg-red-700 hover:bg-red-800 text-white font-semibold px-4 py-2 rounded">
                    Soumettre la demande
                </button>
                <a href="{{ route('employe') }}" class="btn btn-outline-danger rounded-pill px-4">Retour</a>

            </div>
        </form>
    </div>
</body>
</html>
