<?php
## Snack 1
/* Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
 */

$basketPlay = [
    [
        'place' => 'Olimpia',
        'homeTeam' => 'Milano',
        'foreignTeam' => 'Cantù',
        'homeTeamPoints' => '55',
        'foreignTeamPoints' => '60',
    ],

    [
        'place' => 'Gotham',
        'homeTeam' => 'Batmans',
        'foreignTeam' => 'Jokers',
        'homeTeamPoints' => '100',
        'foreignTeamPoints' => '1',
    ],

    [
        'place' => 'Naboo',
        'homeTeam' => 'Republic',
        'foreignTeam' => 'Separatist',
        'homeTeamPoints' => '5',
        'foreignTeamPoints' => '2',
    ],

    [
        'place' => 'Mandalor',
        'homeTeam' => 'Mandalorian',
        'foreignTeam' => 'Empire',
        'homeTeamPoints' => '1',
        'foreignTeamPoints' => '60',
    ],
];


/* var_dump($basketPlay); */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-1</title>
</head>

<body>
<?php 
    for($i = 0; $i < count($basketPlay); $i++){
        echo $basketPlay[$i]["place"] . ' '  . $basketPlay[$i]["homeTeam"] . ' - ' . $basketPlay[$i]["foreignTeam"] . ' | ' . $basketPlay[$i]["homeTeamPoints"] . ' - ' . $basketPlay[$i]["foreignTeamPoints"] . '</br>';
        };
  
  ?>

</body>

</html>