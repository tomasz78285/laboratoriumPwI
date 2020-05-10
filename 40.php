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

$sql = "INSERT INTO studenci (id, imie, nazwisko, email, id_rok_studiow)
VALUES ('1', 'Jan', 'Kowalczyk', 'jk@mail.com', 1)";

$sql = "INSERT INTO studenci (id, imie, nazwisko, email, id_rok_studiow)
VALUES ('2', 'Anna', 'Boruc', 'ab@mail.com', 2)";

$sql = "INSERT INTO studenci (id, imie, nazwisko, email, id_rok_studiow)
VALUES ('3', 'Jakub', 'Szewc', 'mc@mail.com', 1)";

$sql = "INSERT INTO rok (id, nazwa, kierunek, stopien)
VALUES ('1', 'stacjonarne', 'informatyka', 1)";

$sql = "INSERT INTO rok (id, nazwa, kierunek, stopien)
VALUES ('2', 'niestacjonarne', 'matematyka', 2)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
   
</body>
</html>