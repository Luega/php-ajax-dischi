<?php
// includo il db per poter usare i dati
include_once __DIR__ . "/db.php";

// se il parametro esiste allora:
if (isset($_GET['genre']) !== false) {
    // creo una variabile che prenda il valore del parametro.
    $genre = $_GET['genre'];
    // se il genere é 'all' allora filteredAlbums (variabile creata ora) avrá il valore di albums del db.
    if ($genre === "all") {
        $filteredAlbums = $albums;
    } else {
        // altrimenti filteredAlbums sará un array vuoto.
        $filteredAlbums = [];
        // facciamo ciclare un foreach sull´array del db, in modo da filtrare tutti gli album con il genere uguale alla variabile genre (che ha lo stesso valore del parametro nella chiamta get) nel filteredAlbums.
        foreach ($albums as $album) {
            if ($album['genre'] === $genre) {
                array_push($filteredAlbums, $album);
            }
        }
    }
    // convertiamo i dati in php in un file JSON, in modo da farlo leggere a Js.
    header('Content-Type: application/json');
    echo json_encode([
      'results' => $filteredAlbums,
      'length' => count($filteredAlbums)
    ]);
}
?>