<?php
$username = $_POST["username"];
$password = $_POST["password"];


include("credentials.php");
include("functions.php");
// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . "<br>");
}
echo "Connected successfully<br>";

$sql = "SELECT * FROM utenti";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row['username'] == $username) {
            echo "Usename corretto<br>";
            if ($row['password_hash'] == hash('sha256', $password)) {
                echo "Password Corretta<br>";
                session_start();
                $_SESSION["username"] = $username;
                global $base_url;
                $id = get_username_id($conn, $username);
                if (is_admin($conn, $id)) {
                    header("Location: $base_url/admin.php");
                } else {
                    if($_GET["destinazione"]=="carrello"){
                        header("Location: $base_url/carrello.php");
                    }else{
                        header("Location: $base_url/index.php");
                    }
                }
            } else {
                echo " Password sbagliata<br>";
            }
        };
    }
} else {
    echo "0 results";
}
