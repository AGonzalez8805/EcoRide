// Sélection des éléments du formulaire
const nomInput = document.getElementById("Nom");
const prenomInput = document.getElementById("Prenom");
const mailInput = document.getElementById("Email");
const messageInput = document.getElementById("Message");
const btnEnvoyer = document.getElementById("envoyer");

// Ecouteurs d'événements pour la validation en temps réel
nomInput.addEventListener("keyup", validateForm);
prenomInput.addEventListener("keyup", validateForm);
mailInput.addEventListener("keyup", validateForm);
messageInput.addEventListener("keyup", validateForm);

// Fonction permettant de valider tout le formulaire
function validateForm() {
    const nomOk = validateRequired(nomInput);
    const prenomOk = validateRequired(prenomInput);
    const messageOk = validateRequired(messageInput);
    const mailOk = validateMail(mailInput);


    if (nomOk && prenomOk && mailOk && messageOk) {
        btnEnvoyer.disabled = false;
    }
    else {
        btnEnvoyer.disabled = true;
    }
}

// Validation mail
function validateMail(input) {
    // Définir mon regex
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const mailUser = input.value;
    if (mailUser.match(emailRegex)) {
        input.classList.add("border-green-600");
        input.classList.remove("border-red-600");
        return true;
    }
    else {
        input.classList.remove("border-green-600");
        input.classList.add("border-red-600");
        return false;
    }
}

// Validation Nom,Prenom,Message
function validateRequired(input) {
    if (input.value != '') {
        input.classList.add("border-green-600");
        input.classList.remove("border-red-600");
        return true;
    }
    else {
        input.classList.remove("border-green-600");
        input.classList.add("border-red-600");
        return false;
    }
}