<?php
    include 'config.php';

    
function prettyPrint($obj) {
    print "<pre>";
    print_r($obj);
    print "</pre>";
}

//prettyPrint($_SESSION);

$_SESSION["userName"] = "Marjorie";
$_SESSION["age"] = 42;

//prettyPrint($_SESSION);
//sleep for 5 seconds
sleep(5);
//relocate to page 2
header("Location:/session/ex-zwei-kate.php")
?>
