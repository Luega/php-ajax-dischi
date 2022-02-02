<?php
include_once __DIR__ . "/server/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <h1>ciao questo é un disco:</h1>
    <div>
        <h2><?= $DB[0]['poster'] ?></h2>
        <h2><?= $DB[0]['title'] ?></h2>
        <h2><?= $DB[0]['author'] ?></h2>
        <h2><?= $DB[0]['firstRelease'] ?></h2>
    </div>
</body>
</html>