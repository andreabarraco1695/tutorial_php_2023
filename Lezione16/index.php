<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="esempio.php" method="POST" enctype="multipart/form-data"> <!-- Enctype fondamentale definirlo per il caricamento delle immagini--> 
        <h2>Carica File</h2>
        <label for="fileSelect">File: </label>
        <input type="file" name="photo" id="fileSelect">
        <input type="submit" name="submit" value="Carica">
        <p><strong>Nota:</strong> Sono consentiti solo i formati .jpg, .jpeg, .gif, .png con una size massima di 5mb <br></p>
    </form>
</body>
</html>