<?php
    include 'config.php';
    ?>


    <h1>Calculate the area of a hexagon</h1>
    <br>
    <br>
    <div class="hexagon"></div><br>
    <h4>this hexagon code and styling was borrowed from <a href="http://http://brenna.github.io/csshexagon/">brenna.github.io/csshexagon</a>.</h4>
    <br>
    <br>

    <form action="ex2-kate.php" method="POST">
        <label for="hexVal">Enter side length:</label><br>
        <input class="entry" type="text" name="userInput"><br>
        <input type="submit" value="Submit">
    </form>

    <?php

        if ($_POST) {
            echo "You entered <h1>" . $_POST['userInput'] . "</h1><br>";
        } else {
            echo "You haven't entered a number yet...";
            exit();
        }

        $x = (int)$_POST['userInput'];
        //echo $x;

        function hexCalc($x) {
            $result = ((3 * sqrt(3)) * pow($x, 2)) / 2;
        return $result;
        }
    ?>

    <h3>Based on this information, the area of your hexagon is:<br></h3>
    <h1> 
        <?php echo round(hexCalc($x), 2) . "<br>";

        ?> 
    </h1>

    <button type="button"><a href="/exercises/ex3-kate.php">Go to Exercise 3</a></button>

    <?php include 'footer.php'; ?>