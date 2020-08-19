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