<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
</head>

<body>
   
<?php

$mysql_host = 'localhost'; 
$username = 'root';
$password = '';
$database = 'uczelnia';

$dbh = new PDO('mysql:host=' . $mysql_host . ';dbname=' . $database , $username, $password );

$insert = $dbh->exec("INSERT INTO studenci (id, imie, nazwisko, email, id_rok_studiow)
VALUES ('1', 'Jan', 'Kowalczyk', 'jk@mail.com', 1)");

$insert = $dbh->exec("INSERT INTO studenci (id, imie, nazwisko, email, id_rok_studiow)
VALUES ('2', 'Anna', 'Boruc', 'ab@mail.com', 2)");

$insert = $dbh->exec("INSERT INTO studenci (id, imie, nazwisko, email, id_rok_studiow)
VALUES ('3', 'Jakub', 'Szewc', 'mc@mail.com', 1)");

$insert = $dbh->exec("INSERT INTO rok (id, nazwa, kierunek, stopien)
VALUES ('1', 'stacjonarne', 'informatyka', 1)");

$insert = $dbh->exec("INSERT INTO rok (id, nazwa, kierunek, stopien)
VALUES ('2', 'niestacjonarne', 'matematyka', 2)");


?>
   
</body>
</html>
