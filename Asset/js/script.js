// Implementer le JS de ma page inscription

// Sélection des éléments du formulaire
const inputNom = document.getElementById("NomInput");
const inputPrenom = document.getElementById("PrenomInput");
const inputMail = document.getElementById("EmailInput");
const inputPseudo = document.getElementById("PseudoInput");
const inputPassword = document.getElementById("PasswordInput");
const inputValidationPassword = document.getElementById("ValidatePasswordInput");
const btnValidation = document.getElementById("inscriptionInput");

// Ecouteurs d'événements pour la validation en temps réel
inputNom.addEventListener("input", () => validateForm(inputNom));
inputPrenom.addEventListener("input", () => validateForm(inputPrenom));
inputMail.addEventListener("input", () => validateForm(inputMail));
inputPseudo.addEventListener("input", () => validateForm(inputPseudo));
inputPassword.addEventListener("input", () => validateForm(inputPassword));
inputValidationPassword.addEventListener("input", () => validateForm(inputValidationPassword));

// Fonction permettant de valider tout le formulaire
function validateForm() {
    const nomOk = validateRequired(inputNom);
    const prenomOk = validateRequired(inputPrenom);
    const pseudoOk = validateRequired(inputPseudo);
    const mailOk = validateMail(inputMail);
    const passwordOk = validatePassword(inputPassword);
    const passwordConfirmOk = validateConfirmationPassword(inputPassword, inputValidationPassword);

    if (nomOk && prenomOk && mailOk && passwordOk && passwordConfirmOk) {
        btnValidation.disabled = false;
    }
    else {
        btnValidation.disabled = true;
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


// Validation mot de passe
function validatePassword(input) {
    // Définir mon regex
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{9,}$/;
    const passwordUser = input.value;
    if (passwordUser.match(passwordRegex)) {
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

// Confirmation mot de passe
function validateConfirmationPassword(inputPwd, inputConfirmPwd) {
    if (inputPwd.value == inputConfirmPwd.value) {
        inputConfirmPwd.classList.add("border-green-600");
        inputConfirmPwd.classList.remove("border-red-600");
        return true;
    }
    else {
        inputConfirmPwd.classList.remove("border-green-600");
        inputConfirmPwd.classList.add("border-red-600");
        return false;
    }
}


function validateRequired(input) {
    if (input.value.trim() != '') {
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