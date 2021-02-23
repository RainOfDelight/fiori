<?php session_start(); ?>

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



