<?php

function printInstructionsModule($id, $title, $builder_id, $price, $thumbnail) {
    print_r('
        <div class="col-md-4 col-md">
            <div class="gallery-item instructions">
                <a href="/instructions/' . slugify($title) . '">
                    <h3>' . $title . '</h3>
                </a>
                <p>' . memberName($builder_id) . ' - ' . memberHandle($builder_id) . '</p>
                <p><b>$' . $price . ' USD</b></p>
                <a href="/instructions/' . slugify($title) . '">
                    <img src="/instructions/images/' . $thumbnail . '" loading="lazy">
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
            <div class="collaboration">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-4 justify-content-center d-none d-md-block">
                    <img src="instructions/images/gunship_banner_promo.jpg" width=100%>
                    <img src="instructions/images/rebellug-instructions-store-logo.png" style="position: absolute; width: 80%; left: 10%; top: 15px;">
                </div>
                <div class="col-md-7 col-lg-8">
                <h1 class="header">The RebelLUG Instructions Store</h1>
                    <p>RebelLUG members often get requests for instructions to their custom LEGO® models, and here we're excited to make them available!</p>
                    <p>These can be advanced models, often meant for display only, but each instruction manual is vetted to ensure clear and concise quality building directions.</p>
                    <p>Upon completing the payment process via PayPal, a PDF file containing the instructions will be emailed to you. A full parts list is also publically available for each build.</p>
                </div>
            </div>
            </div>
            <div class="row" style="margin-top: 15px;">
                <?php
                    $result = mysqli_query($conn, "SELECT * FROM instructions where display='true' ORDER BY manual_order IS NUll, manual_order ASC, title ASC");
                    $resultCheck = mysqli_num_rows($result);

                    if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $title = $row['title'];
                            $builder_id = $row['builder_id'];
                            $price = $row['price'];
                            $thumbnail = $row['thumbnail'];
                            printInstructionsModule($id, $title, $builder_id, $price, $thumbnail);
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
