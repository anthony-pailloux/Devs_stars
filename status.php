
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