<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
</head>

<body>
   
<?php
    $servername = "localhost";
    $username = "user";
    $password = "password";
    $dbname = "db";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT id, marka, model, pojemnosc FROM samochody WHERE id = 1 OR WHERE id = 3";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. "  marka: " . $row["marka"]. " model" . $row["model"]. " pojemnosc" . $row["pojemnosc"];
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
   ?>



   

</body>
</html>