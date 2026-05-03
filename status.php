<?php

// $ages = [15, 18, 25, 0];


// function status($age) {
//     $result = ['majeur', 'mineur'];

//     if ($age >= 18) {
//         echo "{$age}: {$result[0]} <br>";
//     } else {
//         echo "{$age}: {$result[1]} <br>";
//     }
// } 

// foreach($ages as $age)
// {
//     status($age);
// }




// $ages = [15, 18, 25, 0];

// function status($age) {
//     $result = ["majeur", "mineur"];

//     if ($age >= 18) {
//         echo "{$age} {$result[0]} </br>";
//     } else {
//         echo "tu es {$result[1]} </br>";
//     }
// }

// foreach ($ages as $age) {
//     status($age);
// }



// $ages = [40, 35, 15, 11];

// function status($age) {
//     $result = ["majeur", "mineur"];

//     if ($age >= 18) {
//         echo "{$age} tu es {$result[0]} </br>";    
//     } else {
//         echo "{$age} tu es {$result[1]} </br>";
//     }
// }

// foreach ($ages as $age) {
//         status($age);
//     }



// $ages = [40, 35, 15, 11];

// function status($age) {
//     $result = ["majeur", "mineur"];
    
//     if ($age >= 18) {
//         echo "Super tu es {$result[0]} <br>";
//     }

//     else {
//         echo "Désolé tu es {$result[1]} <br>";
//     }
// }

// foreach ($ages as $age => $value) {
//     status($value);
// }







// $ages = [40, 35, 15, 11];

// function status($age) {
//     $results = ["Super tu es majeur", "Désolé petit tu es mineur"];

//     if ($age >= 18) {
//         echo "{$age}{$results[0]}";
//     }
//     else {
//         echo "{$age}{$results[1]}";
//     }
// }

// foreach($ages as $value) {
//     status($value);
// }











// $ages = [40, 35, 15, 11];

// function status($age) {
//     $results = ["majeur", "mineur"];

//     if ($age >= 18) {
//         echo "Tu as{$age}, tu es {$results[0]}";
//     }

//     else {
//         echo "Tu as {$age}, tu es {$results[1]}";
//     }
// }

// foreach ($ages as $value) {
//     status($value);
// }

$ages = [40, 35, 15, 11];

function status($age) {
    $results = ["majeur", "mineur"];

    if ($age >= 18) {
        echo "Tu as {$age} ans et tu es {$results[0]} <br>";
    } else {
        echo "Tu as {$age} ans et tu es {$results[1]} <br>";
    }
}

foreach($ages as $value) {
    status($value);
}





?>