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


include("credentials.php");
$conn = new mysqli($servername, $dbusername, $dbpassword, $database);


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
        $smarty->display('admin.tpl');
    } else {
        header('Location: index.php');
    }
}
?>
