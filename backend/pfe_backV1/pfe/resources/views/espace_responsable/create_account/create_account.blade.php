<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de Compte</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-50 font-sans min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md">
        <div class="bg-white rounded-xl shadow-xl overflow-hidden">
            <!-- En-tête avec dégradé -->
            <div class="bg-gradient-to-r from-indigo-600 to-blue-600 p-6 text-center">
                <h1 class="text-2xl font-bold text-white">Création de Compte</h1>
                <p class="text-blue-100 mt-1">Sélectionnez le type de compte à créer</p>
            </div>

            <!-- Options de création -->
            <div class="p-6 grid gap-6 md:grid-cols-2">
                <!-- Carte Technicien -->
                <a href="{{ route('createTechnicien') }}"
                   class="group relative flex flex-col items-center p-6 bg-white rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-all duration-300 transform hover:-translate-y-1">
                    <div class="absolute -top-5 left-1/2 transform -translate-x-1/2 bg-indigo-100 p-3 rounded-full">
                        <i class="fas fa-user-cog text-indigo-600 text-xl"></i>
                    </div>
                    <h3 class="mt-4 text-lg font-medium text-gray-900">Technicien</h3>
                    <p class="mt-2 text-sm text-gray-500 text-center">Créer un nouveau compte technicien</p>
                    <div class="mt-4 px-4 py-2 bg-indigo-50 text-indigo-600 rounded-full text-sm font-medium group-hover:bg-indigo-100 transition-colors">
                        Créer
                    </div>
                </a>

                <!-- Carte Responsable -->
                <a href="{{ route('createResponsable') }}"
                   class="group relative flex flex-col items-center p-6 bg-white rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-all duration-300 transform hover:-translate-y-1">
                    <div class="absolute -top-5 left-1/2 transform -translate-x-1/2 bg-blue-100 p-3 rounded-full">
                        <i class="fas fa-user-shield text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="mt-4 text-lg font-medium text-gray-900">Responsable</h3>
                    <p class="mt-2 text-sm text-gray-500 text-center">Créer un nouveau compte responsable</p>
                    <div class="mt-4 px-4 py-2 bg-blue-50 text-blue-600 rounded-full text-sm font-medium group-hover:bg-blue-100 transition-colors">
                        Créer
                    </div>
                </a>
            </div>

            <!-- Pied de page -->
            <div class="bg-gray-50 px-6 py-4 text-center">
                <p class="text-xs text-gray-500">Sélectionnez le type de compte que vous souhaitez créer</p>
            </div>
        </div>
    </div>

</body>
</html>
