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
                <div class="text-light float-right"><?php if(isset($_COOKIE["imePriimek"])) echo "Pozdravljeni ".$_COOKIE["imePriimek"];?></div>
            </nav>
        </header>
        <div class="foot-space">
        <main class="container bg-light">
            <div id="carouselExampleControls" class="m-2 carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="img-fluid d-block w-100" src="Corosel1.jpeg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid d-block w-100" src="Corosel2.jpeg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid d-block w-100" src="Corosel3.jpeg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div>
            <table class="table border m-2">
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
                    <tr>
                        <td>Da</td>
                        <td>Lahko</td>
                        <td>Bi</td>
                        <td>Spremenil</td>
                        <td>Ampak zakaj?</td>
                    </tr>
                </tbody>
            </table>
            <table class="table border m-2">
                <tr>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                    <td>Morbi rhoncus orci nec nisi molestie sodales.</td>
                    <td>Ut eget odio vel diam dignissim pellentesque vel vel urna.</td>
                    <td>Maecenas venenatis nisl sit amet felis malesuada auctor.</td>
                    <td>Aliquam lacinia ante quis vestibulum dignissim.</td>
                </tr>
                <tr>
                    <td>Nulla vulputate ante porttitor elementum dignissim.</td>
                    <td>Nam vitae velit eget tellus mattis convallis.</td>
                    <td>Praesent non augue ultrices, sollicitudin purus eu, hendrerit dui.</td>
                    <td>Nullam imperdiet magna vel ex aliquam, sit amet porttitor enim imperdiet.</td>
                    <td>Quisque luctus enim vitae cursus semper.</td>
                </tr>
                <tr>
                    <td>Nulla a purus ac felis mattis placerat tempus sit amet quam.</td>
                    <td>Nam molestie lorem vel sem congue, vel feugiat ligula sagittis.</td>
                    <td>Etiam sed arcu quis nunc aliquam malesuada nec quis dui.</td>
                    <td>Integer ut risus ac urna convallis interdum non pellentesque urna.</td>
                    <td>Nullam eget diam fermentum, elementum nibh et, viverra risus.</td>
                </tr>
                <tr>
                    <td>Proin fringilla quam ac mi elementum bibendum.</td>
                    <td>Duis mollis tellus id consequat tincidunt.</td>
                    <td>Morbi ultrices nunc vitae ex eleifend, vitae feugiat turpis placerat.</td>
                    <td>Integer efficitur massa sit amet efficitur molestie.</td>
                    <td>Nunc dignissim arcu ut metus pharetra blandit.</td>
                </tr>
                <tr>
                    <td>Pellentesque consequat ante vel maximus lobortis.</td>
                    <td>Pellentesque sollicitudin nulla a tellus scelerisque, nec blandit justo finibus.</td>
                    <td>Proin pulvinar dolor vitae magna rhoncus, ac congue risus semper.</td>
                    <td>Morbi ultricies purus porta sem cursus vestibulum.</td>
                    <td>Vestibulum aliquam tortor vel enim convallis convallis.</td>
                </tr>
                <tr>
                    <td>Vivamus id orci tristique lorem interdum eleifend vel sed lorem.</td>
                    <td>Duis finibus justo id nunc dignissim, nec molestie neque pulvinar.</td>
                    <td>In eu purus at est condimentum convallis.</td>
                    <td>Vestibulum vel diam quis elit porttitor lacinia viverra eget justo.</td>
                    <td>Sed vulputate nibh et nisl viverra condimentum.</td>
                </tr>
                <tr>
                    <td>Nulla a purus ac felis mattis placerat tempus sit amet quam.</td>
                    <td>Nam molestie lorem vel sem congue, vel feugiat ligula sagittis.</td>
                    <td>Etiam sed arcu quis nunc aliquam malesuada nec quis dui.</td>
                    <td>Integer ut risus ac urna convallis interdum non pellentesque urna.</td>
                    <td>Nullam eget diam fermentum, elementum nibh et, viverra risus.</td>
                </tr>
                <tr>
                    <td>Proin fringilla quam ac mi elementum bibendum.</td>
                    <td>Duis mollis tellus id consequat tincidunt.</td>
                    <td>Morbi ultrices nunc vitae ex eleifend, vitae feugiat turpis placerat.</td>
                    <td>Integer efficitur massa sit amet efficitur molestie.</td>
                    <td>Nunc dignissim arcu ut metus pharetra blandit.</td>
                </tr>
                <tr>
                    <td>Pellentesque consequat ante vel maximus lobortis.</td>
                    <td>Pellentesque sollicitudin nulla a tellus scelerisque, nec blandit justo finibus.</td>
                    <td>Proin pulvinar dolor vitae magna rhoncus, ac congue risus semper.</td>
                    <td>Morbi ultricies purus porta sem cursus vestibulum.</td>
                    <td>Vestibulum aliquam tortor vel enim convallis convallis.</td>
                </tr>
                <tr>
                    <td>Vivamus id orci tristique lorem interdum eleifend vel sed lorem.</td>
                    <td>Duis finibus justo id nunc dignissim, nec molestie neque pulvinar.</td>
                    <td>In eu purus at est condimentum convallis.</td>
                    <td>Vestibulum vel diam quis elit porttitor lacinia viverra eget justo.</td>
                    <td>Sed vulputate nibh et nisl viverra condimentum.</td>
                </tr>
            </table>
            </div>
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