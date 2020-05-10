<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
</head>

<body>
   
<?php
    $db = new PDO('mysql:host=localhost;dbname=uczelnia', 'username', 'password');

   try
{
    $db = new PDO('mysql:host=localhost;dbname=nazwa_bazy', 'nazwa_uzytkownika', 'haslo');
}
catch (PDOException $e)
{
    print "Błąd połączenia z bazą!: " . $e->getMessage() . "<br/>";
    die();
}
   ?>
$statement = $db->query('SELECT marka, model, pojemnosc FROM samochody WHERE id = 1 AND WHERE id = 3');
foreach($statement as $wiersz)
{
    echo($wiersz['marka']." ".$wiersz['model']." ".$wiersz['pojemnosc']."<br />");
}
$statement->closeCursor();


   

</body>
</html>
