<?php

$file = fopen('transactions.csv', 'r');

if($file){
    echo '<table>';
    echo '<tr> <th> Date</th>' . '<th>Amount</th>' . '<th>Description</th>' . '</tr>';
    while(($data = fgetcsv($file)) !== false){
        if($data[1] == ""){
            $data[1] = '???';
        }
        echo '<tr>' . '<td>' . $data[0]. '</td>' . '<td>' .$data[1] . '</td>' . '<td>' .$data[2] . '</td> </tr>';
    }
    echo '</table>';
}else{
    echo "Couldn't read the file";
}
