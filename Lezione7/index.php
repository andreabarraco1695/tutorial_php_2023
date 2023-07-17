<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Costrutto IF</title>
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

    <?php $numero = 0; ?>
    
    <? if ($numero == 0): ?>
    <p>Condizione 1 verificata</p>
    <? elseif ($numero == 5): ?>
    <p>Condizione 2</p>
    <? else: ?>
    <p>Default content</p>
    <? endif; ?>

    
</body>
</html>