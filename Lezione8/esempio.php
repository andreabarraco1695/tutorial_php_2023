<?php

//---------- ciclo for

/*
for($i=0; $i < 5; $i++){
    echo $i . "<br>";
}
*/

//---------- ciclo foreach - solo per array associativi

/*
$persona = [
    "nome" => "Luca", 
    "cognome" => "Rossi",
    "eta" => 25
];

foreach ($persona as $chiave => $valore){
    echo $valore . "<br>";
}
*/

//---------- ciclo while - Le istruzioni vengono eseguite solo se la condizione è verificata (possibile non vengano mai eseguite)

/*
$i = 0;
while($i < 5){
    echo $i . "<br>";
    $i++;
}
*/

//---------- ciclo do while - Le istruzioni vengono eseguite ALMENO 1 VOLTA

/*
$i = 5;
do{
    echo $i . "<br>";
    $i++;
}while( $i < 5 );
*/

//---------- break e continue

for($i=0; $i < 5; $i++){
    if($i == 3){
        continue; //Vai alla prossima iterazione
        //break; //ESCI DAL FOR
    }
    echo $i . "<br>";
}

?>