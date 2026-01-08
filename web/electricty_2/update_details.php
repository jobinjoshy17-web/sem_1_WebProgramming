<?php

include("connection.php");
$query = "UPDATE consumer_reg
            SET address = 'Snowland', phone = '4343'
            where consumer_number = '444'";
$result = mysqli_query($conn, $query);

if($result){
    echo"Updated successfully!<br>";
}
else{
    echo"Updation failed".mysqli_error($conn);
}

// Deletion
$query = "DELETE from consumer_reg where consumer_name = 'Jobin'";
if($result){
    echo"Deleted successfully!";
}
else{
    echo"Deletion failed".mysqli_error($conn);
}

?>