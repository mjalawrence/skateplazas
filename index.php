<?php
//Connect to Database:

require 'functions.php';
$db = getDbConnection();



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
    <div class="header__bar">
        <h1>Skate Plazas Worldwide</h1>
    </div>
    <div class="submit__button__div">
            <div class="submit__button">
            <a href="#submit">Submit New Plaza</a>
            </div>
    </div>
</header>
<main>
    <div class="error__message">
        <?php
    $newPlaza = submitPlaza($db);

    if (!$newPlaza) {

    }
    $skatePlazas = getAllPlazas($db);
        ?>
    </div>
    <div class="containers">
    <?php
    $itLives = mainPageDisplay($skatePlazas);
    echo $itLives;

    ?>
        <div class="plazas submit__plaza">
            <h1>Submit New Plaza</h1>
            <form method="post">
                <label>Name of Plaza:
                    <input type="text" name="name" required />
                </label>
                <label>Country:
                    <input type="text" name="country" required />
                </label>
                <label>City:
                    <input type="text" name="city" required />
                </label>
                <label>Year of Construction:
                    <input type="text" name="dob" required />
                </label>
                <label>Is it a bust?
                    <label>
                        <input  type="radio" name="status" value="0" required/>Yes
                    </label>
                    <label>
                        <input type="radio" name="status" value="1" />No
                    </label>
                </label>
                <label>Who hangs out there?</label>
                    <label>
                        <input type="radio" name="vibe" value="1" required/>Only skaters
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
                    <input type="text" name="photo" required />
                </label>
                <div id="submit" class="submit">
                    <input type="submit" value="Submit Plaza"/>
                </div>
            </form>
        </div>
    </div>

</main>
    <div class="back__button__div">
        <a href="#header" class="back__button">Back to top</a>
    </div>
</body>
</html>