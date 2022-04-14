<?php

/* Permet d'afficher les différentes alertes */
if (isset($_GET['message']) && !empty($_GET['message']) && isset($_GET['type']) && !empty($_GET['type'])) {


    ?>
    <div class="bg-white w-4/5 sm:w-3/5 md:w-2/5 lg:w-2/6 xl:w-1/6 rounded p-4 absolute right-[15px] top-[15px] flex justify-between" id="alert_message">
        <div class="flex place-items-center">
            <?= $_GET['type'] == "success" ? '<ion-icon name="checkmark-circle-outline" class="text-green-400 text-3xl font-bold mr-3"></ion-icon>' : '<ion-icon name="close-circle-outline" class="text-red-400 text-3xl font-bold mr-3"></ion-icon>' ?>

            <h1><?=$_GET['message']?></h1>
        </div>
        <ion-icon class="text-3xl" name="close-outline" onclick="document.getElementById('alert_message').remove()"></ion-icon>

    </div>

    <?php
}
?>



