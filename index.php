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
            <form>
                <label>Name of Plaza:
                    <input type="text" />
                </label>
                <label>Country:
                    <input type="text" />
                </label>
                <label>City:
                    <input type="text" />
                </label>
                <label>Year of Construction:
                    <input type="text" />
                </label>
                <label>Is it a bust?
                    <label>
                        <input name="radio" type="radio"/>Yes
                    </label>
                    <label>
                        <input name="radio" type="radio"/>No
                    </label>
                </label>
                <label>Who hangs out there?</label>
                    <label>
                        <input name="radio" type="radio"/>Only skaters
                    </label>
                    <label>
                        <input name="radio" type="radio"/>Sketchy people
                    </label>
                    <label>
                        <input name="radio" type="radio"/>Lunch breakers
                    </label>
                    <label>
                        <input name="radio" type="radio"/>Tourists
                    </label>
                    <label>
                        <input name="radio" type="radio"/>Everybody: it's a party
                    </label>

                <label>Paste Photo URL:
                    <input type="text" />
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