<?php

session_start();

require_once "templates/header.php";
?>

<!-- Recherche trajet -->
<section class="body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-6 sm:mb-8 lg:mb-12 pt-10 sm:pt-6 lg:pt-10">
            <h1 class="text-2xl sm:text-2xl lg:text-3xl title-font mb-2 sm:mb-3 lg:mb-4">Où allons-nous ?</h1>
        </div>
        <form id="formulaireVoyage">
            <div class="flex lg:w-4/5 w-full md:flex-row flex-col ml-auto mr-0 px-8 md:px-0 items-end md:space-x-4 md:space-y-0 space-y-4">
                <div class="relative md:mb-0 flex-grow w-full">
                    <label for="depart" class="leading-7 text-sm">Départ</label>
                    <input type="text" id="depart" name="depart" class="w-full bg-stone-300 rounded-full border-y-2 border-green-700 focus:ring-2 focus:bg-transparent outline-none py-2 px-4 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative flex-grow w-full">
                    <label for="arriver" class="leading-7 text-sm">Arriver</label>
                    <input type="text" id="arriver" name="arriver" class="w-full bg-stone-300 rounded-full border-y-2 border-green-700 focus:ring-2 focus:bg-transparent outline-none py-2 px-4 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative sm:mb-0 flex-grow w-full">
                    <label for="date" class="leading-7 text-sm">Date</label>
                    <input type="date" id="date" name="date" class="w-full bg-stone-300 rounded-full border-y-2 border-green-700 focus:ring-2 focus:bg-transparent outline-none py-2 px-4 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="w-full flex md:justify-start justify-center">
                    <button type="submit" class="text-white bg-green-700 border-0 py-2 lg:w-auto w-full px-10 focus:outline-none rounded-full text-lg lg:w-auto w-3/4 md:w-full self-end"><i class="fa-solid fa-magnifying-glass-location"></i></button>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- Image+texte -->
<section class="body-font relative py-6 sm:py-8 lg:py-12">
    <div class="container mx-auto flex px-3 sm:px-4 lg:px-5 items-center justify-center flex-col">
        <div class="text-center w-full mb-4 sm:mb-6">
            <h1 class="title-font text-2xl sm:text-3xl md:text-3xl lg:text-4xl mb-2 sm:mb-3 lg:mb-4">Qui sommes-nous?</h1>
        </div>
        <div class="flex flex-col items-center w-full max-w-3xl md:max-w-4xl mx-auto relative">
            <img class="w-full max-w-full md:max-w-3xl mx-auto mb-4 md:mb-6 lg:mb-8 opacity-30 max-h-40 sm:max-h-none" alt="hero" src="/Asset/images/imagefond.png">
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center w-full px-2 md:px-4 lg:px-6 mx-auto md:w-5/6">
                    <p class="leading-relaxed mb-4 md:mb-6 lg:mb-8 text-xs sm:text-sm md:text-lg lg:text-xl overflow-y-auto max-h-32 sm:max-h-none sm:overflow-visible">
                        <strong>
                            Notre plateforme révolutionne la mobilité partagée en connectant chauffeurs et passagers avec une priorité claire : l'impact environnemental. Contrairement aux services traditionnels, nous permettons à chaque utilisateur de choisir librement son rôle selon ses besoins du moment, qu'il souhaite conduire ou être passager.
                            <br><br>Notre algorithme intelligent privilégie systématiquement les véhicules électriques pour les déplacements urbains et de proximité, tandis que les voitures à faible consommation sont favorisées pour les trajets longue distance. Cette approche différenciée selon la distance parcourue optimise l'empreinte carbone de chaque trajet.
                            <br><br>En rejoignant notre communauté, vous participez activement à la transition écologique tout en bénéficiant d'une solution de transport flexible et économique. Notre technologie met en relation des utilisateurs partageant les mêmes valeurs environnementales et facilite une mobilité plus responsable au quotidien.
                        </strong>
                    </p>
                </div>
            </div>
            <div class="text-sm sm:text-base md:text-lg lg:text-xl text-center px-2 sm:px-4 mt-2 sm:mt-0">
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