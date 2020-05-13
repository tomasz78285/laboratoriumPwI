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

$update = $dbh->query("UPDATE studenci SET nazwisko = 'Malinowski' WHERE id = 3");


   ?>
   

</body>
</html>
