<?php
    include 'config.php';
    function fullGreet() {
        //var_dump($satzteil);
        global $satzteil;

        $greeting = $satzteil[0][rand(0,6)];
        $name = $satzteil[1][rand(0,6)];
        $ending = $satzteil[2][rand(0,4)];
        $smallTalk = $satzteil[3][rand(0,6)];
        $declaration = $satzteil[4];
        $person = $satzteil[5][rand(0,6)];
        
        echo "<h1>" . $greeting . $name . $ending . "</h1><h3>". $smallTalk . "</h3><p>" . $declaration . $person . "</p>";
    }

       fullGreet();
    ?>
    <br>
    <br>
        <p>
            Refresh this page to see what else I might say...
        </p>
    <button type="button"><a href="/exercises/ex2-kate.php">Go to Exercise 2</a></button>
   <?php include 'footer.php'; ?>