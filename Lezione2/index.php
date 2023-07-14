<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lezione 03 PHP</title>
        <link rel="stylesheet" href="style.css">
        <script src="myScript.js" defer></script>
    </head>

    <?php

    $nlabel = 'Nome'; //Dichiarazione Variabili in php

    ?>

    <body>

        <h3>Esempio PHP</h3><br>
        <form action="esempio.php" method="post">
            <label for="nome">
                <?php echo $nlabel; ?><br> <!-- richiamo qui la variabile nome -->
            </label>
            <input type="text" name="nomeNA" id="nomeID" placeholder="Inserisci nome"> <!-- Il campo che viene preso in considerazione da php è il campo "name", non il campo "id" -->
            <input type="submit" value="Invia">
        </form>

    </body>
</html>