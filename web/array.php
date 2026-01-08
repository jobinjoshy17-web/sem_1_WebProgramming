<?php

$names = ["John", "Alex", "Sara", "Mike", "Emma"];
$i = 1;

foreach ($names as $name){
    echo $i . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $name . "<br>";
    $i++;
}

array_push($names, "Orange", "Kiwi", "Lemon");

echo "-----------------<br>";
for ($j = 0; $j < count($names); $j++){
    echo $names[$j]. "<br>";
}

?>