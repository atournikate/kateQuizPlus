<?php
  include '../config.php';
   ?>
    <div class="madLibs">
            <h1>Welcome to Kate's MadLibs!</h1>
   <?php

   function makeMadlib() {
        $adj1 = $_POST['adj1'];
        $size1 = $_POST['size1'];
        $animal = $_POST['animal'];
        $city = $_POST['city'];
        $emotion1 = $_POST['emotion1'];
        $activity = $_POST['activity'];
        $purpose = $_POST['purpose'];
        $size2 = $_POST['size2'];
        $object = $_POST['object'];
        $animal = $_POST['animal'];
        $emotion2 = $_POST['emotion2'];
        $action = $_POST['action'];
        $adj2 = $_POST['adj2'];
        $intensity = $_POST['intensity'];
        $hero = $_POST['hero'];

        echo "<div class='story'><p>Once upon a time, a " . $adj1 . " " . $size1 . " " . $animal . " lived in " . $city . ". The "
        . $animal . " was feeling " . $emotion1 . " one day, and it decided to " . $activity . " to " . $purpose . 
        ". When it turned a corner, it saw a " . $size2 . " " . $object . "! The " . $animal . " was so " . $emotion2 . 
        ", and it " . $action . " the whole thing in its " . $adj2 . " teeth, and dragged it all the way home. It was a " 
        . $intensity . " day for the " . $animal . ". And that was the day the " . $animal . " became " . $hero . "! </p></div><br>";
   
   }

   if (!isset($_POST['submit'])) {
       ?>
 
       <form class="game" action="" method="POST">
       <?php
       echo "<div class='storytime'><p>Once upon a time, a ";
       ?>
            <span><input class="entry" type="text" name="adj1" placeholder="adjective"></span>
        <?php
       echo " ";
       ?>
            <span><input class="entry" type="text" name="size1" placeholder="size descriptor"></span>
        <?php
       echo " ";
       ?>
        <span><input class="entry" type="text" name="animal" placeholder="animal"></span>
        <?php
       echo " lived in ";
       ?>
        <span><input class="entry" type="text" name="city" placeholder="city name"></span>
        <?php
       echo ". It was feeling ";
       ?>
        <span><input class="entry" type="text" name="emotion1" placeholder="emotion"></span>
        <?php
       echo " one day, and it decided to ";
       ?>
        <span><input class="entry" type="text" name="activity" placeholder="fun activity"></span>
        <?php
       echo " to ";
       ?>
        <span><input class="entry" type="text" name="purpose" placeholder="reason for activity"></span>
        <?php
       echo ". When it turned a corner, it saw a " ;
       ?>
        <span><input class="entry" type="text" name="size2" placeholder="different size descriptor"></span>
        <?php
       echo " ";
       ?>
        <span><input class="entry" type="text" name="object" placeholder="noun"></span>
        <?php
       echo "! It was so ";
       ?>
        <span><input class="entry" type="text" name="emotion2" placeholder="different emotion"></span>
        <?php
       echo ", and it ";
       ?>
        <span><input class="entry" type="text" name="action" placeholder="past-tense action"></span>
                    <?php
       echo " the whole thing in its ";
       ?>
        <span><input class="entry" type="text" name="adj2" placeholder="another adjective"></span>
                    <?php
       echo " teeth, and dragged it all the way home. It was a ";
       ?>
        <span><input class="entry" type="text" name="intensity" placeholder="intensifier (e.g. awesome, great)"></span>
                    <?php
       echo " day for the critter. And that was the day it became ";
       ?>
        <span><input class="entry" type="text" name="hero" placeholder="heroic name"></span>
        <?php
        echo "! </p></div><br>";
        ?>
            <button type="submit" name="submit" value="Submit">Submit</button>
            </form>
       </div>
        
       <?php
   } else {
       makeMadlib();

      
       session_destroy();
       echo "<button type='reset' name='reset' value='reset'><a href='madlibs.php'>Reset</a></button><br><button type='button' class='btn'><a href='/index.php'>Return Home</a></button><br>"; 
     
    
   }    


?>

<br>
<br>
<br>

</body>
</html>