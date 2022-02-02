<!-- 1 step: creo nel file nominato controller (al momento fará il lato BackEnd) il processo per convertire, ricevuta la chiamata GET axios da vue.js, i dati scritti in php nel "DataBase" in JSON -->

<!-- 2 step: dopo aver importato vue.js e axios, faccio una chiamata GET al "BackEnd" (controller), in modo da ricevere i dati dal DB in formato JSON (leggibile da js). -->

<!-- 3 step: nel mio HTML creo la mia app di vue.js e stampo i dati -->

<?php
// includo il DB per poterne richiamare i dati. Uso _once per non incorrere in 'doppioni' e __DIR__ interpolato perché mi ricrea il percorso fino alla cartella in cui sono.
include_once __DIR__ . "/server/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Dischi</title>
</head>
<body>
    <!-- HEADER -->
    <!-- includo l´header come sottocomponente -->
    <?php include_once __DIR__ . "/partials/header.php"; ?>
    <!-- MAIN -->
    <main class="main min-vh-100">
        <div class="container-fluid">
            <div class="row w-75 m-auto">
                <div class="col py-5 d-flex flex-wrap">
                    <!-- card -->
                    <!-- faccio un ciclo foreach per stampare i dati del DB nel main, creando le cards -->
                    <?php foreach ($DB as $album) { ?>
                        <div class="card pt-4 m-3 d-flex my_flex-basis-5">
                            <img class="w-75 m-auto" src="<?= $album['poster'] ?>" class="card-img-top" alt="<?= $album['title'] ?>">
                            <div class="card-body">
                                <h5 class="card-title text-white text-center"><?= $album['title'] ?></h5>
                                <h6 class="card-title text-white-50 text-center"><?= $album['author'] ?></h6>
                                <h6 class="card-title text-white-50 text-center"><?= $album['firstRelease'] ?></h6>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main> 
    <!-- FOOTER  -->
    <!-- includo il footer come sottocomponente -->
    <?php include_once __DIR__ . "/partials/footer.php"; ?>
</body>
</html>