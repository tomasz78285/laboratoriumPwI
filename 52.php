<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
</head>

<body>
   
<form action="" method="post">
<select name="dzial" onchange="this.form.submit()">
<option value="">Wybierz dział</option>
<option value="kadry">Kadry</option>
<option value="ksiegowosc">Księgowość</option>
<option value="produkcja">Produkcja</option>
</select>
</form>

<?php

$mysql_host = 'localhost'; 
$username = 'root';
$password = '';
$database = 'uczelnia';


$dbh = new PDO('mysql:host=' . $mysql_host . ';dbname=' . $database , $username, $password );



    $id_rok = $_GET['id_rok_studiow'];
    $select = query("SELECT * FROM studenci WHERE id_rok_studiow='$id_rok'")
    
    while($rek = mysql_fetch_array($select)) {
        echo $rek['nazwisko']."<br />";
    }


?>

</body>
</html>