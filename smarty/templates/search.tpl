<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel = "stylesheet" type="text/css" href="css/stile.css"/>
    <link rel = "stylesheet" type = "text/css"  href = "css/stilesh.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/searchscript.js"></script>
</head>
<body>
{include file="header.tpl"}
<div class="contenuto">
    Il nome della pianta che cerchi e' {$plant}<br>
    Questi sono i prodotti presenti nel magazzino<br>


    <div class="contenitore_piante">
        {foreach $prodotti as $prodotto}



        <div class="pianta">
            <div class="immaginediv">
                <img class="immagine" src=images/{$prodotto[4]}>
            </div>

            <div class="nome_prezzo">
                <h3>{$prodotto[1]}</h3>
                <p>&euro; {$prodotto[3]}</p>
            </div>

            <div class="descrizione">
                <p> {$prodotto[2]}</p>
            </div>

            <div class = "selettore_quantita">
                <div class = "meno">-</div>
                <input type="text" class ="numero">
                <div class = "piu">+</div>
            </div>

            <div class="aggiungi_al_carrello">
                <img class="compra" data-prodotto_id="{$prodotto[0]}" src="images/compra.jpg">
            </div>


        </div>
        {/foreach}



        <?php endforeach; ?>
    </div>
</div>
{include file="footer.tpl"}
</body>
</html>