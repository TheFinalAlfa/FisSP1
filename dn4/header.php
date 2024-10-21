<?php

include "menu.php";

foreach ($navigation as $link) {
    echo "<a href=\"{$link["refference"]}\" class=\"btn text-light nav-item nav-link\">{$link["name"]}</a>";
}

?>