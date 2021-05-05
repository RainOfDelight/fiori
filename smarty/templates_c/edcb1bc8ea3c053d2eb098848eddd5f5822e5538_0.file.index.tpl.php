<?php
/* Smarty version 3.1.39, created on 2021-05-05 17:52:26
  from '/home/rain/Documents/Support/Francesco/Tecnologie Web/fiori/smarty/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6092bf3a8e0b94_77381832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edcb1bc8ea3c053d2eb098848eddd5f5822e5538' => 
    array (
      0 => '/home/rain/Documents/Support/Francesco/Tecnologie Web/fiori/smarty/templates/index.tpl',
      1 => 1620229946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6092bf3a8e0b94_77381832 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel = "stylesheet" type = "text/css"  href = "../css/stile.css"/>
  <link rel ="stylesheet" type="text/css" href="../css/slick.css"/>
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="../js/slick.js"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 src="../js/script.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="header">
  <div class="home headerDiv">
    Home
  </div>
  <div class="ricerca headerDiv">
    Inserisci qui la parola da cercare
    <form action="search.php">
      <input type="text" class="input" name="pianta_ricercata">
    </form>
  </div>
  <div class="carrello headerDiv">
    <a href="carrello.php"><img class="regoloDimensioni" src="https://previews.123rf.com/images/val2014/val20141603/val2014160300005/54302312-shopping-cart-icon.jpg"></a>
  </div>
  <div class="login headerDiv">
    <img class="regoloDimensioni" src="https://library.kissclipart.com/20180922/eve/kissclipart-icon-full-name-clipart-computer-icons-avatar-icon-f6cf26ff2213f36e.jpg">
  </div>

  <div class="logout">
   <?php echo $_smarty_tpl->tpl_vars['link_login_logout']->value;?>

  </div>
</div>
<div class="logo">
  <h1>Piante e fiori Tinari</h1>
</div>
<div class="animazione">
  <div><img src="../images/fiore1.jpg"></div>
  <div><img src="../images/fiore2.jpg"></div>
  <div><img src="../images/pianta1.jpg"></div>
  <div><img src="../images/pianta2.jpg"></div>
</div>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['piante']->value, 'pianta');
$_smarty_tpl->tpl_vars['pianta']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pianta']->value) {
$_smarty_tpl->tpl_vars['pianta']->do_else = false;
echo $_smarty_tpl->tpl_vars['pianta']->value['name'];?>
 costa <?php echo $_smarty_tpl->tpl_vars['pianta']->value['prezzo'];?>
 <br>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


<div class="footer">
  <div class="telefono">
    <p>Telefono:0871-554322</p>
  </div>
  <div class="indirizzo">
    <p>Indirizzo: via dei fiori, 25</p>
  </div>
  <div class="contattaci">
    <a href="#">Contattaci su questo sito</a>
  </div>
</div>
</body>
</html>


<?php }
}
