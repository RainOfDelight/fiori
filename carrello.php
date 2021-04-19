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

//echo "Connected successfully<br>";
//echo $_SESSION["username"] . "<br>";
echo "Questo è il tuo carrello<br>";
$user_id=get_username_id($conn, $_SESSION["username"]);
$prodotti = get_prodotti($conn, $user_id);
$n = count ($prodotti);

echo '<table>';
echo '<tr><th>Nome</th><th>Quantità</th><th>Prezzo</th></tr>';
for($i=0;$i<$n;$i++){
    echo '<tr><td>' . $prodotti[$i][7] . '</td><td>'.$prodotti[$i][5].'</td><td>'.$prodotti[$i][9].'</td></tr>';

}
echo '</table>';




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
}?>

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
        <a href="/">Home</a>
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
    <div class="contenitore">
        <?php foreach($prodotti as $prodotto):?>
        <div class="padre">
            <div class="nome">
                <?php echo $prodotto[7];?>
            </div>
            <div class="quantita">
                <?php echo $prodotto[5];?>
            </div>
            <div class="prezzo">
                &euro;<?php echo $prodotto[9];?>
            </div>
            <div class="immagine_carrello">
                <img class="immagine" src=images/<?php echo $prodotto[11];?>>
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






