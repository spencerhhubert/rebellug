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
            "slug" => "/gallery/index.php",
            "dirname" => "/gallery",
            "title" => "Gallery",
            "name" => "Gallery"
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
            if( ($_SERVER['SCRIPT_NAME'] == $item["slug"]) || (pathinfo($_SERVER['PHP_SELF'])['dirname']) == $item["dirname"]) {
                return $item["title"];
            }
        }
    }
?>