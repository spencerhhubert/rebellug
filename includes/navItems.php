<?php
    $navItems = array(
        array(
            "slug" => "",
            "dirname" => "",
            "title" => "RebelLUG",
            "name" => "Home"
        ),
        array(
            "slug" => "/members",
            "dirname" => "",
            "title" => "Members",
            "name" => "Members"
        ),
        array(
            "title"=> "Gallery",
            "name" => "Gallery",
            "dropdownItems" => array(
                array(
                    "slug" => "/gallery/collaborations",
                    "dirname" => "/gallery/collaborations",
                    "title" => "Collaborations",
                    "name" => "Collaborations"
                ),
                array(
                    "slug" => "/gallery/contests",
                    "dirname" => "/gallery/contests",
                    "title" => "Contests",
                    "name" => "Contests"
                )
            )
        ),
        array(
            "slug" => "/instructions",
            "dirname" => "/instructions",
            "title" => "Instructions",
            "name" => "Instructions"
        ),
        array(
            "slug" => "/application",
            "dirname" => "",
            "title" => "Application",
            "name" => "Apply"
        ),
        // array(
        //     "slug" => "/blog",
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