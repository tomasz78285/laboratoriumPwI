<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
</head>

<body>
   
<?php

        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "myDB";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "DELETE FROM studenci WHERE id = 2";

        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
   ?>

</body>
</html>