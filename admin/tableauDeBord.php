<?php
session_start();
require_once dirname(__DIR__) . "/config.php";
require_once ROOT_PATH . "/templates/header.php"; ?>

<section class="container mx-auto pt-25">
    <div class="bg-white p-6 rounded-lg shadow-md">

        <div class="flex gap-4 mb-6">
            <button class="bg-green-500 text-white px-4 py-2 rounded">Créer un compte employé</button>
            <button class="bg-red-500 text-white px-4 py-2 rounded">Suspendre un compte</button>
        </div>

        <h2 class="text-xl font-semibold mb-2">Statistiques</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-gray-50 p-4 rounded shadow">[📊 Graphique covoiturages/jour]</div>
            <div class="bg-gray-50 p-4 rounded shadow">[📈 Graphique crédits/jour]</div>
        </div>

        <p class="mt-6 text-lg">Total de crédits générés : <span class="font-bold text-blue-600">20 crédits</span></p>

        <h2 class="text-xl font-semibold mt-6 mb-2">Comptes utilisateurs & employés</h2>
        <table class="w-full text-left border">
            <thead>
                <tr class="bg-gray-100">
                    <th class="p-2">Type</th>
                    <th class="p-2">Pseudo</th>
                    <th class="p-2">Email</th>
                    <th class="p-2">État</th>
                    <th class="p-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p-2">Utilisateurs</td>
                    <td class="p-2">john_doe</td>
                    <td class="p-2">john.doe@mail.fr</td>
                    <td class="p-2">Actif</td>
                    <td class="p-2"><button class="text-red-500">Suspendre</button></td>
                </tr>

                <tr>
                    <td class="p-2">Utilisateurs</td>
                    <td class="p-2">leo_dubois</td>
                    <td class="p-2">leo.dubois@mail.fr</td>
                    <td class="p-2">Actif</td>
                    <td class="p-2"><button class="text-red-500">Suspendre</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>




<?php require_once ROOT_PATH . "/templates/footer.php";  ?>