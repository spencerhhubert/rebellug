<?php include 'includes/navItems.php' ?>

<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous">
    </script>

    <link rel="shortcut icon" href="images/logos/rebellug-logo-small-orange-100x.png" type="image/x-icon" />
    <title>RebelLUG - <?php echo currentPageTitle() ?></title>

    <!-- REMOVE CACHING LIMIT BELOW WHEN DONE-->
    <link rel="stylesheet" href="assets/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
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
    <div class="container content">
        <div class="header box">
            <div class="container">
                <div style="width: 50%;"><a href="index.php"><img src="images/logos/rebellug-logo-big-90gray-half-res.png" style="width: 100%;"></a></div>
            </div>
            <div class="container">
                <div class="container" style="position: relative;">
                    <?php include 'includes/nav.php' ?>          
                    <!-- <div class="container social">
                        <a href="https://instagram.com/rebellug" target="_blank"><div class="container"><i class="fab fa-instagram" aria-hidden="true"></i></div></a>
                        <a href="https://youtube.com/rebellug" target="_blank"><div class="container"><i class="fab fa-youtube" aria-hidden="true"></i></div></a>
                        <a href="https://twitter.com/rebellug" target="_blank"><div class="container"><i class="fab fa-twitter" aria-hidden="true"></i></div></a>
                        <a href="https://www.facebook.com/Rebellegousergroup/" target="_blank"><div class="container"><i class="fab fa-facebook" aria-hidden="true"></i></div></a>
                        <a href="https://discord.gg/drDFrCJ" target="_blank"><div class="container"><i class="fab fa-discord" aria-hidden="true"></i></div></a>
                    </div> -->
                </div>        
            </div>
        </div>
    </div>