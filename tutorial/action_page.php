<?php
session_start();
require('connect.php');

if (isset($_POST['username']) and isset($_POST['password'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM member WHERE userid='$username' and passwd='$password'";
 
  $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
  $count = mysqli_num_rows($result);

  if ($count == 1){
    $_SESSION['username'] = $username;
  }else{

    $fmsg = "Invalid Login Credentials.";
  }
}

if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
echo "Hi " . $username ."!";

echo "This is the Members Area";

echo "<a href='logout.php'>Logout</a>";
 
}else{
 header('Location: '.'login.php');
 die('incorecc!');
}  
?>