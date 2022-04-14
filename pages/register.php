<?php
include '../includes/db.php';
include "../includes/check_session.php";

if(checkLoggedUser()){
    header('Location: ./profile.php');
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <?php include "../includes/head.php"; ?>
    <title>Inscription</title>
    <script src="../js/video.js"></script>
</head>

<body>
<div class="pl-20  justify-between mt-4 place-items-center hidden md:flex">
    <input type="text" placeholder="Search..."
           class="rounded-3xl pl-6 w-6/12 h-12 bg-[#48485B]  placeholder-white text-sm hidden md:block ml-8">
    <div class="login_buttons   place-items-center justify-around w-3/12  hidden md:flex">
        <ion-icon name="grid"></ion-icon>
        <ion-icon name="notifications"></ion-icon>
        <img src="../assets/images/placeholder/user.jpg" class="h-10 rounded-[50%] object-contain mr-2">
        <p>Aurelien K</p>
        <ion-icon name="chevron-down"></ion-icon>
    </div>
</div>
<div class="flex flex-col md:flex-row justify-between">
    <?php include '../includes/sidebar.php' ?>

    <div class="center_div h-full md:w-full  lg:w-full pt-0 md:pt-5   md:ml-0 md:ml-[80px] ">
        <?php include "../includes/mobileHeader.php";
                include '../includes/message.php'
        ?>


        <div class="flex justify-center">
            <img class=" h-12 md:h-16 lg:hidden mb-5"
                 src="data:image/jpeg;base64,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">
        </div>

        <div class="p-4 flex justify-center ">
            <form class="p-10 sm:bg-[#48486A] sm:rounded-3xl sm:w-4/5 md:w-3/5 lg:w-2/5 flex-col flex place-items-center" method="post" action="../php/register.php">
                <div class="flex flex-col mb-4">
                    <label for="username" class="text-white text-xl mb-2">Nom d'utilisateur</label>
                    <input type="text" id="username" name="username" class="border-solid border-b-2 border-[#5A657C] bg-transparent p-2 "
                           placeholder="Nom d'utilisateur">
                </div>
                <div class="flex flex-col mb-4">
                    <label for="email" class="text-white text-xl mb-2">Email</label>
                    <input type="email" class="border-solid border-b-2 border-[#5A657C] bg-transparent p-2 " id="email" name="email" placeholder="Email">
                </div>
                <div class="flex flex-col mb-4">
                    <label for="password" class="text-white text-xl mb-2">Mot de passe</label>
                    <input type="password" class="border-solid border-b-2 border-[#5A657C] bg-transparent p-2 " id="password" name="password"
                           placeholder="Mot de passe">
                </div>
                <div class="flex flex-col mb-6">
                    <label for="passwordConfirm" class="text-white text-xl mb-2">Confirmez le mot de passe</label>
                    <input type="password" class="border-solid border-b-2 border-[#5A657C] bg-transparent p-2 " id="passwordConfirm"
                           name="passwordConfirm" placeholder="Confirmer mot de passe">
                </div>
                <div class="flex flex-col place-items-center w-full">
                    <input type="submit" class="rounded-xl bg-[#5A657C] p-2 text-white w-2/5 " value="S'inscrire">
                </div>
            </form>
        </div>

        <div class="flex justify-center mt-4">
            <img class=" h-12 md:h-16"
                 src="data:image/jpeg;base64,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"
                 alt="">
        </div>

    </div>
    <div class="right_side w-[350px] hidden ">
        <img src="../assets/images/placeholder/ad.png" class=" mb-4 ml-10 hidden w-0 lg:block lg:w-4/5"
             alt="advertisement">
    </div>


    <script>

    </script>
</div>
</body>
</html>
