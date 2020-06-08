<?php
    $navItems = array(
        array(
            "slug" => "/index.php",
            "title" => "Home"
        ),
        array(
            "slug" => "/members.php",
            "title" => "Members"
        ),
        array(
            "slug" => "/gallery.php",
            "title" => "Gallery"
        ),
        array(
            "slug" => "/store.php",
            "title" => "Instructions"
        ),
        array(
            "slug" => "/application.php",
            "title" => "Apply"
        ),
        array(
            "slug" => "/blog.php",
            "title" => "Blog"
        ),
    );

    function currentPageTitle() {
        global $navItems;
        foreach ($navItems as $item) {
            if($_SERVER['SCRIPT_NAME'] == $item["slug"]) {
                return $item["title"];
            }
        }
    }
?>