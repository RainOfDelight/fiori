<?php session_start();
include ("credentials.php");
// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<br>");
}



$plant = $_GET['pianta_ricercata'];



function get_prodotti_by_name($conn,$plant)
{
    $sql = "SELECT * FROM `prodotti` WHERE nome LIKE '%$plant%'";
    $query = $conn->query($sql);
    $result = $query->fetch_all();
    return $result;
}
$prodotti = get_prodotti_by_name($conn,$plant);


require('lib/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->setTemplateDir('smarty/templates');
$smarty->setCompileDir('smarty/templates_c');
$smarty->setCacheDir('smarty/cache');
$smarty->setConfigDir('smarty/configs');
$smarty->assign("plant", $plant);
if (!empty($_SESSION["username"])) { $smarty->assign('link_login_logout', '<a href="logout.php">Logout</a>');}
else {$smarty->assign('link_login_logout', ' <a href="login.php">Login</a>');}
$smarty->assign("prodotti", $prodotti);
$smarty->display('search.tpl');

?>




