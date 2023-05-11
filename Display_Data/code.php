<?php

$file = fopen('transactions.csv', 'r');

if($file){
    while(($data = fgetcsv($file)) !== false){
        echo $data[0];
    }
}else{
    echo "Couldn't read the file";
}
