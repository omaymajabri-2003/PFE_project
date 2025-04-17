document.addEventListener("DOMContentLoaded", () => {
    const editButton = document.querySelector(".edit-btn");

    editButton.addEventListener("click", () => {
        editButton.classList.add("clicked");
        alert("Modification du profil en cours...");
        setTimeout(() => {
            editButton.classList.remove("clicked");
        }, 300);
    });
});
