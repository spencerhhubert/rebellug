<?php
include "../../config.php";
$title = "So Uncivilized";
include SITE_ROOT . "/includes/header.php";
?>

<div class="content">
    <div class="container">
        <div class="box collaboration">
            <div class="text-center">
                <h1>So Uncivilized</h1>
                <img src="images/so-uncivilized/SoUncivilizedBlack.png" class="logo">
                <p>So Uncivilized, the RebelLUG Blaster Collaboration, presented the challenge to build any 1:1 scale blaster from the Star Wars universe.</p>
                <p>The collaboration was premiered on July 3rd, 2020, and featured 17 different 1:1 scale LEGO Star Wars blasters from 16 different builders.</p>
                <iframe width="100%" height="400" src="https://www.youtube.com/embed/aO-ist8mSSM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <hr>
            
            <?php

            $builds = array("E-11 Blaster Rifle", "Princess Leia's Defender Sporting Pistol", "Han Solo's DL-44 Pistol", "Biker Scout Trooper Pistol", "CR-2 Heavy Blaster Pistol", "Padme's ELG-3A Blaster Pistol", 'Model 434 "Death Hammer"', "DC-17s Blaster Pistol", "DC-17m Interchangeable Weapon System", "DC-17 Hand Blaster", "Mandalorian WESTAR-35 Blaster Pistol", "Hera's Blurrg-1120 Pistol", "SE-44C Blaster Pistol", "E11D Blaster Carbine", "Jyn Erso's A180 Blaster Pistol", "ST-W48 Sith Trooper Carbine", "Din Djarin's Blaster Pistol");
            $builders = array(4, 2, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4);
            $buildImages = array("01_Blank_Caleb_LegoHobbitFan_E11.jpg ",  "02_Blank_Joe_JNJ_Leia.jpg ",  "03_Blank_Nick_NickBrick_DL44.jpg ",  "04_Blank_Yannis_YRBricks_BikerScoutPistol.jpg ",  "05_Blank_Andrew_CRCT_CR2.jpg ",  "06_Blank_Caleb_MaskedBuilder_ELG3A.jpg ",  "07_bLANK_Thomas_LegionDude_Deathhammer.jpg ",  "08_Blank_Peter_GuySmiley_DC17S.jpg ",  "09_Blank_Simon_SiMocs_DC17mICWS.jpg ",  "10_Blank_Noah_H2Brick_DC17.jpg ",  "11_Blank_Spencer_LegoSpencer_Westar35.jpg ",  "12_Blank_Ryan_Goatman_Blurrg1120.jpg ",  "13_Blank_DanielBarwegen_SE44C.jpg ",  "14_Blank_Alec_AlecD_E11D.jpg ",  "15_Blank_Nick_NickBrick_A180.jpg ",  "16_Blank_Bryce_BrickbuiltReplicas_STW48.jpg ",  "17_Blank_Fin_Legofin_DinDjarin.jpg ");

            echo printCollaborationBuilds01($builds, $builders, $buildImages, "so-uncivilized/")
            
            ?>

        </div>
    </div>
</div>

<?php include SITE_ROOT . "/includes/footer.php" ?>