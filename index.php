<?php
//Connect to Database:

require 'functions.php';
$db = getDbConnection();
$skatePlazas = getAllPlazas($db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Skate Plazas Worldwide</title>
</head>
<div>
<header id="header">
        <h1>Skate Plazas Worldwide</h1>
</header>
<main>
    <div class=containers>
    <?php

    $itLives = mainPageDisplay($skatePlazas);
    echo $itLives;

    ?>
    </div>
</main>
    <div class="button">
        <a class ="hover_me" href="#header">Back to top</a>
    </div>
</body>
</html>