<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choisir une option</title>
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
    @vite('resources/css/app.css')
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body class="bg-gray-100 p-6">

    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-4 text-center">Choisir une action</h2>

        <!-- Sélecteur d'option -->
        <div class="mb-6">
            <label for="action" class="block text-lg font-medium text-gray-700 mb-4">Que souhaitez-vous faire ?</label>
            <div class="flex flex-col space-y-4">
            <a href="{{ route ('updateTechnicien')}}" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 transition">
                Modifier un compte de technicien
            </a>
            <a href="{{ route('updateResponsable') }}" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 transition">
                Modifier un compte de responsable
            </a>
            </div>
        </div>



</body>
</html>
