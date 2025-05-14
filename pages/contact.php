<?php
require_once dirname(__DIR__) . "/config.php";
require_once ROOT_PATH . "/templates/header.php";
?>
<section class="body-font relative">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center p-8 w-full mb-12">
            <h1 class="sm:text-3xl text-2xl mb-4 font-medium">Nous Contacter</h1>
        </div>
        <form id="formulaireContact" class="formulaire">
            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <div class="flex flex-wrap -m-2">
                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="name" class="leading-7">Nom</label>
                            <input type="text" id="name" name="name" class="w-full bg-stone-300 border focus:border-green-700 focus:bg-stone-200 focus:ring-2 focus:ring-green-400 focus:bg-transparent outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                    </div>
                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="firstname" class="leading-7">Prénom</label>
                            <input type="text" id="firstname" name="firstname" class="w-full bg-stone-300 border focus:border-green-700 focus:bg-stone-200 focus:ring-2 focus:ring-green-400 focus:bg-transparent outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                    </div>
                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="email" class="leading-7">Email</label>
                            <input type="email" id="email" name="email" class="w-full bg-stone-300 border focus:border-green-700 focus:bg-stone-200 focus:ring-2 focus:ring-green-400 focus:bg-transparent outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                    </div>
                    <div class="p-2 w-full">
                        <div class="relative">
                            <label for="message" class="leading-7">Message</label>
                            <textarea id="message" name="message" class="w-full bg-stone-300 border focus:border-green-700 focus:bg-stone-200 focus:ring-2 focus:ring-green-400 focus:bg-transparent h-32 outline-none py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                        </div>
                    </div>
                    <div class="p-2 w-full">
                        <button type="submit" class="flex mx-auto bg-stone-300 rounded-full border-x-6 border-green-600 py-2 px-8 focus:outline-none hover:bg-stone-200 rounded text-lg">Envoyer</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="p-2 w-full pt-8 mt-8 border-t border-stone-400 text-center">
            <a class="text-indigo-400"></a>
            <p class="leading-normal my-5">
                <br>
            </p>
        </div>
    </div>
</section>


<?php require_once ROOT_PATH . "/templates/footer.php";  ?>