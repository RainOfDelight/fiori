<?php
/* Smarty version 3.1.39, created on 2021-06-22 12:26:56
  from 'C:\xampp\htdocs\smarty\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60d1baf09a5af5_03668061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1488ad8779cc80151ee7187477cadd59e653016e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\search.tpl',
      1 => 1624357610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60d1baf09a5af5_03668061 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel = "stylesheet" type="text/css" href="css/stile.css"/>
    <link rel = "stylesheet" type = "text/css"  href = "css/stilesh.css"/>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/searchscript.js"><?php echo '</script'; ?>
>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="contenuto">
    Il nome della pianta che cerchi e' <?php echo $_smarty_tpl->tpl_vars['plant']->value;?>
<br>
    Questi sono i prodotti presenti nel magazzino<br>


    <div class="contenitore_piante">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prodotti']->value, 'prodotto');
$_smarty_tpl->tpl_vars['prodotto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['prodotto']->value) {
$_smarty_tpl->tpl_vars['prodotto']->do_else = false;
?>



        <div class="pianta">
            <div class="immaginediv">
                <img class="immagine" src=images/<?php echo $_smarty_tpl->tpl_vars['prodotto']->value[4];?>
>
            </div>

            <div class="nome_prezzo">
                <h3><?php echo $_smarty_tpl->tpl_vars['prodotto']->value[1];?>
</h3>
                <p>&euro; <?php echo $_smarty_tpl->tpl_vars['prodotto']->value[3];?>
</p>
            </div>

            <div class="descrizione">
                <p> <?php echo $_smarty_tpl->tpl_vars['prodotto']->value[2];?>
</p>
            </div>

            <div class = "selettore_quantita">
                <div class = "meno">-</div>
                <input type="text" class ="numero">
                <div class = "piu">+</div>
            </div>

            <div class="aggiungi_al_carrello">
                <img class="compra" data-prodotto_id="<?php echo $_smarty_tpl->tpl_vars['prodotto']->value[0];?>
" src="images/compra.jpg">
            </div>


        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



        <?php echo '<?php ';?>
endforeach; <?php echo '?>';?>

    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
