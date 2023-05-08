<?php
$results = [];
function operators($num1, $num2){
    $sum = $num1 + $num2;
    $sub = $num1 - $num2;
    $div = $num1 / $num2;
    $mult = $num1 * $num2;
}

operators(5 , 6);

for($i = 0; $i < count($results); $i++){
    echo '<pres>';
    echo $results[i];
    echo '</pres>';
}
