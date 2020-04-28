<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
</head>

<body>
   
<?php
    $nazwa = 'plik.txt';
    $plik = fopen($nazwa, 'r');
    $dane = fread($plik, filesize($nazwa));
    fclose($plik);
    echo($dane);
   ?>



   

</body>
</html>