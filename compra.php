<?php session_start();
echo "Questa è la pagina compra.php";
$id=$_GET["ID"];
$quantita=$_GET["quantita"];
echo $id ."<br>" . $quantita;
echo "L'utente loggato è :" . $_SESSION["username"];
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
echo $id_carrello;

function inserisci_prodotto($conn,$id_prodotto,$id_carrello,$quantita){
    $sql = "INSERT INTO `prodotti_carrelli` (`id_carrello`, `id_prodotto`, `quantita`) VALUES ( '$id_carrello', '$id_prodotto', '$quantita');";
    $conn->query($sql);
}
inserisci_prodotto($conn, $id,$id_carrello,$quantita);