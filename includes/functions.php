<?php
function memberSocial($memberID) {
    global $conn;
    $member_info = mysqli_query($conn, "SELECT * FROM members where id=$memberID");
    $member_info_result_check = mysqli_num_rows($member_info);
    $member_info_row = mysqli_fetch_assoc($member_info);
    $name = $member_info_row ['name'];
    $handle = $member_info_row ['handle'];
    $pfp = $member_info_row ['pfp'];
    $youtube = $member_info_row ['youtube'];
    $flickr = $member_info_row ['flickr'];
    $instagram = $member_info_row ['instagram'];
    $twitter = $member_info_row ['twitter'];
    $facebook = $member_info_row ['facebook'];
    $personalSite = $member_info_row ['personalSite'];

    $output = '<div class="social">';

    if ($youtube != "") {
        $output = $output . '
            <a href="' . $youtube . '" alt="' . $handle . '" target="_BLANK"><i class="fab fa-youtube align-middle" aria-hidden="true"></i></a>
        ';
    }
    
    if ($flickr != "") {
        $output = $output . '
            <a href="' . $flickr . '" alt="' . $handle . '" target="_BLANK"><i class="fab fa-flickr align-middle" aria-hidden="true"></i></a>
        ';
    }
    
    if ($instagram != "") {
        $output = $output . '
            <a href="' . $instagram . '" alt="' . $handle . '" target="_BLANK"><i class="fab fa-instagram align-middle" aria-hidden="true"></i></a>
        ';
    }
    
    if ($twitter != "") {
        $output = $output . '
            <a href="' . $twitter . '" alt="' . $handle . '" target="_BLANK"><i class="fab fa-twitter align-middle" aria-hidden="true"></i></a>
        ';
    }
    
    if ($facebook != "") {
        $output = $output . '
            <a href="' . $facebook . '" alt="' . $handle . '" target="_BLANK"><i class="fab fa-facebook align-middle" aria-hidden="true"></i></a>
        ';
    }
    
    if ($personalSite != "") {
        $output = $output . '
            <a href="' . $personalSite . '" alt="' . $handle . '" target="_BLANK"><i class="fas fa-info-circle align-middle" aria-hidden="true"></i></a>
        ';
    }

    $output = $output . '</div>';
    return $output;
}

function printMemberSocial($memberID) {
    global $conn;
    $member_info = mysqli_query($conn, "SELECT * FROM members where id=$memberID");
    $member_info_result_check = mysqli_num_rows($member_info);
    $member_info_row = mysqli_fetch_assoc($member_info);
    $name = $member_info_row ['name'];
    $handle = $member_info_row ['handle'];
    $pfp = $member_info_row ['pfp'];
    $youtube = $member_info_row ['youtube'];
    $flickr = $member_info_row ['flickr'];
    $instagram = $member_info_row ['instagram'];
    $twitter = $member_info_row ['twitter'];
    $facebook = $member_info_row ['facebook'];
    $personalSite = $member_info_row ['personalSite'];

    print_r('
    <div class="row justify-content-center social">
    ');

    if ($youtube != "") {
        print_r('
            <a href="' . $youtube . '" alt="' . $handle . '" target="_BLANK"><i class="fab fa-youtube align-middle" aria-hidden="true"></i></a>
        ');
    }
    
    if ($flickr != "") {
        print_r('
            <a href="' . $flickr . '" alt="' . $handle . '" target="_BLANK"><i class="fab fa-flickr align-middle" aria-hidden="true"></i></a>
        ');
    }
    
    if ($instagram != "") {
        print_r('
            <a href="' . $instagram . '" alt="' . $handle . '" target="_BLANK"><i class="fab fa-instagram align-middle" aria-hidden="true"></i></a>
        ');
    }
    
    if ($twitter != "") {
        print_r('
            <a href="' . $twitter . '" alt="' . $handle . '" target="_BLANK"><i class="fab fa-twitter align-middle" aria-hidden="true"></i></a>
        ');
    }
    
    if ($facebook != "") {
        print_r('
            <a href="' . $facebook . '" alt="' . $handle . '" target="_BLANK"><i class="fab fa-facebook align-middle" aria-hidden="true"></i></a>
        ');
    }
    
    if ($personalSite != "") {
        print_r('
            <a href="' . $personalSite . '" alt="' . $handle . '" target="_BLANK"><i class="fas fa-info-circle align-middle" aria-hidden="true"></i></a>
        ');
    }

    print_r('</div>');
}

function memberName($memberID) {
    global $conn;
    $member_info = mysqli_query($conn, "SELECT * FROM members where id=$memberID");
    $member_info_result_check = mysqli_num_rows($member_info);
    $member_info_row = mysqli_fetch_assoc($member_info);
    $name = $member_info_row ['name'];
    return $name;
}

function memberHandle($memberID) {
    global $conn;
    $member_info = mysqli_query($conn, "SELECT * FROM members where id=$memberID");
    $member_info_result_check = mysqli_num_rows($member_info);
    $member_info_row = mysqli_fetch_assoc($member_info);
    $handle = $member_info_row ['handle'];
    return $handle;
}

function printByline($memberID) {
    $output = "<div style='margin-bottom: 8px;'><div class='row h-100'>";
    $output = $output . "<h5 class='my-auto col-auto'>By " . memberName($memberID) . " - " . memberHandle($memberID) . "</h5>";
    $output = $output . "<div class='my-auto col'>" . memberSocial($memberID) . "</div>";
    $output = $output . "</div></div>";
    echo $output;
}

function printSlideshow($className, $pics, $title) {
    global $count;
    $count = 0;
    $count++;
    $numOfPics = 0;
    foreach ($pics as $pic) {
        if ($pic != null) {
            $numOfPics++;
        }
    }

    print_r('
    <div id="' . $className . '-slideshow' . $count . '" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#' . $className . '-slideshow' . $count . '" data-slide-to="0" class="active"></li>');
            for ($i = 1; $i <= $numOfPics - 1; $i++) {
                print_r('<li data-target="#' . $className . '-slideshow' . $count . '" data-slide-to="' . $i . '"></li>');
            }
    print_r('</ol>');
    print_r('
    <div class="carousel-inner collaboration-slideshow">
        <div class="carousel-item active">
            <img class="d-block w-100" src="images/' . $pics['0'] . '" alt="First slide">
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
    <a class="carousel-control-prev" href="#' . $className . '-slideshow' . $count . '" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#' . $className . '-slideshow' . $count . '" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    ');
}

function printFlickrFeed() {
    $flickrFeed = json_decode(file_get_contents("https://www.flickr.com/services/feeds/groups_pool.gne?id=3026205@N22&format=json&nojsoncallback=1"));
    $output = '<div class="row flickrFeed">';
    for ($i = 0; $i <= 19; $i++) {
        // if ($i % 4 == 0 || $i == 0) {
        //     $output = $output . '<div class="row" style="padding-top: 30px;">';
        // }


        $biggerImageLink = substr_replace($flickrFeed->items[$i]->media->m, "z", -5, 1);

        $output = $output . '<div class="col-md-3 col-xs-4 imageContainer"><a href="' . $flickrFeed->items[$i]->link. '" target="_blank"><img src="' . $biggerImageLink . '"></a></div>';
        // if ((($i + 1) % 4) == 0) {
        //     $output = $output . '</div>';
        // }
    }
    $output = $output . '</div>';

    echo $output;
}