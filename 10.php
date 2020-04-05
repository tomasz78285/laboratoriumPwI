<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
</head>

<body>
<h1>Zadanie 1</h1>
<?php
    for($i = 1; $i <= 15; ++$i){
        echo $i;
    }
    echo "\n";

    $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10 , 11, 12, 13, 14, 15);
    foreach ($arr as &$i) {
    echo $i;
}

    echo "\n";
     $i = 1;
    while ($i <= 15) {
        echo $i;
        $i++;
    }
?>

</body>
</html>