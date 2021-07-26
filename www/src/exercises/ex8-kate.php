<?php
   include 'config.php';
?>

    <h1>FOREACH</h1>
    <p>
        I have an nested array named $horses.</p>
        <p> Inside the array are several nested arrays that describe 'breedName', 'country' of origin, and 'bloodType' group.</p>
         <p>I used:   for each ($horses as $horse) { echo $horse["breedName"] . "comes from " . $horse["country"] . "/break"
        }
    </p>
    <?php
        //var_dump($horses);
    
        foreach ($horses as $horse) {
            //var_dump($horse);
            //foreach ($horse as $key => $val) {
               // echo $key . ": " .$val . "<br>";
           // }
           echo "<pre>";
           echo $horse["breedName"] . " comes from " . $horse["country"] . "<br></pre";
        }
        ?>
        <br>
        <button type="button"><a href="/exercises/ex9-kate.php">Go to Exercise 9</a></button>
        <?php include 'footer.php'; ?>