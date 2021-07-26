<?php
   include 'config.php';
    ?>
    
    <h1>echo WITH VARIABLES</h1>
    <br>
    <form class="game" action="ex3-kate.php" method="POST">
       <label for="adj1">Enter an Adjective:</label><br>
            <input class="entry" type="text" name="adj1"><br>

       <label for="size1">Enter Size Descriptor:</label><br>
            <input class="entry" type="text" name="size1"><br>

       <label for="animal">Enter an Animal:</label><br>
            <input class="entry" type="text" name="animal"><br>

       <label for="city">Enter a City Name:</label><br>
            <input class="entry" type="text" name="city"><br>

       <label for="emotion1">Enter an Emotion:</label><br>
            <input class="entry" type="text" name="emotion1"><br>

       <label for="activity">Enter a Fun Activity:</label><br>
            <input class="entry" type="text" name="activity"><br>

       <label for="purpose">Enter a Purpose for the Activity:</label><br>
            <input class="entry" type="text" name="purpose"><br>

        <label for="size2">Enter Another Size Descriptor:</label><br>
            <input class="entry" type="text" name="size2"><br>
            
        <label for="object">Enter an Object of Desire:</label><br>
            <input class="entry" type="text" name="object"><br>

        <label for="emotion2">Enter Another Emotion:</label><br>
            <input class="entry" type="text" name="emotion2"><br>

       <label for="action">Enter a Past Tense Verb:</label><br>
            <input class="entry" type="text" name="action"><br>

       <label for="adj2">Enter Another Adjective:</label><br>
            <input class="entry" type="text" name="adj2"><br>

       <label for="intensity">Enter an Intensifier:</label><br>
            <input class="entry" type="text" name="intensity"><br>

        <label for="hero">Enter a Legendary Name for the Animal:</label><br>
            <input class="entry" type="text" name="hero"><br>
      

       <button type="submit" value="Submit">Submit</button>
    </form>
<?php


if ($_POST) {
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


echo "<div class='storytime'><p>Once upon a time, a " . $adj1 . " " . $size1 . " " . $animal . " lived in " . $city . ". The "
. $animal . " was feeling " . $emotion1 . " one day, and it decided to " . $activity . " to " . $purpose . 
". When it turned a corner, it saw a " . $size2 . " " . $object . "! The " . $animal . " was so " . $emotion2 . 
", and it " . $action . " the whole thing in its " . $adj2 . " teeth, and dragged it all the way home. It was a " 
. $intensity . " day for the " . $animal . ". And that was the day the " . $animal . " became " . $hero . "! </p></div><br>";

echo "<button type='reset'>Reset</button>"; 
    
}
?>

<button type="button"><a href="/exercises/ex4-6-kate.php">Go to Exercise 4 to 6</a></button>

       
<?php include 'footer.php'; ?>