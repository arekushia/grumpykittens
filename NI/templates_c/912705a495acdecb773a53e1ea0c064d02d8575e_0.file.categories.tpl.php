<?php /* Smarty version 3.1.27, created on 2015-12-04 02:41:16
         compiled from "C:\wamp\www\iut\NI\application\views\modules\categories.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:142055660ef3ced93d3_27084673%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '912705a495acdecb773a53e1ea0c064d02d8575e' => 
    array (
      0 => 'C:\\wamp\\www\\iut\\NI\\application\\views\\modules\\categories.tpl',
      1 => 1449191414,
      2 => 'file',
    ),
    'b46e9df54bd9266b7e41c30e44f9beee72cdce23' => 
    array (
      0 => 'C:\\wamp\\www\\iut\\NI\\application\\views\\layout.tpl',
      1 => 1449193216,
      2 => 'file',
    ),
    '28353a2f02bf860a1618114ee8127bda0d56aba9' => 
    array (
      0 => '28353a2f02bf860a1618114ee8127bda0d56aba9',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '142055660ef3ced93d3_27084673',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5660ef3d012ad4_82558302',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5660ef3d012ad4_82558302')) {
function content_5660ef3d012ad4_82558302 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '142055660ef3ced93d3_27084673';
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
$_smarty_tpl->properties['nocache_hash'] = '142055660ef3ced93d3_27084673';
?>

	<?php if (isset($_smarty_tpl->tpl_vars['cat']->value)) {?>
		<img class="ui centered small image" src="medias/<?php echo $_smarty_tpl->tpl_vars['cat']->value;?>
.png">
	<?php }?>

		</main>
	</body>
	<footer>
		<?php echo $_smarty_tpl->getSubTemplate ('../layout/footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	</footer>
	<?php echo '<script'; ?>
>
	document.onkeydown = function(e) {
	switch (e.keyCode) {
		case 37:
			var audio = new Audio('medias/sounds/exp.mp3');audio.play();
			break;
		case 38:
			var audio = new Audio('medias/sounds/bomb.mp3');audio.play();
			break;
		case 39:
			var audio = new Audio('medias/sounds/alla.mp3');audio.play();
			break;
		case 40:
			var audio = new Audio('medias/sounds/boom.mp3');audio.play();
			break;
		}
	};
	<?php echo '</script'; ?>
>
</html>
<?php }
}
?>