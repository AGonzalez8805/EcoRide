<?php
session_start();
require_once dirname(__DIR__) . "/config.php";
require_once ROOT_PATH . "/templates/header.php";
?>
<section class="relative to-white body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="text-center mb-12">
            <h1 class="sm:text-4xl text-3xl mb-4">Nous Contacter</h1>
            <p class="text-gray-600 text-lg">Vous avez une question ? N’hésitez pas à nous écrire !</p>
        </div>
        <form action="/php/contactPost.php" method="post" id="formulaireContact" class="bg-white p-10 rounded-2xl shadow-xl max-w-3xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="Nom" class="block text-sm font-semibold text-gray-700 mb-1">Nom</label>
                    <input type="text" id="Nom" name="Nom" placeholder="Votre nom" class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500 transition">
                </div>
                <div>
                    <label for="Prenom" class="block text-sm font-semibold text-gray-700 mb-1">Prénom</label>
                    <input type="text" id="Prenom" name="Prenom" placeholder="Votre prénom" class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500 transition">
                </div>
                <div>
                    <label for="Email" class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
                    <input type="email" id="Email" name="Email" placeholder="adresse@email.com" class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500 transition">
                </div>
                <div>
                    <label for="Sujet" class="block text-sm font-semibold text-gray-700 mb-1">Sujet</label>
                    <input type="text" id="Sujet" name="Sujet" placeholder="Sujet du message" class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500 transition">
                </div>
                <div class="md:col-span-2">
                    <label for="Message" class="block text-sm font-semibold text-gray-700 mb-1">Message</label>
                    <textarea id="Message" name="Message" placeholder="Écrivez votre message ici..." class="w-full border border-gray-300 rounded-xl px-4 py-3 h-40 resize-none focus:outline-none focus:ring-2 focus:ring-green-500 transition"></textarea>
                </div>
                <div class="md:col-span-2 text-center">
                    <button type="submit" id="envoyer" class="bg-green-600 text-white font-semibold py-3 px-8 rounded-full shadow hover:bg-green-700 transition">Envoyer</button>
                </div>
            </div>
        </form>
    </div>
</section>

<script src="/js/contact.js"></script>
<?php require_once ROOT_PATH . "/templates/footer.php"; ?>