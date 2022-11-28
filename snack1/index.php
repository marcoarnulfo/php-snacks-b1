<?php

$partite = [
    "olimpia" => 'Milano Cantù 55 60', //'Milano', 'Cantù', '55', '60',
    'Lorem' => 'Torino Cuneo 20 15', //'Torino', 'Cuneo', '20', '15',
    'Loremm' => 'Bra Savigliano 30 45',//'Bra', 'Savigliano', '30', '45',
    'Loremmm' => 'Napoli Venezia 50 20',//'Napoli', 'Venezia', '50', '20',
];


$partite2 = [
    [
        'home_team' => 'Cantù',
        'guest_team' => 'Milano',
        'home_points' => 55,
        'guest_points' => 60,
    ],
    [
        'home_team' => 'Cantù2',
        'guest_team' => 'Milano2',
        'home_points' => 40,
        'guest_points' => 50,
    ],
    [
        'home_team' => 'Cantù3',
        'guest_team' => 'Milano3',
        'home_points' => 30,
        'guest_points' => 20,
    ],
    [
        'home_team' => 'Cantù4',
        'guest_team' => 'Milano5',
        'home_points' => 40,
        'guest_points' => 10,
    ],
];



foreach ($partite as $key => $value) {
    # code...
    echo $key ." ". $value;
    echo '<br>';
    //echo $partite;
}

var_dump($partite2);

foreach ($partite2 as $value) {
    # code...
    echo $value['home_team']. "-". $value['guest_team']. " ". $value['home_points']. "|" . $value['guest_points'] .'<br>';
}



/*
## Snack 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60

*/
?>