<?php
    $navItems = array(
        array(
            "slug" => "/index.php",
            "title" => "Home",
            "name" => "RebelLUG"
        ),
        array(
            "slug" => "/members.php",
            "title" => "Members",
            "name" => "Members"
        ),
        array(
            "slug" => "/gallery.php",
            "title" => "Gallery",
            "name" => "Gallery"
        ),
        array(
            "slug" => "/store.php",
            "title" => "Instructions",
            "name" => "Instructions"
        ),
        array(
            "slug" => "/application.php",
            "title" => "Apply",
            "name" => "Apply"
        ),
        // array(
        //     "slug" => "/blog.php",
        //     "title" => "Blog",
        //     "name" => "Blog"
        // ),
    );

    function currentPageTitle() {
        global $navItems;
        foreach ($navItems as $item) {
            if($_SERVER['SCRIPT_NAME'] == $item["slug"]) {
                return $item["name"];
            }
        }
    }
?>