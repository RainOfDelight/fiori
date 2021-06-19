<?php
/* Smarty version 3.1.39, created on 2021-06-15 11:18:58
  from 'C:\xampp\htdocs\smarty\templates\carrello.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c87082095db9_12494233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f107593cb4e273cc3c951ed9e0d19f71cd60000' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\carrello.tpl',
      1 => 1623748734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60c87082095db9_12494233 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel = "stylesheet" type="text/css" href="css/stile.css"/>
    <link rel = "stylesheet" type = "text/css"  href = "css/stilesh.css"/>
    <link rel = "stylesheet" type="text/css" href="css/carrello.css"/>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/searchscript.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/carrello.js"><?php echo '</script'; ?>
>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class ="contenuto">

    <div class ="item_comprati">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <div class = "item">
                <div class = "informazioni">
                    <div class = "nome"><?php echo $_smarty_tpl->tpl_vars['item']->value[7];?>
</div>
                    <div class = "prezzo"><?php echo $_smarty_tpl->tpl_vars['item']->value[9];?>
</div>
                    <div class = "selettore_quantita">
                        <div class = "meno">-</div>
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value[5];?>
" class ="numero">
                        <div class = "piu">+</div>
                    </div>
                </div>
            <div class = "div_immagine_item">
                <img src="images/<?php echo $_smarty_tpl->tpl_vars['item']->value[10];?>
" class = "immagine_item">
            </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
