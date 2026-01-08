<?php

include("connection.php");
if($_SERVER["REQUEST_METHOD"] == "GET"){
    $number = $_GET["consumer_number"] ?? ''; // Null coalescing op is a must
    $units = (int)($_GET["units"] ?? 0);    // intval() can also be used.
    $bill = $units * 1000;

    if(empty($number) || empty($units)){
        echo"<p style = 'color : red'>All fields are required!</p>";
    }
    else{
        $query = "INSERT into bill_entry(consumer_number, units, bill)
                    VALUES('$number', '$units', '$bill')";
        $result = mysqli_query($conn, $query);

        if($result){
            echo"Record inserted successfully!";
        }
        else{
            echo"Insertion failed!".mysqli_error($conn);
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Bill entry page</h3>
    <form>
        <table border = "1">
            
            <tr>
                <td>Number : </td>
                <td><input type="text" name = "consumer_number"></td>
            </tr>
            
            <tr>
                <td>Units</td>
                <td><input type="number" name = "units"></td>
            </tr>
            
            <tr>
                <td colspan = "2" align = "center"><input type="submit"></td>
            </tr>

        </table>
    </form>
</body>
</html>