<?php


$nome=$_POST["nome"];
$prezzo=$_POST["ciao"];
$descrizione=$_POST["andrei"];
$immagine=$_FILES["francesco"];
$id=$_POST["id"];


move_uploaded_file($immagine["tmp_name"],getcwd()."/images/".$immagine["name"]);

include("credentials.php");
$conn = new mysqli($servername, $dbusername, $dbpassword, $database);
$sql = "UPDATE prodotti SET nome=?, descrizione=?, prezzo=?, immagine=? WHERE prodotti.id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssdsi',$nome,$descrizione,$prezzo,$immagine["name"],$id);
$stmt->execute();
var_dump($sql);




/*$sql = "UPDATE prodotti SET nome='$nome', descrizione='$descrizione' WHERE prodotti.id=$id";
var_dump($sql);
$conn->query($sql);*/
?>

