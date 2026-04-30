<?php

$age = [15, 18, 25, 0];
$result = ['majeur', 'mineur'];

function status($age, $result) {
    if ($age >= 18) {
        echo $result;
    } else {
        echo '$mineur';
    }
} 

var_dump($result);



?>