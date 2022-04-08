<?php
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <?php include "../includes/head.php"; ?>
    <title>Titre</title>
</head>
<body class="flex">
<div class="side_bar h-screen w-1/6 pt-10 pl-8 pr-2">
    <div class="text-2xl font-semibold "><span class="text-[#BF9BFD]">Spot</span><span class="text-white">video</span></div>
    <div class="mt-6 text-xl text-white pl-4 ">
        <div class="flex place-items-center rounded hover:bg-[#4B376C] p-2 mb-3">
            <ion-icon class="mr-3" name="home"></ion-icon>
            <h1>Home</h1>
        </div>
        <div class="flex place-items-center rounded hover:bg-[#4B376C] p-2 mb-3">
            <ion-icon class="mr-3" name="search"></ion-icon>
            <h1>Discover</h1>
        </div>
        <div class="flex place-items-center rounded hover:bg-[#4B376C] p-2 mb-3">
            <ion-icon class="mr-3" name="star"></ion-icon>
            <h1>Popular</h1>
        </div>
        <div class="flex place-items-center rounded hover:bg-[#4B376C] p-2 mb-3">
            <ion-icon class="mr-3" name="bookmark"></ion-icon>
            <h1>Saved</h1>
        </div>
        <div class="flex place-items-center rounded hover:bg-[#4B376C] p-2 mb-3">
            <ion-icon class="mr-3" name="heart"></ion-icon>
            <h1>Likes</h1>
        </div>
        <div class="flex place-items-center rounded hover:bg-[#4B376C] p-2 mb-3">
            <ion-icon class="mr-3" name="time"></ion-icon>
            <h1>History</h1>
        </div>
    </div>

</div>
<div class="center_div h-full  w-4/6 pt-8 pl-12 pr-20">
    <input type="text" class="p-2 rounded-[7px] bg-[#F7F7F7] w-full mb-10" placeholder="search">
    <video src="../assets/videos/test.mp4"></video>

</div>

<div class="right_side h-full 100 w-1/6 pt-8 pr-12">
    <div class="flex justify-between text-2xl text-gray-300 place-items-center place-content-center p-2 mb-10">
        <ion-icon name="ellipsis-horizontal"></ion-icon>
        <ion-icon name="notifications"></ion-icon>
        <ion-icon name="square"></ion-icon>
        <ion-icon name="log-out"></ion-icon>
    </div>
    <img src="../assets/images/placeholder/ad.png" class="w-full">
    <p class="text-gray-700 font-semibold text-2xl mt-4">Suggestion</p>

</div>

</body>
</html>
