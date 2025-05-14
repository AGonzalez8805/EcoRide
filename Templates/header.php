<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/Asset/images/LOGO EcoRide  avec une voiture écologie.jpg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/Asset/css/style.css">
    <title>EcoRide</title>
</head>

<body class="min-h-screen flex flex-col">
    <header class="text-stone-950 bg-stone-400 body-font fixed top-0 w-full z-10">
        <div class="container mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <a href="/index.php" class="flex title-font font-medium items-center mb-4 md:mb-0">
                <img src="/Asset/images/LOGO EcoRide  avec une voiture écologie.jpg" alt="" class="w-20 h-20 ml-8 rounded-full">
            </a>
            <nav class=" md:ml-auto md:mr-auto flex flex-wrap items-center justify-center">
                <a href="/pages/covoiturage.php" class="mr-5 hover:text-stone-200">Covoiturage</a>
                <a href="/pages/contact.php" class="mr-5 hover:text-stone-200">Contact</a>
                <a href="/pages/connexion.php" class="mr-5 hover:text-stone-200">Connexion</a>
                <button class="mr5 hover:text-stone-200" id="deconnexion"> Deconnexion</button>
            </nav>
        </div>
    </header>