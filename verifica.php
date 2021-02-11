<?php
$username=$_POST["username"];
$password=$_POST["password"];

echo "Lo username è $username";
echo "La password è $password";


$servername = "localhost";
$username = "fiori";
$password = "BKGjofSOLmfAQLPE";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

    // prepare and bind
$stmt = $conn->prepare("SELECT * FROM utenti WHERE username=?");
$stmt->bind_param("s",$username);
$stmt->execute();

