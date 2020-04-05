<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>14</title>

</head>

<body>

<?php
      $liczba1 = $_POST['liczba1'];
      $liczba2 = $_POST['liczba2'];
      if(empty($liczba1)) echo "Nie podano pierwszej liczby\n";
      else echo "Liczba1: ", $liczba1, "\n";
      if(empty($liczba2)) echo "Nie podano drugiej liczby\n"; 
      else echo "Liczba2: ", $liczba2, "\n";

      echo "Suma: ", $liczba1 + $liczba2, "\n";
      echo "Różnica: ", $liczba1 - $liczba2, "\n";
      echo "Iloczyn: ", $liczba1 * $liczba2, "\n";
      if($liczba2 != 0) echo "Iloraz: ", $liczba1 / $liczba2; 
      else echo "Nie można dzielić przez zero";
  ?>
</body>
</html>