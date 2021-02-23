<?php
session_start();
if(empty($_SESSION["username"])){
    echo "Non sei loggato";
    die();
}
include ("credentials.php");
// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<br>");
}
echo "Connected successfully<br>";



echo $_SESSION["username"] . "<br>";
echo "Questo è il tuo carrello<br>";
$username_id=get_username_id($conn, $_SESSION["username"]);
echo $username_id;












//funzioni

function get_username_id($conn, $username){

    $sql = "SELECT id FROM `utenti` WHERE username='$username' ";
    $conn->query($sql);
    //leggere il numero restituito dalla query
    // ritornarlo

}


