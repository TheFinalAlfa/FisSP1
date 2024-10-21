<?php
include "menu.php";

foreach ($navigation as $link) {
    echo "<li class=\"text-light text-right\"><a class=\"text-light\" href=\"{$link["refference"]}\">{$link["name"]}</a></li>";
}