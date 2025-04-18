<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de Compte</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h1 class="text-2xl font-bold text-blue-900 mb-6">Création de Compte</h1>

        <div class="flex justify-center gap-6 mb-4">
            <button class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-400 w-44" id="technicienBtn">Créer un compte Technicien</button>
            <button class="bg-green-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-green-400 w-44" id="responsableBtn">Créer un compte Responsable</button>
        </div>

        <!-- Modal pour technicien -->
        <div class="modal hidden fixed inset-0 bg-black bg-opacity-50 justify-center items-center" id="technicienModal">
            <div class="bg-white p-8 rounded-lg shadow-lg w-80">
                <span class="absolute top-4 right-4 text-xl font-bold cursor-pointer" id="closeTechnicienModal">&times;</span>
                <h2 class="text-xl font-semibold text-blue-900 mb-4">Créer un compte Technicien</h2>
                <form id="technicienForm" class="space-y-4">
                    <label for="technicienName" class="text-sm">Nom:</label>
                    <input type="text" id="technicienName" name="technicienName" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">

                    <label for="technicienEmail" class="text-sm">Email:</label>
                    <input type="email" id="technicienEmail" name="technicienEmail" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">

                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-400 w-full">Créer</button>
                </form>
            </div>
        </div>

        <!-- Modal pour responsable -->
        <div class="modal hidden fixed inset-0 bg-black bg-opacity-50 justify-center items-center" id="responsableModal">
            <div class="bg-white p-8 rounded-lg shadow-lg w-80">
                <span class="absolute top-4 right-4 text-xl font-bold cursor-pointer" id="closeResponsableModal">&times;</span>
                <h2 class="text-xl font-semibold text-green-900 mb-4">Créer un compte Responsable</h2>
                <form id="responsableForm" class="space-y-4">
                    <label for="responsableName" class="text-sm">Nom:</label>
                    <input type="text" id="responsableName" name="responsableName" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">

                    <label for="responsableEmail" class="text-sm">Email:</label>
                    <input type="email" id="responsableEmail" name="responsableEmail" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">

                    <button type="submit" class="bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-400 w-full">Créer</button>
                </form>
            </div>
        </div>
    </div>

    
</body>
</html>
