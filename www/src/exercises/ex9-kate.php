<?php
   include 'config.php';
?>
    <h1>Sorting an Array (not the prettyPrinting we were asked for)</h1>
    <h4>see below for prettyPrint example</h4>
    <?php
        //var_dump($horses);
        //sorting the array by the "country" key, must provide boolean values
        //$a is one horse type, which will be compared to $b horse type
        //each set of breed entries will be compared to the other based on country
        //until the file is fully sorted.
        function sortByCountry($a, $b) {
            if ($a['country'] == $b['country']) {
                return 0;
            }
            return ($a['country'] < $b['country']) ? -1 : 1;
        }

        //calls the sorting function into play
        //names the $array, and the function by which it should be sorting
        usort($horses, 'sortByCountry');
        
        function sortHorses() {
            global $horses;
        
            for ($i = 0; $i < count($horses); $i++) {
                echo "<p>The " . $horses[$i]["breedName"] . " is a " . $horses[$i]["bloodType"] . "blooded horse from " . $horses[$i]["country"] . "</p>";
            }
        }
        sortHorses();


        echo "<h1>prettyPrint</h1>";
        prettyPrint($horses);
    ?>
<br>
<button type="button"><a href="/exercises/ex10-kate.php">Go to Exercise 10</a></button>

   
<?php include 'footer.php'; ?>