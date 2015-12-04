<?php /* Smarty version 3.1.27, created on 2015-12-04 05:43:29
         compiled from "C:\wamp\www\iut\NI\application\views\modules\map.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:263566119f111fcb3_25907750%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f8bcd1e00291df0090612696286c0128f4e67f6' => 
    array (
      0 => 'C:\\wamp\\www\\iut\\NI\\application\\views\\modules\\map.tpl',
      1 => 1449200944,
      2 => 'file',
    ),
    'b46e9df54bd9266b7e41c30e44f9beee72cdce23' => 
    array (
      0 => 'C:\\wamp\\www\\iut\\NI\\application\\views\\layout.tpl',
      1 => 1449204103,
      2 => 'file',
    ),
    '798a30ce9be047d695d2ba1623c59225812cc869' => 
    array (
      0 => '798a30ce9be047d695d2ba1623c59225812cc869',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '263566119f111fcb3_25907750',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566119f118a7e5_69318027',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566119f118a7e5_69318027')) {
function content_566119f118a7e5_69318027 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '263566119f111fcb3_25907750';
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
$_smarty_tpl->properties['nocache_hash'] = '263566119f111fcb3_25907750';
?>

	<div class="ui middle aligned center aligned grid page">
		<div class="column"></div>
	</div>
	<div class="ui middle aligned center aligned grid page">
		<div class="column">
			<iframe class="ui embed" id="carte" name="Carte" src="medias/carte/index.html" height="100%" width="100%"></iframe>
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