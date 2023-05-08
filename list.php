<?php
$list = [];

for($i = 0; $i < 10; $i++){
    if ($i % 2 == 0){
        $list[] = 'Nº Par: ' . $i;
    }else{
        $list[] = 'Nº Ímpar: ' . $i;
    }
}
echo '<pre>';
print_r($list);
echo '</pre>';

