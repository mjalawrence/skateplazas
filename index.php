<?php
//Connect to Database:

/**
 * Connects to the database
 *
 * @return PDO
 */
function getDbConnection(): PDO {
    $db = new PDO('mysql:host=db; dbname=skateplazas', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

/**
 * Extracts the data and creates an array
 *
 * @param PDO $db
 * @return array|false
 */
function getAllPlazas(PDO $db) {
    $query = $db->prepare("SELECT `name`, `country`, `city`, `dob`, `status`, `vibe`, `photo`
FROM `skateplazas`;");
    $query->execute();
    $skatePlazas = $query->fetchAll();
    return $skatePlazas;
}

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
<body>
<header>
        <h1>Skate Plazas Worldwide</h1>
</header>
<main>
    <div class=containers>
    <?php

    /**
     * Input database array, foreach it and display each item in a nice little box
     *
     * @param array $skatePlazas
     * @return string
     */
    function mainPageDisplay (array $skatePlazas): string
    {
        $result = '';
        foreach ($skatePlazas as $plaza) {
            $result .= "<div class=plazas>";
            $result .= "<h1>{$plaza['name']}</h1>";
            $result .= "<div class=box style='background-image: url({$plaza['photo']})'>";
            $result .= "</div>";
            $result .= "<p>Location: {$plaza['city']}, {$plaza['country']}</p>";
            $result .= "<p>Date of construction: {$plaza['dob']}</p>";
            if ($plaza['status'] !== "1") {
                $result .= "<p>The good times are over. The authorities have already brought down the axe on this mecca of a by-gone era in skateboarding. RIP in peace.</p>";
            } elseif ($plaza['vibe'] === "1") {
                $result .= "<p>Only skaters hang out here so don’t expect much of a vibe beyond the skate session.</p>";
            } elseif ($plaza['vibe'] === "2") {
                $result .= "<p>If you skate here you'll be sharing the space with other people on the lower rungs of society so act accordingly and keep an eye on your stuff.</p>";
            } elseif ($plaza['vibe'] === "3") {
                $result .= "<p>Due to its pleasant atmosphere, people on their lunchbreak tend to come here so be aware of stressed out workers trying to get away from their boss.</p>";
            } elseif ($plaza['vibe'] === "4") {
                $result .= "<p>It may be a surprise, but this place has some value outside of skateboarding so look out for people snapping photos and disregarding the established skatetiquette.</p>";
            } else {
                $result .= "<p>Somehow, whether by choice or ignorance, the powers that be have let the people define this spot, meaning it has a different character at all times of the day and night. Roll up and enjoy the vibe.</p>";
            }
            $result .= "</div>";
        }
        return $result;
    }
    $itLives = mainPageDisplay($skatePlazas);
    echo $itLives;

    ?>
    </div>
</main>
</body>
</html>