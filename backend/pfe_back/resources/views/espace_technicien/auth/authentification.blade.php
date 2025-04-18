<!-- filepath: c:\Users\lenovo\Desktop\PFE\CODE\PFE_project\backend\pfe_back\resources\views\espace_technicien\auth\authentification.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    @vite(['resources/css/espace_responsable/auth/authentification_responsable_css.css'])

</head>
<body>
    <div class="auth-container">
        <h1>Connexion</h1>
        <form action="/login" method="POST">
            @csrf
            <input type="text" name="Matricule" placeholder="matricule" required>
            <input type="password" name="Mot_passe" placeholder="Mot de passe" required>
            <button type="submit">Se connecter</button>
        </form>
        <div class="forgot-password">
            <a href="/forgot-password">Mot de passe oublié ?</a>
        </div>
    </div>
</body>
</html>
