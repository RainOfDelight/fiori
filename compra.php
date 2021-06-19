<?php session_start();
$id=$_GET["ID"];
$quantita=$_GET["quantita"];
include ("credentials.php");
include ("functions.php");
$conn = new mysqli($servername, $dbusername, $dbpassword, $database);

$id_utente = get_id_utente_loggato($conn);
$id_carrello=get_id_carrello($conn,$id_utente);
inserisci_prodotto($conn, $id,$id_carrello,$quantita);

// echo "Abbiamo inserito un prodotto con id: $id, quantità: $quantita nel carrello di " . $_SESSION['username'];

echo "{\"esito\": \"positivo\"}";