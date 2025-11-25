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
    <title>Mes Demandes de Congé</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen p-6">
    <div class="max-w-5xl mx-auto bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-6 text-gray-800">Mes Demandes de Congé</h2>

        @if($conges->isEmpty())
            <p class="text-gray-600">Vous n'avez soumis aucune demande de congé.</p>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-300">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border border-gray-300 text-left px-3 py-2 text-sm font-semibold text-gray-700">Nom</th>
                            <th class="border border-gray-300 text-left px-3 py-2 text-sm font-semibold text-gray-700">Prénom</th>
                            <th class="border border-gray-300 text-left px-3 py-2 text-sm font-semibold text-gray-700">Type</th>
                            <th class="border border-gray-300 text-left px-3 py-2 text-sm font-semibold text-gray-700">Date Début</th>
                            <th class="border border-gray-300 text-left px-3 py-2 text-sm font-semibold text-gray-700">Date Fin</th>
                            <th class="border border-gray-300 text-left px-3 py-2 text-sm font-semibold text-gray-700">Motif</th>
                            <th class="border border-gray-300 text-left px-3 py-2 text-sm font-semibold text-gray-700">État</th>
                            <th class="border border-gray-300 text-left px-3 py-2 text-sm font-semibold text-gray-700">Créée le</th>
                            <th class="border border-gray-300 text-left px-3 py-2 text-sm font-semibold text-gray-700">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($conges as $conge)
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-3 py-2 text-gray-800 text-sm">{{ $conge->nom }}</td>
                                <td class="border border-gray-300 px-3 py-2 text-gray-800 text-sm">{{ $conge->prenom }}</td>
                                <td class="border border-gray-300 px-3 py-2 text-gray-800 text-sm">{{ $conge->type }}</td>
                                <td class="border border-gray-300 px-3 py-2 text-gray-800 text-sm">{{ \Carbon\Carbon::parse($conge->date_debut)->format('d/m/Y') }}</td>
                                <td class="border border-gray-300 px-3 py-2 text-gray-800 text-sm">{{ \Carbon\Carbon::parse($conge->date_fin)->format('d/m/Y') }}</td>
                                <td class="border border-gray-300 px-3 py-2 text-gray-800 text-sm">{{ $conge->motif ?? '—' }}</td>
                                <td class="border border-gray-300 px-3 py-2 text-sm font-medium
                                    @if($conge->etat === 'accepte') text-green-600
                                    @elseif($conge->etat === 'refuse') text-red-600
                                    @else text-yellow-600
                                    @endif">
                                    {{ ucfirst(str_replace('_', ' ', $conge->etat)) }}
                                </td>
                                <td class="border border-gray-300 px-3 py-2 text-gray-800 text-sm">{{ $conge->created_at->format('d/m/Y') }}</td>
                                <td class="border border-gray-300 px-3 py-2 text-sm space-y-1 flex flex-col">
                                    @if($conge->etat === 'en_attente')
                                        <a href="{{ route('conges.edit', $conge->id) }}" class="bg-blue-600 hover:bg-blue-700 text-white rounded px-3 py-1 text-xs text-center">Modifier</a>
                                        <form action="{{ route('conges.destroy', $conge->id) }}" method="POST" onsubmit="return confirm('Confirmer la suppression ?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white rounded px-3 py-1 text-xs w-full">Supprimer</button>
                                        </form>
                                    @else
                                        <span class="text-gray-400 text-xs text-center">—</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
    <a href="{{ route('employe') }}" class="btn btn-outline-danger rounded-pill px-4">Retour</a>

</body>
</html>
