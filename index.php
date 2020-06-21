<?php include "config.php" ?>
<?php include SITE_ROOT . "/includes/header.php" ?>

<div class="content">

    <div id="group-shot" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#group-shot" data-slide-to="0" class="active"></li>
            <li data-target="#group-shot" data-slide-to="1"></li>
            <li data-target="#group-shot" data-slide-to="2"></li>
            <li data-target="#group-shot" data-slide-to="3"></li>
        </ol>

        <div class="carousel-inner group-shot">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/groupshots/bw2019full.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/groupshots/bw2018full.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/groupshots/bb2017.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/groupshots/bw2017.jpg" alt="Fourth slide">
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
                <p>RebelLUG is a private, online LEGO® User Group made up of independent creators from YouTube, Instagram, and Flickr. We were founded in 2015 as something to call our group of seven friends so we could work on bigger group projects together, under a single name. Since then we’ve grown to <b>54 members across 12 countries.</b> Our LEGO® collaborations happen online or at conventions across the globe. Our goal is to provide an environment for our members to grow and build LEGO® in new, creative ways. We also strive to encourage other members of the online LEGO® community to do the same.</p>
                <img src="images/map.png" alt="The countries RebelLUG members are from on a global map" style="width: 90%; max-width: 800px;">
            </div>
        </div>

        <div class="box">
            <div class="row justify-content-center center-text">
                <h2 class="header">Our Discord Server</h2>
                <p>RebelLUG also has an active, public Discord server for fans of LEGO (FOLs) to meet each other, talk about LEGO, participate in building challenges, and share work in progress builds for feedback from RebelLUG members and other FOLs.</p>
                <iframe src="https://discordapp.com/widget?id=263492519277494272&theme=dark" width="500" height="350" allowtransparency="true" frameborder="0"></iframe>

            </div>
        </div>
    </div>
</div>

<?php include SITE_ROOT . "/includes/footer.php" ?>