<?php

$stringa = "lorem ipsum";
$nome = 'Luca';
$stringaDiProva = " Sono a CAMMellO ";

//echo $stringa . $nome; //il carattere " . " serve a concatenare le stringhe, quando abbiamo apostrofi nelle frasi è utile utilizzare il doppio apice e non l'apice singoloe
//echo $nome . " è l'amore";                        //quando abbiamo apostrofi nelle frasi è utile utilizzare il doppio apice e non l'apice singolo

//----------------- trasformiamo tutta una stringa in MINUSCOLO

//echo " " . strtolower($stringaDiProva);

//----------------- trasformiamo tutta una stringa in MAIUSCOLO

//echo " " . strtoupper($stringaDiProva);

//----------------- rimuoviamo gli spazi da una stringa

//echo trim($stringaDiProva);

//----------------- contiamo le parole della nostra stringa

//echo str_word_count($stringaDiProva);

//----------------- generiamo una stringa al contrario

//echo strrev($stringaDiProva);

//----------------- cercare la posizione di una parola in stringa

//echo strpos($stringaDiProva, 'Sono');

//----------------- prendere una parte di stringa (indico da quale posizione voglio parte sino a quando (non obbligatorio il sino a))

//echo substr($stringaDiProva, 2) . "\n <br>"; // "\n <br>" -> andata a capo su video 
//echo substr($stringaDiProva, 2, 5) ;

//----------------- sostituire parti di una stringa

//echo str_replace('Sono', 'CIAO', $stringaDiProva); // 1o parametro -> parola da rimuovere , 2o parametro -> parola nuova da inserire, 3o parametro -> variabile a cui cambiare il valore

?>