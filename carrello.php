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






//funzioni

function get_username_id($conn, $username){

    $sql = "SELECT id FROM `utenti` WHERE username='$username' ";
    $result= $conn->query($sql);
    //var_dump($result);
    echo "<br>";
    $b = $result -> fetch_all();
    //var_dump($b);
    $username_id=$b[0][0];
    //leggere il numero restituito dalla query
    // ritornarlo

    return $username_id;
}

function get_prodotti($conn, $user_id){
    $sql = "SELECT * FROM `carrelli` 
    JOIN prodotti_carrelli ON prodotti_carrelli.id_carrello=carrelli.id 
    JOIN prodotti ON prodotti_carrelli.id_prodotto=prodotti.id
    WHERE id_proprietario=$user_id";
    $query = $conn->query($sql);
    $result = $query -> fetch_all();
    return $result;
}

$user_id=get_username_id($conn, $_SESSION["username"]);
$prodotti = get_prodotti($conn, $user_id);
require('lib/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->setTemplateDir('smarty/templates');
$smarty->setCompileDir('smarty/templates_c');
$smarty->setCacheDir('smarty/cache');
$smarty->setConfigDir('smarty/configs');
$smarty->assign("items", $prodotti);
echo ("<pre>");
var_dump($prodotti);
echo ("</pre>");
if (!empty($_SESSION["username"])) { $smarty->assign('link_login_logout', '<a href="logout.php">Logout</a>');}
else {$smarty->assign('link_login_logout', ' <a href="login.php">Login</a>');}
$smarty->display('carrello.tpl');
?>










