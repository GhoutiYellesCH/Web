// Exercice 02 : Mini Carnet d'Adresses 
// 1. Récupérez les éléments du formulaire
// Récupération des champs du formulaire 


// Récupération des éléments d'erreur

// Récupération du formulaire et de la liste des contacts

const nom = document.getElementById("nom");
const email = document.getElementById("email");

const nomError = document.getElementById("nom-error");
const emailError = document.getElementById("email-error");

const form = document.getElementById("contact-form");
const listeContacts = document.getElementById("liste-contacts");

// 2. Créez une fonction pour valider le formulaire
function validerFormulaire() {
    let estValide = true;

    if (nom.value.trim() === "") {
        nomError.style.display = "block";
        estValide = false;
    } else {
        nomError.style.display = "none";
    }

    const emailPattern = /^[a-zA-Z0-9._\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z]{2,}$/;

    if (!emailPattern.test(email.value.trim())) {
        emailError.style.display = "block";
        estValide = false;
    } else {
        emailError.style.display = "none";
    }

    return estValide;
}

// 3. Créez une fonction pour ajouter un contact à la liste
function ajouterContact(nomValue, emailValue) {
    const contactElement = document.createElement("div");
    contactElement.className = "contact-item";

    contactElement.innerHTML = `
        <strong>${nomValue}</strong><br>
        Email : ${emailValue}
    `;

    listeContacts.appendChild(contactElement);
}



// 4. Ajoutez un gestionnaire d'événement pour la soumission du formulaire
form.addEventListener("submit", function(event) {
    event.preventDefault();

    if (validerFormulaire()) {
        ajouterContact(nom.value.trim(), email.value.trim());
        form.reset();
    }
});


