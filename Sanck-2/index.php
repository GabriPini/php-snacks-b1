<?php
/* ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */

$name = $_GET["name"];
var_dump($name );
$mail = $_GET["mail"];
var_dump($mail  );
$age = $_GET["age"];
var_dump($age);

/* 
Controllo la lunghezza del nome  con strlen , 
Controllo che mail abbia un . ed una @ con strpos,
Controllo che age sia un numero con is_numeric,
 */
if(strlen($name) > 3 && strpos($mail , '.') && strpos($mail , '@') && is_numeric($age)){
 // se tutto corrisponde “Accesso riuscito”
    echo ("<h2>Accesso Riuscito</h2>");
}else{

  // altrimenti “Accesso negato”
  echo ("<h2>Accesso Negato</h2> ");
}
?>