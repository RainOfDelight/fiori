<?php

if($_POST["azione"]=="modifica") {
    $nome = $_POST["nome"];
    $prezzo = $_POST["ciao"];
    $descrizione = $_POST["andrei"];
    $immagine = $_FILES["francesco"];
    $id = $_POST["id"];


    move_uploaded_file($immagine["tmp_name"], getcwd() . "/images/" . $immagine["name"]);

    include("credentials.php");
    $conn = new mysqli($servername, $dbusername, $dbpassword, $database);
    $sql = "UPDATE prodotti SET nome=?, descrizione=?, prezzo=?, immagine=? WHERE prodotti.id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssdsi', $nome, $descrizione, $prezzo, $immagine["name"], $id);
    $stmt->execute();
}elseif($_POST["azione"]=="inserisci"){
    $nome = $_POST["nome"];
    $prezzo = $_POST["prezzo"];
    $descrizione = $_POST["descrizione"];
    $immagine = $_FILES["immagine"];

    move_uploaded_file($immagine["tmp_name"], getcwd() . "/images/" . $immagine["name"]);

    include("credentials.php");
    $conn = new mysqli($servername, $dbusername, $dbpassword, $database);
    $sql = "INSERT INTO prodotti ( nome, descrizione, prezzo, immagine) VALUES (?,?,?,?);";
    $stmt = $conn->prepare($sql);
    var_dump($sql);
    $stmt->bind_param('ssds', $nome, $descrizione, $prezzo, $immagine["name"]);
    $stmt->execute();
}



/*$sql = "UPDATE prodotti SET nome='$nome', descrizione='$descrizione' WHERE prodotti.id=$id";
var_dump($sql);
$conn->query($sql);*/
?>

