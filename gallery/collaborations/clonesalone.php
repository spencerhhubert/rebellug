<?php
include "../../config.php";
$title = "Clones Alone";
include SITE_ROOT . "/includes/header.php";

$titles = array(
    'Separatist Prison on Sullust',
    'Escaping Separatist Outpost on Sullust',
    'Abandoned Supply Base on Sullust',
    'Entering The City On Sullust',
    'Escape From Sullust',
    'Crash Landing on Agomar',
    'Pirate Outpost on Agomar',
    'Ambush on Agomar',
    'Separatist Command Post',
    'Ambush on Tibrin',
    'Clone Base on Tibrin'
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
    4
);

$decriptions = array(
    'Five clones have been in prison on Sullust for weeks. It’s unlikely that the Republic even knows that their being held and tortured. With nothing to lose, the group attempt an escape to bust out into the barren wasteland of Sullust.',
    'Upon escaping prison, our heros tracked down the nearest Separatist outpost. Once they reached it, the clones went on an extreme offensive and raided the outpost. Once all the droids were destroyed, they obtained the coordinates for the vital location to their escape off Sullust.',
    "After obtaining the coordinates from the separatist outpost, our heros made their way to an abandoned clone supply base, left behind crumbling after the battle of Sullust. With the intention of making it back to the Republic, the clones came here to get supplies and a mode of transportation. after a successful reclamation of two speeders and some vital supplies, they headed off to their next location.",
    "After escaping from a Separatist POW Prison on Sullust and raiding several outposts, the five brave clones boldly enter the heavily fortified city in search of a working ship. Finding that the only one they see is guarded far too heavily, their journey continues on...",
    "As our heroes approach the outskirts of the city, they find a landing pad. The bounty hunter, Boba Fett, has stopped for repair, thus providing an escape vehicle for the clones. After stealing the Slave 1, a blast from a nearby turret damages the ship. It is only a matter of time before the clones must land again.",
    "After damage was done trying to escape Sullust in their stolen slave 1, our heros were forced to make a crash landing on the wasteland of Agomar, all of them surviving.",
    "After wandering for a long time, our forsaken heros came across a band of pirates on Agomar. Without a plan, they decided to confront them and request any assistance they could provide. The pirates complied and said that if they were able to steal back some supplies from another clan, they would give them with a ship. So they were off, with the coordinates to find those supplies.",
    "Our heroes took off on a borrowed skiff to the coordinates of the rival pirate clan. The Separatists, secretly an ally of the pirates, prepared to ambush the clones upon their arrival. After the surprise attack, the clones reacted quickly and defeated the droid forces, leaving the planet on a Separatist Shuttle.",
    "Using the shuttle the Separatists ambushed them in back on Agomar, the forsaken clones were able to make it back to Republic territory, more specifically, Tibrin. But upon arrival they saw the planet was already under attack and was about to be conquered by droids. So instead of standing by and watching, our heroes devised a plan to secretly infiltrate the Separatists and help turn the tables when neither side even knows they're there.",
    "After pillaging the separatist base and successfully stealing an AAT, our five heroes traverse the vast oceans of Tibrin. They stubble upon the immense Separatist garrison heading for the final Republic occupied base. Unknown to both sides, the five forsaken clones annihilate the Droid force and press on towards their brothers...",
    "Although they were unable to notify the Republic garrison stationed on Tibrin before the Separatists arrived with an all-out assault, they were able to cut down some of the droid army’s infantry and vehicles before joining the battle with their brothers."
);
$video_IDs = array(
    "UYhbuXHDEk0",
    "b_lePbUyYD8",
    "l0p5x9HBH1o",
    "J1N5NjM-yZk",
    "Hh3VS7Wyqz4",
    "PxDr5r8lUOw",
    "cllrRtM5ymw",
    "YDa-xk2-vGQ",
    "_9scRBejl0w",
    "tGpypTXgZl0",
    "kY-f7h4SRSw"
);

?>

<div class="content">
    <div class="container">
        <div class="box collaboration">
            <div class="text-center">
                <h1 class="header">Clones Alone</h1>
                <img src="images/clonesalonelogogray.png" class="logo">
                <p>Clones Alone was the first RebelLUG collaboration. The idea for such a project originated sometime around late summer or early fall of 2015, and it essentially made way for the inception of RebelLUG itself. The original members of RebelLUG were the original participants of the collaboration. Those members were LegoSpencer, Lego Buff Productions, Kris Productions, Daniel Barwegen (then 501stLegoTrooper), alcloneproductions, LegoLord82, and Brickmaster Productions. To complete the story that was created, Spencer, Danny, Daniel, and Kris had to do two parts each to finish the 11 part story. It was an original story written by Spencer and Kris and it was initially released in December of 2015, with each episode coming out every week following that. It told the story of a group forsaken clones who had to make their way back to Republic territory.</p>
                <p>If you're interested in watching all the videos, <a href="https://www.youtube.com/playlist?list=PL_beRzlfAQffVAZ3hpY-N4eRCdoy2Dkmn" target="_blank">you can check out the playlist on YouTube</a>.</p>
            </div>
            <?php echo printCollaborationBuilds02($titles, $builder_IDs, $decriptions, $video_IDs); ?>
        </div>
    </div>
</div>

<?php include SITE_ROOT . "/includes/footer.php" ?>