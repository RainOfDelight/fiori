<?php session_start();
/*
 * <?php session_start();
include ("credentials.php");
// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $database);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error."<br>");
}
?>











<?php
    echo "Questi sono i prodotti presenti nel magazzino<br>";
$prodotti = get_prodotti($conn);
$n = count ($prodotti);

echo '<table>';
  echo '<tr><th>Nome</th><th>Quantità</th><th>Prezzo</th><th>Descrizione</th><th>Foto</th></tr>';
  for($i=0;$i<$n;$i++){
  echo '<tr><td>' . $prodotti[$i][1] . '</td><td>' . $prodotti[$i][4] . '</td><td>'.$prodotti[$i][3].'</td><td>'.$prodotti[$i][2].'</td><td>'.'<img src=images/'. $prodotti[$i][5].'>'.'</td></tr>';

  }
  echo '</table>';
?>



<?php
function get_prodotti($conn){
    $sql = "SELECT * FROM `prodotti`";
    $query = $conn->query($sql);
$result = $query -> fetch_all();
return $result;
}
?>



 *
 *
 * */
// put full path to Smarty.class.php
require('lib/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('smarty/templates');
$smarty->setCompileDir('smarty/templates_c');
$smarty->setCacheDir('smarty/cache');
$smarty->setConfigDir('smarty/configs');

if (!empty($_SESSION["username"])) { $smarty->assign('link_login_logout', '<a href="logout.php">Logout</a>');}
else {$smarty->assign('link_login_logout', ' <a href="login.php">Login</a>');}



$smarty->assign('piante', array(
    array('name' => 'rosa', 'prezzo' => '12 euro'),
    array('name' => 'rosablu', 'prezzo' => '5 euro'),
    array('name' => 'crisantemi', 'prezzo' => '2 euro')
));
$smarty->assign('nome', array("Francesco","Andrei", "Martina"));
$smarty->display('index.tpl');


?>
