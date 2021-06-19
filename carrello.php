<?php
session_start();
if(empty($_SESSION["username"])){
    header('Location: login.php?destinazione=carrello');
}
include("credentials.php");
include("functions.php");
// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<br>");
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
if (!empty($_SESSION["username"])) { $smarty->assign('link_login_logout', '<a href="logout.php">Logout</a>');}
else {$smarty->assign('link_login_logout', ' <a href="login.php">Login</a>');}
$smarty->display('carrello.tpl');
?>










