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
    <meta charset="utf-8">
    <title>Liste des Commandes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-6 bg-gray-50 text-gray-900">
    <div class="mb-6">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold">Liste des Commandes</h1>
            <a href="{{ url()->previous() }}" class="btn btn-outline-danger rounded-pill px-4">Retour</a>
        </div>
    </div>

    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="py-2 px-4 border">#</th>
                <th class="py-2 px-4 border">Nom</th>
                <th class="py-2 px-4 border">Téléphone</th>
                <th class="py-2 px-4 border">Livraison</th>
                <th class="py-2 px-4 border">Adresse</th>
                <th class="py-2 px-4 border">Ville</th>
                <th class="py-2 px-4 border">Menus</th>
                <th class="py-2 px-4 border">Prix total</th>
                <th class="py-2 px-4 border">Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($commandes as $commande)
                <tr>
                    <td class="py-2 px-4 border">{{ $commande->id }}</td>
                    <td class="py-2 px-4 border">{{ $commande->first_name }} {{ $commande->last_name }}</td>
                    <td class="py-2 px-4 border">{{ $commande->phone }}</td>
                    <td class="py-2 px-4 border">{{ $commande->livraison }}</td>
                    <td class="py-2 px-4 border">{{ $commande->adresse }}</td>
                    <td class="py-2 px-4 border">{{ $commande->ville }}</td>
                    <td class="py-2 px-4 border">
                        @php
                            $menus = [
                                "1" => "Magnam Tiste",
                                "2" => "Aut Luia",
                                "3" => "Aut Luia",
                                "4" => "Aut Luia",
                                "5" => "Aut Luia",
                                "6" => "Aut Luia",
                            ];
                            $items = json_decode($commande->menu_items, true);
                        @endphp
                        @foreach($items as $itemId)
                            {{ $menus[$itemId] ?? 'Menu inconnu' }}<br>
                        @endforeach
                    </td>
                    <td class="py-2 px-4 border">{{ $commande->total_price }} TND</td>
                    <td class="py-2 px-4 border">{{ $commande->created_at->format('d/m/Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ url()->previous() }}" class="btn btn-outline-danger rounded-pill px-4">Retour</a>

</body>
</html>
