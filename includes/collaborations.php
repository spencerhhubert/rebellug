<?php

$collaborationInfo = mysqli_query($conn, "SELECT * FROM collaborations WHERE title='$title'");
$collaborationInfoResultCheck = mysqli_num_rows($collaborationInfo);
$collaborationInfoRow = mysqli_fetch_assoc($collaborationInfo);
$id = $collaborationInfoRow['id'];
$collaboration_title = $collaborationInfoRow['title'];
$release_date = $collaborationInfoRow['release_date'];
$page = $collaborationInfoRow['page'];
$location = $collaborationInfoRow['location'];
$logo = $collaborationInfoRow['logo'];
$banner_pic = $collaborationInfoRow['banner_pic'];
$description = str_replace("\r\n", "</p><p>", $collaborationInfoRow['description']);
$type = $collaborationInfoRow['type'];
$mocs_table = $collaborationInfoRow['mocs_table'];

function printMocs() {
    global $conn;
    global $mocs_table;
    $result = mysqli_query($conn, "SELECT * FROM $mocs_table ORDER BY manual_order ASC");
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
        $count = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $count++;
            $build_title = $row['build_title'];
            $description = str_replace("\r\n", "</p><p>", $row['description']);
            $builder_id = $row['builder_id'];
            $video_link = $row['video_link'];
            $pics = array (
                1 => $row['pic_1'],
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
        
            // $numOfPics = 0;
            // foreach ($pics as $pic) {
            //     if ($pic != null) {
            //         $numOfPics++;
            //     }
            // }
            printSlideshow('collaboration', $count, $pics, $build_title);
        }
    }

    // printMemberSocial($builder_id);
}