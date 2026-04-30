<?php
$a = 10;
$b = 3;
$c = 0;
$result = 0;


function calculer($a, $b, $c, $result) {
    if ($result === 0) {
         echo $a + $b;
    }else{
        echo 'Erreur : division par zéro';
    }
   
}

calculer($a, $b, $c, $result);






