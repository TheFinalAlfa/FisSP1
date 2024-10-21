<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="boot-style.php">
    <title>O meni</title>
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
            <div class="text-light float-right"><?php if(isset($_COOKIE["imePriimek"])) echo "Pozdravljeni ".$_COOKIE["imePriimek"];?></div>
        </nav>
    </header>
    <div class="foot-space">
    <main class="container border rounded shadow bg-light">
        <h1 class="text-primary text-center bg-light">O meni</h1>
        <article>
            <img src="sunset.jpeg" alt="Sunset amids the mountains" class="img-fluid float-right">
            <h3 class="text-primary">Urh Robič</h4>
            <h5 class="text-secondary">35210145</h5>
        </article>

        <article>
            <h3 class="text-primary">Kratek Opis</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec metus lorem. 
                Nunc ut nulla ut orci porttitor commodo. Fusce in justo at orci laoreet iaculis. 
                Phasellus sed quam id mauris efficitur feugiat sit amet eu elit. Nullam placerat 
                lacus sed eros tincidunt, at sollicitudin mauris viverra. Interdum et malesuada fames 
                ac ante ipsum primis in faucibus. Ut vitae odio nec augue ullamcorper viverra ac 
                quis lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada 
                fames ac turpis egestas. Aliquam vel lorem id diam mollis posuere sit amet et augue. 
                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
            </p>
            <p >
                Praesent ut eros magna. Suspendisse metus ligula, finibus ut nulla nec, condimentum 
                ultricies metus. Aenean tristique blandit augue, nec elementum ipsum auctor nec. 
                Maecenas magna eros, tincidunt nec porttitor at, elementum vel tellus. Curabitur ac 
                augue sed ligula sollicitudin imperdiet. Aenean tempus auctor porta. Nulla interdum 
                tristique purus at volutpat. Nunc ante odio, blandit ac mauris vitae, sagittis sollicitudin urna.
            </p>
            <p >
                Donec fringilla velit vitae porttitor vehicula. Mauris vel nulla nunc. Suspendisse 
                aliquet dapibus purus, nec convallis elit malesuada ut. Sed molestie sapien turpis, 
                ac faucibus arcu convallis nec. In blandit placerat nibh, lacinia accumsan est. 
                Aliquam pulvinar gravida erat, eget sagittis sem placerat quis. Proin venenatis aliquam 
                cursus. Vestibulum porttitor nisi nec nisi placerat, a lacinia neque aliquet. Proin 
                sodales pharetra sodales. Aenean quis viverra massa. Morbi non augue tristique, suscipit 
                lorem vel, mollis lacus. Aliquam gravida ac est luctus facilisis. Pellentesque ornare 
                lorem ex. Suspendisse congue luctus enim non cursus.
            </p> 
            <p >
                Morbi porta auctor sodales. Morbi fringilla maximus tincidunt. Aenean nisl nisi, 
                volutpat fermentum tempus non, interdum sit amet lectus. Donec viverra congue nisl 
                non sollicitudin. Suspendisse potenti. Aliquam faucibus, tortor eget sagittis blandit, 
                sapien augue dignissim metus, vel lacinia velit velit a metus. Vivamus sit amet viverra 
                ipsum. Integer vestibulum eleifend porttitor. Pellentesque sit amet aliquet nisi, a suscipit est.
            </p>
            <p >
                Maecenas in turpis congue, lacinia eros a, viverra urna. In venenatis blandit 
                nisi, a pellentesque arcu euismod at. Pellentesque felis ex, finibus vitae eros 
                eu, tristique ultrices ipsum. Aenean sit amet hendrerit mauris. In hac habitasse 
                platea dictumst. Integer quis sagittis nisl, ac placerat est. Integer sodales 
                tempor magna, quis iaculis leo imperdiet nec. Aliquam nibh lectus, congue a sapien 
                vel, ullamcorper volutpat tellus. Ut in est nec nibh porttitor varius. Maecenas non 
                tempor lorem, eget eleifend ex. Vivamus at efficitur ipsum. Sed sollicitudin ac nulla ultrices suscipit. 
            </p> 
        </article>
        <article>
            <h3 class="text-primary">Nekatere povezave vredne ogleda</h2>
            <ul>
                <li>
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">Povezava 1 (Najpomembnejša)</a>
                </li>

                <li>
                    <a href="https://www.youtube.com/watch?v=TSoXBkF832I" target="_blank">Povezava 2</a>
                </li>

                <li>
                    <a href="https://www.youtube.com/watch?v=IdkCEioCp24" target="_blank">Povezava 3</a>
                </li>

                <li>
                    <a href="https://www.youtube.com/watch?v=Cv9NSR-2DwM" target="_blank">Povezava 4</a>
                </li>

                <li>
                    <a href="https://www.youtube.com/watch?v=xm3YgoEiEDc" target="_blank">Povezava 5</a>
                </li>
            </ul>
        </article>
        <article>
            <h3 class="text-primary">Seznam odličnih filmov</h2>
            <ul>
                <li >
                    Puss in Boots 2: Magic Wish
                </li>
                <li >
                    Spider man - Into the Spiderverse
                </li>
                <li >
                    Coco
                </li>
                <li >
                    Gravity Falls
                </li>
                <li >
                    How to Train Your Dragon
                </li>
            </ol>
        </article>
        <article>
            <table class="table border">
                <caption class="text-primary ">Praške defenestracije</caption>
                <thead class="thead-dark">
                    <tr>
                        <th class="text-light">Leto</th>
                        <th class="text-light">Žrtve</th>
                        <th class="text-light">Storilec</th>
                        <th class="text-light">Posledice</th>
                        <th class="text-light">Zmagovalec nastale situacije</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th >1419</th>
                        <td >Več članov praškega koncila</td>
                        <td >Ljudstvo in Jan Želivsky</td>
                        <td >Husitske vojne</td>
                        <td >Husitski center</td>
                    </tr>
                    <tr>
                        <th >1483</th>
                        <td >Burgomaster in 7 drugih članov koncila</td>
                        <td >Skupina "Communion under both kinds"</td>
                        <td >Verski mir v mestu</td>
                        <td >Vsi verni</td>
                    </tr>
                    <tr>
                        <th >1618</th>
                        <td >Jaroslav Bořita of Martinice, Vilém Slavata of Chlum in še ena oseba</td>
                        <td >Protestantska množica</td>
                        <td >Tridesetletna vojna</td>
                        <td ><a href="https://en.wikipedia.org/wiki/Thirty_Years%27_War">Razni</a></td>
                    </tr>
                    <tr>
                        <th >1948</th>
                        <td >Jan Masaryk</td>
                        <td >Jan Masaryk ali komunistična partija</td>
                        <td >Sumi umora</td>
                        <td >Dve drugi preiskavi veliko kasneje</td>
                    </tr>
                </tbody>
            </table>
        </article>
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