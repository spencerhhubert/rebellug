<?php
include "../../config.php";
$title = "The Laceropes Mission";
include SITE_ROOT . "/includes/header.php";
?>

<div class="content">
    <div class="container">
        <div class="box collaboration">
            <div class="text-center">
                <h1>The Laceropes Mission</h1>
                <img src="images/laceropeslogo.png" class="logo">
                <p>The Laceropes Mission is an original Star Wars story by RebelLUG like no other LEGO collaboration project before. It is proudly sponsored by <a href="https://avfigures.com" target="_blank">AV Figures</a>, who helped us create Validus Squad, a four member clone squad of completly custom LEGO minifigures. The squad was available for purchase in limited quantites from AV Figures.</p>
                <p>This collaboration was premiered at Brickworld Chicago 2019 and released entirely online on June 22nd, 2019.</p>
                <p>If you're interested in watching the entire series, <a href="https://www.youtube.com/playlist?list=PL_beRzlfAQffpDYHAH6TCRll9EY4cLv70" target="_blank">check out the YouTube playlist</a> of all 10 episodes.</p>
                <p>Thank you to <a href="https://www.youtube.com/watch?v=bbZJlaef8_w" target="_blank">Beyond the Brick for covering the collaboration</a> and interviewing us as well!</p>
            </div>
            <hr>

            <div class="row build">
                <div class="col-md-7">
                    <h2>Base Camp</h2>
                    <?php printByline(4) ?>
                    <p>Command Log Entry 0001</p>
                    <p>“Validus squad landed on Laceropes and met up with the base camp a little over two hours ago. The Republic’s campaign on Laceropes has been underway for over two standard weeks and we’re headed to their base, located in a small town in what seems to be the remains of a temple. The mission summary stated the natives of Laceropes, groups of monks, had different factions defending them in this conflict. It’s believed that a Republic admiral, Admiral Oris Ski, was captured by a group of native allies and he’s potentially being tortured for information. Our mission is to bring him home or find out if he was killed.”</p>
                </div>
                <div class="col-md-5">
                    <iframe src="https://www.youtube.com/embed/iDrkrtmqMho" class="youtube-video"></iframe>
                </div>
                <div class="row">
                    <div class="col">
                        <?php printSlideshow("collaboration", array('anders laceropes white background2.jpg', '_DSC4490.JPG', '_DSC4488.JPG', '_DSC4484.JPG', '_DSC4478.JPG', '_DSC4474.JPG', '_DSC4473.JPG'), 'Alcloneproductions Laceropes Build "Base Camp"');?>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row build">
                <div class="col-md-7">
                    <h2>Monotonous March</h2>
                    <?php printByline(8) ?>
                    <p>Command Log Entry 0002</p>
                    <p>“The data analysts pointed toward a monk temple 16 klicks north. We’ll need to keep extreme cover throughout our probe, so we have quite a long walk ahead of us. The reason for this campaign has become more apparent as we’ve traveled. These lacertosus crystals are everywhere, mostly located in ravines that run like veins across the planet’s surface. Chancellor Palpatine personally made it clear that mining them and the taking control of the planet’s capitol was necessary to the war effort. We were cleared to execute natives under any circumstances.”</p>
                </div>
                <div class="col-md-5">
                    <iframe src="https://www.youtube.com/embed/FfIQJ4UPNW4" class="youtube-video"></iframe>
                </div>
                <div class="row">
                    <div class="col">
                        <?php printSlideshow("collaboration", array('noah laceropes white background.jpg', '_DSC4119.JPG', '_DSC4448.JPG', '_DSC4451.JPG', '_DSC4456.JPG', '_DSC4461.JPG', '_DSC4469.JPG'), 'H2Brick Laceropes Build "Base Camp"');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include SITE_ROOT . "/includes/footer.php" ?>