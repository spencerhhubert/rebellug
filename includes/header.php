<?php include SITE_ROOT . '/includes/navItems.php' ?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="/images/logos/rebellug-logo-small-orange-100x.png" type="image/x-icon" />
    <title><?php if(!isset($title)) { echo currentPageTitle(); } else { echo $title;} ?></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- REMOVE CACHING LIMIT BELOW WHEN DONE-->
    <link rel="stylesheet" href="/assets/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/21a7b3848c.js" crossorigin="anonymous"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129087319-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-129087319-1');
    </script>
</head>

<body>
<nav class="navbar sticky-top navbar-expand-md navbar-light bg-light box">
    <div class="container">
    <a class="navbar-brand" href="/index.php">
        <img src="/images/logos/rebellug-logo-big-90gray-half-res.png" alt="RebelLUG Logo" class="logo">
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php include SITE_ROOT . '/includes/nav.php' ?>
    </div>
    <ul class="navbar-nav ml-auto social">
        <a href="https://instagram.com/rebellug" target="_blank"><li class="nav-item"><div class="col"><i class="fab fa-instagram align-middle" aria-hidden="true"></i></div></li></a>
        <a href="https://youtube.com/rebellug" target="_blank"><li class="nav-item"><div class="col"><i class="fab fa-youtube align-middle" aria-hidden="true"></i></div></li></a>
        <a href="https://twitter.com/rebellug" target="_blank"><li class="nav-item"><div class="col"><i class="fab fa-twitter align-middle" aria-hidden="true"></i></div></li></a>
        <a href="https://www.facebook.com/Rebellegousergroup/" target="_blank"><li class="nav-item"><div class="col"><i class="fab fa-facebook align-middle" aria-hidden="true"></i></div></li></a>
        <a href="https://discord.gg/drDFrCJ" target="_blank"><div class="col"><li class="nav-item"><i class="fab fa-discord align-middle" aria-hidden="true"></i></div></li></a>
    </ul>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    </div>
</nav>