<?php

//---- UNIX Timestamp -> quantità di secondi passati dal 1 Gennaio 1970 00:00:00 GMT

//la funzione date() converte il timestamp in formato leggibile

//$data = date('d-m-Y', 1847525402);

/*
$data = date('d-m-Y H:i:s', time());

echo $data;
*/

//---- Ottenere una data da un timestamp

/*
$datamk = mktime(11, 37, 00, 18, 07, 2023); //bisogna indicare ora, minuto, secondo, giorno, mese e anno per cui ci interessa calcolare il timestamp
$datastrtime = strtotime('18-07-2023');
echo $datamk;
echo $datastrtime;
*/

//----- Sommare i giorni

$dataadd = date("d-m-Y", strtotime("now" . " - 7 days"));
echo $dataadd;

?>