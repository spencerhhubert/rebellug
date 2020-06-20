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
            $pic_main = $row['pic_main'];
            $pic_2 = $row['pic_2'];
            $pic_3 = $row['pic_3'];
            $pic_4 = $row['pic_4'];
            $pic_5 = $row['pic_5'];
            $pic_6 = $row['pic_6'];
            $pic_7 = $row['pic_7'];
            $pic_8 = $row['pic_8'];
            $pic_9 = $row['pic_9'];
            $pic_10 = $row['pic_10'];
            print_r($description);
            ?>

            <p>The XML parts list is available <a href="parts/<?php echo $xml_parts_list ?>">here</a>. Here is our <a href="https://www.youtube.com/watch?v=nZHHhrKHXPA">video tutorial</a> to import the XML parts list to <a href="https://www.bricklink.com/">Bricklink</a>. (Does not work on Apple Safari)</p>
            <p>Disclaimer: This model may be intended for display purposes. This model is a fan creation and may be fragile compared to official LEGO® sets. This model in no way is intended to imitate any past, present, or future official LEGO® set. © RebelLUG. All rights reserved. LEGO® is a trademark of the LEGO Group of companies which does not sponsor, authorize, or endorse this product.</p>
        </div>
    </div>
</div>
<?php include SITE_ROOT . "/includes/footer.php" ?>