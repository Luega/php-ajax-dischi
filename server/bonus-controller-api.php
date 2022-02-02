<?php
include_once __DIR__ . "/db.php";

if (isset($_GET['genre']) !== false) {
    $genre = $_GET['genre'];
    if ($genre === "all") {
        header('Content-Type: application/json');
        echo json_encode([
            'results' => $albums,
            'length' => count($albums)
        ]);
    } elseif ($genre === 'rock') {
        $rockAlbums = [];
        foreach ($albums as $album) {
            if ($album['genre'] == "rock") {
                array_push($rockAlbums, $album);
            }
        };
        header('Content-Type: application/json');
        echo json_encode([
          'results' => $rockAlbums,
          'length' => count($rockAlbums)
        ]);
    } elseif ($genre === 'pop') {
        $popAlbums = [];
        foreach ($albums as $album) {
            if ($album['genre'] == "pop") {
                array_push($popAlbums, $album);
            }
        };
        header('Content-Type: application/json');
        echo json_encode([
          'results' => $popAlbums,
          'length' => count($popAlbums)
        ]);
    } elseif ($genre === 'metal') {
        $metalAlbums = [];
        foreach ($albums as $album) {
            if ($album['genre'] == "metal") {
                array_push($metalAlbums, $album);
            }
        };
        header('Content-Type: application/json');
        echo json_encode([
          'results' => $metalAlbums,
          'length' => count($metalAlbums)
        ]);
    }
}
?>