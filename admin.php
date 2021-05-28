<?php
session_start();
function get_username_id($conn, $username)
{

    $sql = "SELECT id FROM `utenti` WHERE username='$username' ";
    $result = $conn->query($sql);
    $b = $result->fetch_all();
    //var_dump($b);
    $username_id = $b[0][0];
    //leggere il numero restituito dalla query
    // ritornarlo

    return $username_id;
}

function is_admin($conn, $username_id)
{
    $sql = "SELECT * FROM `admin` WHERE ID_utente='$username_id' ";
    $result = $conn->query($sql);
    $b = $result->fetch_all();
    if (empty($b)) {
        return false;
    } else {
        return true;
    }
}
function leggiprodotti($conn){
    $sql = "SELECT nome,prezzo,descrizione,immagine FROM `prodotti`";
    $result = $conn->query($sql);
    $tutti_i_prodotti=array();
    while ($b = $result->fetch_assoc()){
        array_push($tutti_i_prodotti,$b);
    }
    return $tutti_i_prodotti;
}


include("credentials.php");
$conn = new mysqli($servername, $dbusername, $dbpassword, $database);

//$prodotti = array(array("nome"=>"crisantemo", "prezzo"=>"2€", "descrizione"=>"Questo è un crisantemo", "immagine"=>"images/crisantemo.jpg"), array("nome"=>"rosa", "prezzo"=>"1€", "descrizione"=>"Questa è una rosa", "immagine"=>"images/rosa1.jpg"));
$prodotti = leggiprodotti($conn);
if (empty($_SESSION["username"])) {
    header('Location: login.php');
} else {
    $username_id = get_username_id($conn, $_SESSION["username"]);
    if (is_admin($conn, $username_id)) {
        require('lib/Smarty/libs/Smarty.class.php');
        $smarty = new Smarty();
        $smarty->setTemplateDir('smarty/templates');
        $smarty->setCompileDir('smarty/templates_c');
        $smarty->setCacheDir('smarty/cache');
        $smarty->setConfigDir('smarty/configs');
        $smarty->assign("prodotti", $prodotti);
        $smarty->display('admin.tpl');
    } else {
        header('Location: index.php');
    }
}
?>
