<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier compte technicien</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Import de la police Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        :root {
            --background-color: #f9fafc;
            --grand_titre_color: #1e1a5f;
            --text-color: #2c3e50;
            --primary-color: #3498db;
            --primary-hover-color: #5dade2;
            --secondary-color: #2ecc71;
            --secondary-hover-color: #27ae60;
            --modal-overlay-color: rgba(0, 0, 0, 0.6);
            --input-border-color: #dcdde1;
            --modern-red: #e74c3c;
            --modern-red-hover: #c0392b;
            --accent-color: #f39c12;
            --accent-hover-color: #e67e22;
            --font-family: 'Poppins', sans-serif;
        }

        body {
            font-family: var(--font-family);
            background: var(--background-color);
        }

        h1 {
            color: var(--grand_titre_color);
        }

        p, label, input, a, button {
            color: var(--text-color);
        }

        input {
            border-color: var(--input-border-color);
        }

        input:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 2px var(--primary-color);
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--primary-hover-color);
        }

        .btn-secondary {
            border-color: var(--input-border-color);
        }

        .link {
            color: var(--primary-color);
        }

        .link:hover {
            color: var(--primary-hover-color);
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border-color: #c3e6cb;
        }

        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border-color: #f5c6cb;
        }

        .alert-warning {
            background-color: #fff3cd;
            color: #856404;
            border-color: #ffeeba;
        }
    </style>

    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="rounded-xl shadow-xl p-8 bg-white border border-gray-200">
            <!-- En-tête -->
            <div class="text-center mb-6">
                <h1 class="text-2xl font-bold mb-1">Modifier compte technicien</h1>
                <p class="text-sm">Mettez à jour les informations du technicien</p>
            </div>

            <!-- Messages d'état -->
            @if (session('success'))
                <div class="mb-4 p-3 border rounded-lg flex items-center alert-success">
                    <i class="fas fa-check-circle mr-2"></i>
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="mb-4 p-3 border rounded-lg flex items-center alert-error">
                    <i class="fas fa-exclamation-circle mr-2"></i>
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-4 p-3 border rounded-lg alert-warning">
                    <div class="flex items-center">
                        <i class="fas fa-exclamation-triangle mr-2"></i>
                        <span class="font-medium">Veuillez corriger les erreurs suivantes :</span>
                    </div>
                    <ul class="list-disc pl-5 mt-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Formulaire -->
            <form action="{{ route('updateTechnicien') }}" method="POST" class="space-y-5">
                @csrf

                <!-- Matricule -->
                <div>
                    <label for="matricule" class="block text-sm font-medium mb-1">Matricule <span class="text-xs text-gray-500">(obligatoire)</span></label>
                    <div class="relative">
                        <input type="text" id="matricule" name="matricule_tech_obligatoire" required
                            class="w-full px-4 py-3 rounded-lg border"
                            placeholder="Entrez le matricule">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <i class="fas fa-id-card text-gray-400"></i>
                        </div>
                    </div>
                </div>

                <!-- Nom et Prénom -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="Prenom_tech" class="block text-sm font-medium mb-1">Prénom <span class="text-xs text-gray-500">(optionnel)</span></label>
                        <input type="text" id="Prenom_tech" name="Prenom_tech"
                            class="w-full px-4 py-3 rounded-lg border"
                            placeholder="Nouveau Prénom">
                    </div>
                    <div>
                        <label for="Nom_tech" class="block text-sm font-medium mb-1">Nom <span class="text-xs text-gray-500">(optionnel)</span></label>
                        <input type="text" id="Nom_tech" name="Nom_tech"
                            class="w-full px-4 py-3 rounded-lg border"
                            placeholder="Nouveau Nom">
                    </div>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium mb-1">Email <span class="text-xs text-gray-500">(optionnel)</span></label>
                    <div class="relative">
                        <input type="email" id="email" name="email_tech"
                            class="w-full px-4 py-3 rounded-lg border"
                            placeholder="email@exemple.com">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-gray-400"></i>
                        </div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">Nouveau email Exemple : nom@mail.com</p>
                </div>

                <!-- Matricule optionnel -->
                <div>
                    <label for="matricule_opt" class="block text-sm font-medium mb-1">Nouveau matricule <span class="text-xs text-gray-500">(optionnel)</span></label>
                    <div class="relative">
                        <input type="text" id="matricule_opt" name="matricule_tech"
                            class="w-full px-4 py-3 rounded-lg border"
                            placeholder="Nouveau matricule">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <i class="fas fa-id-badge text-gray-400"></i>
                        </div>
                    </div>
                </div>

                <!-- CIN -->
                <div>
                    <label for="cin" class="block text-sm font-medium mb-1">CIN <span class="text-xs text-gray-500">(optionnel)</span></label>
                    <div class="relative">
                        <input type="text" id="cin" name="cin_tech"
                            class="w-full px-4 py-3 rounded-lg border"
                            placeholder="Nouveau Numéro CIN">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <i class="fas fa-address-card text-gray-400"></i>
                        </div>
                    </div>
                </div>

                <!-- Mot de passe -->
                <div>
                    <label for="password" class="block text-sm font-medium mb-1">Mot de passe <span class="text-xs text-gray-500">(optionnel)</span></label>
                    <div class="relative">
                        <input type="password" id="password" name="password_tech"
                            class="w-full px-4 py-3 rounded-lg border"
                            placeholder="••••••••">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400"></i>
                        </div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">Doit contenir au moins 6 caractères</p>
                </div>

                <!-- Boutons -->
                <div class="flex justify-end space-x-3 pt-4">
                    <button type="button"
                            class="px-6 py-2 border rounded-lg btn-secondary hover:bg-gray-100">
                        Annuler
                    </button>
                    <button type="submit"
                            class="px-6 py-2 rounded-lg btn-primary transition transform hover:scale-105">
                        Enregistrer
                    </button>
                </div>

                <!-- Liens -->
                <div class="mt-4 text-center">
                    <a href="{{ route('updateResponsable') }}" class="text-sm link">Modifier compte Responsable</a>
                </div>
                <div class="mt-2 text-center">
                    <a href="{{ route('UpdateAccount_view') }}" class="text-sm link">Retourner à la page précédente</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
