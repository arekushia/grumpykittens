<?php /* Smarty version 3.1.27, created on 2015-12-04 04:41:31
         compiled from "C:\wamp\www\iut\NI\application\views\nav\nav.inc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2179056610b6bd44975_52515086%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c953ba8cd169b1e9c2185c4f36c118c8483a5a78' => 
    array (
      0 => 'C:\\wamp\\www\\iut\\NI\\application\\views\\nav\\nav.inc.tpl',
      1 => 1449200425,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2179056610b6bd44975_52515086',
  'variables' => 
  array (
    'datas' => 0,
    'k' => 0,
    'curpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56610b6bdfcd56_99897691',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56610b6bdfcd56_99897691')) {
function content_56610b6bdfcd56_99897691 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2179056610b6bd44975_52515086';
?>
<nav>
	<div class="ui menu inverted navbar navigation">
		<a class="item" href="index.php"><h1><img width="200px" src="http://audric.cf/i/logo.png"></h1></a>
		
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
				<a class="navy item <?php if (isset($_smarty_tpl->tpl_vars['curpage']->value) && ($_smarty_tpl->tpl_vars['k']->value['lien'] == $_smarty_tpl->tpl_vars['curpage']->value)) {?>active<?php }?>" href="?page=<?php echo $_smarty_tpl->tpl_vars['k']->value['lien'];?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value['nom'];?>
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