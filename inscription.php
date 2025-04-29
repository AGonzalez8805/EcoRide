<?php require_once "templates/header.php" ?>

<section class="text-stone-950 body-font">
    <div class="container gap-8 px-5 py-24 mx-auto flex flex-wrap items-center">
        <form id="formulaireInscription" class="lg:w-2/6 md:w-1/2 bg-stone-400 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
            <h2 class="flex items-center justify-center text-lg font-medium title-font mb-5">
                <font style="vertical-align: inherit;text-decoration:underline; font-family:Fira Code, monospace;">
                    <font style="vertical-align: inherit; font-size:2rem;">Inscription</font>
                </font>
            </h2>
            <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit; font-size:1rem; ">Email</font>
                    </font>
                </label>
                <input type="email" id="email" name="email" class="w-full bg-stone-300 focus:bg-stone-200 focus:ring-4 focus:ring-green-600 rounded border border-black text-black outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="username" class="leading-7 text-sm">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit; font-size:1rem; ">Pseudo</font>
                    </font>
                </label>
                <input type="text" id="username" name="username" class="w-full bg-stone-300 focus:bg-stone-200 focus:ring-4 focus:ring-green-600 rounded border border-black text-black outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="password" class="leading-7 text-sm">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit; font-size:1rem ">Mot de passe</font>
                    </font>
                </label>
                <input type="password" id="password" name="password" class="w-full bg-stone-300 focus:bg-stone-200 focus:ring-4 focus:ring-green-600 rounded border border-black text-black outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="password" class="leading-7 text-sm">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit; font-size:1rem ">Confirmation du mot de passe</font>
                    </font>
                </label>
                <input type="password" id="password" name="password" class="w-full bg-stone-300 focus:bg-stone-200 focus:ring-4 focus:ring-green-600 rounded border border-black text-black outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <button type="submit" class="bg-stone-300 rounded-full border-x-6 border-green-600 py-2 px-8 focus:outline-none hover:bg-stone-200 rounded text-lg">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">S'inscrire</font>
                </font>
            </button>
        </form>
        <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
            <img src="/Asset/images/LOGO EcoRide  avec une voiture écologie.jpg" alt="logo">
        </div>
    </div>
</section>



<?php require_once "templates/footer.php" ?>