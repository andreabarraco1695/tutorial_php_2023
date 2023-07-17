<?php

$nome = "luca";
$eta = 23;
$temperatura = 36.07;
$is_online = false;
$interessi = ['calcio', 'basket', 'cinema'];
$fidanzata = NULL;

class Persona
{
    public $nome;
    public $cognome;

    public function __construct($nome, $cognome) //funzione costruttore che definisce nome e cognome della persona
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
    }
}

$persona1 = new Persona('Orazio', 'Rossi'); //Istanzio una nuova persona passando i parametri nome e cognome che verranno utilizzati dal costruttore

var_dump($nome); // la funzione var dump è una funzione che restituisce il TIPO della variabile, il numero di caratteri e a seguire il valore
var_dump($persona1);

?>