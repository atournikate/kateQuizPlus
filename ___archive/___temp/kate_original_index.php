<?php
include 'php/auth.php';

function addLinks() {
    $links = scandir("projects/");
    $links = array_splice($links, 2, count($links));
    $links - array_values($links);

    foreach ($links as $i => $value) {
        if (file_exists('projects/' . $value . '/info.php')) {
            require_once('projects/' . $value . '/info.php');
            echo '<a href="/projects' . $value . '/' . $projData["StartPage"] . '">' . $projData["ProjectName"] . '</a><br>';
        }
    }
}
// include '/kateQuizPlus/config.php';




//     // start session and initialize achieved number of points
//     // session_start();

//     print '<br><br><br>' . $_SERVER['DOCUMENT_ROOT'] . '<br>';
//     // Preset path to include folder 
//     //set_include_path($_SERVER['DOCUMENT_ROOT'] . '/php');

//     // Page includes
//     // include 'auth.php';
//     // include 'db-access.php';
       
//     require_once 'header.php';
// ?>

//             <?php 
//                 echo '<h3>Try out our first and only</h3><br><h2><a href="/templates/introduction.php">Animal Quiz</a></h2>';
//             ?>
        
//     <?php
//     require_once 'footer.php';
//     ?>
