<?php
   include 'config.php';
?>
    <h1>MATH</h1>

<form action="ex15-kate.php" method="POST">
        <label for="aVal">Enter value for <em>a</em>:</label><br>
        <input class="entry" type="num" name="aVal"><br>
        <label for="bVal">Enter value for <em>b</em>:</label><br>
        <input class="entry" type="num" name="bVal"><br>
        <input type="submit" value="Submit">
    </form>

<?php


        
        

        if (!isset($_POST['aVal'])) {
            $a = 1;
        } else {
            $a = (int)$_POST['aVal'];
        }

        if (!isset($_POST['bVal'])) {
            $b = 1;
        } else {
            $b = (int)$_POST['bVal'];
        }

        


       function addition($a, $b) {
        $result = $a + $b;
        echo "<h3>Addition</h3>";
        echo "The result of " . $a . " + " . $b . " = " . $result;
        }

        function subtraction($a, $b) {
            $result = $a - $b;
            echo "<h3>Subtraction</h3>";
            echo "The result of " . $a . " - " . $b . " = " . $result;
        }

        function multiplication($a, $b) {
            $result = $a * $b;
            echo "<h3>Multiplication</h3>";
            echo "The result of " . $a . " * " . $b . " = " . $result;
        }

        function division($a, $b) {
            $result = $a / $b;
            echo "<h3>Division</h3>";
            echo "The result of " . $a . " / " . $b . " = " . $result;
        }

        function squCube($a, $b) {
            $aSquare = pow($a, 2);
            $aCube = pow($a, 3);
            $bSquare = pow($b, 2);
            $bCube = pow($b, 3);
            echo "<h3>Exponential Expressions</h3>";
            echo "The result of " . $a . " squared is " . $aSquare . "<br>";
            echo "The result of " . $a . " cubed is " . $aCube . "<br>";
            echo "The result of " . $b . " squared is " . $bSquare . "<br>";
            echo "The result of " . $b . " cubed is " . $bCube . "<br>";
        }
        echo "<h2>Enter your own numbers in the form above and press 'Submit' </h2>";
        
        echo "a = " . $a . "<br>"; 
        echo "b = " . $b . "<br>";

        addition($a, $b);
        subtraction($a, $b);
        multiplication($a, $b);
        division($a, $b);
        squCube($a, $b);
        ?>
<br>
<button type="button"><a href="/exercises/ex-eins-kate.php">Go to Exercise Session Eins</a></button>


<?php include 'footer.php'; ?>