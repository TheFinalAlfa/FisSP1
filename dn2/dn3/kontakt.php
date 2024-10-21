<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="boot-style.css">
        <title>Index</title>
    </head>
    <body>
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
            </nav>
        </header>
        <div class="foot-space">
        <main class="container">
            <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="POST">
                <div class="form-group">
                    <label for="emailInput">E-mail naslov</label>
                    <input type="text" class="form-control" id="emailInput" name="eMail" placeholder="Vnesite e-mail račun">
                </div>
                <div class="form-group">
                    <label for="imePriimekInput">Ime in Priimek</label>
                    <input class="form-control" id="imePriimekInput" name="nameSurname" placeholder="Vnesite ime in priimek">
                </div>
                <div class="form-group">
                    <label for="telefonInput">Telefonska Številka</label>
                    <input class="form-control" id="telefonInput" name="phoneNumber" placeholder="Vnesite telefonsko številko">
                </div>
                <div class="form-group">
                    <label for="sporociloInput">Sporočilo</label>
                    <textarea class="form-control" id="sporociloInput" name="message" placeholder="Vnesite sporočilo" rows="5"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Potrditev</button>
            </form>
            <?php 
            function addAlert($msg){
                echo  <<<END
                <div class="alert alert-danger mt-2" role="alert">
                {$msg}
                </div>
                END;
            };
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["eMail"] == "") {
                    addAlert("Polje za e-mail račune je prazno.");
                } else if (preg_match("/.+@.+\..+", $_POST["eMail"]) != 1) {
                        addAlert("E-mail je napačne oblike");
                };
                if ($_POST["nameSurname"] == "") {
                    addAlert("Polje za ime in priimek je prazno.");
                } else if (preg_match("^\w+(\s\w+)+", $_POST["nameSurname"]) != 1) {
                    addAlert("Ime in priimek nista pravilne oblike");
                };
                if ($_POST["phoneNumber"] == "") {
                    echo addAlert("Polje za telefonsko številko je prazno.");
                } else if (preg_match("^\+?\d+((-|\s)?\d+)*", $_POST["phoneNumber"]) != 1) {
                    addAlert("Telefonska številka je napačne oblike");
                };
                if ($_POST["message"] == "") {
                    echo addAlert("Polje za sporočilo je prazno.");
                } else if ($_POST) {
                    # code...
                };
            };
            ?>
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