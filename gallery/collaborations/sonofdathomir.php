<?php
include "../../config.php";
$title = "Maul: Son of Dathomir";
include SITE_ROOT . "/includes/header.php";

$titles = array(
    "Naboo The Duel Of Fates",
    "Monster Of Lotho Minor",
    "A Deadly Trap",
    "Skirmish On Florum",
    "Mandalorian Hosts",
    "Bloody Allies",
    "Maul Versus Vizsla",
    "The Return Of The Master",
    "The Final Duel"
);

$builder_IDs = array(
    63,
    55,
    61,
    45,
    51,
    64,
    50,
    43,
    22
);

$decriptions = array(
    "In the midst of a daring try to capture the Trade Federation leader Newt Gunray, the path of the jedi Qui-Gon-Jin and Obi-Wan Kenobi is blocked by Darth Maul, the Son of Dathomir. They engage in a duel that will change the fate of the Republic, the outcome of the war.",
    "Years after Mauls so called “death” on Naboo, when everyone thought of him as only part of the past, the Jedi feel a tremor in the force, they feel something… sinister. Savage Opress, Mauls brother raised by the witches of Dathomir is on a quest to find Maul. This quest leads him to the planet of junk, Lotho Minor, where he finds his brother. Though he discoveres that he has changed.",
    "After regaining full strength Maul eagerly seeks vengeance against Obi-Wan Kenobi, the jedi who ruined his life. With the help of his brother Savage, Maul, bloodthirsty and full of hate murders the inhabitants on an entire village to lure Kenobi into a trap, so he can have his revenge.",
    "Savage and Maul travel to the planet of Florum to recruit an army of pirates that will help them achieve their goals, but their trail of death is followed by the jedi Obi-Wan Kenobi and Adi Galia who want to stop them from bringing more chaos to the galaxy. The jedi face Maul and Savage determined to stop them.",
    "After a humiliating defeat on Florum, unconscious and floating in a shuttle in space, Maul and Savage are found by the Deathwatch, a group of freedom fighters that want to reestablish Mandalores warrior past. The leader of the Deathwatch, Pre Vizsla, takes the brothers to Mandalores moon Concord Dawn where their wounds are mended.",
    "After recruiting the Deathwatch , Maul seeks help from the Black Sun, a crime organisation in control of the underworld. They approach the planet of the crime lords, ready to double their numbers, ready to make their victory over Mandalore easier.",
    "After conquering Mandalore, Vizsla betrays Maul and takes control of Mandalore himself. Maul, who was ready for this traitorous move, breaks out of prison, enters the throne room and challenges Vizsla to a one on one duel where only the stronger will survive,only the stronger will rule Mandalore.",
    "After killing Pre Vizsla Maul becomes the new leader of Mandalore. Satisfied with the victory he suddenly feels something familiar, something he hasnt felt in a long time. The doors of the throne room open revealing his former master, Sidious himself.",
    "The war has ended. The galaxy has changed. Maul has survived these long years, in exile, still fueled by revenge for Kenobi who he has managed to find once again through a young jedi. Now staring into Kenobis eyes hi ime is ready to fight, one last time."
);
$video_IDs = array(
    "U8M0Bl1LIpA",
    "4DegJDNxOTc",
    "fWeO4WkUud4",
    "xdFQ4XAwvpY",
    "_eSH7mpxqLw",
    "rYEnieLr2_4",
    "qkhSJt_THBA",
    "wyK3trPo0iA",
    "8PTyNPAgPwU"
);

?>

<div class="content">
    <div class="container">
        <div class="box collaboration">
            <div class="text-center">
                <h1 class="header">Maul: Son of Dathomir</h1>
                <img src="images/sonofdathomirlogo.png" class="logo">
                <p>Son of Dathomir follows the life of one of the most famous and beloved Sith lords, Darth Maul. In this eight-episode long series, you will witness the most important events and turning points in his life. This collaboration was released online on October 8th, 2017.</p>
                <p>If you're interested in watching all the videos, <a href="https://www.youtube.com/playlist?list=PL_beRzlfAQfdwOjQq20HNK5zZf08-wwDG" target="_blank">you can check out the playlist on YouTube</a>.</p>
            </div>
            <?php echo printCollaborationBuilds02($titles, $builder_IDs, $decriptions, $video_IDs); ?>
        </div>
    </div>
</div>

<?php include SITE_ROOT . "/includes/footer.php" ?>