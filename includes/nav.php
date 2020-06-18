<ul class="navbar-nav mr-auto">
    <?php
        foreach ($navItems as $item) {
            $output = "
                    <a class='nav-link' href=\"$item[slug]\">
                        <p>$item[name]</p>
                    </a>
                </li>
            ";

            if($_SERVER['SCRIPT_NAME'] == $item["slug"] || (pathinfo($_SERVER['PHP_SELF'])['dirname']) == $item["dirname"]) {
                $output = "<li class='nav-item active'>" . $output . "<span class='sr-only'>(current)</span> </a>";
            } else {
                $output = "<li class='nav-item'>" . $output . "</a>";
            }
            echo $output;
        }
    ?>
</ul>

