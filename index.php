<?php
//Connect to Database:

require 'functions.php';
$db = getDbConnection();
$newPlaza = submitPlaza($db);

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
<header id="header">
        <h1>Skate Plazas Worldwide</h1>
</header>
<main>
    <div class=containers>
    <?php

    $itLives = mainPageDisplay($skatePlazas);
    echo $itLives;

    ?>
        <div class="plazas">
            <h1>Submit New Plaza</h1>
            <form method="post">
                <label>Name of Plaza:
                    <input type="text" name="name"/>
                </label>
                <label>Country:
                    <input type="text" name="country"/>
                </label>
                <label>City:
                    <input type="text" name="city"/>
                </label>
                <label>Year of Construction:
                    <input type="text" name="dob"/>
                </label>
                <label>Is it a bust?
                    <label>
                        <input  type="radio" name="status" value="1" />Yes
                    </label>
                    <label>
                        <input type="radio" name="status" value="0" />No
                    </label>
                </label>
                <label>Who hangs out there?</label>
                    <label>
                        <input type="radio" name="vibe" value="1" />Only skaters
                    </label>
                    <label>
                        <input type="radio" name="vibe" value="2" />Sketchy people
                    </label>
                    <label>
                        <input type="radio" name="vibe" value="3" />Lunch breakers
                    </label>
                    <label>
                        <input type="radio" name="vibe" value="4" />Tourists
                    </label>
                    <label>
                        <input type="radio" name="vibe" value="5" />Everybody: it's a party
                    </label>

                <label>Paste Photo URL:
                    <input type="text" name="photo"/>
                </label>
                <div class="submit">
                    <input type="submit" value="Submit Plaza"/>
                </div>
            </form>
        </div>
    </div>

</main>
    <div class="button">
        <a class ="hover_me" href="#header">Back to top</a>
    </div>
</body>
</html>