<?php
include "config.php";
include SITE_ROOT . "/includes/header.php"
?>

<div class="content">

    <div id="group-shot" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#group-shot" data-slide-to="0" class="active"></li>
            <li data-target="#group-shot" data-slide-to="1"></li>
            <li data-target="#group-shot" data-slide-to="2"></li>
            <li data-target="#group-shot" data-slide-to="3"></li>
        </ol>

        <div class="carousel-inner group-shot">
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/groupshots/just_rl_2023_bw_group.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/groupshots/kloss_2022.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/groupshots/bricktastic_2023.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/groupshots/bricking_baveria_2021.jpg" alt="Fourth slide">
            </div>
        </div>

        <a class="carousel-control-prev" href="#group-shot" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#group-shot" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container">

        <div class="box">
            <div class="row justify-content-center center-text">
                <h1 class="header">What is RebelLUG?</h1>
                <p>RebelLUG is a team of talented LEGO MOC builders and passionate community members who seek to both work together and impact the community they exist in for as many FOLs as possible.</p>
                <p>Since our founding in 2015, we have grown to 54 members across 13 countries. Our members are individual creators who share their work on YouTube, Flickr, and Instagram, but as a group we work together on larger collaborative builds both online and at conventions across the world. We also work with sponsors and The LEGO Group to give back and host contests for the online LEGO community we all belong to.</p>
                <div class="imageContainer">
                <img src="/images/map.png" alt="The countries RebelLUG members are from on a global map" style="width: 90%; max-width: 800px;">
                </div>
            </div>
        </div>

        <div class="box">
            <div class="row justify-content-center center-text">
                <h2 class="header">Our Discord Server</h2>
                <p>RebelLUG also has an active, public Discord server for fans of LEGO (FOLs) to meet each other, talk about LEGO, participate in building challenges, and share work in progress builds for feedback from RebelLUG members and other FOLs.</p>
                <iframe src="https://discordapp.com/widget?id=263492519277494272&theme=dark" width="500" height="350" allowtransparency="true" frameborder="0"></iframe>
            </div>
        </div>

        <div class="box">
            <div class="row justify-content-center center-text">
                <h2 class="header">Recent Member Work</h2>
                <p>RebelLUG members are constantly working on new LEGO projects. This is a live feed from our <a href="https://www.flickr.com/groups/rebellug/pool/" target="_blank">Flickr group</a>. Our <a href="https://instagram.com/rebellug" target="_blank">Instagram page </a> is also a good place to stay up to date with their latest MOCs.</p>
                <?php echo printFlickrFeed() ?>
                <a href="https://www.flickr.com/groups/rebellug/pool/" target="_blank"><button style="margin-top: 30px;">View more MOCs</button></a>
            </div>
        </div>
    </div>
</div>

<?php include SITE_ROOT . "/includes/footer.php" ?>
