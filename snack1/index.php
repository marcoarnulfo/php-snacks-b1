<?php

$partite = [
    "olimpia" => 'Milano Cantù 55 60', //'Milano', 'Cantù', '55', '60',
    'Lorem' => 'Torino Cuneo 20 15', //'Torino', 'Cuneo', '20', '15',
    'Loremm' => 'Bra Savigliano 30 45',//'Bra', 'Savigliano', '30', '45',
    'Loremmm' => 'Napoli Venezia 50 20',//'Napoli', 'Venezia', '50', '20',
];

/*
$partite2 = [
    "olimpia" =>  'Milano', 'Cantù', '55', '60',
    'Lorem' =>  'Torino', 'Cuneo', '20', '15',
    'Loremm' => 'Bra', 'Savigliano', '30', '45',
    'Loremmm' => 'Napoli', 'Venezia', '50', '20',
];

*/

foreach ($partite as $key => $value) {
    # code...
    echo $key ." ". $value;
    echo '<br>';
    //echo $partite;
}

/*
foreach ($partite2 as $key => $value) {
    # code...
    echo $value;
    echo '<br>';
}
*/


/*
## Snack 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60

*/
?>