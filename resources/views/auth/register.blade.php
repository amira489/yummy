<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yummy - Inscription</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet"/>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .font-amaticsc {
            font-family: 'Amatic SC', cursive;
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen relative overflow-hidden">
    <img src="https://storage.googleapis.com/a1aa/image/ac070b16-ad5d-4856-3659-aefa92303753.jpg"
         alt="Plat de tofu doré avec poivrons rouges et herbes fraîches en arrière-plan flouté"
         class="absolute inset-0 w-full h-full object-cover filter brightness-50 blur-sm"
         width="1920" height="1080"/>

    <main class="relative max-w-md w-full bg-white bg-opacity-90 p-10 rounded-lg shadow-md z-10">
        <h2 class="font-amaticsc text-5xl text-gray-800 mb-8 text-center">Inscription</h2>

        @if(session('error'))
            <div class="mb-4 text-red-600 text-sm text-center">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('register.perform') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="name" class="block text-gray-700 font-semibold mb-2">Nom complet</label>
                <input id="name" name="name" type="text" required
                       class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-700"
                       placeholder="Votre nom complet" value="{{ old('name') }}"/>
                @error('name')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-gray-700 font-semibold mb-2">Adresse e-mail</label>
                <input id="email" name="email" type="email" required
                       class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-700"
                       placeholder="votre.email@example.com" value="{{ old('email') }}"/>
                @error('email')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-gray-700 font-semibold mb-2">Mot de passe</label>
                <input id="password" name="password" type="password" required
                       class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-700"
                       placeholder="••••••••"/>
                @error('password')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password_confirmation" class="block text-gray-700 font-semibold mb-2">Confirmez le mot de passe</label>
                <input id="password_confirmation" name="password_confirmation" type="password" required
                       class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-700"
                       placeholder="••••••••"/>
            </div>

            <button type="submit"
                    class="w-full bg-red-700 text-white font-semibold py-3 rounded-full hover:bg-red-800 transition">
                S'inscrire
            </button>

            <p class="mt-4 text-center text-gray-600">
                Déjà un compte ?
                <a href="{{ route('login') }}" class="text-red-700 font-semibold hover:underline">
                    Se connecter
                </a>
            </p>
        </form>
    </main>
</body>
</html>
