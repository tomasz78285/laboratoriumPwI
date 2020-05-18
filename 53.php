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
    $id_rok = $_GET['id_rok_studiow'];
    $select = query("SELECT * FROM studenci WHERE id_rok_studiow='$id_rokal'")
    
    while($rek = mysql_fetch_array($select)) {
        echo $rek['nazwisko']."<br />";
    }
    $delete = $dbh->exec("DELETE FROM studenci WHERE id_rok_studiow='$id_rok'");
    



    $sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->bindParam(':id_rok_studiow', $id_rok, PDO::PARAM_INT);
    $sth->bindValue(':id_rok_studiow', "%{$id_rok}%");
    $sth->execute();
?>

</pre>

</body>
</html>