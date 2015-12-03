<?php /* Smarty version 3.1.27, created on 2015-12-03 23:30:04
         compiled from "C:\wamp\www\iut\NI\application\views\modules\accueil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:201035660c26c796e57_29995072%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2328d4d95300da02da1b9374db5f4c279dfb4bc4' => 
    array (
      0 => 'C:\\wamp\\www\\iut\\NI\\application\\views\\modules\\accueil.tpl',
      1 => 1449181803,
      2 => 'file',
    ),
    'b46e9df54bd9266b7e41c30e44f9beee72cdce23' => 
    array (
      0 => 'C:\\wamp\\www\\iut\\NI\\application\\views\\layout.tpl',
      1 => 1449176590,
      2 => 'file',
    ),
    '93be84ebe0d0f8865bdba4ec912b3dcd23060745' => 
    array (
      0 => '93be84ebe0d0f8865bdba4ec912b3dcd23060745',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '201035660c26c796e57_29995072',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5660c26c823179_92638247',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5660c26c823179_92638247')) {
function content_5660c26c823179_92638247 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '201035660c26c796e57_29995072';
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
$_smarty_tpl->properties['nocache_hash'] = '201035660c26c796e57_29995072';
?>

	<div class="ui middle aligned center aligned grid page">
		<div class="column">
			<h2 id="nomSite" class="ui teal header">
				<div class="content">Besoin d'aide ?<br>Allons-y !</div>
			</h2>
			
			<div class="ui segment">
				<div id="helpr-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2+1 - (0) : 0-(2)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
							<li data-target="#helpr-carousel" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"></li>
						<?php }} ?>
					</ol>
					  <div class="carousel-inner" role="listbox">
						<?php
$_from = $_smarty_tpl->tpl_vars['affiches']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
							<div class="item <?php if ($_smarty_tpl->tpl_vars['i']->value == 1) {?>active<?php }?>">
								<img src="medias/carousel/<?php echo $_smarty_tpl->tpl_vars['value']->value['img'];?>
">
								<div class="carousel-caption">
									<h3><?php echo $_smarty_tpl->tpl_vars['value']->value['titre'];?>
</h3>
									<p><?php echo $_smarty_tpl->tpl_vars['value']->value['desc'];?>
</p>
								</div>
							</div>
						<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>
					</div>
					<a class="left carousel-control" href="#helpr-carousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#helpr-carousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>

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