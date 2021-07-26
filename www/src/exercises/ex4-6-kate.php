<?php
   include 'config.php';
    ?>

    <h1>WHILE</h1>
    <?php

    $num = 1;
    $sum = 0;

    while ($num <= 100) {
        $sum += $num;
        $num++;
    }

    $sumFinal = (100 + 1) * 100 / 2;

    echo "The sum of the numbers 1 to 100 is: " . $sum . ".<br>";
    echo '(with calculation: ... yep, still equals ' . $sumFinal . '!)';
    ?>

    <h1>DO WHILE</h1>

    <?php 
    echo "What is PHP_EOL? " . PHP_EOL . "<br><br>"; 

    //this is an indexed array
    $question = [
        "What is your name?",
        "What is your quest?",
        "What is the air speed velocity of an unladen swallow?",
        "What is your favorite color?",
        "Do you have a pet?",
        "What is your favorite food?",
        "When is your birthday? (month day)",
        "What year were you born?",
        "What are you most proud of today?",
        "How long can you hold your breath?",
        "What are three words you use to describe yourself?",
        "How would you describe your aesthetic?",
        "What is your favorite movie?",
        "What is your favorite song?",
        "What is your power animal?"
    ];

    $i = 0;
       
    do {
        if (strpos($question[$i], 'favorite') !== false) {
            echo $question[$i] . "<br>";
        } else {
            echo "<br>Nothing here...<br>";
        }
        $i++;
       
    } while ($i < count($question));

    
?>

<h1>FOR LOOP</h1>

<p>Variable $countMe is 0</p>
<p>for $i = 0, so long as it's less than 50, $i++</p>
<p>$countMe = $countMe + $i</p>

<?php 
$countMe = 0;

for ($i = 0; $i < 50; $i++) {
    $countMe = $countMe +$i;
    echo $countMe . "<br>";
}

?>

<button type="button"><a href="/exercises/ex7-kate.php">Go to Exercise 7</a></button>

   
<?php include 'footer.php'; ?>