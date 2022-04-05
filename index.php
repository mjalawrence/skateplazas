<?php
//Connect to Database:


$db = new PDO('mysql:host=db; dbname=skateplazas', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare("SELECT `name`, `country`, `city`, `dob`, `status`, `vibe`, `photo`
FROM `skateplazas`;");
$query->execute();
$skatePlazas = $query->fetchAll();

//echo '<pre>';
//var_dump($skatePlazas);
//echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href=".css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Skate Plazas Worldwide</title>
</head>
<body>
<header>
        <h1>Skate Plazas Worldwide</h1>
</header>
<main>
    <?php
    foreach($skatePlazas as $key => $plaza) {
        $key++;
        echo "<h1>Skate Plaza No. $key</h1>";
        echo "<h1>{$plaza['name']}</h1>";
        echo "<img src={$plaza['photo']}>";
        echo "<p>Location: {$plaza['city']}, {$plaza['country']}.</p>";
        echo "<p>Date of construction: {$plaza['dob']}.</p>";
        if ($plaza['status'] !== "1") {
            echo "<p>The good times are over. The authorities have already brought down the axe on this mecca of a by-gone era in skateboarding. RIP in peace.</p>";
        } elseif ($plaza['vibe'] === "1") {
            echo "<p>Only skaters hang out here so don’t expect much of a vibe beyond the skate session.</p>";
        } elseif ($plaza['vibe'] ===  "2") {
            echo "<p>As a skater, you share the space with other people on the lower rungs of society so act accordingly and keep an eye on your stuff.</p>";
        } elseif ($plaza['vibe'] ===  "3") {
            echo "<p>Due to its pleasant atmosphere, people on their lunchbreak tend to come here so be aware of stressed out workers trying to get away from their boss.</p>";
        } elseif ($plaza['vibe'] ===  "4") {
            echo "<p>It may be a surprise, but this place has some value outside of skateboarding so look out for people snapping photos and disregarding the established skatetiquette.</p>";
        } else {
            echo "<p>Somehow, whether by choice or ignorance, the powers that be have let the people define this spot, meaning it has a different character at all times of the day and night. Roll up and enjoy the vibe.</p>";
        }

    }
    ?>
</main>
</body>
</html>