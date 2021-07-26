<?php
   include 'config.php';
?>
    <h1>TIME</h1>
    <?php
    
    function getTime() {
        echo "<h1>It is now: " . date("h:i") . " " . date("A") . " </h1><br/>";
    }

    getTime();
?>
<br>
<button type="button"><a href="/exercises/ex14-kate.php">Go to Exercise 14</a></button>

   

<?php include 'footer.php'; ?><?php include 'footer.php'; ?>