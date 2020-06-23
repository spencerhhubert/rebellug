<?php
    function activePageCheck($item) {
        if (!isset($item["dropdownItems"])) {
            if (
                $_SERVER['SCRIPT_NAME'] == $item["slug"] ||
                (pathinfo($_SERVER['PHP_SELF'])['dirname']) == $item["dirname"]
            ) {
                return true;
            }   
        }
        if (isset($item["dropdownItems"])) {
            $output = false;
            foreach ($item["dropdownItems"] as $dropdownItem) {
                if (
                    $_SERVER['SCRIPT_NAME'] == $dropdownItem["slug"] ||
                    (pathinfo($_SERVER['PHP_SELF'])['dirname']) == $dropdownItem["dirname"]
                ) {
                    $output = true;
                }
            }
            return $output;
        }
    }
?>

<ul class="navbar-nav mr-auto">
    <?php
        foreach ($navItems as $item) {

            if (!isset($item["dropdownItems"])) {
                $output = "
                        <a class='nav-link' href=\"$item[slug]\">
                            $item[name]
                        </a>
                    </li>
                ";

                if (activePageCheck($item)) {
                    $output = "<li class='nav-item active'>" . $output . "<span class='sr-only'>(current)</span> </a>";
                } else {
                    $output = "<li class='nav-item'>" . $output . "</a>";
                }
                echo $output;   
            }
            
            if (isset($item["dropdownItems"])) {
                $output = '<li class="nav-item dropdown';
                if (activePageCheck($item)) {$output = $output . ' active';}
                $output = $output . '">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ' . $item["name"] . '
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                ';
                foreach ($item["dropdownItems"] as $dropdownItem) {
                    $output = $output . '<a class="dropdown-item" href="' . $dropdownItem["slug"] . '">' . $dropdownItem["name"] . '</a>';
                }
                $output = $output . "</div></li>";
                echo $output;
            }
        }
    ?>
</ul>