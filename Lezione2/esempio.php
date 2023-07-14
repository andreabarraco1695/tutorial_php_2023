<?php

// -> Commento su una sola riga

/*

-> Commento su più righe

*/

$nome1 = "Andrea"; //La dichiarazione di una variabile non inizia MAI per numero e nemmeno per "_" -> appartiene alle variabili globali
$nome_cognome='';
$nomeCognome="";
$nome = $_POST['nomeNA']; //E' il "name" associato alla input text del foglio html

//Quelle indicate sono tutte variabili superglobali

function saluta(){

    //Lo scope di questa variabile non è lo stesso di quella superglobale, ciò che succede dentro la funzione non intacca la variabile (avente stesso nome) al di fuori. Inoltre se non dichiarassi la variabile dentro la funzione riceverei un errore
    $nome = 'Orazio';
    echo $nome;

}

function saluta2(){
    //In questo modo vado a intaccare la variabile globale
    $GLOBALS['nome'] = 'Orazio';
    echo $GLOBALS['nome'];

}

saluta2();

echo $nome; //con "echo" stampo a video qualcosa

//Cosa sono le variabili super globali?

//-----------------------------------------------//

define('INDIRIZZO', 'Piazza Roma'); //Si utilizza per definire costanti dentro le funzioni
const ADDRESS = 'Viale Genova'; //Non si può definire dentro le variabili

echo INDIRIZZO;
echo ADDRESS;

?>
