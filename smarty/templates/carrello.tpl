<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel = "stylesheet" type="text/css" href="css/stile.css"/>
    <link rel = "stylesheet" type = "text/css"  href = "css/stilesh.css"/>
    <link rel = "stylesheet" type="text/css" href="css/carrello.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/searchscript.js"></script>
</head>
<body>
{include file="header.tpl"}
<div class ="contenuto">

    <div class ="item_comprati">
        {foreach $items as $item}
            <div class = "item">
                <div class = "informazioni">
                    <div class = "nome">{$item[7]}</div>
                    <div class = "prezzo">{$item[9]}</div>
                    <div class = "meno">-</div>
                    <input type="text" value="{$item[5]}">
                    <div class = "piu">+</div>
                    <button>+</button>
                </div>
            <div class = "div_immagine_item">
                <img src="images/{$item[11]}" class = "immagine_item">
            </div>
            </div>
        {/foreach}
    </div>
</div>
{include file="footer.tpl"}
</body>
</html>