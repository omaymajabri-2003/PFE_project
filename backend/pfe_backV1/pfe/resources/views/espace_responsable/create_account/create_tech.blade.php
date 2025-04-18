<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un compte Responsable</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        :root {
            --background-color: #f4f7fc;
            --card-bg-color: #ffffff;
            --grand_titre_color: #1e1a5f;
            --text-color: #34495e;
            --primary-color: #4a90e2;
            --primary-hover-color: #357ab8;
            --secondary-color: #2ecc71;
            --secondary-hover-color: #27ae60;
            --input-border-color: #dcdde1;
            --input-focus-border-color: #4a90e2;
            --error-color: #e74c3c;
            --success-bg-color: #2ecc71;
            --success-text-color: #ffffff;
            --font-family: 'Poppins', sans-serif;
            --border-radius: 10px;
            --box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            --box-shadow-hover: 0 6px 16px rgba(0, 0, 0, 0.15);
            --padding: 1rem;
        }

        body {
            font-family: var(--font-family);
            background-color: var(--background-color);
            color: var(--text-color);
        }

        .card {
            background-color: var(--card-bg-color);
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            padding: var(--padding);
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: white;
            padding: var(--padding);
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-primary:hover {
            background-color: var(--primary-hover-color);
            box-shadow: var(--box-shadow-hover);
        }

        .input-field {
            padding: var(--padding);
            border: 1px solid var(--input-border-color);
            border-radius: var(--border-radius);
            transition: border-color 0.3s ease;
        }

        .input-field:focus {
            border-color: var(--input-focus-border-color);
            outline: none;
        }

        .error-message {
            color: var(--error-color);
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }

        .success-message {
            background-color: var(--success-bg-color);
            color: var(--success-text-color);
            padding: var(--padding);
            border-radius: var(--border-radius);
            text-align: center;
            margin-bottom: 1rem;
        }

        .form-title {
            color: var(--grand_titre_color);
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body>

    <div class="max-w-lg mx-auto mt-10 card">
        <h2 class="form-title">Créer un compte technicien</h2>

        <!-- Affichage des messages de succès ou d'erreur globaux -->
        @if(session('success'))
            <div id="success-message" class="success-message">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="bg-red-500 text-white text-center p-4 mb-6 rounded-md shadow-md">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('createTechnicien') }}" method="POST" class="grid grid-cols-1 gap-6">
            @csrf

            <div>
                <label for="Matricule_tech" class="block font-medium">Matricule</label>
                <input type="text" name="Matricule_tech" id="Matricule_tech" class="input-field w-full" required>
                @error('Matricule_resp')<div class="error-message">{{ $message }}</div>@enderror
            </div>

            <div>
                <label for="Nom_tech" class="block font-medium">Nom</label>
                <input type="text" name="Nom_tech" id="Nom_tech" class="input-field w-full" required>
                @error('Nom_resp')<div class="error-message">{{ $message }}</div>@enderror
            </div>

            <div>
                <label for="Prenom_tech" class="block font-medium">Prénom</label>
                <input type="text" name="Prenom_tech" id="Prenom_tech" class="input-field w-full" required>
                @error('Prenom_resp')<div class="error-message">{{ $message }}</div>@enderror
            </div>

            <div>
                <label for="CIN_tech" class="block font-medium">CIN</label>
                <input type="text" name="CIN_tech" id="CIN_tech" class="input-field w-full" required>
                @error('CIN_resp')<div class="error-message">{{ $message }}</div>@enderror
            </div>

            <div>
                <label for="Email_tech" class="block font-medium">Email</label>
                <input type="email" name="Email_resp" id="Email_tech" class="input-field w-full" required>
                @error('Email_tech')<div class="error-message">{{ $message }}</div>@enderror
            </div>

            <div>
                <label for="Mot_de_passe" class="block font-medium">Mot de passe</label>
                <input type="password" name="Mot_de_passe" id="Mot_de_passe" class="input-field w-full" required>
                @error('Mot_de_passe')<div class="error-message">{{ $message }}</div>@enderror
            </div>

            <button type="submit" class="btn-primary w-full">Créer le compte</button>
        </form>
    </div>

</body>
</html>
