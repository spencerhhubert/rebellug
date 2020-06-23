<?php
    $navItems = array(
        array(
            "slug" => "/index.php",
            "dirname" => "",
            "title" => "RebelLUG",
            "name" => "Home"
        ),
        array(
            "slug" => "/members.php",
            "dirname" => "",
            "title" => "Members",
            "name" => "Members"
        ),
        array(
            "title"=> "Gallery",
            "name" => "Gallery",
            "dropdownItems" => array(
                array(
                    "slug" => "/gallery/collaborations/index.php",
                    "dirname" => "/gallery/collaborations",
                    "title" => "Collaborations",
                    "name" => "Collaborations"
                ),
                array(
                    "slug" => "/gallery/contests/index.php",
                    "dirname" => "/gallery/contests",
                    "title" => "Contests",
                    "name" => "Contests"
                )
            )
        ),
        array(
            "slug" => "/instructions/index.php",
            "dirname" => "/instructions",
            "title" => "Instructions",
            "name" => "Instructions"
        ),
        array(
            "slug" => "/application.php",
            "dirname" => "",
            "title" => "Application",
            "name" => "Apply"
        ),
        // array(
        //     "slug" => "/blog.php",
        //     "dirname" => "",
        //     "title" => "Blog",
        //     "name" => "Blog"
        // ),
    );

    function currentPageTitle() {
        global $navItems;
        foreach ($navItems as $item) {
            if (!isset($item["dropdownItems"])) {
                if( ($_SERVER['SCRIPT_NAME'] == $item["slug"]) || (pathinfo($_SERVER['PHP_SELF'])['dirname']) == $item["dirname"]) {
                    return $item["title"];
                }
            }
            if (isset($item["dropdownItems"])) {
                foreach ($item["dropdownItems"] as $dropdownItem) {
                    if( ($_SERVER['SCRIPT_NAME'] == $dropdownItem["slug"]) || (pathinfo($_SERVER['PHP_SELF'])['dirname']) == $dropdownItem["dirname"]) {
                        return $dropdownItem["title"];
                    }
                }
            }
        }
    }
?>