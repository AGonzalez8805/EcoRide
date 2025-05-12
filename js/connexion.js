const usernameInput = document.getElementById("username");
const passwordInput = document.getElementById("password");
const btnConnexion = document.getElementById("connexionBtn");

btnConnexion.addEventListener("click", checkCredentials);

function checkCredentials() {
    // Ici, il faudra appeler l'API pour vérifier les credentials en BDD
    if (usernameInput.value == "lili" && passwordInput.value == "123") {
        alert("Vous êtes connecté");

        //Il faudra récupérer le vrai token
        const token = "fffffffff"
        setToken(token);

        //Placer ce token en cookie
        window.location.replace("/");

    } else {
        mailInput.classList.add("border-red-600");
        passwordInput.classList.add("border-red-600");
    }
}