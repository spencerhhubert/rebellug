<?php
function printInstructionsModule($title, $builder_name, $builder_handle, $price, $pic_main) {
    print_r('
        <div class="col-md-4 col-md">
            <div class="gallery-item">
                <form method="get" action="moc.php" class="inline">
                    <input type="hidden" name="id" value="' . $title . '">
                    <button type="submit" class="link-button" style="width: 100%;">
                        <a href="#"><h3>' . $title . '</h3></a>
                    </button>
                </form>
                <p>' . $builder_name . ' - ' . $builder_handle . '</p>
                <p><b>$' . $price . ' USD</b></p>
                <form method="get" action="moc.php" class="inline">
                    <input type="hidden" name="id" value="' . $title . '">
                    <button type="submit" class="link-button">
                        <a href="#"><img src="images/' . $pic_main . '"></a>
                    </button>
                </form> 
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
                            $builder_name = $row['builder_name'];
                            $builder_handle = $row['builder_handle'];
                            $price = $row['price'];
                            $pic_main = $row['pic_main'];
                            printInstructionsModule($title, $builder_name, $builder_handle, $price, $pic_main);
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