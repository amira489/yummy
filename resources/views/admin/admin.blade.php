<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Yummy</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen">
        <nav class="bg-red-700 text-white p-4">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-2xl font-bold">Administration Yummy</h1>
                <div class="flex items-center space-x-4">
                    <span>{{ Auth::user()->name }}</span>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="hover:text-gray-200">
                            <i class="fas fa-sign-out-alt"></i> Déconnexion
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        @endif

        <div class="container mx-auto p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-xl font-semibold mb-4">Employés</h3>
                    <p class="text-3xl font-bold text-red-700">{{ \App\Models\User::where('role', 'employe')->count() }}</p>
                    <div class="mt-4">
                        <a href="{{ route('admin.employes.create') }}" class="inline-flex items-center px-4 py-2 bg-red-700 text-white rounded-md hover:bg-red-800">
                            <i class="fas fa-plus mr-2"></i> Ajouter un employé
                        </a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-xl font-semibold mb-4">Commandes</h3>
                    <p class="text-3xl font-bold text-red-700">{{ \App\Models\Commande::count() }}</p>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-xl font-semibold mb-4">Réservations</h3>
                    <p class="text-3xl font-bold text-red-700">{{ \App\Models\Booking::count() }}</p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-xl font-semibold mb-4">Employés récents</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead>
                                <tr class="border-b">
                                    <th class="text-left py-2">Nom</th>
                                    <th class="text-left py-2">Email</th>
                                    <th class="text-left py-2">Date d'ajout</th>
                                    <th class="text-left py-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(\App\Models\User::where('role', 'employe')->orderBy('created_at', 'desc')->take(5)->get() as $employe)
                                <tr class="border-b">
                                    <td class="py-2">{{ $employe->name }}</td>
                                    <td class="py-2">{{ $employe->email }}</td>
                                    <td class="py-2">{{ $employe->created_at->format('d/m/Y') }}</td>
                                    <td class="py-2">
                                        <div class="flex space-x-2">
                                            <a href="{{ route('admin.employes.edit', $employe->id) }}" class="text-blue-600 hover:text-blue-800">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.employes.destroy', $employe->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet employé ?')" class="text-red-600 hover:text-red-800">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-xl font-semibold mb-4">Demandes de congés en attente</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead>
                                <tr class="border-b">
                                    <th class="text-left py-2">Employé</th>
                                    <th class="text-left py-2">Date début</th>
                                    <th class="text-left py-2">Date fin</th>
                                    <th class="text-left py-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(\App\Models\Conge::where('etat', 'en_attente')->with('user')->orderBy('created_at', 'desc')->take(5)->get() as $conge)
                                <tr class="border-b">
                                    <td class="py-2">{{ $conge->user->name }}</td>
                                    <td class="py-2">{{ \Carbon\Carbon::parse($conge->date_debut)->format('d/m/Y') }}</td>
                                    <td class="py-2">{{ \Carbon\Carbon::parse($conge->date_fin)->format('d/m/Y') }}</td>
                                    <td class="py-2">
                                        <div class="flex space-x-2">
                                            <form action="{{ route('admin.conges.approve', $conge->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="text-green-600 hover:text-green-800">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                            </form>
                                            <form action="{{ route('admin.conges.reject', $conge->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="text-red-600 hover:text-red-800">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
