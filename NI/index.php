<?php
	header('content-type:text/html; charset=utf-8');
	
	define('SMARTY_DIR', 'application/libraries/smarty-3.1.27/libs/');
	require_once(SMARTY_DIR.'Smarty.class.php');
	$smarty = new Smarty();
	
	require_once('config.inc.php');
	
	require_once('application/modules/'.$datas['Page']['index']['lien'].'.inc.php');
	$smarty->display('application/views/modules/'.$datas['Page']['index']['lien'].'.tpl');
?>
