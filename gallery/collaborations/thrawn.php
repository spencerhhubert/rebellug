<?php
include "../../config.php";
$title = "Thrawn: Grand Admiral Rising";
include SITE_ROOT . "/includes/header.php";

$titles = array(
    'First Contact',
    'Capture on Strikefast',
    'Unknown',
    'Royal Imperial Academy Admission',
    'Metallurgy Lab Trick',
    'Assassination Attempt',
    'Buzz Droid Escape',
    'Diner Meeting',
    'Cyphar Spice Trap',
    'ISD Chimaera',
    'Wookie Slave Ship',
    'Spying On Batonn',
    'Freighter Meeting with Nightswan',
    'Thrawn Meets Nightswan'
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
    4,
    4,
    4
);

$decriptions = array(
    'Far into wild space the Imperial Venator-Class Star Destroyer "Strikefast" is exploring an uncharted world. Here, cadet Eli Vanto is part of an Imperial unit tasked with scouting the planet. Whilst exploring, the party comes under attack from an unknown assailant. The unit tries to desperately find the source of the attack, not knowing that the assailant is watching them.',
    'After returning to the Strikefast, the unit commander realizes that the unknown attacker has his onboard their transport. To try to lure the attacker out, the commander orders the lights of the hangar dimmed. And as expected, the assailant emerges.',
    "After the alien, now known to the Imperials as Thrawn, has been captured and assigned Eli Vanto as translator, the Strikefast is ordered to return to Coruscant. Having taken a personal interest in the mysterious Chiss himself, the Emperor has ordered Thrawn to be brought before him at the Imperial Palace on the planet. Here, they will discuss Thrawn's future and place in the Empire.",
    'After their meeting at the Imperial Palace, the Emperor orders both Thrawn and Eli to be sent to the Royal Imperial Academy, located right there on Coruscant. There they are greeted by a dismissive Commandant Deenlark, the president of the Academy. They are given only three months to come up to speed in their studies before commissioning.',
    "At the Royal Imperial Academy, Thrawn has to endure constant harassment from other cadets. His only friend is Eli Vanto. Strangely two other cadets at the academy invite them to play cards at the metallurgy lab. Thrawn and Eli decide to accept the invitation, both knowing well it's most likely a trap. But Thrawn has a special trick up his sleeve and is determined to learn about his opponents.",
    "Thrawn and Eli Vanto begin to head back to the barracks following the trick at the metallurgy lab. While walking Thrawn teaches Eli some combat moves, however the two cadets are ambushed by three hooded assailants. Thrawn manages to wound the leg of one of the assailants before other cadets discover the commotion.",
    'Having graduated the academy, lieutenant Thrawn and his aide, ensign Eli Vanto, are serving on the Gozanti-Class cruiser "Blood Crow". While investigating a derelict freighter onboard; Thrawn, Eli, and additional crew from the Blood Crow find themselves deceived by the distress call and now in the capture of pirates. But once again, Thrawn has a special plan to beat his opponent.',
    "Thrawn is continuously building his record of victories. But even with his impressive standards, there's a lot of resistance towards non-humans serving in the Navy. Because of this he is often held back in ranks. While on Coruscant, Thrawn is secretly called to a meeting with Arihnda Pryce. She offers him political assistance to solve the problem, in return he aids her on her journey up the political ladder.",
    "Commander Thrawn and Ensign Eli have been sent to the planet Cyphar to resolve a conflict between a native tribe and human colonists. The colonists claim the natives have been raiding their border settlements while the natives claim they are retaliating against trespassing and raids on their own land. Suspecting that the humans are using it as an excuse to extract and smuggle precious metals off world, Thrawn and Eli decide to set up a trap at a native farm to catch the colonists.",
    "Due to Thrawn's repeated success against smugglers and criminals, along with some new political allies, he is promoted to the rank of Commodore. Ensign Eli Vanto is also finally promoted to Lieutenant Commander. At the same time Thrawn learns that he is now the captain of the Imperial Star Destroyer " . '"Chimaera." He now embarks on his new task and ship.',
    'As captain of the Chimaera, Commodore Thrawn responds to a distress call by the Imperial troop transport "Sempre". But at arrival Thrawn and Eli find the attackers long gone. While investigating onboard the Sempre, they find dead troopers scattered across the ship. Lieutenant Commander Vanto finds evidence that the Sempre was transporting slaves for some unknown Imperial project. Though the extra large bunk beds and blood marks suggests that these' . "weren't ordinary slaves, but ones of extraordinary strength and height.",
    'Thrawn is promoted to the rank of Admiral and is tasked with ending a hostage situation on "Scrim Island", on the planet Batonn. His request for studying the situation further is turned down by fleet Admiral Donassius. Finding it hard to follow the order he has been given, he and Vanto embark on an undercover mission on Batonn to learn more about their opponents and their intentions.',
    "While investigating Batonn, Thrawn and Eli follow a lead to a nomad starship, believed to be the holdout of the  insurgents. They dock with the starship and Eli heads onboard to conduct a meeting with their mysterious leader, Nightswan. At the same time, Thrawn hides and plans their escape.",
    "While the situation on Batonn is going on, Thrawn meets with Nightswan on the surface of the planet. Nightswan reveals his hand in various conflicts Thrawn’s been facing, and Thrawn reveals his true intentions for joining the Empire - to create an alliance between the Imperials and the Chiss Ascendancy, so as to be able to defeat the far greater threats lurking in the unknown regions."
);
$video_IDs = array(
    "EGywpHb2OVg",
    "aQrU-Fzz2A8",
    "unknown",
    "iyzyUX5WNuM",
    "S0evJxuLt88",
    "EwQI82jRgq0",
    "fBbHbHHpGDs",
    "MxyL_LnC0jg",
    "vgQr2pciPEs",
    "dDdWQi3QYqo",
    "oF2Ptnz12OA",
    "XcWuKwxlrPw",
    "c_kuSksG4kI",
    "iyJBGctzCKg"
);

?>

<div class="content">
    <div class="container">
        <div class="box collaboration">
            <div class="text-center">
                <h1 class="header">Thrawn: Grand Admiral Rising</h1>
                <img src="images/thrawn-logo-black.png" class="logo">
                <p>Thrawn: Grand Admiral Rising dives into the story of the Chiss Mitth'raw'nuruodo, otherwise known as Thrawn, as he fights his way up through the ranks of the empire. The collaboration follows the plot and story of the novel "Thrawn" (2017), written by Timothy Zahn. </p>
                <p>If you're interested in watching all the videos, <a href="https://www.youtube.com/playlist?list=PL_beRzlfAQffPgoxlYLSX5jZrCCBf7ieZ" target="_blank">you can check out the playlist on YouTube</a>.</p>
            </div>
            <?php echo printCollaborationBuilds02($titles, $builder_IDs, $decriptions, $video_IDs); ?>
        </div>
    </div>
</div>

<?php include SITE_ROOT . "/includes/footer.php" ?>