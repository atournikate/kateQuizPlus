<?php
session_start();

//preset paths to standard include folders (concat the with PATH_SEPARATOR)
///home/oppdev2021/Documents/git/kateQuizPlus/www/src/index.php
$incPaths = $_SERVER['DOCUMENT_ROOT'] . '/php'; //site root includes
$incPaths .= PATH_SEPARATOR;

///home/oppdev2021/Documents/git/kateQuizPlus/www/src/php
//www/src/kateQuizPlus/php
$incPaths .= $_SERVER['DOCUMENT_ROOT'] . '/projects/kateQuizPlus/php';
set_include_path($incPaths);

//Includes required for all page templates
include 'auth.php';
include 'db-access.php';

//Tracing
define('TRACE_DB_ACCESS', false);