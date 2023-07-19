<?php

//LEGGERE I FILE

$nomeFile = "note.txt";
$testo = "Ciao sono una frase dinamica";
//------------ Apriamo un file in sola lettura

//$ref = fopen($file, "r");

//------------ Check per verificare che un file esista

if (file_exists($nomeFile)){
    //$refFile = fopen($nomeFile, "w"); //Apro un file in scrittura, con w cancello tutto il contenuto del file se faccio delle modifiche
    $refFile = fopen($nomeFile, "a"); //Apro un file in scrittura preservandone il contenuto, le modifiche saranno accodate al pregresso
    //rename($nomeFile, "nome_nuovo.txt"); //Metodo per cambiare il nome di un file   
    //unlink($nomeFile); //Metodo per cancellare un file
    fwrite($refFile, $testo); //Metodo per scrivere del testo su un file

    $content = fread($refFile, filesize($nomeFile)); // Metodo per leggere il contenuto del file, primo parametro -> riferimento del file, secondo parametro -> quanto contenuto vogliamo recuperareh
    echo $content;
    
    fclose($refFile);

    //$content = file_get_contents($nomeFile); -> Con questo metodo posso leggere il contenuto del file senza aprirlo e dunque chiuderlo
    //file_put_contents($nomeFile, &testo); -> Con questo metodo sovrascrivo il contenuto del file senza aprirlo, si comporta di fatto come "w"
}
else{
    echo "Il file non esiste.";
}



?>