<?php
session_start();
require_once dirname(__DIR__) . "/config.php";
require_once ROOT_PATH . "/templates/header.php"; ?>


<main class="container mx-auto pt-25">
    <section class="pt-25 pb-10 text-center">
        <div style="font-size:2rem">
            <h1>Mentions Légales</h1>
        </div>
    </section>

    <section class="px-10 pt-10 pb-50 flex flex-col items-center justify-center space-y-6">
        <div>
            <h2 class="text-xl font-bold mb-4 pb-10 text-center">Conformément aux dispositions de l'article 6 III-1 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, nous vous informons des éléments suivants :</h2>
        </div>
        <div class="flex space-x-100">
            <div>
                <h3 class="text-lg font-semibold mb-2 flex items-center justify-center">1. Éditeur du Site</h3>
                <p class="leading-relaxed">
                    Le présent site web, accessible à l'adresse <strong>www.ecoride.fr</strong> est édité par :
                    <br>
                    EcoRide SAS <br>
                    <span><i class="fa-solid fa-location-dot"></i> 280, Rue des Jacobins <br> 60000, Beauvais</span> <br>
                    <span><i class="fa-solid fa-phone"></i> : 01.02.03.04.05</span> <br>
                    <span><i class="fa-solid fa-at"></i> : contact@ecoride.fr</span> <br>
                    Numéro de SIRET : 123 456 789 18005 <br>
                    Responsable de la publication : Amélie
                </p>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-2 flex items-center justify-center">2. Hébergeur du Site</h3>
                <p class="leading-relaxed">
                    Le présent site web est hébergé par : <br>
                    IONOS <br>
                    <span><i class="fa-solid fa-location-dot"></i> 7 PLACE DE LA GARE <br> 57200, SARREGUEMINES</span> <br>
            </div>
        </div>
        <div>
            <h3 class="text-lg font-semibold mb-2 flex items-center justify-center">3. Propriété Intellectuelle</h3>
            <p class="leading-relaxed">
                Le contenu de ce site, incluant, de manière non limitative, les textes, images, logos, graphismes, vidéos, et tout autre élément,
                est la propriété exclusive de EcoRide ou de ses partenaires. Toute reproduction, représentation, modification, publication, adaptation
                de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable
                de EcoRide.
            </p>
        </div>
        <div>
            <h3 class="text-lg font-semibold mb-2 flex items-center justify-center">4. Données Personnelles</h3>
            <p class="leading-relaxed">
                Dans le cadre de l'utilisation du site EcoRide, des données personnelles peuvent être collectées et traitées. Conformément à la réglementation
                en vigueur, notamment le Règlement Général sur la Protection des Données (RGPD) et la loi Informatique et Libertés modifiée, l'utilisateur
                dispose d'un droit d'accès, de rectification, de suppression, d'opposition et de portabilité de ses données.
                Pour exercer ces droits, l'utilisateur peut contacter EcoRide à l'adresse e-mail suivante : contact@ecoride.fr.
            </p>
        </div>
        <div>
            <h3 class="text-lg font-semibold mb-2 flex items-center justify-center">5. Cookies</h3>
            <p class="leading-relaxed">
                Le site EcoRide peut utiliser des cookies pour améliorer l'expérience utilisateur et réaliser des statistiques de visites.
                L'utilisateur est informé de cette utilisation par un bandeau lors de sa première connexion et a la possibilité d'accepter ou
                de refuser l'installation de ces cookies, conformément à la législation en vigueur.
            </p>
        </div>
        <div>
            <h3 class="text-lg font-semibold mb-2 flex items-center justify-center">6. Limitation de Responsabilité</h3>
            <p class="leading-relaxed">
                EcoRide s'efforce de fournir des informations exactes et à jour sur son site. Cependant, elle ne saurait garantir l'exactitude,
                l'exhaustivité et l'actualité des informations diffusées. En conséquence, l'utilisateur reconnaît utiliser ces informations sous sa
                responsabilité exclusive. EcoRide ne pourra être tenue responsable des dommages directs ou indirects résultant de l'accès ou de
                l'utilisation du site, y compris l'inaccessibilité, les pertes de données, détériorations, destructions ou virus qui pourraient
                affecter l'équipement informatique de l'utilisateur.
            </p>
        </div>
        <div>
            <h3 class="text-lg font-semibold mb-2 flex items-center justify-center">7. Droit Applicable et Juridiction Compétente</h3>
            <p class="leading-relaxed">
                Les présentes mentions légales sont soumises au droit français.
            </p>
        </div>
    </section>
</main>


<?php require_once ROOT_PATH . "/templates/footer.php";  ?>