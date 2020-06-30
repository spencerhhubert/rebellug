<?php
function printCollaborationsModule($title, $pic, $release_date, $page, $location) {
    print_r('
        <div class="col-md-4 col-md">
            <div class="gallery-item">
            <a href="' . $page . '"><h3>' . $title . '</h3></a>
                <p>' . date('F, Y', strtotime($release_date)) . ' - ' . $location . '</p>
                <a href="' . $page . '"><img src="images/' . $pic . '" alt="' . $title . '"></a>
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
                    $result = mysqli_query($conn, "SELECT * FROM collaborations ORDER BY release_date DESC");
                    $resultCheck = mysqli_num_rows($result);

                    if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $title = $row['title'];
                            $pic = $row['pic'];
                            $release_date = $row['release_date'];
                            $page = $row['page'];
                            $location = $row['location'];
                            printCollaborationsModule($title, $pic, $release_date, $page, $location);
                        }
                    } else {
                        echo "There was an error loading the collaborations";
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include SITE_ROOT . "/includes/footer.php" ?>