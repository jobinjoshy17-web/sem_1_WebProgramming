<?php

$host = "localhost";
$user = "root";
$pwd = "";
$db = "final_electricity";
$port = "3307";

$conn = mysqli_connect($host, $user, $pwd, $db, $port);

if(!$conn){
    die('<p style = "color : red; font-weight : bold">Connection failed!</p>'.mysqli_connect_error());
}
echo '<p style = "color : green; font-weight : bold">Connection successful!</p>';

?>