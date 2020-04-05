<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
</head>

<body>

<pre>

<?php
   $liczba1 = $_GET['liczba1'];
   $liczba2 = $_GET['liczba2'];
   if(empty($liczba1)) echo "Nie podano pierwszej liczby\n";
   else echo "Liczba1: ", $liczba1, "\n";
   if(empty($liczba2)) echo "Nie podano drugiej liczby\n"; 
   else echo "Liczba2: ", $liczba2;
?>

</pre>

</body>
</html>