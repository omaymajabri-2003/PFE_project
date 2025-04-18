<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire UX Design</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white rounded-lg shadow-md p-6 w-full max-w-md">
        <h1 class="text-xl font-semibold text-gray-800 mb-4">Détails Personnels</h1>

        {{-- ✅ Affichage des messages de succès --}}
    @if (session('success'))
    <div class="mb-4 p-3 bg-green-100 border border-green-400 text-green-800 rounded">
        {{ session('success') }}
    </div>
    @endif

    {{-- ❌ Affichage des messages d'erreur personnalisés --}}
    @if (session('error'))
    <div class="mb-4 p-3 bg-red-100 border border-red-400 text-red-800 rounded">
        {{ session('error') }}
    </div>
    @endif

    {{-- ❗ Affichage des erreurs de validation (comme email ou mot de passe invalide) --}}
    @if ($errors->any())
    <div class="mb-4 p-3 bg-yellow-100 border border-yellow-400 text-yellow-800 rounded">
        <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

        <form action="{{ route('updateTechnicien') }}" method="POST">
            @csrf
             <!-- Matricule (Obiligatoir ' car il permet de chercher user dans la table pour assur la modification') -->
             <div class="mb-4">
                <label for="matricule" class="block text-sm font-medium text-gray-700 mb-1">
                    Matricule <span class="text-gray-500 text-sm">(*Obligatoire)</span>
                </label>
                <input type="text" id="matricule" name="matricule_tech_obligatoire" required
                    class="w-full px-3 py-2 border border-gray-800 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-800">
            </div>


            <!-- Prénom (Optionnel) -->
            <div class="mb-4">
                <label for="firstName" class="block text-sm font-medium text-gray-700 mb-1">
                    Prénom <span class="text-gray-500 text-sm">(optionnel)</span>
                </label>
                <input type="text" id="firstName" name="firstName_tech"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Nom (Optionnel) -->
            <div class="mb-4">
                <label for="lastName" class="block text-sm font-medium text-gray-700 mb-1">
                    Nom <span class="text-gray-500 text-sm">(optionnel)</span>
                </label>
                <input type="text" id="lastName" name="lastName_tech"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Email (Optionnel) -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                    Email <span class="text-gray-500 text-sm">(optionnel)</span>
                </label>
                <input type="email" id="email" name="email_tech"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <p class="text-xs text-gray-500 mt-1">Exemple : nom@mail.com</p>
            </div>

            <!-- Matricule (Optionnel) -->
            <div class="mb-4">
                <label for="matricule" class="block text-sm font-medium text-gray-700 mb-1">
                    Matricule <span class="text-gray-500 text-sm">(optionnel)</span>
                </label>
                <input type="text" id="matricule" name="matricule_tech"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- CIN (Optionnel) -->
            <div class="mb-4">
                <label for="cin" class="block text-sm font-medium text-gray-700 mb-1">
                    CIN <span class="text-gray-500 text-sm">(optionnel)</span>
                </label>
                <input type="text" id="cin" name="cin_tech"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Mot de passe (Optionnel) -->
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                    Mot de passe <span class="text-gray-500 text-sm">(optionnel)</span>
                </label>
                <input type="password" id="password" name="password_tech"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <p class="text-xs text-gray-500 mt-1">Doit contenir au moins 6 caractères</p>
            </div>

            <!-- Boutons -->
            <div class="flex justify-end space-x-3">
                <button type="button" class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Annuler
                </button>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Enregistrer
                </button>
            </div>
        </form>
    </div>


    {{-- ❗ Affichage des messages d'erreur généraux --}}
</body>
</html>
