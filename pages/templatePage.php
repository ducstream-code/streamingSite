<?php
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <?php include "../includes/head.php"; ?>
    <title>Titre</title>
    <script src="../js/video.js"></script>
</head>
<body class="flex" onload="removeHUD()">

<?php include '../includes/sidebar.php' ?>

<div class="center_div h-full w-[800px]   pt-5  pr-12 ml-[80px] ">
    <input type="text" placeholder="Search..."
           class="rounded-3xl pl-6 w-7/12 h-[35px] bg-[#48485B] mb-3 placeholder-white text-sm">

</div>

<div class="right_side h-full 100 w-[460px] pt-5 ">
    <div class="login_buttons flex  place-items-center justify-around w-2/3 mb-6">
        <ion-icon name="grid"></ion-icon>
        <ion-icon name="notifications"></ion-icon>
        <img src="../assets/images/placeholder/user.jpg" class="h-[25px] rounded-[50%] object-contain mr-2">
        <p>Aurelien K</p>
        <ion-icon name="chevron-down"></ion-icon>
    </div>

    <img src="../assets/images/placeholder/ad.png" class="w-1/2 mb-4 ml-10">

</div>
<script>

</script>

</body>
</html>
