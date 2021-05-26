<?php
/* Smarty version 3.1.39, created on 2021-05-26 16:44:37
  from 'C:\xampp\htdocs\smarty\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ae5ed588bb67_68008867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46bb0b28647229a77c5851d1e77c3c5438fd33c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\admin.tpl',
      1 => 1622040276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ae5ed588bb67_68008867 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/admin.css"/>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/admin.js"><?php echo '</script'; ?>
>
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
</html><?php }
}
