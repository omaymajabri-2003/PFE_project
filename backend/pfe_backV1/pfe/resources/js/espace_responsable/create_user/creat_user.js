// Modal buttons
const technicienBtn = document.getElementById('technicienBtn');
const responsableBtn = document.getElementById('responsableBtn');

// Modal elements
const technicienModal = document.getElementById('technicienModal');
const responsableModal = document.getElementById('responsableModal');

// Close buttons
const closeTechnicienModal = document.getElementById('closeTechnicienModal');
const closeResponsableModal = document.getElementById('closeResponsableModal');

// Show modals when buttons are clicked
technicienBtn.onclick = () => {
    technicienModal.style.display = 'block';
};

responsableBtn.onclick = () => {
    responsableModal.style.display = 'block';
};

// Close modals
closeTechnicienModal.onclick = () => {
    technicienModal.style.display = 'none';
};

closeResponsableModal.onclick = () => {
    responsableModal.style.display = 'none';
};

// Close modals when clicked outside of the modal content
window.onclick = (event) => {
    if (event.target === technicienModal) {
        technicienModal.style.display = 'none';
    }
    if (event.target === responsableModal) {
        responsableModal.style.display = 'none';
    }
};

// Handle form submissions (you can extend this to save data)
document.getElementById('technicienForm').onsubmit = (e) => {
    e.preventDefault();
    alert('Compte technicien créé !');
    technicienModal.style.display = 'none';
};

document.getElementById('responsableForm').onsubmit = (e) => {
    e.preventDefault();
    alert('Compte responsable créé !');
    responsableModal.style.display = 'none';
};
