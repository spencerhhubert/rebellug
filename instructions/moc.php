<?php
$current_item_slug = $_GET['id'];
$current_item_ID;
$current_item_title;

include "../config.php";

$resultA = mysqli_query($conn, "SELECT title, id FROM instructions");
$resultCheckA = mysqli_num_rows($resultA);

if ($resultCheckA > 0) {
    while ($row = mysqli_fetch_assoc($resultA)) {
        $id = $row['id'];
        $title = $row['title'];
        if ($current_item_slug == slugify($title)) {
            $current_item_ID = $id;
            $current_item_title = $title;
            break;
        }
    }
} else {
    echo "There was an error loading this page.";
}

$title = $current_item_title;
include SITE_ROOT . "/includes/header.php";
?>

<div class="content">
    <div class="container">
        <div class="box">
            <?php
        

            $resultB = mysqli_query($conn, "SELECT * FROM instructions WHERE id='$current_item_ID'");
            $resultCheckB = mysqli_num_rows($resultB);
            if ($resultCheckB > 0) {
                $row = mysqli_fetch_assoc($resultB);
                $title = $row['title'];
                $builder_id = $row['builder_id'];
                $description = str_replace("\r\n", "</p><p>", $row['description']);
                $price = $row['price'];
                $paypal_link = $row['paypal_link'];
                $xml_parts_list = $row['xml_parts_list'];
                $pics = array (
                    0 => $row['pic_0'],
                    1 => $row['pic_1'],
                    2 => $row['pic_2'],
                    3 => $row['pic_3'],
                    4 => $row['pic_4'],
                    5 => $row['pic_5'],
                    6 => $row['pic_6'],
                    7 => $row['pic_7'],
                    8 => $row['pic_8'],
                    9 => $row['pic_9']
                );
    
                $numOfPics = 0;
                foreach ($pics as $pic) {
                    if ($pic != null) {
                        $numOfPics++;
                    }
    
                }
    
                print_r('
                <div style="text-align: center;">
                    <h1> ' . $title . '</h1>
                    <div class="row justify-content-center align-items-center">
                    <p style="margin: 0 10px 0 0;">By ' . memberName($builder_id) . ' - ' . memberHandle($builder_id) . '</p>');
                    echo memberSocial($builder_id);
                    print_r('</div>');
    
                print_r('    
                </div>
                <div id="instructions-slideshow" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#instructions-slideshow" data-slide-to="0" class="active"></li>');
                        for ($i = 1; $i <= $numOfPics - 1; $i++) {
                            print_r('<li data-target="#instructions-slideshow" data-slide-to="' . $i . '"></li>');
                        }
                print_r('</ol>');
                print_r('
                <div class="carousel-inner instructions-slideshow">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/' . $pics[0] . '" alt="LEGO ' . $title . '">
                    </div>
                ');
                for ($i = 1; $i <= $numOfPics - 1; $i++) {
                    print_r('
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/' . $pics[$i] . '" alt="LEGO ' . $title . '">
                    </div>
                    ');
                }
    
                print_r('</div>');
                print_r('
                <a class="carousel-control-prev" href="#instructions-slideshow" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#instructions-slideshow" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                ');
    
                print_r('</div>');
                print_r('<p style="margin-top: 15px;">' . $description . '</p>');
    
                print_r('
                <div class="row justify-content-center" style="margin-bottom: 25px;">
                    <div class="col-auto">
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <h3 style="font-size: 2em;" class="header">$' . $price . '</h3>
                            </div>
                        </div>
    
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <a href="' . $paypal_link . '"><img src="/images/buy_with_paypal_button.png" alt="Buy now with PayPal" width=250px></a>
                            </div>
                        </div>
                    </div>
                </div>
                ');

                echo '
                <p>The XML parts list is available <a href="parts/' . $xml_parts_list . '">here</a>. Here is our <a href="https://www.youtube.com/watch?v=nZHHhrKHXPA">video tutorial</a> to import the XML parts list to <a href="https://www.bricklink.com/">Bricklink</a>. <b>(Does not work on Apple Safari)</b></p>
                <p>Disclaimer: This model may be intended for display purposes. This model is a fan creation and may be fragile compared to official LEGO® sets. This model in no way is intended to imitate any past, present, or future official LEGO® set. © RebelLUG. All rights reserved. LEGO® is a trademark of the LEGO Group of companies which does not sponsor, authorize, or endorse this product.</p>
                ';
            } else {
                echo "There was an error loading this page.";
            }
            ?>
        </div>
    </div>
</div>
<?php include SITE_ROOT . "/includes/footer.php" ?>