<?php

//heart shape pattern in <3 php <3

echo "<h2 style='text-align: center; font-size:40px'>";
for ($r = 0; $r < 6; $r++){
    for ($c = 0; $c < 7; $c++){
       if( ($r == 0 && $c % 3 != 0) || ($r == 1 && $c % 3 == 0) || ($r - $c == 2) || ($r + $c == 8)){
           echo "*";
        }
       else{
           echo "&nbsp;&nbsp;&nbsp";
       }
    }
    echo '<br>';
}
echo "</p>";
