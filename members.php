<?php 
include "config.php";
include SITE_ROOT . "/includes/header.php";

function printMemberModule($count, $name, $handle, $title, $description, $bio, $pfp, $youtube, $flickr, $instagram, $twitter, $facebook, $personalSite, $dateJoined, $manualOrder, $isMember, $isHighCommand, $member_ID) {

    print_r('
    <div class="row person">
    ');

    if ($isHighCommand == 1) {
        print_r('<div class="col-md-3">');
    } else {
        print_r('<div class="col-md-2">');
    }

    print_r('    
            <div class="row justify-content-center">
                <div class="imageContainer">
                    <img src="/images/members/' . $pfp . '" alt="' . $handle . ' Profile Picture">
                </div>
            </div>'
    );

    printMemberSocial($member_ID);

    print_r('
        </div>
        ');
        if ($isHighCommand == 1) {
            print_r('<div class="col-md-9">');
        } else {
            print_r('<div class="col-md-10">');
        }
        print_r('
            <h3>' . $handle . '</h3>
            <p>' . $title . '</p>
            <p><i>' . $description . '</i></p>
            <div class="collapse bio" id="bio' . $count . '"><p>"' . $bio . '"</p></div>
            <a data-toggle="collapse" href="#bio' . $count . '" role="button" aria-expanded="false" aria-controls="collapseExample" id="bioButton" class="visible-xs bioButton">Bio</a>
            <div class="d-md-block d-sm-none d-none" id="device-size-check"></div>
        </div>
    </div>
    ');
}

?>



<div class="content">
    <div class="container">
        <div class="box">
            <div class="row justify-content-center members highCommand">
                <?php
                    $result = mysqli_query($conn, "SELECT * FROM members WHERE isMember=1 AND isHighCommand=1 ORDER BY manualOrder");
                    $resultCheck = mysqli_num_rows($result);
                    
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
                            $manualOrder = $row['manualOrder'];
                            $isMember = $row['isMember'];
                            $isHighCommand = $row['isHighCommand'];
                            $member_ID = $row['id'];
                            printMemberModule($count, $name, $handle, $title, $description, $bio, $pfp, $youtube, $flickr, $instagram, $twitter, $facebook, $personalSite, $dateJoined, $manualOrder, $isMember, $isHighCommand, $member_ID);
                        }
                    } else {
                        echo "There was an error loading the members";
                    }
                ?>
            </div>            
        </div>

        <div class="box">
            <div class="row justify-content-center members">
                <?php
                    $result = mysqli_query($conn, "SELECT * FROM members WHERE isMember=1 AND isHighCommand=0 ORDER BY handle");
                    $resultCheck = mysqli_num_rows($result);
                    
                    if ($resultCheck > 0) {
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
                            $manualOrder = $row['manualOrder'];
                            $isMember = $row['isMember'];
                            $isHighCommand = $row['isHighCommand'];
                            printMemberModule($count, $name, $handle, $title, $description, $bio, $pfp, $youtube, $flickr, $instagram, $twitter, $facebook, $personalSite, $dateJoined, $manualOrder, $isMember, $isHighCommand, $member_ID);
                        }
                    } else {
                        echo "There was an error loading the members";
                    }
                ?>
            </div>            
        </div>
    </div>
</div>    
<?php include SITE_ROOT . "/includes/footer.php" ?>

<script>
$(".bioButton").click(function(){
    $(this).text(function(i,old){
        return old=='Bio' ?  'Hide Bio' : 'Bio';
    });
});

if( $("#device-size-check").is(":visible") ) {
    $(".bio").removeClass("collapse");
    $(".bioButton").hide();
}

</script>