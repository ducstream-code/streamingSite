<?php
?>
<div class="responsive_header h-12 p-4 w-full bg-[#262633] mb-4 flex justify-between place-items-center md:hidden">
    <ion-icon onclick="openSideMenu()" class="text-3xl text-[#70708F]" name="menu"></ion-icon>
    <h1 class="text-xl font-semibold text-[#70708F]">NomDuSite</h1>
    <div class="flex w-2/12 justify-between">
        <img class="object-contain" src="../assets/images/icons/Search.png" onclick="showSearch()">
        <img class="object-contain h-8 rounded-3xl" src="../assets/images/placeholder/user.jpg">

    </div>
</div>
<!--Slide menu -->
<div class="fixed bg-[#2B2B40]/[.9] top-0 h-full w-full -translate-x-full transition-all md:hidden" id="side_menu">
    <div class="flex justify-end p-8" onclick="closeSideMenu()"><ion-icon class="text-[35px] text-white font-bold" name="close" onclick="hideSearch()"></ion-icon></div>
    <div class="flex flex-col place-items-center justify-between p-24 h-4/5 text-2xl font-semibold text-white">
        <a href="" class="text-3xl">Nom du site</a>
        <a href="">Accueil</a>
        <a href="">Tendances</a>
        <a href="">Acteurs</a>
        <a href="">Catégories</a>
        <a href="">Mes j'aimes</a>
        <a href="">Historique</a>
    </div>
</div>

<div class="fixed bg-[#262633] top-0 w-full  md:hidden flex justify-between h-12 pr-8 pl-8 place-items-center -translate-y-full transition-all" id="responsive_search">
    <div class="flex place-items-center w-2/3">
        <img src="../assets/images/icons/Search.png" alt="" class="h-5 mr-4">
        <input type="text" placeholder="Recherche..." class="bg-transparent border-b-2 border-solid border-[#48486A] w-full">
    </div>
    <ion-icon class="text-3xl text-white font-bold" name="close" onclick="hideSearch()"></ion-icon>
</div>
<script>
    function openSideMenu() {
        document.getElementById('side_menu').style.transform = "translateX(0%)"
    }

    function closeSideMenu() {
        document.getElementById('side_menu').style.transform = "translateX(-100%)"
    }

    function showSearch(){
        document.getElementById('responsive_search').style.transform = "translateY(0%)"

    }
    function hideSearch(){
        document.getElementById('responsive_search').style.transform = "translateY(-100%)"

    }

</script>
