<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
</head>

<body>

<pre>

<?php

    $mysql_host = 'localhost'; 
    $username = 'root';
    $password = '';
    $database = 'uczelnia';


    $dbh = new PDO('mysql:host=' . $mysql_host . ';dbname=' . $database , $username, $password );

    $insert = $dbh->exec("INSERT INTO studenci (id, imie, nazwisko, email, id_rok_studiow)
    VALUES ('4', 'Urszula', 'Wojewoda', 'uw@mail.com', 1)");
    
    $insert = $dbh->exec("INSERT INTO studenci (id, imie, nazwisko, email, id_rok_studiow)
    VALUES ('5', 'Robert', 'Raciborski', 'rr@mail.com', 2)");
    
    $insert = $dbh->exec("INSERT INTO studenci (id, imie, nazwisko, email, id_rok_studiow)
    VALUES ('6', 'Tadeusz', 'Cwalina', 'tc@mail.com', 1)");

    $id_rok = $_GET['id_rok_studiow'];

    $sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->bindParam(':id_rok_studiow', $id_rok, PDO::PARAM_INT);
    $sth->bindValue(':id_rok_studiow', "%{$id_rok}%");
    $sth->execute();
?>

</pre>

</body>
</html>