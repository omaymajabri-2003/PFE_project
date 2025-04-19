<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un compte Technicien</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-50 to-blue-100 font-sans flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-xl shadow-2xl p-8 backdrop-blur-sm bg-opacity-90 border border-white border-opacity-20">
            <!-- Logo/Titre -->
            <div class="text-center mb-8">
                <h1 class="text-2xl font-bold text-indigo-600 mb-2">Créer un compte Technicien</h1>
                <p class="text-gray-500">Remplissez les informations requises</p>
            </div>

            <!-- Messages d'état -->
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Formulaire -->
            <form action="{{ route('createTechnicien') }}" method="POST" class="space-y-5">
                @csrf

                <!-- Matricule -->
                <div>
                    <label for="Matricule_tech" class="block text-sm font-medium text-gray-700 mb-1">Matricule</label>
                    <div class="relative">
                        <input type="text" name="Matricule_tech" id="Matricule_tech"
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200"
                               placeholder="Tapez le matricule" required>
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <i class="fas fa-id-card text-gray-400"></i>
                        </div>
                    </div>
                    @error('Matricule_tech')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Nom et Prénom -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="Nom_tech" class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                        <input type="text" name="Nom_tech" id="Nom_tech"
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200"
                               placeholder="Votre nom" required>
                        @error('Nom_tech')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="Prenom_tech" class="block text-sm font-medium text-gray-700 mb-1">Prénom</label>
                        <input type="text" name="Prenom_tech" id="Prenom_tech"
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200"
                               placeholder="Votre prénom" required>
                        @error('Prenom_tech')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- CIN -->
                <div>
                    <label for="CIN_tech" class="block text-sm font-medium text-gray-700 mb-1">CIN</label>
                    <div class="relative">
                        <input type="text" name="CIN_tech" id="CIN_tech"
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200"
                               placeholder="Numéro CIN" required>
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <i class="fas fa-address-card text-gray-400"></i>
                        </div>
                    </div>
                    @error('CIN_tech')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label for="Email_tech" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <div class="relative">
                        <input type="email" name="Email_tech" id="Email_tech"
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200"
                               placeholder="email@exemple.com" required>
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-gray-400"></i>
                        </div>
                    </div>
                    @error('Email_tech')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Mot de passe -->
                <div>
                    <label for="Mot_de_passe" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
                    <div class="relative">
                        <input type="password" name="Mot_de_passe" id="Mot_de_passe"
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200"
                               placeholder="••••••••" required>
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400"></i>
                        </div>
                    </div>
                    @error('Mot_de_passe')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Bouton de soumission -->
                <button type="submit"
                        class="w-full py-3 px-4 bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-2 text-white font-medium rounded-lg transition duration-200 focus:outline-none focus:ring-2 transform hover:scale-105">
                    Créer le compte
                </button>

                <!-- lien vers la page de creation de compte technicien -->
                <div class="div_link_tech">
                    <a href="{{ route('createResponsable') }}" class="text-sm text-indigo-600 hover:text-indigo-500 text-center" > Créer un compte Responsable </a>
                </div>
                <!-- lien vers la page de creation des comptes-->

                <div class="div_link_retourne">
                    <a href="{{ route('createAccount_view') }}" class="text-sm text-indigo-600 hover:text-indigo-500 text-center" > retourne a la page précédente </a>
                </div>

            </form>
        </div>
    </div>
</body>
</html>
