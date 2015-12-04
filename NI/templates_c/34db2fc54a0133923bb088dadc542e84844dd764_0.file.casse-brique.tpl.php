<?php /* Smarty version 3.1.27, created on 2015-12-04 05:47:12
         compiled from "C:\wamp\www\iut\NI\application\views\modules\casse-brique.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:255956611ad0ddbe72_66741146%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34db2fc54a0133923bb088dadc542e84844dd764' => 
    array (
      0 => 'C:\\wamp\\www\\iut\\NI\\application\\views\\modules\\casse-brique.tpl',
      1 => 1449199327,
      2 => 'file',
    ),
    'b46e9df54bd9266b7e41c30e44f9beee72cdce23' => 
    array (
      0 => 'C:\\wamp\\www\\iut\\NI\\application\\views\\layout.tpl',
      1 => 1449204103,
      2 => 'file',
    ),
    '77dd85f99246924b820157cfb3885f44cffc8d61' => 
    array (
      0 => '77dd85f99246924b820157cfb3885f44cffc8d61',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '255956611ad0ddbe72_66741146',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56611ad0e42bb2_47499586',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56611ad0e42bb2_47499586')) {
function content_56611ad0e42bb2_47499586 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '255956611ad0ddbe72_66741146';
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
$_smarty_tpl->properties['nocache_hash'] = '255956611ad0ddbe72_66741146';
?>

	<div class="ui middle aligned center aligned grid page">
		<div class="column">
			<?php echo $_smarty_tpl->tpl_vars['cb']->value;?>

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