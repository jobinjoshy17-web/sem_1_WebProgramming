<?php

$host = "localhost";
$user_name = "root";
$pwd = "";
$port = "3307";
$db = "final_electricity";

$conn = mysqli_connect($host, $user_name, $pwd, $db, $port); // ordering matters, port after db

if(!$conn){
    die('<p style = "color : red; font-weight : bold">Connection failed!</p>'. mysqli_connect_error());
}
echo '<p style = "color : green; font-weight : bold">Connection successful!</p>';
?>