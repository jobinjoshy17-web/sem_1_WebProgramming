<?php

include("connection.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["user_name"];
    $pwd = $_POST["pwd"];

    if(empty($name) || empty($pwd)){
        echo'<p style = "color : red">All fields are required!</p>';
    }
    else{
        $query = "select * from admin_login where username = '$name' and password = '$pwd'";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) == 1){
            header("adminHome.php");
            exit();
        }
        else{
            echo'<p style = "color : red">Invalid credentials!</p>';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login page</title>
</head>
<body>
    <h3>Admin login page</h3>

    <form method = "POST">
        <table border = "1">

            <tr>
                <td>User name : </td>
                <td><input type="text" name = "user_name"></td>
            </tr>
            
            <tr>
                <td>Password : </td>
                <td><input type="password" name = "pwd"></td>
            </tr>

            <tr>
                <td colspan = "2" align = "center"><input type="submit"></td>
            </tr>

        </table>
    </form>
</body>
</html>