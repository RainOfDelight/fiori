<?php
/* Smarty version 3.1.39, created on 2021-06-12 10:17:36
  from 'C:\xampp\htdocs\smarty\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c46da0622fd8_57893718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46bb0b28647229a77c5851d1e77c3c5438fd33c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\admin.tpl',
      1 => 1623485853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c46da0622fd8_57893718 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prodotti']->value, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
    <div class="prodotto">
        <div class="info">
            <div class="nome">
            <input disabled class="input_nome" type="text" value="<?php echo $_smarty_tpl->tpl_vars['a']->value["nome"];?>
">
            <input type="button" value="modifica">
            </div>
            <div class="prezzo">
            <input disabled class="input_prezzo" type="text" value="<?php echo $_smarty_tpl->tpl_vars['a']->value["prezzo"];?>
">
            <input type="button" value="modifica">
            </div>
            <div class="descrizione">
                <textarea disabled class="input_descrizione"  rows="5" cols="20"><?php echo $_smarty_tpl->tpl_vars['a']->value["descrizione"];?>
</textarea>
                <input type="button" value="modifica">
            </div>
            <input type="text" class="id" style="display: none" value="<?php echo $_smarty_tpl->tpl_vars['a']->value["id"];?>
">
            <input class="salva" type="button" value="salva">

        </div>
        <div class="immagine">
            <img class="foto" src="images/<?php echo $_smarty_tpl->tpl_vars['a']->value["immagine"];?>
">
            <input type="file" name="fileToUpload" class="fileToUpload">
            <input type="button"  value="modifica">
        </div>
    </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>



</body>
</html><?php }
}
