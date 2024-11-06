<?php 
include 'index.html';
?>
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