<?php
$username=$_POST["username"];
$password=$_POST["password"];

echo "Lo username è $username<br>";
echo "La password è $password<br>";


$servername = "localhost";
$dbusername = "fiori";
$dbpassword = "BKGjofSOLmfAQLPEBKGjofSOLmfAQLPE1!-@";
$database = "fiori";
// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<br>");
}
echo "Connected successfully<br>";



$sql = "SELECT * FROM utenti";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($row['username'] == $username){
            echo "Usename corretto<br>";
            if($row['password_hash'] == hash('sha256', $password)){
                echo "Password Corretta<br>";
            }
            else{
                echo " Password sbagliata<br>";
            }
        };
    }
} else {
    echo "0 results";
}