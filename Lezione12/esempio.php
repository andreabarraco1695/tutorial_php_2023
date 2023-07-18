<?php

    //REGEX -> Regular expression

    $testo = "Oggi è una splendida giornata anche se è prevista neve";

    //Match semplice

    /*
    $pattern = "/Og[gk]i/"; //parola che inizia per "Og", devi trovare un carattere "tra g e k" (Classi di caratteri), e deve finire per "i"
    if(preg_match($pattern, $testo)){ //preg_match verifica il match tra il pattern e il testo (almeno 1 match)
        echo "Match trovato!";
    } else{
        echo "Match non trovato";
    }
    */

    //[^gk] -> una qualsiasi lettera che NON SIA g o k
    //[a-z] -> tutti i caratteri in minuscolo dalla a alla z
    //[abc] -> matcha un carattere tra a, b o c


    /*
    $pattern  = "/è/";
    $matches = preg_match_all($pattern, $testo, $array); //preg_match_all restituisce il numero di match totali trovati per quel pattern
    echo $matches . " match sono stati trovati.";
    */


    //--------------- CLASSI PREDEFINITE
    // scrivere /d equivale a [0-9]
    // scrivere /D equivale a [^0-9]
    // ecc

    //Funzione che restituisce il nome di un'immagine senza spazi sostituiendoli con underscore

    /*
    $nomeImmagine = "logo brand nero.png" ;
    $patternSpazi = "/\s/" ;
    $replacement = "_" ;
    echo preg_replace($patternSpazi, $replacement, $nomeImmagine);
    */

    //--------------- QUANTIFICATORI

    //Ci consentono di indicare quante occorrenze cercare

    /*
    $pattern = "/[\s,]+/";
    $text = "My favourite colors are red, green and blue";
    $parts = preg_split($pattern, $text);

    foreach($parts as $part){
        echo $part . "<br>";      
    }
    */

    //--------------- ANCORE
    //Ci permette di identificare se un pattern si trvoa all'inizio o alla fine di una frase

    /*
    $pattern = "/^M/"; //tutti quegli elementi che iniziano per "M", aggiungendo il modificare "i" fuori dalla regola indichiamo che deve essera una ricerca NON case-sensitive
    $names = array("marco Rossi", "Luca Verdi", "Mattia Galli");
    $matches = preg_grep($pattern, $names); //Prende gli elementi dell'array che matchano il pattern

    foreach ($matches as $match){
        echo $match . "<br>";
    }
    */

    //--------------- MODIFICATORE DI PATTERN
    
    /*
    $pattern = "/^M/i"; //tutti quegli elementi che iniziano per "M", aggiungendo il modificare "i" fuori dalla regola indichiamo che deve essera una ricerca NON case-sensitive
    $names = array("marco Rossi", "Luca Verdi", "Mattia Galli");
    $matches = preg_grep($pattern, $names); //Prende gli elementi dell'array che matchano il pattern

    foreach ($matches as $match){
        echo $match . "<br>";
    }
    */

    //--------------- LIMITI DI UNA PAROLA

    $pattern = '/\bcar\w*/'; //limite di una parola, deve cominciare con car, il resto matcha un qualsiasi carattere per un numero infinito di volte
    $replacement = '<b>$0</b>';
    $text = 'Words begining whit car: cart, carrot, cartoon . Words ending witch car: scar, oscar, supercar .';
    echo preg_replace($pattern, $replacement, $text);
?>