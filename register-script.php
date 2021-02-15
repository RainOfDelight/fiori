<?php
/*  Leggere tutti i campi mandati dal utente    */
$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$username = $_POST["username"];
//.....
$servername = "localhost";
$dbusername = "fiori";
$dbpassword = "BKGjofSOLmfAQLPEBKGjofSOLmfAQLPE1!-@";
$database = "fiori";
// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $database);
//Connessione al database

$servername = "localhost";
$dbusername = "fiori";
$dbpassword = "BKGjofSOLmfAQLPEBKGjofSOLmfAQLPE1!-@";
$database = "fiori";

$conn = new mysqli($servername, $dbusername, $dbpassword, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<br>");
}
echo "Connected successfully<br>";


// INSERT NEL DATABASE