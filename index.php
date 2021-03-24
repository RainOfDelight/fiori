<?php session_start();
include ("credentials.php");
// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<br>");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
	<link rel = "stylesheet" type = "text/css"  href = "css/stile.css"/>
	<link rel ="stylesheet" type="text/css" href="css/slick.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="js/slick.js"></script>

	<script src="js/script.js"></script>
</head>
<body>
	<div class="header">
		<div class="home headerDiv">
			Home
		</div>
		<div class="ricerca headerDiv">
			Inserisci qui la parola da cercare
			<form action="search.php">
				<input type="text" class="input" name="pianta_ricercata">
			</form>
		</div>
		<div class="carrello headerDiv">
            <a href="carrello.php"><img class="regoloDimensioni" src="https://previews.123rf.com/images/val2014/val20141603/val2014160300005/54302312-shopping-cart-icon.jpg"></a>
		</div>
		<div class="login headerDiv">
			<img class="regoloDimensioni" src="https://library.kissclipart.com/20180922/eve/kissclipart-icon-full-name-clipart-computer-icons-avatar-icon-f6cf26ff2213f36e.jpg">
		</div>

        <div class="logout">
            <?php if (!empty($_SESSION["username"])) { ?>
            <a href="logout.php">Logout</a>
            <?php } else { ?>
            <a href="login.php">login</a>
            <?php } ?>
        </div>
	</div>
	<div class="logo">
		<h1>Piante e fiori Tinari</h1>
	</div>
	<div class="animazione">
		<div><img src="images/fiore1.jpg"></div>
		<div><img src="images/fiore2.jpg"></div>
		<div><img src="images/pianta1.jpg"></div>
		<div><img src="images/pianta2.jpg"></div>
	</div>

    <?php
    echo "Questi sono i prodotti presenti nel magazzino<br>";
    $prodotti = get_prodotti($conn);
    $n = count ($prodotti);

    echo '<table>';
    echo '<tr><th>Nome</th><th>Quantità</th><th>Prezzo</th></tr>';
    for($i=0;$i<$n;$i++){
        echo '<tr><td>' . $prodotti[$i][1] . '</td><td>' . $prodotti[$i][4] . '</td><td>'.$prodotti[$i][3].'</td></tr>';

    }
    echo '</table>';
    ?>


	<div class="footer">
		<div class="telefono">
			<p>Telefono:0871-554322</p>
		</div>
		<div class="indirizzo">
			<p>Indirizzo: via dei fiori, 25</p>
		</div>
		<div class="contattaci">
			<a href="#">Contattaci su questo sito</a>
		</div>
	</div>
</body>
</html>


<?php
function get_prodotti($conn){
    $sql = "SELECT * FROM `prodotti`";
    $query = $conn->query($sql);
    $result = $query -> fetch_all();
    return $result;
}
?>
