<?php /* Smarty version 3.1.27, created on 2015-12-04 02:30:46
         compiled from "C:\wamp\www\iut\NI\application\views\modules\accueil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:205925660ecc6cb6ee1_78525827%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2328d4d95300da02da1b9374db5f4c279dfb4bc4' => 
    array (
      0 => 'C:\\wamp\\www\\iut\\NI\\application\\views\\modules\\accueil.tpl',
      1 => 1449190398,
      2 => 'file',
    ),
    'b46e9df54bd9266b7e41c30e44f9beee72cdce23' => 
    array (
      0 => 'C:\\wamp\\www\\iut\\NI\\application\\views\\layout.tpl',
      1 => 1449192644,
      2 => 'file',
    ),
    '0575df84956d82cb25cdc079c12f8e33f7edb2f7' => 
    array (
      0 => '0575df84956d82cb25cdc079c12f8e33f7edb2f7',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '205925660ecc6cb6ee1_78525827',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5660ecc6d3fe40_56718472',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5660ecc6d3fe40_56718472')) {
function content_5660ecc6d3fe40_56718472 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '205925660ecc6cb6ee1_78525827';
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
$_smarty_tpl->properties['nocache_hash'] = '205925660ecc6cb6ee1_78525827';
?>

	<div class="ui middle aligned center aligned grid page">
		<div class="column six wide">
			<h2 id="nomSite" class="ui header">
				<div class="content">Besoin d'aide ?<br>Allons-y !</div>
			</h2>
		</div>
	</div>
	<div class="ui vertical stripe quote segment">
		<div class="ui equal width stackable internally celled grid">
			<div class="center aligned row">
				<?php echo newTile($_smarty_tpl->tpl_vars['cat']->value[1]);?>

				<?php echo newTile($_smarty_tpl->tpl_vars['cat']->value[2]);?>

			</div>
			<div class="center aligned row">
				<?php echo newTile($_smarty_tpl->tpl_vars['cat']->value[3]);?>

				<?php echo newTile($_smarty_tpl->tpl_vars['cat']->value[4]);?>

			</div>
		</div>
	</div>

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
			alert('left');
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