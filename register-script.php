<?php
/*  Leggere tutti i campi mandati dal utente    */
$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$password2 = $_POST["password2"];


if ($password != $password2) {
    die("Le password non sono uguali");
}

//.....
include("credentials.php");
// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $database);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . "<br>");
}
echo "Connected successfully<br>";


$esiste = utente_esiste($conn, $username);
if ($esiste == true) {
    die("L'utente esiste già");
}else{
    nuovo_utente($conn, $nome, $cognome, $username, $password);

}










//funzioni
function utente_esiste($conn, $username)
{
    $sql = "SELECT username FROM utenti WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }

}
function nuovo_utente($conn, $nome, $cognome, $username, $password)
{
    $password_hash=  hash('sha256', $password);
    $sql = "INSERT INTO utenti (nome, cognome, username, password_hash) VALUES ('$nome','$cognome', '$username', '$password_hash')";
    $conn->query($sql);

}

// INSERT NEL DATABASE