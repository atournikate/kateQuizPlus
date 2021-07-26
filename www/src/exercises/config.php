<?php
session_start();

//preset paths to standard include folders (concat the with PATH_SEPARATOR)
///home/oppdev2021/Documents/git/kateQuizPlus/www/src/index.php
// $incPaths = $_SERVER['DOCUMENT_ROOT'] . '/php'; //site root includes
// $incPaths .= PATH_SEPARATOR;

///home/oppdev2021/Documents/git/kateQuizPlus/www/src/php
//www/src/kateQuizPlus/php
$incPaths = $_SERVER['DOCUMENT_ROOT'] . '/exercises/includes';
set_include_path($incPaths);

//Includes required for all page templates
include 'arrays.php';
include 'utils.php';
include 'header.php';


//Tracing
define('TRACE_DB_ACCESS', false);