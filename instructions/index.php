<?php

function printInstructionsModule($id, $title, $builder_id, $price, $thumbnail, $isC4C, $C4CPercent, $free) {
    $output = "";
    $output = $output . '
        <div class="col-md-4 col-md">
            <div class="gallery-item instructions">
                <a href="/instructions/' . slugify($title) . '">
                    <h3>' . $title . '</h3>
                </a>
                <p>' . memberName($builder_id) . ' - ' . memberHandle($builder_id) . '</p>';
    if ($free !== 'true') {
        $output = $output . '
                <p><b>$' . $price . ' USD</b></p>';
    }
    $output = $output . '<div style="position: relative;">';
    if ($isC4C == "true") {
        $output = $output . '
            <div class="c4c">
                <img src="/instructions/images/creations_for_charity_logo_small.png" class="c4c">
        ';
        $output = $output . '
                <h6>' . $C4CPercent . '%<h6>
            </div>
        ';
    }
                
    $output = $output . '
                    <a href="/instructions/' . slugify($title) . '">
                        <img src="/instructions/images/' . $thumbnail . '" loading="lazy">
                    </a>
                </div>
            </div> 
        </div>
    ';
    echo $output;
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
                        <?php
                                $dir = 'instructions/images/banner_images/';
                                $banner_images = scandir(SITE_ROOT . "/" . $dir);
                                $display_image = rand(0, (count($banner_images) - 3)) + 2;
                                $output = "<img src='" . $dir . $banner_images[$display_image] . "' width=100%>";
                                echo $output;
                        ?>
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
                            $isC4C = 'false';
                            $C4CPercent = $row['C4CPercent'];
                            $free = $row['free'];
                            printInstructionsModule($id, $title, $builder_id, $price, $thumbnail, $isC4C, $C4CPercent, $free);
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
