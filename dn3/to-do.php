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
    <body class="bg-secondary">
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
        
        <main class="container bg-light">
            <div class="row">
                <h1 class="text-primary col-sm m-2">Opravila</h1>
                <button type="button" class="btn btn-primary col-2 float-right m-2" popovertarget="newTaskPopover">Nova naloga</button>
            </div>
            <div hidden id="hiddenTask" class="row task w-100 border m-2 p-2">
                <div class="col-lg text-justify col-md-10">
                    <p class="content">
                        Phasellus efficitur sit amet nisl elementum varius. Nullam faucibus lorem et neque volutpat convallis. Ut malesuada mollis nisi eget venenatis. Integer molestie massa nunc, non dictum metus volutpat sed. Aliquam ornare metus vitae consectetur ornare. Aliquam libero libero, malesuada et nisl eget, finibus iaculis libero. Aliquam dolor metus, blandit eu lacus in, sagittis lacinia mauris. Cras porta nibh non sem sodales, sed gravida eros pellentesque. Nam imperdiet convallis dui, auctor placerat libero fermentum eget. Pellentesque porta metus erat, sed sollicitudin mi imperdiet id. Pellentesque vestibulum purus eu iaculis egestas. Etiam quis luctus ante. 
                    </p>
                </div>
                <div class="col col-md-2">
                    <button id="taskConfirm" type="button" class="m-1 p-1 btn float-right btn-success">Narejeno</button>
                    <button id="taskDelete" type="button" class="m-1 p-1 btn float-right btn-danger">Odstrani</button>
                </div>
            </div>
            
            <div id="taskList" class="row"></div>

        </main>
        
        <div popover id="newTaskPopover" class="container border p-5">
            <h2 class="container">Novo Opravilo</h2>
            <form action="" class="">
                <div class="form-group w-100">
                    <textarea name="Ime opravila" class="w-100" rows="10" id="newTaskContent"></textarea>
                </div>
                <button type="reset" popovertarget="newTaskPopover" popovertargetaction="hide" class="btn btn-primary" id="newTaskSubmit">Dodaj novo nalogo</button>
            </form>
        </div>
        <footer class="bg-dark text-light p-0 container-fluid">
            <div class="row w-100">
                <div id=results class="float-left col m-2">
                    <div>Zaključene naloge: <span id=zakljuceneNaloge>0</span></div>
                    <div>Odprte naloge: <span id=odprteNaloge>0</span></div>
                </div>
                <ul class="list-group col">
                    <?php include "footer.php";?>
                </ul>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="todo.js"></script>
    </body>
</html>