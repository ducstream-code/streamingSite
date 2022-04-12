<?php
?>
<div class="responsive_header h-12 p-4 w-full bg-[#262633] mb-4 flex justify-between place-items-center md:hidden">
    <ion-icon onclick="openSideMenu()" class="text-3xl text-[#70708F]" name="menu" ></ion-icon>
    <h1 class="text-xl font-semibold text-[#70708F]">NomDuSite</h1>
    <div class="flex w-2/12 justify-between">
        <img class="object-contain" src="../assets/images/icons/Search.png">
        <img class="object-contain h-8 rounded-3xl" src="../assets/images/placeholder/user.jpg">

    </div>
</div>
<div class="fixed bg-[#2B2B40] top-0 h-full w-3/5 -translate-x-full transition-all md:hidden" id="side_menu">

</div>
<script>
    function openSideMenu(){
        document.getElementById('side_menu').style.transform = "translateX(0%)"
    }
</script>
