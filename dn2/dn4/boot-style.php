<?php
header("Content-type:text/css")
?>

.bgc {
    background-color: <?php
    if (isset($_COOKIE["barvaOzadja"])) {
        echo $_COOKIE["barvaOzadja"];
    } else {
        echo "#6c757d";
    }; ?>;
}

body {
    min-height: 100vh;
    margin: 0;
    display: flex;
    flex-direction: column;
}

.foot-space {
    flex: 1;
}

ul {
    list-style-type: none;
}

a {
    text-decoration: none;
}