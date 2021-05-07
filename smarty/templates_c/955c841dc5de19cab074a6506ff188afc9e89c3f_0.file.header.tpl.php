<?php
/* Smarty version 3.1.39, created on 2021-05-07 16:17:44
  from 'C:\xampp\htdocs\smarty\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60954c0865e2f1_95365562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '955c841dc5de19cab074a6506ff188afc9e89c3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\header.tpl',
      1 => 1620397062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60954c0865e2f1_95365562 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="header">
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
</div><?php }
}
