<ul class="navbar-nav mr-auto">
    <?php
        foreach ($navItems as $item) {
            $output = "
                    <a class='nav-link' href=\"$item[slug]\">
                        <p>$item[title]</p>
                    </a>
                </li>
            ";

            if($_SERVER['SCRIPT_NAME'] == $item["slug"]) {
                $output = "<li class='nav-item active'>" . $output . "<span class='sr-only'>(current)</span> </a>";
            } else {
                $output = "<li class='nav-item'>" . $output . "</a>";
            }
            echo $output;
        }
    ?>
</ul>

