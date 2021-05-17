<?php
/* Smarty version 3.1.39, created on 2021-05-13 16:09:01
  from 'C:\xampp\htdocs\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609d32fd199153_82163721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e8fe154245a2fdaea9fea4e0663b1125dfb722b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\index.tpl',
      1 => 1620910953,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_609d32fd199153_82163721 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\lib\\Smarty\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>
<!DOCTYPE html>
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
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="logo">
  <h1>Piante e fiori Tinari</h1>
</div>
<div class="animazione">
  <div><img src="images/fiore1.jpg"></div>
  <div><img src="images/fiore2.jpg"></div>
  <div><img src="images/pianta1.jpg"></div>
  <div><img src="images/pianta2.jpg"></div>
</div>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['piante']->value, 'pianta');
$_smarty_tpl->tpl_vars['pianta']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pianta']->value) {
$_smarty_tpl->tpl_vars['pianta']->do_else = false;
echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['pianta']->value['name']);?>
 costa <?php echo $_smarty_tpl->tpl_vars['pianta']->value['prezzo'];?>
 <br>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<label>nomi</label>
<select>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nome']->value, 'n');
$_smarty_tpl->tpl_vars['n']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->do_else = false;
?>

    <option><?php echo $_smarty_tpl->tpl_vars['n']->value;?>
</option>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</select>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>


<?php }
}
