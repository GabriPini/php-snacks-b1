<?php
/* ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta */

$randomNumbers =[];
/* Stabilisco che l'array non deve essere piu lungo di 15  */
while(count($randomNumbers) < 15){
   // stabilisto il numero random tra 1 e 100
    $random = rand(1,100);
  //faccio in modo che non ci siano numeri duplicati 
    if(!in_array($random,$randomNumbers)){

        $randomNumbers[] = $random;
    };
    
    sort($randomNumbers);
};
var_dump($randomNumbers);
?>