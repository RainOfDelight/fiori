<html>
<body>
<?php
if(!empty($_GET["destinazione"]) && $_GET["destinazione"]=="carrello"){
    echo '<form action="login-script.php?destinazione=carrello" method="post">';
}else{
    echo '<form action="login-script.php" method="post">';
}
?>
username: <input type="text" name="username"><br>
password: <input type="password" name="password"><br>
<input type="submit">
</form>

</body>
</html>
