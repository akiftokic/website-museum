<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postani član</title>
    <link rel="stylesheet" href="css/style33.css">
</head>
<body>

    <!-- povezivanje navigacije -->
       
    <?php require "header.php" ?>


    <!-- glavni dio -->
        <div id="bottom-header">
            <div class="bottom-header-left">
               <h1>
                   Tz muzej je ustanova koja zavisi od Vaših donacija. Donacijom postajete član porodice Tz muzeja i imate mogućnost posjete besplatno u bilo koje dana
               </h1>

            </div>
            <div class="logo">
                <p class="tzm2">TzM</p>
            </div>
        </div>
    </header>
    <main id="main-content">
        <section class="section-one">
            <div class="postaniclan">
            <p class="postaniClan">
            <?php include "register.php"; ?>
            </p>
        </div>

        </section>

        <!-- povezivanje footera -->
    <?php require "footer.php" ?>


</body>
</html>