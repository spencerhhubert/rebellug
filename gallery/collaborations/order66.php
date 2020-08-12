<?php
include "../../config.php";
$title = "Order 66";
include SITE_ROOT . "/includes/header.php";

$titles = array(
    "Palpatine's Arrest",
    "Utapau",
    "Mygeeto Ki Adi Mundi's Death",
    "Felucia",
    "Plo Koon's Death",
    "Saleucami",
    "Kaller",
    "Kashyyyk",
    "Jedi Council Room",
    "Separatist Slaughter",
    "Palpatine VS Yoda",
    "Duel on Mustafar"
);

$builder_IDs = array(
    4,
    4,
    4,
    4,
    4,
    4,
    4,
    4,
    4,
    4,
    4,
    4
);

$video_IDs = array(
    "gUkF-qHchKA",
    "aadxx0yVmbs",
    "YKaT8B7rr14",
    "leElg0EX2q8",
    "sUzcu5wrCXI",
    "aQkSXVAhcxI",
    "EStaRhRszec",
    "BbcbQ9ZSq0M",
    "TV8Kbh5Cub0",
    "6HmwWuKT7BI",
    "_7LhR6ktGLE",
    "A0pLYNjtUKg"
);

?>

<div class="content">
    <div class="container">
        <div class="box collaboration">
            <div class="text-center">
                <h1 class="header">Order 66</h1>
                <p>At the height of the Galactic Republic, the clones turned on the jedi. Order 66 identified all jedi as traitors to the Repbulic subject to immediate execution. The RebelLUG Order 66 collaboration depicts the iconic events that ensued. This collaboration was released online on April 2nd, 2017.</p>
                <p>If you're interested in watching all the videos, <a href="https://www.youtube.com/playlist?list=PL_beRzlfAQfcNvPiTpBCLFmncHmhktF4d" target="_blank">you can check out the playlist on YouTube</a>.</p>
            </div>
            <?php echo printCollaborationBuilds03($titles, $builder_IDs, $video_IDs); ?>
        </div>
    </div>
</div>

<?php include SITE_ROOT . "/includes/footer.php" ?>