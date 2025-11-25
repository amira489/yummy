<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdn.tailwindcss.com"></script>
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
<body class="bg-gray-50 min-h-screen p-6">
    <div class="max-w-7xl mx-auto bg-white rounded-lg shadow-md p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-gray-800"></h2>
        <div>
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="btn btn-outline-danger rounded-pill px-4">Déconnexion</button>
            </form>
        </div>
    </div>
        <h2 class="text-2xl font-semibold mb-6 text-gray-800">Mes Commandes</h2>

        @if($commandes->isEmpty())
            <p class="text-gray-600">Vous n'avez aucune commande.</p>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-300">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border border-gray-300 text-left px-3 py-2 text-sm font-semibold text-gray-700">Nom</th>
                            <th class="border border-gray-300 text-left px-3 py-2 text-sm font-semibold text-gray-700">Prénom</th>
                            <th class="border border-gray-300 text-left px-3 py-2 text-sm font-semibold text-gray-700">Téléphone</th>
                            <th class="border border-gray-300 text-left px-3 py-2 text-sm font-semibold text-gray-700">Livraison</th>
                            <th class="border border-gray-300 text-left px-3 py-2 text-sm font-semibold text-gray-700">Adresse</th>
                            <th class="border border-gray-300 text-left px-3 py-2 text-sm font-semibold text-gray-700">Ville</th>
                            <th class="border border-gray-300 text-left px-3 py-2 text-sm font-semibold text-gray-700">Menu</th>
                            <th class="border border-gray-300 text-left px-3 py-2 text-sm font-semibold text-gray-700">Total</th>
                            <th class="border border-gray-300 text-left px-3 py-2 text-sm font-semibold text-gray-700">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($commandes as $commande)
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-3 py-2 text-gray-800 text-sm">{{ $commande->last_name ?? '—' }}</td>
                                <td class="border border-gray-300 px-3 py-2 text-gray-800 text-sm">{{ $commande->first_name ?? '—' }}</td>
                                <td class="border border-gray-300 px-3 py-2 text-gray-800 text-sm">{{ $commande->phone ?? '—' }}</td>
                                <td class="border border-gray-300 px-3 py-2 text-gray-800 text-sm">{{ $commande->livraison ?? '—' }}</td>
                                <td class="border border-gray-300 px-3 py-2 text-gray-800 text-sm">{{ $commande->adresse ?? '—' }}</td>
                                <td class="border border-gray-300 px-3 py-2 text-gray-800 text-sm">{{ $commande->ville ?? '—' }}</td>
                                <td class="border border-gray-300 px-3 py-2 text-gray-800 text-sm">
                                    {{-- Afficher le menu de façon lisible --}}
                                    @php
                                        $menuItems = json_decode($commande->menu_items, true) ?? [];
                                    @endphp
                                    @foreach($menuItems as $item)
                                        <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-0.5 rounded mr-1">{{ $item }}</span>
                                    @endforeach
                                </td>
                                <td class="border border-gray-300 px-3 py-2 text-gray-800 text-sm">{{ number_format($commande->total_price, 2) }} DT</td>
                                <td class="border border-gray-300 px-3 py-2 text-sm space-x-2">
                                    <a href="{{ route('commandes.edit', $commande->id) }}" class="text-blue-600 hover:underline">Modifier</a>
                                    <form action="{{ route('commandes.destroy', $commande->id) }}" method="POST" class="inline" onsubmit="return confirm('Confirmer la suppression ?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
        @endif
    </div>
    <a href="{{ url()->previous() }}" class="btn btn-outline-danger rounded-pill px-4">Retour</a>

</body>
</html>
