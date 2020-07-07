<?php
include "../../config.php";
$title = "The Laceropes Mission";
include SITE_ROOT . "/includes/collaborations.php";
include SITE_ROOT . "/includes/header.php";
?>

<div class="content">
    <div class="container">
        <div class="box collaboration">
            <div class="row justify-content-center">
                <?php

                    print_r('
                    <h1>' . $title . '</h1>
                    </div>
                    <div class="row justify-content-center">
                    <img src="images/' . $logo . '"class="logo"
                    </div>
                    <div class="row justify-content-center" style="text-align: center;"><p>' . $description . '</p></div>
                    ');


                    printMocs();
                ?>
            </div>
        </div>
    </div>
</div>

<?php include SITE_ROOT . "/includes/footer.php" ?>