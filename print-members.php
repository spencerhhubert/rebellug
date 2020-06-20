<?php
function printMemberModule($count, $name, $handle, $title, $description, $bio, $pfp, $youtube, $flickr, $instagram, $twitter, $facebook, $personalSite, $dateJoined, $highCommand, $manualOrder) {

    print_r('
    <div class="row person">
        <div class="col-md-3">
            <div class="row justify-content-center">
                <img src="/images/members/' . $pfp . '" alt="' . $handle . ' Profile Picture">
            </div>
            <div class="row justify-content-center social">'
    );
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
            <a href="' . $personalSite . '" alt="' . $handle . '" target="_BLANK"><i class="fab fa-youtube align-middle" aria-hidden="true"></i></a>
        ');
    }

    print_r('
        </div>
        </div>
        <div class="col-md-9">
            <h3>' . $handle . '</h3>
            <p>' . $title . '</p>
            <p><i>' . $description . '</i></p>
            <div class="collapse banana" id="bio' . $count . '"><p>"' . $bio . '"</p></div>
            <a data-toggle="collapse" href="#bio' . $count . '" role="button" aria-expanded="false" aria-controls="collapseExample" id="bioButton" class="visible-xs bioButton">Bio</a>
            <div class="d-md-block d-sm-none d-none" id="device-size-check"></div>
        </div>
    </div>
    ');
}

if ($resultCheck > 0) {
    $count = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $count++;
        $name = $row['name'];
        $handle = $row['handle'];
        $title = $row['title'];
        $description = $row['description'];
        $bio = $row['bio'];
        $pfp = $row['pfp'];
        $youtube = $row['youtube'];
        $flickr = $row['flickr'];
        $instagram = $row['instagram'];
        $twitter = $row['twitter'];
        $facebook = $row['facebook'];
        $personalSite = $row['personalSite'];
        $dateJoined = $row['dateJoined'];
        $highCommand = $row['highCommand'];
        $manualOrder = $row['manualOrder'];
        printMemberModule($count, $name, $handle, $title, $description, $bio, $pfp, $youtube, $flickr, $instagram, $twitter, $facebook, $personalSite, $dateJoined, $highCommand, $manualOrder);
    }
} else {
    echo "There was an error loading the members";
}