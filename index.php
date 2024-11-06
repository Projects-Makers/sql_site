<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Śląsk</title>
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/hamburger.css">
    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="style/auth.css">
    <link rel="stylesheet" href="style/fotter.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/menu.css">
    <link rel="stylesheet" href="style/register.css">
    <link rel="stylesheet" href="style/resonsive.css">
    
    <?php 
    include("baner.html");
    
    if (!isset($_GET["strona"]))
        {$plik = 'Glowna';}
    else
        {$plik = $_GET["strona"];}
    $roz = '.php';
    include("$plik$roz");
    include("stopka.html");
    ?>
    </head>
<body>
</body>
</html>
<script src="javascript/hamburger.js"></script>