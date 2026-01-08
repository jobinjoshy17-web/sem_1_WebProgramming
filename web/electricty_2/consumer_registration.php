<?php

include("connection.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $consumer_number = $_POST["consumer_number"];
    $consumer_name = $_POST["consumer_name"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];

    if(empty($consumer_number) || empty($consumer_name) || empty($address) || empty($phone)){
        echo"<p style = 'color : red'>All fields are required!</p>";
    }
    else{
        $query = "INSERT into consumer_reg(consumer_number, consumer_name, address, phone)
                    VALUES('$consumer_number', '$consumer_name', '$address', '$phone')";

                    // Column names must NOT be inside quotes

        //echo $query;
        //exit;

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
    <h3>Consumer registration page</h3>

    <form method = "POST">
        <table border = "1">
            
            <tr>
                <td>Consumer number : </td>
                <td><input type="text" name = "consumer_number"></td>
            </tr>

            <tr>
                <td>Consumer name : </td>
                <td><input type="text" name = "consumer_name"></td>
            </tr>

            <tr>
                <td>Address : </td>
                <td><textarea name="address"></textarea></td>
            </tr>

            <tr>
                <td>Phone : </td>
                <td><input type="text" name = "phone"></td>
            </tr>

            <tr>
                <td colspan = "2" align = "center"><input type="submit"></td>
            </tr>

        </table>
    </form>
</body>
</html>