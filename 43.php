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

    $select = $dbh->query("SELECT * FROM studenci");

    
   ?>

</body>
</html>
