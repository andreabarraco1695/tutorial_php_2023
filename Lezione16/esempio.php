<?php

//Caricare file con php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        print_r($_FILES["photo"]);
        $estensioni_permesse = array("jpg" => "image/jpg", "jpeg" => "img/jpeg", "gif" => "image/gif", "png" => "image/png");
        $nome_file = $_FILES["photo"]["name"];
        $tipo_file = $_FILES["photo"]["type"];
        $dimensione_file = $_FILES["photo"]["size"];

        //Verifichiamo l'estensione del file
        $estensione = pathinfo($nome_file, PATHINFO_EXTENSION);
        if(!array_key_exists($estensione, $estensioni_permesse))  die("Errore: Seleziona un formato valido");

        //Verifichiamo la grandezza massima 5mb
        $dimensione_massima = 5 * 1024 * 1024;
        if($dimensione_file > $dimensione_massima) die("Errore: La grande è superiore al limite di 5 mb");

        //Verifichiamo il tipo MIME
        if(in_array($tipo_file, $estensioni_permesse)){
            //Controlliamo se il file esiste già
            if(file_exists("upload/" . $nome_file)){
                echo $nome_file . " esiste già.";
            } else {
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $nome_file);
                echo "Il tuo file è stato caricato con successo.";
            }
        }
    } 
}

?>