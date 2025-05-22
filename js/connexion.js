const inputUsername = document.getElementById("pseudo");
const inputMdp = document.getElementById("password");
const btnConnexion = document.getElementById("connexion");

// Ecouteurs d'évènements pour la validation en temps réel
inputUsername.addEventListener("keyup", validateForm);
inputMdp.addEventListener("keyup", validateForm);

// Fonction permettant de valider tout le formulaire
function validateForm() {
    const pseudoOk = validateRequired(inputUsername);
    const passwordOk = validatePassword(inputMdp);

    if (pseudoOk && passwordOk) {
        btnConnexion.disabled = false;
    } else {
        btnConnexion.disabled = true;
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

//Validation pseudo
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



