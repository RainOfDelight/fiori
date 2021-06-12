<?php
session_start();

include("credentials.php");
include("functions.php");
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
