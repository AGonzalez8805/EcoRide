const inputUsername = document.getElementById("pseudo");
const inputMdp = document.getElementById("password");
const btnConnexion = document.getElementById("connexion");

inputUsername.addEventListener("keyup", validateForm);
inputMdp.addEventListener("keyup", validateForm);

btnConnexion.addEventListener("click", (event) => {
    event.preventDefault();

    const pseudo = inputUsername.value;
    const password = inputMdp.value;

    const formData = new FormData();
    formData.append("pseudo", pseudo);
    formData.append("password", password);

    fetch("/php/connexionPost.php", {
        method: "POST",
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            if (data.status === "success") {
                alert("Connexion réussie en tant que " + data.role);
                if (data.role === "admin") {
                    window.location.href = "/admin/tableau_de_bord.php";
                } else {
                    window.location.href = "/index.php";
                }
            } else {
                alert("Erreur : " + data.message);
            }
        })
        .catch(error => {
            console.error("Erreur de connexion :", error);
            alert("Erreur réseau");
        });
});
