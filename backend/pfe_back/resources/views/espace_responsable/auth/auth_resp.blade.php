<!-- filepath: c:\Users\lenovo\Desktop\PFE\CODE\PFE_project\backend\pfe_back\resources\views\espace_technicien\auth\authentification.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            /* General Colors */
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

            /* Font */
            --font-family: 'Poppins', sans-serif;
            --font-size: 1rem;
            --font-weight-bold: 600;

            /* Spacing */
            --padding: 1rem;
            --margin: 0.5rem;
            --border-radius: 8px;

            /* Shadows */
            --box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            --box-shadow-hover: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        body {
            font-family: var(--font-family);
            background-color: var(--background-color);
            color: var(--text-color);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .auth-container {
            background: #fff;
            padding: var(--padding);
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            width: 100%;
            max-width: 400px;
        }

        .auth-container h1 {
            color: var(--grand_titre_color);
            font-size: 1.8rem;
            margin-bottom: var(--margin);
            text-align: center;
        }

        .auth-container form {
            display: flex;
            flex-direction: column;
        }

        .auth-container input {
            padding: var(--padding);
            margin-bottom: var(--margin);
            border: 1px solid var(--input-border-color);
            border-radius: var(--border-radius);
            font-size: var(--font-size);
        }

        .auth-container input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: var(--box-shadow-hover);
        }

        .auth-container button {
            background-color: var(--primary-color);
            color: #fff;
            padding: var(--padding);
            border: none;
            border-radius: var(--border-radius);
            font-size: var(--font-size);
            font-weight: var(--font-weight-bold);
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .auth-container button:hover {
            background-color: var(--primary-hover-color);
        }

        .auth-container .forgot-password {
            text-align: center;
            margin-top: var(--margin);
        }

        .auth-container .forgot-password a {
            color: var(--accent-color);
            text-decoration: none;
            font-weight: var(--font-weight-bold);
        }

        .auth-container .forgot-password a:hover {
            color: var(--accent-hover-color);
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <h1>Connexion</h1>
        <form action="/login" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Adresse e-mail" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <button type="submit">Se connecter</button>
        </form>
        <div class="forgot-password">
            <a href="/forgot-password">Mot de passe oublié ?</a>
        </div>
    </div>
</body>
</html>
