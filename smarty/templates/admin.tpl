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
<div class="inserimento_prodotti">
    <h1>Inserimento prodotto</h1>
    <div class="prodotto">
        <div class="info">
            <div class="nome">
                <input class="input_nome" type="text" placeholder="Inserisci nome">
            </div>
            <div class="prezzo">
                <input class="input_prezzo" type="text" placeholder="Inserisci prezzo">
            </div>
            <div class="descrizione">
                <textarea class="input_descrizione"  rows="5" cols="20" placeholder="Inserisci una descrizione"></textarea>
            </div>
            <input class="inserisci" type="button" value="inserisci">

        </div>
        <div class="immagine">
            <p>Scegli un'immagine</p>

            <input type="file" name="fileToUpload" class="fileToUpload">
        </div>
    </div>
</div>

<br><br><br>
<div class="prodotti">
    <h1>Modifica prodotti esistenti</h1>
    {foreach $prodotti as $a}
    <div class="prodotto">
        <div class="info">
            <div class="nome">
            <input disabled class="input_nome" type="text" value="{$a["nome"]}">
            <input type="button" value="modifica">
            </div>
            <div class="prezzo">
            <input disabled class="input_prezzo" type="text" value="{$a["prezzo"]}">
            <input type="button" value="modifica">
            </div>
            <div class="descrizione">
                <textarea disabled class="input_descrizione"  rows="5" cols="20">{$a["descrizione"]}</textarea>
                <input type="button" value="modifica">
            </div>
            <input type="text" class="id" style="display: none" value="{$a["id"]}">
            <input class="salva" type="button" value="salva">

        </div>
        <div class="immagine">
            <img class="foto" src="images/{$a["immagine"]}">
            <input type="file" name="fileToUpload" class="fileToUpload">
            <input type="button"  value="modifica">
        </div>
    </div>
    {/foreach}
</div>



</body>
</html>