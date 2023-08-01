<?php

// ----- Creare una nuova cartella -> mkdir()
/*
$nomeCartella = "cartellaProva";

if (!file_exists($nomeCartella)){
    if(mkdir($nomeCartella)){
        echo "Cartella creata con successo";
    }else{
        echo "Errore durante la creazione della cartella";
    }
}else{
    echo "La cartella esiste già";
}
*/

// ----- Copiare file da un posto all'altro -> copy()

/*
$nomeCartella = "cartellaProva";
$nomeFile = "filecopiato.txt";
$nuovoFile = $nomeCartella . "/" . $nomeFile;

if (file_exists($nomeFile)){
    if(copy($nomeFile, $nuovoFile)){
        echo "File copiato con successo";
    }else{
        echo "Errore durante la copia del File";
    }
}else{
    echo "Il file non esiste";
}
*/

// ----- Mostrare tutti i file di una cartella scandir()

/*
function mostraFile($path){
    if(file_exists($path) && is_dir($path)){ //esiste ed è una cartella?
        $result = scandir($path);
        
        $files = array_diff($result, array('.', '..'));

        if(count($files) > 0){
            foreach($files as $file){
                if(is_file("$path/$file")){
                    echo "$path/$file" . "<br>";
                }else if (is_dir("$path/$file")){
                    mostraFile("$path/$file");
                }
            }
        }else{
            echo "Non sono stati trovati file nella cartella.";
        }
    }else{
        echo "ERRORE: La cartella non esiste.";
    }
}

mostraFile("cartellaProva");
*/
// ----- Mostrare tutti i file di un certo tipo glob()

$files = glob("cartellaProva/*.txt"); //prendo tutti gli elementi di tipo txt su variabile di nome files

foreach($files as $file){
    echo basename($file) . " (size: " . filesize($file) . " bytes)" . "<br>";
}

?>