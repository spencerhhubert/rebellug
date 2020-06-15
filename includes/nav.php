<ul class="nav">
    <?php
        foreach ($navItems as $item) {
            $output = "
                <a href=\"$item[slug]\">
                    <button>
                        <p>$item[title]</p>
                    </button>
                </a>
            </li>";
            if($_SERVER['SCRIPT_NAME'] == $item["slug"]) {
                $output = "<li class='active item'>" . $output;
            } else {
                $output = "<li class='item'>" . $output;
            }
            echo $output;
        }
    ?>
</ul>