<?php /* Smarty version 3.1.27, created on 2015-12-04 05:41:44
         compiled from "C:\wamp\www\iut\NI\application\views\modules\accueil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16887566119888cb952_08206674%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2328d4d95300da02da1b9374db5f4c279dfb4bc4' => 
    array (
      0 => 'C:\\wamp\\www\\iut\\NI\\application\\views\\modules\\accueil.tpl',
      1 => 1449194583,
      2 => 'file',
    ),
    'b46e9df54bd9266b7e41c30e44f9beee72cdce23' => 
    array (
      0 => 'C:\\wamp\\www\\iut\\NI\\application\\views\\layout.tpl',
      1 => 1449204103,
      2 => 'file',
    ),
    '6268857616c48d0232a9ab59bf995386dc8a64c7' => 
    array (
      0 => '6268857616c48d0232a9ab59bf995386dc8a64c7',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '16887566119888cb952_08206674',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56611988957bc7_61832982',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56611988957bc7_61832982')) {
function content_56611988957bc7_61832982 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16887566119888cb952_08206674';
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
$_smarty_tpl->properties['nocache_hash'] = '16887566119888cb952_08206674';
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
				<?php echo newTile($_smarty_tpl->tpl_vars['cat']->value[0],'one');?>

				<?php echo newTile($_smarty_tpl->tpl_vars['cat']->value[1],'two');?>

			</div>
			<div class="center aligned row">
				<?php echo newTile($_smarty_tpl->tpl_vars['cat']->value[2],'three');?>

				<?php echo newTile($_smarty_tpl->tpl_vars['cat']->value[3],'four');?>

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
	document.onkeypress = function(e) {
		switch (e.keyCode) {
			case 98:
				window.location = "?page=casse-brique";
				break;
			case 99:
				window.location = "?page=categories&cat=catastrophe_naturelle";
				break;
			case 103:
				window.location = "?page=categories&cat=guerre";
				break;
			case 97:
				window.location = "?page=categories&cat=attentat";
				break;
			case 101:
				window.location = "?page=categories&cat=epidemie";
				break;
		}
	};
	document.onkeydown = function(e) {
		switch (e.keyCode) {
			case 38:
				var audio = new Audio('medias/sounds/chewy_roar.mp3');audio.play();
				break;
			case 37:
				var audio = new Audio('medias/sounds/light-saber-off.mp3');audio.play();
				break;
			case 39:
				var audio = new Audio('medias/sounds/light-saber-on.mp3');audio.play();
				break;
			case 40:
				var audio = new Audio('medias/sounds/yodalaughing.mp3');audio.play();
				break;
		}
	};
	<?php echo '</script'; ?>
>
</html>
<?php }
}
?>