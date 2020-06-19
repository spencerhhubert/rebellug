<?php include "config.php" ?>
<?php include SITE_ROOT . "/includes/header.php" ?>

<div class="content">
    <div class="container">
        <div class="box">
            <div class="row justify-content-center members">
                <?php
                    $result = mysqli_query($conn, "SELECT * FROM members");
                    $resultCheck = mysqli_num_rows($result);
                    include 'print-members.php';
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
                ?>

                <div class="row person">
                    <div class="col-md-3">
                        <div class="row justify-content-center">
                            <img src="/images/members/the-buff.jpg" alt="Lego Buff Profile Picture">
                        </div>
                        <div class="row justify-content-center social">
                            <i class="fab fa-discord align-middle" aria-hidden="true"></i>
                            <i class="fab fa-discord align-middle" aria-hidden="true"></i>
                            <i class="fab fa-discord align-middle" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <h3>Lego Buff Productions</h3>
                        <p>LUG Ambassador</p>
                        <p><i>Danny is in charge of communication between the LUG and the LEGO® group as well as running the RebelLUG YouTube channel. Danny is a co-founder.</i></p>
                        <div class="collapse banana" id="bio1"><p>"Hey, I'm Danny! I am most commonly found working behind the scenes on planning public LUG displays, setting up sponsorships, and running day-to-day LUG operations. As a Freshman at the University of Illinois studying Industrial Engineering, my time available for building has been severely limited. I have taken a recent interest to building movie-related creations."</p></div>
                        <a data-toggle="collapse" href="#bio1" role="button" aria-expanded="false" aria-controls="collapseExample" id="bioButton" class="visible-xs bioButton">Bio</a>
                        <div class="d-md-block d-sm-none d-none" id="device-size-check"></div>
                    </div>
                </div>
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
    $(".banana").removeClass("collapse");
    $(".bioButton").hide();
}

</script>