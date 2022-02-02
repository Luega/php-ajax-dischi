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
    <!-- MAIN -->
    <main class="main min-vh-100">
        <div class="container-fluid">
            <div class="row w-75 m-auto">
                <div class="col d-flex flex-wrap">
                    <div class="card pt-4 m-3 d-flex my_flex-basis-5">
                        <img class="w-75 m-auto" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Puttinontheritz.jpg/260px-Puttinontheritz.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title text-white text-center">Card title</h5>
                            <h6 class="card-title text-white-50 text-center">info</h6>
                            <h6 class="card-title text-white-50 text-center">info</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>  
</body>
</html>