<?php
/* ## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe.
 Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
 Stampare Nome, Cognome e la media dei voti di ogni alunno*/

 $students = [
    [
        'name'=> 'Luke',
        'lastname' => 'Skywalker',
        'grades' => [6,4,6,7],
    ],
    [
        'name'=> 'Mando',
        'lastname' => 'TheMandalorian',
        'grades' => [9,8,9,9],
    ],
    [
        'name'=> 'Obi Wan',
        'lastname' => 'Kenobi',
        'grades' => [10,9,10,10],
    ],
    [
        'name'=> 'Boba',
        'lastname' => 'Fett',
        'grades' => [],
    ],
];

for($i=0; $i < count($students); $i++){

    $totalGrades= count($students[$i]['grades']);

    if($totalGrades>0){

        $sum = array_sum($students[$i]['grades'])/$totalGrades ;

    }else{

        $sum = 'Si è ritirato dagli studi ';

    }

    echo('<h2>' . $students[$i]['name'] . ' ' . $students[$i]['lastname'] . ' - ' . $sum  .'</h2>'); 
};

?>

