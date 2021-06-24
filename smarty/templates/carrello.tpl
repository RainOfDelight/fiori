<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/stile.css"/>
    <link rel="stylesheet" type="text/css" href="css/stilesh.css"/>
    <link rel="stylesheet" type="text/css" href="css/carrello.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/carrello.js"></script>
</head>
<body>
{include file="header.tpl"}
<div class="contenuto">

    <div class="item_comprati">
        <div class="colonne">
            <div class="prodotto">PRODOTTO</div>
            <div class="prezzo">PREZZO</div>
            <div class="quantita">QUANTIT&Agrave;</div>
            <div class="subtotale">SUBTOTALE</div>
        </div>
        <div class="items">
            {foreach $items as $item}
                <div class="item">
                    <div class="rimuovi">X</div>
                    <div class="div_immagine_item">
                        <img src="images/{$item[10]}" class="immagine_item">
                    </div>
                    <div class="nome">{$item[7]}</div>
                    <div class="prezzo">{$item[9]}</div>
                    <div class="selettore_quantita">
                        <div class="meno">-</div>
                        <input type="text" value="{$item[5]}" class="numero">
                        <div class="piu">+</div>
                    </div>
                    <div class="subtotale">????</div>
                </div>
            {/foreach}
        </div>
    </div>
    <div class="totale_carrello">

    </div>
</div>
{include file="footer.tpl"}
</body>
</html>