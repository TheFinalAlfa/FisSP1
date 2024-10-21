<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["barvaOzadja"]) {
        setcookie("barvaOzadja", $_POST["barvaOzadja"]);
    };
    if ($_POST["imePriimek"]) {
        setcookie("imePriimek", $_POST["imePriimek"]);
    };
};
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="boot-style.php">
        <title>Index</title>
    </head>
    <body class="bgc">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <?php
                            include 'header.php';
                        ?>
                    </div>
                </div>
                <div class="text-light float-right">
                    <?php 
                    if ($_SERVER["REQUEST_METHOD"] == "POST" and $_POST["imePriimek"] != "") {
                        echo "Pozdravljeni ".$_POST["imePriimek"];
                    }
                    else if (isset($_COOKIE["imePriimek"])) {
                        echo "Pozdravljeni ".$_COOKIE["imePriimek"];
                    }?>
                </div>
            </nav>
        </header>
        <div class="foot-space">
        <main class="container bg-light">
            <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="POST" class="p-2">
                <div class="form-group">
                    <label for="imePriimek">Ime in priimek</label>
                    <textarea class="form-control w-50" name="imePriimek" id="imePriimek" rows=1></textarea>
                </div>
                <div class="form-group">
                    <label for="barvaOzadja">Izberite barvo ozadja</label>
                    <input type="color" class="form-control w-25" value=<?php 
                    if ($_SERVER["REQUEST_METHOD"] == "POST" and $_POST["barvaOzadja"]) {
                        echo $_POST["barvaOzadja"];
                    } else if (isset($_COOKIE["barvaOzadja"])) {
                        echo $_COOKIE["barvaOzadja"];
                    } else {
                        echo "#6c757d";
                    }; ?> name="barvaOzadja" id="barvaOzadja">
                </div>
                <button type="" class="btn btn-success">Shrani</button>
            </form>
        </main>
        </div>
        <footer>
            <ul class="bg-dark text-light list-group pr-5">
                <?php include "footer.php";?>
            </ul>
        </footer>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>