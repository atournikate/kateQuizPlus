<?php
   include 'config.php';
?>

    <h1>ARRAYS</h1>
    <?php

        //var_dump($horses);

        echo "<h1>Horse Breeds from the Western World</h1><br><h2>Warmbloods</h2>";
        for ($i = 0; $i < count($horses); $i++) {
            if ($horses[$i]["bloodType"] == "warm")
            echo "<h4>" . $horses[$i]["breedName"] . ", Origin: " . $horses[$i]["country"] . "</h4>";
        }

        echo "<h2>Cold Bloods</h2>";
        for ($i = 0; $i < count($horses); $i++) {
            if ($horses[$i]["bloodType"] == "cold")
            echo "<h4>" . $horses[$i]["breedName"] . ", Origin: " . $horses[$i]["country"] . "</h4>";
        }
        echo "<h2>Hot Bloods</h2>";
        for ($i = 0; $i < count($horses); $i++) {
            if ($horses[$i]["bloodType"] == "hot")
            echo "<h4>" . $horses[$i]["breedName"] . ", Origin: " . $horses[$i]["country"] . "</h4>";
        }
    ?>
<br>
<button type="button"><a href="/exercises/ex8-kate.php">Go to Exercise 8</a></button>

<?php include 'footer.php'; ?>