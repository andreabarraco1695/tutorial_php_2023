<?php

$operatore1 = 3;
$operatore2 = 3.4;
$operatore3 = '10';
$operatore4 = '10 amici';
$operatore5 = (int)'10'; //In questa maniera sto effettuando il casting di un elemento

//----------- verifichiamo  se il nostro operatore è int

//echo var_dump(is_int($operatore1));
//var_dump(is_int($operatore1));

//----------- verifichiamo  se il nostro operatore è float

//var_dump(is_float($operatore2));

//----------- sommiamo 2 variabili, 1 numerico e una stringa che rappresenta un numero

//echo $operatore1 + $operatore3; //a differenza di javascript, se un numero viene rappresentanto sotto forma di stringa automaticamente lo casta in numero e fa la somma con altro numero

//echo $operatore1 + $operatore4; //qui avrò un errore

//var_dump($operatore5);

//----------- calcoliamo il valore assoluto di un numero

//var_dump(abs($operatore1));

//----------- calcoliamo il valore minimo di una serie di numeri

//echo min(10, 50, 70, 1, 100);

//----------- calcoliamo il valore massimo di una serie di numeri

//echo max(10, 50, 70, 1, 100);

//----------- calcoliamo la radice quadrata di un numero

//echo sqrt(25);

//----------- arrotondiamo un numero

//echo round(0.51);

//----------- generiamo un numero randomico (da un range indicato estremi compresi)

//echo rand(0,100);

//----------- operatori + - * / % **

//----------- operatori di assegnazione +=, -=, /=, *=

//----------- incremento e decremento $x++, $x--

$operatore1++;

echo $operatore1;

?>


