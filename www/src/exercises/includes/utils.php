<?php

function prettyPrint($x) {
    echo "<pre>";
    print_r($x);
    echo "</pre><br>";
}

function sessionDump() {
    var_dump($_SESSION);
}