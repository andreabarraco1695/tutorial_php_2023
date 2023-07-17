<?php

//------------ 2 modi per creare un array

$cittarid = ['Milano', 'Firenze', 'Roma']; //metodo ridotto

$cittafunc = array('Milano', 'Firenze', 'Roma'); //metodo con funzione

//------------ come accedo agli elementi di un array?

//echo $cittarid[0];
//echo $cittafunc[0];

//------------ come stampare a schermo tutti gli elementi dell'array?

/*
for($i=0; $i < count($cittarid); $i++){
    echo $cittarid[$i] . "<br>";
}
*/

//------------ Cosa sono gli array associativi? array il cui indirizzo non è individuato da una posizione ma dal nome del campo, si parla di oggetti con attributi


$persona = [
    "nome" => "Luca",
    "cognome" => "Rossi",
    "eta" => 25
];

//echo $persona["nome"];


//------------ Come stampo tutti gli elementi di un array associativo? utilizzo il foreach

/*
foreach ($persona as $chiave => $valore){ //per ogni oggetto di tipo persona identificato da una chiave e un valore fai qualcosa:
    echo $chiave . " => " . $valore . "<br>";
}
*/

//------------ Array multidimensionali -> array che contengono altri array

/*
$classi = [
    ["Luca", "Marco", "Anna"],
    ["Leonardo", "Mattia", "Paola"]
];
*/

// Come accedo a questi dati?

//echo $classi[0][2]; //La prima cella riguarda a quale degli array accedere, la seconda cella riguarda il valore da andare a prelevare nell'array

/*
for ($classe=0; $classe < count($classi); $classe++){
    echo "<br>Classe: " . $classe . "<br><br>";
    for ($alunno=0; $alunno < count($classi[$classe]); $alunno++){
        echo $classi[$classe][$alunno] . "<br>";
    };
};
*/

//------------ Riordinare un array sort(), rsort()

/*
sort($cittarid);

print_r($cittarid); //print r viene utilizzato per guardare il contenuto dell'array

rsort($cittarid);

print_r($cittarid);
*/

//------------ Posso fare lo stesso con gli array associativi? SI, ma con altre funzioni

//------------ Ordine associativo per chiave ksort(), krsort()

/*
ksort($persona);

print_r($persona);

krsort($persona);

print_r($persona);
*/

//------------ Ordine associativo per valore asort(), arsort()

/*
asort($persona);
print_r($persona);


arsort($persona);
print_r($persona);
*/

//------------ Come aggiungere un elemento alla fine di un array? array_push()

/*
array_push($cittarid, 'Napoli');
print_r($cittarid);
*/

//------------ Come rimuovere un elemento alla fine di un array? array_pop()

/*
array_pop($cittarid);
print_r($cittarid);
*/

//------------ Come aggiungere elementi all'inizio dell'array? array_unshift()

/*
array_unshift($cittarid, 'Napoli');
print_r($cittarid);
*/

//------------ Come rimuovere elementi all'inizio dell'array? array_unshift()


array_shift($cittarid);
print_r($cittarid);


?>