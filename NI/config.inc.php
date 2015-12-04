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


$smarty->assign('datas',$datas);
?>