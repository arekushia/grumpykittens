<?php /* Smarty version 3.1.27, created on 2015-12-03 22:05:29
         compiled from "C:\wamp\www\iut\NI\application\views\nav\nav.inc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:187935660ae99355b82_87719760%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c953ba8cd169b1e9c2185c4f36c118c8483a5a78' => 
    array (
      0 => 'C:\\wamp\\www\\iut\\NI\\application\\views\\nav\\nav.inc.tpl',
      1 => 1449176727,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187935660ae99355b82_87719760',
  'variables' => 
  array (
    'datas' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5660ae993ca438_05237400',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5660ae993ca438_05237400')) {
function content_5660ae993ca438_05237400 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '187935660ae99355b82_87719760';
?>
<nav>
	<div class="ui menu inverted navbar">
		<a class="item" href="<?php echo $_smarty_tpl->tpl_vars['datas']->value['Page']['index']['lien'];?>
.php"><h1><?php echo $_smarty_tpl->tpl_vars['datas']->value['NomSite'];?>
</h1></a>
		
		<?php
$_from = $_smarty_tpl->tpl_vars['datas']->value['Page'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['k']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value) {
$_smarty_tpl->tpl_vars['k']->_loop = true;
$foreach_k_Sav = $_smarty_tpl->tpl_vars['k'];
?>
			<?php if ($_smarty_tpl->tpl_vars['k']->value['visible']) {?>
				<a class="item <?php if ($_smarty_tpl->tpl_vars['k']->value['nom'] == $_smarty_tpl->tpl_vars['datas']->value['Page']['index']['nom']) {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['k']->value['lien'];?>
.php"><?php echo $_smarty_tpl->tpl_vars['k']->value['nom'];?>
</a>
			<?php }?>
		<?php
$_smarty_tpl->tpl_vars['k'] = $foreach_k_Sav;
}
?>
	</div>
</nav>
<?php }
}
?>