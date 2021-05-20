
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- povezivanje navigacije -->
    <?php require "header.php" ?>

    <!-- glavni dio -->
    <div id="bottom-header">
                <div class="bottom-header-left">
                    <h1>Dobro došli</h1>
                    <p>Otvoreni smo! Planirajte Vašu posjetu</p>
                    <div id="button"> 

                      <button class="dugme" onclick="document.location='postaniclan.php'">postani član</button>
                     
                    </div>

                </div>
                <div class="logo">
                    <p class="tzm">TzM</p>
                </div>
            </div>
        </header>
        <main id="main-content">
            <section class="section-one">
                <div class="content-left">
                    <p class="dark-tekst">Dobro došli u TzM - najveći i najposjećeniji muzej umjetnosti, dizajna i površine u Bosni i Hercegovini
                    </p>
                    <p class="aktuelno">
                        <a href="kolekcije.php">Pogledajte šta je aktuelno</a>
                    </p>
                    <p class="pratite">Pratite nas i na društvenim mrežama</p>
                    <ul class="ikone">
                        <li> <img src="images/facebook.png" alt="facebook"></li>
                        <li> <img src="images/instagram.png" alt="instagram"></li>
                        <li> <img src="images/twitter.png" alt="twitter"></li>
                        <li> <img src="images/youtube.png" alt="youtube"></li>
                    </ul>
                </div>
                <div class="content-right">
                   <div class="radno-vrijeme">
                   <h2> <img src="images/sat1.png" alt="sat"> Radno vrijeme</h2>
                    <p class="ponedjeljak">Ponedjeljak-Subota:08:00-21:00</p>
                  </div> 
                  <div class="lokacija">
                      <h3>Tz Muzej</h3>
                      <p class="ulica"><img src="images/mapa.png" alt="mapa"> Ulica Mirze Delibašića</p>
                      <p class="tuzla">Tuzla, 75000</p>
                      <div id="button"> 
                        <button class="dugme" onclick="document.location='posjeti.php'">planirajte posjetu</button>
                      </div>
                  </div>
                </div>

            </section>
            

            <!-- povezivanje footera -->
            <?php
            include "tes.php";
            require "footer.php"; ?>
</body>
</html>