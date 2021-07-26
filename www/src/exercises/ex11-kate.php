<?php
   include 'config.php';
?>
    <h1>myWebsiteName</h1>
    <?php
        $name = "my Friend";
        $color = "#02b89c";

        function websiteName() {
            return "Kate's Website";
        }
    ?>
    <h2 style="color:<?=$color?>">Hello <?=$name?>!</h2>
    <h1>Welcome to <?=websiteName();?></h1>
    <br>
<button type="button"><a href="/exercises/ex12-kate.php">Go to Exercise 12</a></button>

   
<?php include 'footer.php'; ?>