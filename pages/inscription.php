<?php require_once dirname(__DIR__) . "/config.php";
require_once ROOT_PATH . "/templates/header.php";
?>

<section class="text-stone-950 body-font">
    <div class="container gap-8 px-5 py-24 mx-auto flex flex-wrap items-center">
        <form action="/php/inscriptionPost.php" method="post" class="lg:w-2/6 md:w-1/2 bg-stone-400 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
            <h2 class="flex items-center justify-center text-lg font-medium title-font mb-5">
                <font style="vertical-align: inherit;text-decoration:underline; font-family:Fira Code, monospace; font-size:2rem">Inscription</font>
            </h2>
            <div class="relative mb-4">
                <label for="EmailInput" class="leading-7 text-sm">
                    <font style="vertical-align: inherit; font-size:1rem; ">Email</font>
                </label>
                <input type="email" id="EmailInput" name="EmailInput" class="w-full bg-stone-300 focus:bg-stone-200 rounded border text-black outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="NomInput" class="leading-7 text-sm">
                    <font style="vertical-align: inherit; font-size:1rem; ">Nom</font>
                </label>
                <input type="text" id="NomInput" name="NomInput" class="w-full bg-stone-300 focus:bg-stone-200 rounded border text-black outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="PrenomInput" class="leading-7 text-sm">
                    <font style="vertical-align: inherit; font-size:1rem; ">Prenom</font>
                </label>
                <input type="text" id="PrenomInput" name="PrenomInput" class="w-full bg-stone-300 focus:bg-stone-200 rounded border text-black outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="PseudoInput" class="leading-7 text-sm">
                    <font style="vertical-align: inherit; font-size:1rem; ">Pseudo</font>
                </label>
                <input type="text" id="PseudoInput" name="PseudoInput" class="w-full bg-stone-300 focus:bg-stone-200 rounded border text-black outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="PasswordInput" class="leading-7 text-sm">
                    <font style="vertical-align: inherit; font-size:1rem ">Mot de passe</font>
                </label>
                <input type="password" id="PasswordInput" name="PasswordInput" class="w-full bg-stone-300 focus:bg-stone-200 rounded border text-black outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                <div>
                    Le mot de passe doit contenir : Au moins 9 caractères, comprenant au moins 1 lettre majuscule,1 minuscule, 1 chiffre, et 1 caractère spéciale
                </div>
            </div>
            <div class="relative mb-4">
                <label for="ValidatePasswordInput" class="leading-7 text-sm">
                    <font style="vertical-align: inherit; font-size:1rem">
                        Confirmation du mot de passe
                    </font>
                </label>
                <input type="password" id="ValidatePasswordInput" name="ValidatePasswordInput" class="w-full bg-stone-300 focus:bg-stone-200 rounded border text-black outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <button type="submit" id="inscriptionInput" class="bg-stone-300 rounded-full border-x-6 border-green-600 py-2 px-8 rounded text-lg">
                S'inscrire
            </button>
            <div class="text-center pt-3">
                <font style="text-decoration: underline;">
                    <a href="/pages/connexion.php">Vous avez déjà un compte ? Connectez-vous ici !</a>
                </font>
            </div>
        </form>
        <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
            <img src="/Asset/images/LOGO EcoRide  avec une voiture écologie.jpg" alt="logo">
        </div>
    </div>
</section>



<?php require_once ROOT_PATH . "/templates/footer.php";  ?>