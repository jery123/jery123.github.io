<?php
//INFORMATIONS ABOUT THE DATABASE
$server = "localhost:4000";
$user_name = "root";
$pwd = "";
$db_name = "pp_management";

$conn = mysqli_connect($server, $user_name, $pwd, $db_name);
if(!$conn){
    die("Could not connect to the server: " . mysqli_connect_error());
}
// echo "Connected with success !";
?>