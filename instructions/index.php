<?php

function printInstructionsModule($title, $builder_id, $price, $pic_0) {
    print_r('
        <div class="col-md-4 col-md">
            <div class="gallery-item">
                <a href="/instructions/' . slugify($title) . '">
                    <h3>' . $title . '</h3>
                </a>
                <p>' . memberName($builder_id) . ' - ' . memberHandle($builder_id) . '</p>
                <p><b>$' . $price . ' USD</b></p>
                <a href="/instructions/' . slugify($title) . '">
                    <img src="/instructions/images/' . $pic_0 . '">
                </a>
            </div> 
        </div>
    ');
}

include "../config.php";
include SITE_ROOT . "/includes/header.php";
?>
<div class="content">
    <div class="container">
        <div class="box">
            <div class="row">
                <div class="text-center collaboration">
                    <h1 class="header">The RebelLUG LEGO MOC Instructions Store</h1>
                    <img src="images/rebellug-instructions-store-logo.png" class="logo">
                    <p>RebelLUG members often get requests for instructions to their custom LEGO® models. We're happy to announce that those are finally available here on the RebelLUG website.</p>
                    <p>The ordering process is simple. By clicking the photos of the builds, you can find more information about each model, including more pictures, videos, and a complete parts list. To purchase a set of instructions, you can use any of the PayPal options near the bottom of each models' page. Immediately following your purchase, you will recieve a PDF copy of the instructions to the email linked with your PayPal. If you have any questions, feel free to contact us via email at <a href="mailto: rebellegousergroup@gmail.com">rebellegousergroup@gmail.com</a>.</p>
                    <p>Thank you for helping support our builders and our group!</p>
                </div>
                <?php
                    $result = mysqli_query($conn, "SELECT * FROM instructions");
                    $resultCheck = mysqli_num_rows($result);

                    if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $title = $row['title'];
                            $builder_id = $row['builder_id'];
                            $price = $row['price'];
                            $pic_0 = $row['pic_0'];
                            printInstructionsModule($title, $builder_id, $price, $pic_0);
                        }
                    } else {
                        echo "There was an error loading the instructions";
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include SITE_ROOT . "/includes/footer.php" ?>