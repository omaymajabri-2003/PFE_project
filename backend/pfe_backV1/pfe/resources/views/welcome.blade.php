<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Authentification - STS Béja</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    :root {
      --background-color: #f1f5f9;
      --grand_titre_color: #1e293b;
      --text-color: #1f2937;
      --primary-color: #3b82f6;
      --primary-hover-color: #2563eb;
      --secondary-color: #10b981;
      --secondary-hover-color: #059669;
      --modal-overlay-color: rgba(0, 0, 0, 0.7);
      --input-border-color: #e5e7eb;
      --modern-red: #ef4444;
      --modern-red-hover: #dc2626;
      --accent-color: #f59e0b;
      --accent-hover-color: #d97706;
      --font-family: 'Poppins', sans-serif;
      --glass-effect: rgba(255, 255, 255, 0.1);
    }

    .card-hover-effect {
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .card-hover-effect:hover {
      transform: translateY(-6px);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1),
                  0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    .title-hover-effect {
      transition: all 0.3s ease;
    }
    .title-hover-effect:hover {
      color: var(--accent-hover-color);
    }
    .btn-hover-effect {
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .btn-hover-effect:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
                  0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }
    .glass-card {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.18);
    }
    .gradient-header {
      background: linear-gradient(135deg, var(--grand_titre_color) 0%, var(--primary-color) 100%);
    }
  </style>
</head>

<body class="font-[Poppins] overflow-hidden" style="background-color: var(--background-color)">
  <div class="relative z-10 min-h-screen flex flex-col items-center justify-center px-4 py-12">
    <!-- Titre avec animation -->
    <div class="text-center mb-8">
      <h1 class="text-3xl md:text-4xl font-bold text-[var(--grand_titre_color)] drop-shadow title-hover-effect transform transition duration-300 hover:scale-105">
        Société Tunisienne de Sucre
      </h1>
      <div class="w-24 h-1.5 bg-gradient-to-r from-[var(--accent-color)] to-[var(--accent-hover-color)] mx-auto mt-3 rounded-full"></div>
      <p class="text-[var(--grand_titre_color)] mt-3 text-lg font-medium">Béja</p>
    </div>

    <!-- Conteneur principal -->
    <div class="w-full max-w-4xl glass-card rounded-xl shadow-xl p-6 transition-all duration-300 hover:shadow-2xl grid grid-cols-1 md:grid-cols-2 gap-6">

      <!-- Carte Responsable -->
      <div "
        class="card-hover-effect relative cursor-pointer p-6 bg-white rounded-lg border border-[var(--input-border-color)] shadow-sm hover:border-[var(--primary-color)] group">
        <div class="absolute -top-5 left-1/2 transform -translate-x-1/2 bg-white p-3 rounded-full border border-[var(--input-border-color)] shadow-md group-hover:shadow-lg">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[var(--primary-color)] group-hover:text-[var(--primary-hover-color)]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
          </svg>
        </div>
        <h3 class="mt-6 text-lg font-semibold text-[var(--text-color)] text-center group-hover:text-[var(--primary-hover-color)]">Espace Responsables</h3>
        <p class="mt-2 text-sm text-gray-600 text-center">Accès à l'interface administrative</p>
        <div class="mt-4 flex justify-center">
          <a href="{{ route('auth_resp_view') }}" class="px-4 py-2 bg-gradient-to-r from-[var(--primary-color)] to-[var(--primary-hover-color)] text-white rounded-full text-sm font-medium btn-hover-effect">
            Se connecter
          </a>
        </div>
      </div>

      <!-- Carte Technicien -->
      <div
        class="card-hover-effect relative cursor-pointer p-6 bg-white rounded-lg border border-[var(--input-border-color)] shadow-sm hover:border-[var(--secondary-color)] group">
        <div class="absolute -top-5 left-1/2 transform -translate-x-1/2 bg-white p-3 rounded-full border border-[var(--input-border-color)] shadow-md group-hover:shadow-lg">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[var(--secondary-color)] group-hover:text-[var(--secondary-hover-color)]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
        </div>
        <h3 class="mt-6 text-lg font-semibold text-[var(--text-color)] text-center group-hover:text-[var(--secondary-hover-color)]">Espace Technicien</h3>
        <p class="mt-2 text-sm text-gray-600 text-center">Accès à l'interface technique</p>
        <div class="mt-4 flex justify-center">
          <a href="{{ route('auth_tech_view') }}" class="px-4 py-2 bg-gradient-to-r from-[var(--secondary-color)] to-[var(--secondary-hover-color)] text-white rounded-full text-sm font-medium btn-hover-effect">
            Se connecter
          </a>
        </div>
      </div>
    </div>
  </div>

  <script>
    function selectRole(role) {
      document.body.style.opacity = '0.8';
      document.body.style.transition = 'opacity 0.3s ease';
      setTimeout(() => {
        if (role === 'responsable') {
          window.location.href = "login_responsable.html";
        } else {
          window.location.href = "login_technicien.html";
        }
      }, 300);
    }
  </script>
</body>
</html>
