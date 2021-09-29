<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "phplogin";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

// if($conn->connect_error){
// echo "ERROR - 404";
// }else{
//     echo "connected";
// }

$username = $_POST['username'];
$password = $_POST['password'];
// echo $username;
// echo $password;

?>