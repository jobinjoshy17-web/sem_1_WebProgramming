<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $names = $_POST["names"];
    $i = 1;
    foreach($names as $name){
        echo $i . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $name . "<br>";
        $i++;
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

    <form method = "POST">
        <table border = "1">
            
            <tr>
                <td>Name 1 : </td>
                <td><input type="text" name = "names[]"></td>
            </tr>

            <tr>
                <td>Name 2 : </td>
                <td><input type="text" name = "names[]"></td>
            </tr>

            <tr>
                <td>Name 3 : </td>
                <td><input type="text" name = "names[]"></td>
            </tr>

            <tr>
                <td>Name 4 : </td>
                <td><input type="text" name = "names[]"></td>
            </tr>

            <tr>
                <td>Name 5 : </td>
                <td><input type="text" name = "names[]"></td>
            </tr>

            <tr>
                <td colspan = "2" align = "center"><input type="submit"></td>
            </tr>
            
        </table>
    </form>
    
</body>
</html>