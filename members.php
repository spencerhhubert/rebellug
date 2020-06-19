<?php include "config.php" ?>
<?php include SITE_ROOT . "/includes/header.php" ?>

<script>



// alert( "Handler for .click() called." );
</script>

<div class="content">
    <div class="container">
        <div class="box">
            <div class="row justify-content-center members">
                <?php
                    // $result = mysqli_query($conn, "SELECT * FROM members");
                    // $row = mysqli_fetch_assoc($result);
                    // print_r($row['pfp']);
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
                        <div class="collapse" id="bio"><p>"Hey, I'm Danny! I am most commonly found working behind the scenes on planning public LUG displays, setting up sponsorships, and running day-to-day LUG operations. As a Freshman at the University of Illinois studying Industrial Engineering, my time available for building has been severely limited. I have taken a recent interest to building movie-related creations."</p></div>
                        <a data-toggle="collapse" href="#bio" role="button" aria-expanded="false" aria-controls="collapseExample" id="bioButton" class="visible-xs">Bio</a>
                        <div class="d-md-block d-sm-none d-none" id="xs-check"></div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>    
<?php include SITE_ROOT . "/includes/footer.php" ?>

<script>
$("#bioButton").click(function(){
    $(this).text(function(i,old){
        return old=='Bio' ?  'Hide Bio' : 'Bio';
    });
});

if( $("#xs-check").is(":visible") ) {
    $("#bio").removeClass("collapse");
    $("#bioButton").hide();
}

</script>