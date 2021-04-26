<?php session_start();
$id=$_GET["ID"];
$quantita=$_GET["quantita"];
include ("credentials.php");

$conn = new mysqli($servername, $dbusername, $dbpassword, $database);
function get_id_utente_loggato($conn){
    $sql= "SELECT ID FROM `utenti` WHERE username=\"". $_SESSION["username"] . "\";";
    $query = $conn->query($sql);
    $result = $query->fetch_all();
    return $result[0][0];

}
    $id_utente = get_id_utente_loggato($conn);
function get_id_carrello($conn,$id_utente)
{
    $sql = "SELECT ID FROM `carrelli` WHERE id_proprietario=$id_utente";
    $query = $conn->query($sql);
    $result = $query->fetch_all();
    return $result[0][0];
}
$id_carrello=get_id_carrello($conn,$id_utente);

function inserisci_prodotto($conn,$id_prodotto,$id_carrello,$quantita){
    $sql = "INSERT INTO `prodotti_carrelli` (`id_carrello`, `id_prodotto`, `quantita`) VALUES ( '$id_carrello', '$id_prodotto', '$quantita');";
    $conn->query($sql);
}
inserisci_prodotto($conn, $id,$id_carrello,$quantita);

echo "Abbiamo inserito un prodotto con id: $id, quantità: $quantita nel carrello di " . $_SESSION['username'];