<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/admin.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/admin.js"></script>
</head>
<body>
<div class="ordini_prodotti">
    <div class="select_ordini">Ordini</div>
    <div class="select_prodotti">Prodotti</div>
    <div class = "logout">Logout</div>
</div>
<div class="prodotti">
    <div class="prodotto">
        <div class="nome_prezzo_immagine">
            <div class="nome_prezzo">
            <input disabled type="text" value="Crisantemo">
            <input type="button" value="modifica">
            <input disabled type="text" value="2€">
            <input type="button" value="modifica">
            </div>
            <div class="immagine">
            <img class="foto" src="images/crisantemo.jpg">
            <input type="button" value="modifica">
            </div>
        </div>
        <div class="descrizione">
            <textarea disabled  rows="5" cols="20">Il crisantemo è un genere di piante angiosperme dicotiledoni della famiglia delle Asteraceae che comprende piante erbacee perenni o annuali, originarie di molte parti del mondo, dall'Europa alla Cina, con numerosi ibridi e varietà coltivati come piante ornamentali in floricoltura e nel giardinaggio</textarea>
            <input type="button" value="modifica">
        </div>
    </div>
</div>

</body>
</html>