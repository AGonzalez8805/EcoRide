<?php
require_once "templates/header.php";
?>

<!-- Recherche trajet -->
<section class="body-font">
    <div class="container px-3 sm:px-4 lg:px-5 py-8 sm:py-16 lg:py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-6 sm:mb-8 lg:mb-12 pt-4 sm:pt-6 lg:pt-10">
            <h1 class="text-2xl sm:text-2xl lg:text-3xl font-medium title-font mb-2 sm:mb-3 lg:mb-4">Où allons-nous ?</h1>
        </div>
        <form id="formulaireVoyage" class="flex flex-col sm:flex-row w-full sm:w-4/5 lg:w-3/4 xl:w-2/3 mx-auto px-3 sm:px-4 lg:px-8 space-y-4 sm:space-y-0 sm:space-x-3 md:space-x-4">
            <div class="relative flex-grow w-full max-w-full">
                <label for="depart" class="leading text-sm">Départ</label>
                <input type="text" id="depart" name="depart" class="w-full bg-stone-300 rounded-full border-y-2 border-green-700 focus:border-green-200 focus:ring-2 focus:ring-green-400 focus:bg-transparent outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative flex-grow w-full max-w-full">
                <label for="arriver" class="leading text-sm">Arriver</label>
                <input type="text" id="arriver" name="arriver" class="w-full bg-stone-300 rounded-full border-y-2 border-green-700 focus:border-green-200 focus:ring-2 focus:ring-green-400 focus:bg-transparent outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative flex-grow w-full max-w-full">
                <label for="date" class="leading text-sm">Date</label>
                <input type="date" id="date" name="date" class="w-full bg-stone-300 rounded-full border-y-2 border-green-700 focus:border-green-200 focus:ring-2 focus:ring-green-400 focus:bg-transparent outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <button type="submit" class="mt-4 sm:mt-6 text-white bg-green-700 border-0 py-2 px-6 sm:px-8 focus:outline-none hover:bg-green-200 rounded-full text-lg w-full sm:w-auto self-end"><i class="fa-solid fa-magnifying-glass-location"></i></button>
        </form>
    </div>
</section>

<!-- Image+texte -->
<section class="body-font relative py-6 sm:py-8 lg:py-12">
    <div class="container mx-auto flex px-3 sm:px-4 lg:px-5 items-center justify-center flex-col">
        <div class="text-center w-full mb-4 sm:mb-6">
            <h1 class="title-font text-2xl sm:text-3xl lg:text-4xl mb-2 sm:mb-3 lg:mb-4 font-medium">Qui sommes-nous?</h1>
        </div>
        <div class="flex flex-col items-center w-full max-w-3xl sm:max-w-4xl mx-auto relative">
            <img class="w-full max-w-full sm:max-w-3xl mx-auto mb-4 sm:mb-6 lg:mb-8 opacity-30" alt="hero" src="/Asset/images/imagefond.png">
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center w-full px-2 sm:px-4 lg:px-6 mx-auto md:w-5/6">
                    <p class="leading-relaxed mb-4 sm:mb-6 lg:mb-8 text-sm lg:text-xl">
                        <strong>
                            Notre plateforme révolutionne la mobilité partagée en connectant chauffeurs et passagers avec une priorité claire : l'impact environnemental. Contrairement aux services traditionnels, nous permettons à chaque utilisateur de choisir librement son rôle selon ses besoins du moment, qu'il souhaite conduire ou être passager.
                            <br><br>Notre algorithme intelligent privilégie systématiquement les véhicules électriques pour les déplacements urbains et de proximité, tandis que les voitures à faible consommation sont favorisées pour les trajets longue distance. Cette approche différenciée selon la distance parcourue optimise l'empreinte carbone de chaque trajet.
                            <br><br>En rejoignant notre communauté, vous participez activement à la transition écologique tout en bénéficiant d'une solution de transport flexible et économique. Notre technologie met en relation des utilisateurs partageant les mêmes valeurs environnementales et facilite une mobilité plus responsable au quotidien.
                        </strong>
                    </p>
                </div>
            </div>
            <div class="text-sm sm:text-base lg:text-xl text-center px-2 sm:px-4">
                <p>Partagez vos trajets, préservez la planète :
                    <br>la mobilité responsable à portée de clic
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Les deux photos -->
<section class="body-font">
    <div class="container px-2 sm:px-4 lg:px-5 py-8 sm:py-16 lg:py-24 mx-auto">
        <div class="flex flex-wrap -mx-2 -mb-4 sm:-mb-6 lg:-mb-10 text-center">
            <div class="w-full sm:w-1/2 mb-4 sm:mb-6 lg:mb-10 px-2">
                <div class="rounded-lg overflow-hidden">
                    <img alt="content" class="object-cover object-center h-full w-full" src="/Asset/images/Hybrid 1.png">
                </div>
            </div>
            <div class="w-full sm:w-1/2 mb-4 sm:mb-6 lg:mb-10 px-2">
                <div class="rounded-lg overflow-hidden">
                    <img alt="content" class="object-cover object-center h-full w-full" src="/Asset/images/Electric 1.png">
                </div>
            </div>
        </div>
    </div>
</section>



<?php
require_once "templates/footer.php";
?>