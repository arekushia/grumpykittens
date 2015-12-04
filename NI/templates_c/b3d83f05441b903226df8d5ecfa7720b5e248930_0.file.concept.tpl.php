<?php /* Smarty version 3.1.27, created on 2015-12-04 03:33:59
         compiled from "C:\wamp\www\iut\NI\application\views\modules\concept.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:270025660fb970f2554_15592217%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3d83f05441b903226df8d5ecfa7720b5e248930' => 
    array (
      0 => 'C:\\wamp\\www\\iut\\NI\\application\\views\\modules\\concept.tpl',
      1 => 1449196438,
      2 => 'file',
    ),
    'b46e9df54bd9266b7e41c30e44f9beee72cdce23' => 
    array (
      0 => 'C:\\wamp\\www\\iut\\NI\\application\\views\\layout.tpl',
      1 => 1449193216,
      2 => 'file',
    ),
    '5d4bc35d82054f7c976b77e8eaf6ec3e4941669e' => 
    array (
      0 => '5d4bc35d82054f7c976b77e8eaf6ec3e4941669e',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '270025660fb970f2554_15592217',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5660fb971e4ba3_16644997',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5660fb971e4ba3_16644997')) {
function content_5660fb971e4ba3_16644997 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '270025660fb970f2554_15592217';
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
$_smarty_tpl->properties['nocache_hash'] = '270025660fb970f2554_15592217';
?>

	

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