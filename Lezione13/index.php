<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM, Get e Post</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Compila Modulo</h1>
    <form action="esempio.php" method="POST"> <!-- Il metodo GET invia il dato alla luce del sole, verrà appeso all'URL, con il metodo POST invece le info non vengono appese nell'URL --> 
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" required placeholder="Inserisci il tuo nome">
        <label for="Cognome">Cognome</label>
        <input type="text" name="cognome" id="cognome" required placeholder="Inserisci il tuo cognome">
        <input type="submit" value="Invia modulo">
    </form>
</body>
</html>