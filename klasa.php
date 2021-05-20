<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekatdb";

// konekcije
$conn = new mysqli($servername, $username, $password, $dbname);
// provjera
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT tip, naziv, umjetnik, drzava, opis FROM projekat1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "Informacije:" . "<br>";
  // dobavljanje informacija
  while($row = $result->fetch_assoc()) {
    echo    "<tr>
                <th>" .$row["tip"]. "</th>
                <th>" .$row["naziv"]. "<br>". "</th>
            </tr>
            <tr>
                <th>" . "Umjetnik i porijeklo: " .$row["umjetnik"]. "</th>
                <th>" .$row["drzava"]. "<br>". "</th>
            </tr>
            <tr>
                <th>" . "Opis: " .$row["opis"]. "<br>". "</th>
            </tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();

echo "<br>";
?>
<img src="images/monalisa1.jpg" alt="MonaLisa"> 

<?php

echo "<br><br>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekatdb";

// konekcije
$conn = new mysqli($servername, $username, $password, $dbname);
// provjera
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT tip, naziv, umjetnik, drzava, opis FROM projekat2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "Informacije:" . "<br>";
  // dobavljanje informacija
  while($row = $result->fetch_assoc()) {
    echo    "<tr>
                <th>" .$row["tip"]. "</th>
                <th>" .$row["naziv"]. "<br>". "</th>
            </tr>
            <tr>
                <th>" . "Umjetnik i porijeklo: " .$row["umjetnik"]. "</th>
                <th>" .$row["drzava"]. "<br>". "</th>
            </tr>
            <tr>
                <th>" . "Opis: " .$row["opis"]. "<br>". "</th>
            </tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
<img src="images/david2.jpg" alt="David"> 