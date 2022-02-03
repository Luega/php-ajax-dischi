<!-- 1 step: creo nel file nominato controller (al momento fará il lato BackEnd) il processo per convertire, ricevuta la chiamata GET axios da vue.js, i dati scritti in php nel "DataBase" in JSON -->

<!-- 2 step: importo vue.js (nell´head dopo il link css) e axios (in fondo al body prima del link allo script js) in index-ajax-php. -->

<!-- 3 step: nel file js faccio una chiamata GET al controller (server), in modo da ricevere i dati del DB in formato JSON (leggibile da js).  -->

<!-- 4 step: nel mio HTML creo la mia app di vue.js e stampo i dati -->

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
    <!-- cdn bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- vue.js development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Dischi</title>
</head>
<body>
    <!-- targetto con l´id app il main in modo da poter utilizzarci dentro Vue.js. -->
    <div id="app">
        <!-- HEADER -->
        <!-- includo il bonus-header come sottocomponente, al cui interno abbiamo il componente bonus-select -->
        <?php include_once __DIR__ . "/partials/bonus-header.php"; ?>
        <!-- MAIN -->
        <main class="main min-vh-100">
            <div class="container-fluid">
                <div class="row w-75 m-auto d-flex flex-column">
                    <div class="col py-5 d-flex flex-wrap">
                        <!-- includo il componente bonus-card.php senza _one dopo include, perché potrei volerlo riutilizzare -->
                        <?php include __DIR__ . '/partials/bonus-card.php' ?>        
                    </div>
                </div>
            </div>
        </main> 
        <!-- FOOTER  -->
        <!-- includo il footer come sottocomponente -->
        <?php include_once __DIR__ . "/partials/footer.php"; ?>
    </div>

    <!-- SCRIPT JS -->
    <!-- cdn axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- link file js -->
    <!-- <script src="./js/script.js"></script> -->
    <script src="./js/bonus-script.js"></script>
</body>
</html>