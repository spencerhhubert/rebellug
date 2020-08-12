<?php
include "../../config.php";
$title = "The Scarif Tower";
include SITE_ROOT . "/includes/header.php";
?>

<div class="content">
    <div class="container">
        <div class="box collaboration">
            <div class="text-center">
                <h1 class="header">The Scarif Tower</h1>
                <p>The Scarif Tower battle scene was our collaboration for Brickworld Chicago 2017. Kris productions built the tower <a href="https://www.youtube.com/playlist?list=PLAXi22HQuh6U50kaPkNE82CqCZoLY6vGP" target="_blank">over the course of a YouTube building series</a> and other members contributed islands.</p>
                <iframe width="100%" height="400" src="https://www.youtube.com/embed/_IAtBnmg49o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <hr>
            
            <?php

            $build_images = array(
            "01 brickworld-chicago-2017_35108148180_o.jpg ", 
            "02 brickworld-chicago-2017_34684578553_o.jpg ", 
            "03 brickworld-chicago-2017_34653466534_o.jpg ", 
            "04 brickworld-chicago-2017_34653457724_o.jpg ", 
            "05 brickworld-chicago-2017_34653459094_o.jpg ", 
            "06 brickworld-chicago-2017_34653461284_o.jpg ", 
            "07 brickworld-chicago-2017_34653463104_o.jpg ", 
            "08 brickworld-chicago-2017_35108141540_o.jpg ", 
            "09 brickworld-chicago-2017_35454923716_o.jpg ", 
            "10 brickworld-chicago-2017_35108165630_o.jpg ", 
            "10.5 brickworld-chicago-2017_35454921316_o.jpg ", 
            "11 brickworld-chicago-2017_34653477104_o.jpg ", 
            "12 brickworld-chicago-2017_34684590093_o.jpg ", 
            "13 brickworld-chicago-2017_35454935976_o.jpg ", 
            "14 brickworld-chicago-2017_35494587885_o.jpg ", 
            "15 brickworld-chicago-2017_35327517402_o.jpg "
            );

            echo printCollaborationBuilds05($build_images, "scarif/")
            
            ?>

        </div>
    </div>
</div>

<?php include SITE_ROOT . "/includes/footer.php" ?>