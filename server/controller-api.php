<?php
// qui gestiró i processi lato Backend, come se fosse un server

// includo il DB per convertire i dati in formato JSON.
include_once __DIR__ . "/db.php";

// if (isset($_GET['genre']) !== false) {
//     $genre = $_GET['genre'];
//     if ($genre === "all") {
        // specifico che tipo di contenuto creeró.
        header('Content-Type: application/json');
        // faccio un echo della funzione json_encode che, arrivata la chiamta, convertirá il DB (scritto in php) in JSON, in modo da farlo leggere a js.
        echo json_encode([
            'results' => $albums,
            'length' => count($albums)
          ]);
//     }
// }
?>