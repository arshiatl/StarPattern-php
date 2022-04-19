<?php

echo "<p style=\"font-size: 35px;\">";


$rows = 4;
$n = 1;
for ($i = 1; $i <= $rows; $i++){
    for($k = $rows; $k > $i; $k--){
        echo "&nbsp;&nbsp";
    }
    for($j = 1; $j <= $i; $j++){
        echo $n, "&nbsp;&nbsp";
        $n++;
    }
    echo "</br>";
}
