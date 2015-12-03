<?php
	header('content-type:text/html; charset=utf-8');
	
	define('SMARTY_DIR', 'application/libraries/smarty-3.1.27/libs/');
	require_once(SMARTY_DIR.'Smarty.class.php');
	$smarty = new Smarty();
	
	require_once('config.inc.php');
	
	if(isset($_GET['page'])){
		$curpage = $_GET['page'];
		if(array_key_exists($curpage, $datas['Page'])){
			require_once('application/modules/'.$datas['Page'][$curpage]['lien'].'.inc.php');
			$smarty->display('application/views/modules/'.$datas['Page'][$curpage]['lien'].'.tpl');
		}
		else{$accueil = true;}
	}
	else{$accueil = true;}
	
	if($accueil){
		require_once('application/modules/'.$datas['Page']['index']['lien'].'.inc.php');
		$smarty->display('application/views/modules/'.$datas['Page']['index']['lien'].'.tpl');
	}
?>
