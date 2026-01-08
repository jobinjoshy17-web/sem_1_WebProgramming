<?php

include("connection.php");
$query = "select * from consumer_reg";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)){
    echo $row["consumer_number"]. " | " .$row["consumer_name"]. " | " .$row["address"]. " | " 
    .$row["phone"]. "<br>"; 
}

?>