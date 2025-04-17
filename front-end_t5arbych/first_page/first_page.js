// script.js

function selectRole(role) {
    // Afficher le formulaire avec animation
    const form = document.getElementById('loginForm');
    form.classList.remove('hidden');
    setTimeout(() => form.classList.add('show'), 10);

    // Modifier le titre selon le rôle
    document.getElementById('formTitle').textContent =
        role === 'responsable' ? "Connexion - Espace Responsables" : "Connexion - Espace Technicien";

    // Afficher le rôle sélectionné
    document.getElementById('selectedRole').textContent = 
        `Vous avez sélectionné : ${role.charAt(0).toUpperCase() + role.slice(1)}`;
}

// Validation du formulaire
document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Empêche l'envoi du formulaire

    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();
    const errorMessage = document.getElementById('errorMessage');

    if (username === "" || password === "") {
        errorMessage.textContent = "Veuillez remplir tous les champs.";
        errorMessage.style.display = "block";
    } else {
        errorMessage.style.display = "none";
        alert("Connexion réussie !");
        // Redirection simulée (tu peux remplacer par une vraie URL)
        window.location.href = "#";
    }
});
