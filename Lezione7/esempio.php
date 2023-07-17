<?php

//----- costrutto if

/*
$nome = 'Crudo';

if($nome == "Luca"){
    echo "Ciao Luca";
}
elseif($nome == 'Marco'){
    echo "Ciao Marco";
}
else{
    echo "Ciao " . $nome;
}
*/

//----- operatori logici AND ( && ) OR ( || ) NOT ( ! )

/*
$is_online = true;

if(!$is_online){
    echo "OK!";
}else{
    echo "no";
}
*/

//---- switch statement -> Usato per sostituire l'if con tanti "casi"

$numeroPreferito = 22;

switch ($numeroPreferito){
    case 1:
        echo "Il tuo numero preferito è l'1";
        break; //Fondamentale per uscire anticipatamente dal processo
    case 21:
        echo "Il tuo numero preferito è il 21";
        break;
    case 99: 
        echo "Il tuo numero preferito è il 99";
        break;
    default:
        echo "Non hai un numero preferito, vergognati!"; //nel case di default non è necessario inserire il break in quanto è già alla fine
}

?>