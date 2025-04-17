// Exemple de données (normalement récupérées d'une base de données)
const data = [
    { date: "2024-03-01", heure: "08:30", ph: 7.2, bx: 5, temp: 25, couleur: "Bleu", lait: 3, co2: 12, alcalinite: 40 },
    { date: "2024-03-02", heure: "10:00", ph: 7.5, bx: 4.8, temp: 26, couleur: "Vert", lait: 2.5, co2: 10, alcalinite: 38 },
    { date: "2024-03-03", heure: "09:15", ph: 7.1, bx: 5.2, temp: 24, couleur: "Rouge", lait: 3.2, co2: 11, alcalinite: 42 },
];

// Fonction pour afficher les données
function displayData(filteredData) {
    const tbody = document.getElementById("data-body");
    tbody.innerHTML = "";

    filteredData.forEach(item => {
        const row = `<tr>
            <td>${item.date}</td>
            <td>${item.heure}</td>
            <td>${item.ph}</td>
            <td>${item.bx}</td>
            <td>${item.temp}°C</td>
            <td>${item.couleur}</td>
            <td>${item.lait}</td>
            <td>${item.co2}</td>
            <td>${item.alcalinite}</td>
        </tr>`;
        tbody.innerHTML += row;
    });
}

// Filtrage par date exacte
document.getElementById("search-date").addEventListener("input", function () {
    const searchDate = this.value;
    const filteredData = data.filter(entry => entry.date === searchDate);
    displayData(filteredData);
});

// Filtrage par plage de dates
document.getElementById("apply-filter").addEventListener("click", function () {
    const startDate = document.getElementById("filter-start").value;
    const endDate = document.getElementById("filter-end").value;

    if (startDate && endDate) {
        const filteredData = data.filter(entry => entry.date >= startDate && entry.date <= endDate);
        displayData(filteredData);
    }
});

// Initialisation des données
displayData(data);
document.addEventListener("DOMContentLoaded", function() {
    const section = document.getElementById("section_1");
    section.style.opacity = "0";
    section.style.transform = "translateY(-20px)"; 

    setTimeout(() => {
        section.style.transition = "opacity 0.8s ease-out, transform 0.8s ease-out";
        section.style.opacity = "1";
        section.style.transform = "translateY(0)";
    }, 100);
});
