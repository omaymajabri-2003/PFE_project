<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification - STS Béja</title>
    @vite('resources/css/app.css')

</head>
<body>
    <div class="video-overlay"></div>

    <div class="container">
        <div class="options">
            <h1 class="title">Société Tunisienne de Sucre - Béja</h1>
            <p class="subtitle">Choisissez votre espace</p>
            <div class="card" onclick="selectRole('responsable')">
                <h2>Espace Responsables</h2>
            </div>
            <div class="card" onclick="selectRole('technicien')">
                <h2>Espace Technicien</h2>
            </div>
        </div>

        <form id="loginForm" class="hidden">
            <h2 id="formTitle">Connexion</h2>
            <p id="selectedRole"></p>
            <input type="text" id="username" placeholder="Nom d'utilisateur" required>
            <input type="password" id="password" placeholder="Mot de passe" required>
            <button id="submit_btn" type="submit">Se connecter</button>
            <p class="error-message" id="errorMessage"></p>
        </form>
    </div>

    <script src="first_page.js"></script>

</body>
</html>
