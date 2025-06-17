const inputNom = document.getElementById("NomInput");
const inputPrenom = document.getElementById("PrenomInput");
const inputMail = document.getElementById("EmailInput");
const inputPseudo = document.getElementById("PseudoInput");
const inputPassword = document.getElementById("PasswordInput");
const inputValidationPassword = document.getElementById("ValidatePasswordInput");
const btnValidation = document.getElementById("inscriptionInput");

// Ecouteurs d'événements pour la validation en temps réel
inputNom.addEventListener("keyup", validateForm);
inputPrenom.addEventListener("keyup", validateForm);
inputMail.addEventListener("keyup", validateForm);
inputPseudo.addEventListener("keyup", validateForm);
inputPassword.addEventListener("keyup", validateForm);
inputValidationPassword.addEventListener("keyup", validateForm);

//Ecouteur pour la gestion du clic sur le bouton
btnValidation.addEventListener("click", (event) => {
    event.preventDefault();


    if (!validateForm()) {
        alert("Veuillez corriger les erreurs dans le formulaire");
        return;
    }

    const formData = new FormData();
    formData.append("NomInput", inputNom.value);
    formData.append("PrenomInput", inputPrenom.value);
    formData.append("EmailInput", inputMail.value);
    formData.append("PseudoInput", inputPseudo.value);
    formData.append("PasswordInput", inputPassword.value);
    formData.append("ValidatePasswordInput", inputValidationPassword.value);

    // Désactiver le bouton pendant l'inscription
    btnValidation.disabled = true;
    btnValidation.textContent = "Inscription en cours...";

    fetch("/php/inscriptionPost.php", {
        method: "Post",
        body: formData
    })
        .then(response => {
            if (!response.ok) {
                throw new Error(`Erreur HTTP : ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            if (data.status === "succes") {
                window.location.href = "/pages/connexion.php";
            } else {
                alert("Erreur : " + (data.message || "vérifier tous les champs !"));
                btnValidation.disabled = false;
                btnValidation.textContent = "S'inscrire";
            }
        })
        .catch(error => {
            console.error("Erreur lors de l'opération fetch :", error);
            alert("Une erreur de communication est survenue. Veuillez réessayer.");
            btnValidation.disabled = false;
            btnValidation.textContent = "S'inscrire";
        });
});
// Fonction permettant de valider tout le formulaire
function validateForm() {
    const nomOk = validateRequired(inputNom);
    const prenomOk = validateRequired(inputPrenom);
    const pseudoOk = validateRequired(inputPseudo);
    const mailOk = validateMail(inputMail);
    const passwordOk = validatePassword(inputPassword);
    const passwordConfirmOk = validateConfirmationPassword(inputPassword, inputValidationPassword);

    const isValid = nomOk && prenomOk && pseudoOk && mailOk && passwordOk && passwordConfirmOk;
    btnValidation.disabled = !isValid;
    return isValid;
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

// Validation Nom,Prenom et Pseudo
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
