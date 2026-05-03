<?php





// function calculer($a, $b, $c, $result) {
//     if ($result === 0) {
//          echo $a + $b;
//     }else{
//         echo 'Erreur : division par zéro';
//     }
   
// }

// calculer($a, $b, $c, $result);


function calcul ($nombre1, $nombre2, $operateur)
{
    if ($operateur == '+')
    {
        return $nombre1 + $nombre2;
    }

    if ($operateur == '-')
    {
        return $nombre1 - $nombre2;
    }

    if ($operateur == '*')
    {
        return $nombre1 * $nombre2;
    }

    if ($operateur == '/')
    {
        if($nombre2 != 0)
            {
                return $nombre1 / $nombre2;
            }
        else {
            return 'impossible de diviser par zero';
        }
        
    }
}


echo(calcul (10, 0, '/'));
