<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kolekcije</title>
    <link rel="stylesheet" href="css/style22.css">
</head>
<body>
    <!-- povezivanje navigacije -->
    <?php require "header.php" ?>
            <div id="bottom-header">
                <h1>
                    Od drevnog Egipta preko doba Leonarda da Vincia doživite zanimljivo i edukativno putovanje u Tz muzeju
                </h1>
                

                <div class="logo">
                    <p class="tzm2">TzM</p>
                </div>
            </div>
        </header>
        <main id="main-content">
            <section class="section-one">
                <div class="klasa">
                    <!-- dobavljanje podataka iz baze -->
                    <?php include "proba1.php";  ?>
                    <p>Mona Lisa</p>
                    <img src="images/monalisa1.jpg" alt="MonaLisa">
                    <p>Mikelanđelov David</p>
                    <img src="images/david2.jpg" alt="David"> 
                </div>
            </section>

        <!-- povezivanje footera -->            
        <?php require "footer.php" ?>
    
</body>
</html>