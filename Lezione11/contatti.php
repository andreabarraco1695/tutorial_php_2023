<?php require('esempio.php'); ?> <!-- Includo il file php da cui richiamare le mie funzioni, se il file non c'è viene restituito un fatal error -->
<!-- <?php //include('esempio.php'); ?> Se il file non c'è viene restituito un warning ma carica comunque tutta la pagina -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatti</title>
</head>
<body>
    <?php include('menu.html'); ?>
    <h1>Contatti</h1>
    <?php saluta(); ?>
</body>
</html>