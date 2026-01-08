<?php
include("connection.php");

if($_SERVER["REQUEST_METHOD"] == "GET"){
    $roll = $_GET["roll"] ?? "";
    $science = $_GET["science"] ?? "";
    $maths = $_GET["maths"] ?? "";
    $english = $_GET["english"] ?? "";
    $total = (int)$science + (int)$maths + (int)$english; 

    if($roll === "" || $science === "" || $maths === "" || $english === ""){

        // === is a strict comparison operator that compares both value and data type.
        
        echo "All fields are required!<br><br>";
    }
    else{
        $query = "Insert into marks(roll, science, maths, english, total)
                    VALUES('$roll', '$science', '$maths', '$english', '$total')";

        $result = mysqli_query($conn, $query);

        if($result){
            echo "Inserted successfully!<br><br>";

            $query = "SELECT AVG(total) AS average, MAX(total) AS maximum, MIN(total) AS minimum
                        FROM marks";

            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);

            echo "Average Marks : " . round($row["average"], 2) . "<br>";
            echo "Maximum Marks : " . $row["maximum"] . "<br>";
            echo "Minimum Marks : " . $row["minimum"] . "<br><br>";
        }
        else{
            echo "Insertion failed!";
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

    <style>
        table {
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <form method = "GET">
        <table border = "1">
            <caption>Mark entry</caption>
            
            <tr>
                <td>Roll : </td>
                <td><input type="number" name = "roll"></td>
            </tr>
            
            <tr>
                <td>Name : </td>
                <td></td>
            </tr>
            
            <tr>
                <td>Science : </td>
                <td><input type="number" name = "science"></td>
            </tr>
            
            <tr>
                <td>Maths : </td>
                <td><input type="number" name = "maths"></td>
            </tr>
            
            <tr>
                <td>English : </td>
                <td><input type="number" name = "english"></td>
            </tr>
            
            <tr>
                <td colspan = "2" align = "center"><input type="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>