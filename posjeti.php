<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posjetite</title>
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>

    <!-- povezivanje navigacije -->
    <?php require "header.php" ?>
    <!-- glavni dio -->
    <div id="bottom-header">
                <div class="bottom-header-left">
                    <h1>Planirajte svoju posjetu</h1>
                </div>
                <div class="bottm-header-right">
                    <p class="tzm2">TzM</p>
                </div>
            </div>
        </header>
        <main id="main-content">
            <section class="section-one">
                <div class="content">
                    <h2>
                        Dobro došli
                    </h2>
                    <p class="main">
                        Tz muzej je počeo sa radom sada već davne 1950. godine. Tz muzej je arhitektonski jedan od najljepsih muzeja u Bosni i Hercegovini. U njemu možete naći neke od najpoznatijih djela velikih umjetnika kao što su: Leonardo da Vinci i Michelangelo Buonarotti.
                    </p>
                    <h2>Kako do nas?</h2>
                    <p class="mapa">
                        Nalazimo se u Tuzli u ulici Mirze Delibašića. U nastavku imate i link u kome je prikazana tačna lokacija muzeja.
                    </p>
                    <h2>Galerije</h2>
                    <p class="galerije">
                        Tz muzej se sastoji od 3 galerije i to: galerija slika, galerija skulptura i egipatska galerija.
                    </p>
                    <?php echo "<br><br>"; include "proba.php"; ?>
                    <h2>Slike galerija:</h2>
                    <img src="images/slikee.jpg" alt="galerija slika">
                    
                    <h2> </h2>
                    <img src="images/accademia1.jpg" alt="galerija skulptura">
                    
                    <h2> </h2>
                    <img src="images/pennm.jpg" alt="egipatska galerija">
                    

                </div>
            </section>

            <!-- povezivanje footera -->
    <?php require "footer.php" ?>
</body>
</html>