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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Modifier la Demande de Congé</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-6">
    <div class="max-w-xl mx-auto bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-6 text-gray-800">Modifier la Demande de Congé</h2>
@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
        {{ session('success') }}
    </div>
@endif
@if(session('success1'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
        {{ session('success1') }}
    </div>
@endif

        <form action="{{ route('conges.update', $conge->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">ID</label>
                <input type="text" value="{{ $conge->id }}" disabled class="w-full px-3 py-2 border rounded bg-gray-100 text-gray-700 text-sm" />
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                <input type="text" value="{{ $conge->nom }}" disabled class="w-full px-3 py-2 border rounded bg-gray-100 text-gray-700 text-sm" />
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Prénom</label>
                <input type="text" value="{{ $conge->prenom }}" disabled class="w-full px-3 py-2 border rounded bg-gray-100 text-gray-700 text-sm" />
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" value="{{ $conge->email }}" disabled class="w-full px-3 py-2 border rounded bg-gray-100 text-gray-700 text-sm" />
            </div>

            <!-- Ici l’employé peut modifier ces champs -->

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Type</label>
                <input type="text" name="type" value="{{ old('type', $conge->type) }}" required
                    class="w-full px-3 py-2 border rounded text-gray-800 text-sm" />
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Date Début</label>
                <input type="date" name="date_debut" value="{{ old('date_debut', $conge->date_debut->format('Y-m-d')) }}" required
                    class="w-full px-3 py-2 border rounded text-gray-800 text-sm" />
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Date Fin</label>
                <input type="date" name="date_fin" value="{{ old('date_fin', $conge->date_fin->format('Y-m-d')) }}" required
                    class="w-full px-3 py-2 border rounded text-gray-800 text-sm" />
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Motif</label>
                <textarea name="motif" rows="3" class="w-full px-3 py-2 border rounded text-gray-800 text-sm">{{ old('motif', $conge->motif) }}</textarea>
            </div>

            <!-- Pas de champ état ici -->

            <div class="flex justify-end space-x-3 pt-4">
                <a href="{{ url()->previous() }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 text-sm px-4 py-2 rounded">Annuler</a>
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white text-sm px-4 py-2 rounded">Enregistrer</button>
            </div>
        </form>
    </div>
</body>
</html>
