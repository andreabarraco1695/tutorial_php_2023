<?php

//----------- Creiamo una funzione

/*
function saluta(){
    echo "Ciao Andrea";
}

saluta();

$prova = function(){ // FUNZIONE ANONIMA IN QUANTO ASSEGNATA A UNA VARIABILE
    echo "Ciao Edoardo";
};

$prova();

*/

//----------- SCOPE DELLE FUNZIONI

/*
$numero = 5;
echo $numero . "<br>";

function saluta(){
    $numero = 7; //la variabile numero non è la stessa dichiarata fuori dalla funzione, sono distinte, come faccio a riferirmi alla variabile dichiarata sopra?
    $GLOBALS['numero'] = 10;
    echo $numero . "<br>";
    echo $GLOBALS['numero'] . "<br>";
};

saluta();
echo $numero;
*/

//-----------

$numero = 5;

function somma($valore1, $valore2){
    $somma = $valore1 + $valore2;
    echo $somma;
    return $somma;
}

somma($numero, 10);

?>