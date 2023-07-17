<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEZIONE 8 - LOOP</title>
</head>
<body>

    <h1>Form Esempio</h1>

    <form action="esempio.php" method="POST">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Inserisci nome">
        <label for="cognome">Cognome</label>
        <input type="text" name="cognome" id="cognome" placeholder="Inserisci cognome">
        <input type="submit" value="Invia dati">
    </form>
    
    <ul>
        <?php for ($i = 1; $i < 6; $i++) : ?>
            <li>List Item <?php echo $i ?></li>
        <?php endfor; ?>
    </ul>
</body>
</html>