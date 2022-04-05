<?php
//Connect to Database:


$db = new PDO('mysql:host=db; dbname=skateplazas', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare("SELECT `name`, `country`, `city`, `dob`, `status`, `vibe`, `photo`
FROM `skateplazas`;");
$query->execute();
$result = $query->fetchAll();

echo '<pre>';
var_dump($result);
echo '</pre>';
?>



<!---->
<!---->
<!--//Display database code:-->
<!---->
<!--$name = null;-->
<!--$country = null;-->
<!--$city = null;-->
<!--$DOB = null;-->
<!--$skateStatus = null;-->
<!--$generalVibe = null;-->
<!--$photo = null;-->
<!---->
<!--foreach ($results as $indexedArray) {-->
<!--    $name .= $key['name'];-->
<!--    $country .= $key['country'];-->
<!--    $city .= $key['city'];-->
<!--    $DOB .= $key['DOB'];-->
<!--    $skateStatus .= $key['skateStatus'];-->
<!--    $generalVibe .= $key['generalVibe'];-->
<!--    $photo .= $key['photo'];-->
<!--        for ($i = 1; $i < 1000; $i++) {-->
<!--            echo '<h1>"Skate Plaza No.$1"</h1>';-->
<!--            echo '<img src="$photo"';-->
<!--            echo '<br />';-->
<!--            echo '<p>"Location: $city, $country."</p>';-->
<!--            echo '<br />';-->
<!--            echo '<p>"Date of construction: $DOB."</p>';-->
<!--            echo '<br />';-->
<!--            echo '<p>"Only skaters hang out here so don’t expect much of a vibe beyond the skate session."</p>';-->
<!--                if ($skateStatus === 0) {-->
<!--                    echo '<p>"The good times are over. The authorities have already brought down the axe on this mecca of a by-gone era in skateboarding. RIP in peace."</p>';-->
<!--                } elseif ($generalVibe = 1) {-->
<!--                    echo '<p>"Only skaters hang out here so don’t expect much of a vibe beyond the skate session."</p>';-->
<!--                } elseif ($generalVibe = 2) {-->
<!--                    echo '<p>"As a skater, you share the space with other people on the lower rungs of society so act accordingly and keep an eye on your stuff."</p>';-->
<!--                } elseif ($generalVibe = 3) {-->
<!--                    echo '<p>"Due to its pleasant atmosphere, people on their lunchbreak tend to come here so be aware of stressed out workers trying to get away from their boss."</p>';-->
<!--                } elseif  ($generalVibe = 4) {-->
<!--                    echo '<p>"It may be a surprise, but this place has some value outside of skateboarding so look out for people snapping photos and disregarding the established skatetiquette."</p>';-->
<!--                } else {-->
<!--                    echo '<p>"Somehow, whether by choice or ignorance, the powers at be have let the people define this spot, meaning it has a different character at all times of the day and night. Roll up and enjoy the vibe."</p>';-->
<!--                }-->
<!--            }-->
<!--        }-->