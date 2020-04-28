<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
</head>

<body>
   
<?php
    $nazwa = 'plik.txt';
    $dane = "Hello, World!";
    $plik = fopen($nazwa, 'a');
    fputs($plik, $dane);
    fclose($plik);
    echo($dane);

?>

   

</body>
</html>