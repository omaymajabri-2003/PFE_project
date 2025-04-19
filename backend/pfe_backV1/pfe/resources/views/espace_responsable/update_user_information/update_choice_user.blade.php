<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification de Compte</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
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
            --font-size: 1rem;
            --font-weight-bold: 600;
            --padding: 1rem;
            --margin: 0.5rem;
            --border-radius: 8px;
            --box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            --box-shadow-hover: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .header-gradient {
            background: linear-gradient(135deg, var(--grand_titre_color) 0%, var(--primary-color) 100%);
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-50 font-[Poppins] min-h-screen flex items-center justify-center p-[var(--padding)]">

    <div class="w-full max-w-md">
        <div class="bg-white rounded-[var(--border-radius)] shadow-[var(--box-shadow)] overflow-hidden">
            <!-- En-tête avec dégradé personnalisé -->
            <div class="header-gradient p-6 text-center">
                <h1 class="text-2xl font-bold text-white">Modification de Compte</h1>
                <p class="text-blue-100 mt-1 opacity-90">Sélectionnez le type de compte à modifier</p>
            </div>

            <!-- Boutons de choix -->
            <div class="p-6 grid gap-6 md:grid-cols-2">
                <!-- Bouton Technicien -->
                <a href="{{ route('updateTechnicien') }}"
                   class="group relative flex flex-col items-center p-6 bg-white rounded-[var(--border-radius)] border border-[var(--input-border-color)] shadow-[var(--box-shadow)] hover:shadow-[var(--box-shadow-hover)] transition-all duration-300 transform hover:-translate-y-1">
                    <div class="absolute -top-5 left-1/2 transform -translate-x-1/2 bg-[#e8f4fc] p-3 rounded-full">
                        <i class="fas fa-user-cog text-[var(--primary-color)] text-xl"></i>
                    </div>
                    <h3 class="mt-4 text-lg font-medium text-[var(--text-color)]">Technicien</h3>
                    <p class="mt-2 text-sm text-gray-500 text-center">Modifier les informations d'un compte technicien</p>
                    <div class="mt-4 px-4 py-2 bg-[#e8f4fc] text-[var(--primary-color)] rounded-full text-sm font-medium group-hover:bg-[#d4e9fa] transition-colors">
                        Modifier
                    </div>
                </a>

                <!-- Bouton Responsable -->
                <a href="{{ route('updateResponsable') }}"
                   class="group relative flex flex-col items-center p-6 bg-white rounded-[var(--border-radius)] border border-[var(--input-border-color)] shadow-[var(--box-shadow)] hover:shadow-[var(--box-shadow-hover)] transition-all duration-300 transform hover:-translate-y-1">
                    <div class="absolute -top-5 left-1/2 transform -translate-x-1/2 bg-[#e8f6f0] p-3 rounded-full">
                        <i class="fas fa-user-shield text-[var(--secondary-color)] text-xl"></i>
                    </div>
                    <h3 class="mt-4 text-lg font-medium text-[var(--text-color)]">Responsable</h3>
                    <p class="mt-2 text-sm text-gray-500 text-center">Modifier les informations d'un compte responsable</p>
                    <div class="mt-4 px-4 py-2 bg-[#e8f6f0] text-[var(--secondary-color)] rounded-full text-sm font-medium group-hover:bg-[#d4f0e3] transition-colors">
                        Modifier
                    </div>
                </a>
            </div>

            <!-- Pied de page -->
            <div class="bg-gray-50 px-6 py-4 text-center">
                <p class="text-xs text-gray-500">Sélectionnez le type de compte que vous souhaitez modifier</p>
            </div>
        </div>
    </div>

</body>
</html>
