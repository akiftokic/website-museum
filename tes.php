<?php 
session_start();
if(!$_SESSION["sess_name"]){
    header('location:postaniclan.php');
}
include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/tes1.css">
</head>
<body>
 
<div class="left" style="float:left">
    <h4>Poštovanje <?php echo $_SESSION["sess_name"]; ?> </h4>
    </div>
    <div class="right" style="float:right"> <a href="logout.php">Logout</a></div>
    <div style="clear: both;">
    <?php  if($_SESSION["sess_name"]){?>
    <h6>Uspješno ste logovani</h6>
    <?php  } ?>
    </div>
   
</body>
</html>