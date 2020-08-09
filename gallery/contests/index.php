<?php
function printContestsModule($title, $release_date, $page, $location, $banner_pic) {
    print_r('
        <div class="col-md-4 col-md">
            <div class="gallery-item">
                <a href="' . $page . '"><h3>' . $title . '</h3></a>
                    <p>' . date('F, Y', strtotime($release_date)) . ' - ' . $location . '</p>
                <a href="' . $page . '"><img src="images/' . $banner_pic . '" alt="' . $title . '"></a>
            </div> 
        </div>
    ');
}

include "../../config.php";
include SITE_ROOT . "/includes/header.php"
?>
<div class="content">
    <div class="container">
        <div class="box">
            <div class="row">
                <?php
                    $result = mysqli_query($conn, "SELECT * FROM contests ORDER BY release_date DESC");
                    $resultCheck = mysqli_num_rows($result);

                    if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $title = $row['title'];
                            $release_date = $row['release_date'];
                            $page = $row['page'];
                            $location = $row['location'];
                            $logo = $row['logo'];
                            $banner_pic = $row['banner_pic'];
                            printContestsModule($title, $release_date, $page, $location, $banner_pic);
                        }
                    } else {
                        echo "There was an error loading the contests";
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include SITE_ROOT . "/includes/footer.php" ?>