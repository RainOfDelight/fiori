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
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel = "stylesheet" type="text/css" href="css/stile.css"/>
	<link rel = "stylesheet" type = "text/css"  href = "css/stilesh.css"/>
</head>
<body>
<div class="header">
    <div class="home headerDiv">
        <a href="/fiori">Home</a>
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
<div class="contenuto">
    <?php echo ("Il nome della pianta che cerchi e' $plant<br>");
    echo "Questi sono i prodotti presenti nel magazzino<br>";
    $prodotti = get_prodotti_by_name($conn,$plant);
    ?>


    <div class="contenitore_piante">
        <?php foreach($prodotti as $prodotto):?>
            <div class="pianta">
                <div class="immaginediv">
                    <img class="immagine" src=images/<?php echo $prodotto[5];?>>
                </div>

                <div class="nome_prezzo">
                    <h3><?php echo $prodotto[1];?></h3>
                    <p>&euro; <?php echo $prodotto[3];?></p>
                </div>

                <div class="descrizione">
                    <p> <?php echo $prodotto[2];?></p>
                </div>

                <div class="aggiungi_al_carrello">
                    <img class="compra" src="images/compra.jpg">
                </div>


            </div>



        <?php endforeach; ?>
    </div>
</div>
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





