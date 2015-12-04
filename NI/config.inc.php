<?php
function addPage($nom, $lien, $visible){
	$page['nom'] = $nom;
	$page['lien'] = $lien;
	$page['visible'] = $visible;
	return $page;
}

$datas['NomSite'] = "Helpr";

$datas['Page']['index'] = addPage("Accueil","accueil",true);
$datas['Page']['concept'] = addPage("Le concept","concept",true);
$datas['Page']['mentions_legales'] = addPage("Mentions Légales","mentions_legales",true);
$datas['Page']['categories'] = addPage("Catégories","categories",false);

try{
	$bdd = new PDO('mysql:host=localhost;dbname=helpr', 'root', '');
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$bdd->exec("SET NAMES 'utf8'");
}
catch(Exception $e){
	die('Erreur : '.$e->getMessage());
}

$smarty->assign('datas',$datas);
?>