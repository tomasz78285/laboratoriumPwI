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

    $id_rok = $_GET['id_rok_studiow'];
    $select = query("SELECT * FROM studenci WHERE id_rok_studiow='$id_rok'")
     
    
    ?>

</body>
</html>