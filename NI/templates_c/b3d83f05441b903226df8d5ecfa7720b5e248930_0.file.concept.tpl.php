<?php /* Smarty version 3.1.27, created on 2015-12-04 00:03:35
         compiled from "C:\wamp\www\iut\NI\application\views\modules\concept.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:265725660ca470e5735_23386541%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3d83f05441b903226df8d5ecfa7720b5e248930' => 
    array (
      0 => 'C:\\wamp\\www\\iut\\NI\\application\\views\\modules\\concept.tpl',
      1 => 1449183017,
      2 => 'file',
    ),
    'b46e9df54bd9266b7e41c30e44f9beee72cdce23' => 
    array (
      0 => 'C:\\wamp\\www\\iut\\NI\\application\\views\\layout.tpl',
      1 => 1449176590,
      2 => 'file',
    ),
    '5d4bc35d82054f7c976b77e8eaf6ec3e4941669e' => 
    array (
      0 => '5d4bc35d82054f7c976b77e8eaf6ec3e4941669e',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '265725660ca470e5735_23386541',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5660ca4727f973_35518967',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5660ca4727f973_35518967')) {
function content_5660ca4727f973_35518967 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '265725660ca470e5735_23386541';
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php echo $_smarty_tpl->getSubTemplate ('../layout/includes.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	</head>
	<body>
		<header>
			<?php echo $_smarty_tpl->getSubTemplate ('../layout/header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			<?php echo $_smarty_tpl->getSubTemplate ('../nav/nav.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</header>
		<main>
			<?php
$_smarty_tpl->properties['nocache_hash'] = '265725660ca470e5735_23386541';
?>

	

		</main>
	</body>
	<footer>
		<?php echo $_smarty_tpl->getSubTemplate ('../layout/footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	</footer>
</html>
<?php }
}
?>