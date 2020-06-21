<?php
$id = $_GET['id'];
$title = $id;
include "../config.php";
include SITE_ROOT . "/includes/header.php";
?>


<div class="content">
    <div class="container">
        <div class="box">
            <?php
            $result = mysqli_query($conn, "SELECT * FROM instructions WHERE title='$id'");
            $resultCheck = mysqli_num_rows($result);
            $row = mysqli_fetch_assoc($result);
            $title = $row['title'];
            $builder_name = $row['builder_name'];
            $builder_handle = $row['builder_handle'];
            $description = str_replace("\r\n", "</p><p>", $row['description']);
            $subhead = $row['subhead'];
            $price = $row['price'];
            $paypal_link = $row['paypal_link'];
            $xml_parts_list = $row['xml_parts_list'];
            $pics = array (
                "main" => $row['pic_main'],
                2 => $row['pic_2'],
                3 => $row['pic_3'],
                4 => $row['pic_4'],
                5 => $row['pic_5'],
                6 => $row['pic_6'],
                7 => $row['pic_7'],
                8 => $row['pic_8'],
                9 => $row['pic_9'],
                10 => $row['pic_10']
            );

            $numOfPics = 0;
            foreach ($pics as $pic) {
                if ($pic != null) {
                    $numOfPics++;
                }

            }

            print_r('
            <div id="group-shot" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#group-shot" data-slide-to="0" class="active"></li>');
                    for ($i = 1; $i <= $numOfPics - 1; $i++) {
                        print_r('<li data-target="#group-shot" data-slide-to="' . $i . '"></li>');
                    }
            print_r('</ol>');
            print_r('
            <div class="carousel-inner group-shot">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/' . $pics['main'] . '" alt="First slide">
                </div>
            ');
            for ($i = 2; $i <= $numOfPics; $i++) {
                print_r('
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/' . $pics[$i] . '" alt="LEGO ' . $title . '">
                </div>
                ');
            }

            print_r('</div>');
            print_r('
            <a class="carousel-control-prev" href="#group-shot" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#group-shot" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            ');

            print_r('</div>');
            print_r($description);
            ?>

            <p>The XML parts list is available <a href="parts/<?php echo $xml_parts_list ?>">here</a>. Here is our <a href="https://www.youtube.com/watch?v=nZHHhrKHXPA">video tutorial</a> to import the XML parts list to <a href="https://www.bricklink.com/">Bricklink</a>. (Does not work on Apple Safari)</p>
            <p>Disclaimer: This model may be intended for display purposes. This model is a fan creation and may be fragile compared to official LEGO® sets. This model in no way is intended to imitate any past, present, or future official LEGO® set. © RebelLUG. All rights reserved. LEGO® is a trademark of the LEGO Group of companies which does not sponsor, authorize, or endorse this product.</p>
        </div>
    </div>
</div>
<?php include SITE_ROOT . "/includes/footer.php" ?>