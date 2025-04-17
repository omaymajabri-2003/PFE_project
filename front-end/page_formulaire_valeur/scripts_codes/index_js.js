// Gestion du formulaire
document.getElementById("techForm").addEventListener("submit", function(event) {
    event.preventDefault();

    let confirmation = confirm("Vérifiez bien vos données avant l'envoi. Voulez-vous continuer ?");
    if (confirmation) {
        alert("Données envoyées avec succès !");
        this.reset();
    }
});

// Gestion de la modale
const modal = document.getElementById("noteModal");
const addNoteBtn = document.getElementById("addNoteBtn");
const closeBtn = document.querySelector(".close");
const saveNoteBtn = document.getElementById("saveNoteBtn");

// Ouvrir la modale
addNoteBtn.addEventListener("click", () => {
    modal.style.display = "flex";
});

// Fermer la modale
closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
});

// Sauvegarder la note
saveNoteBtn.addEventListener("click", () => {
    let noteText = document.getElementById("noteText").value;
    if (noteText.trim() === "") {
        alert("Veuillez écrire une note !");
    } else {
        alert("Note envoyée !");
        modal.style.display = "none";
        document.getElementById("noteText").value = "";
    }
});
