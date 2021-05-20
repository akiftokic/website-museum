<?php 
session_start();
if(!$_SESSION["sess_name"]){
    header('location:cjenovnik2.php');
}
include "db.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cjenovnik</title>
    <link rel="stylesheet" href="css/cjenovnik1.css">
</head>
<body>
    <?php include "header.php" ?>

    <?php
// session_start();
if($_SESSION["sess_name"]){ ?>
    <div class="cjenovnik1">
    <p>Ponedjeljak: .............................. <del>10</del> 6KM</p>
    <br>
    <p>Utorak: ...................................... <del>10</del> 6KM</p>
    <br>
    <p>Srijeda: ..................................... <del>10</del> 6KM</p>
    <br>
    <p>Četvrtak: .................................. <del>10</del> 6KM</p>
    <br>
    <p>Petak: ....................................... <del>10</del> 6KM</p>
    <br>
    <p>Subota: .................................... <del>10</del> 6KM</p>
    <br>
    <p>Nedjelja: .................................. <del>10</del> 6KM</p>
    </div>
<?php } ?>


    <?php include "footer.php" ?>
</body>
</html>