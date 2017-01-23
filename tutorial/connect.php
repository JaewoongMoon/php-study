<?php
$connection = mysqli_connect('localhost:3307', 'root', '');
if (!$connection){
  die("Database Connection Failed" . mysqli_error($connection));
}

$select_db = mysqli_select_db($connection, 'stonesoup');
if(!$select_db){
//  error_reporting(E_ALL);
//  ini_set("display_errors", 1);
  die("Database Selection Failed" . mysqli_error($connection));
}

?>
