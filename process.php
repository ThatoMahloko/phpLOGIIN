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

$sql = "SELECT * FROM user WHERE username = `$username` AND password = `$password`";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
if($row['username']==$username && $row['password']){
    echo "Welcome " .$username. " you are successfully Logged in!!";
}else{
    echo "<script>alert('check your login details')</script>";
    echo "<script>location.replace('index.html')</script>";

}
?>