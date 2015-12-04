<?php
function addCat($nom, $lien){
	$c['nom'] = $nom;
	$c['lien'] = $lien;
	return $c;
}

function newTile($c, $a){
	echo '<a href="?page=categories&cat='.$c['lien'].'" id="tile" class="height wide column box fade-in '.$a.'">
			<h2 class="ui center aligned icon header inverted">
				<img class="ui centered small image" src="medias/'.$c['lien'].'.png">'.$c['nom'].'
			</h2>
		</a>
	';
}

$sel_cat = $bdd->query("SELECT * FROM categories")->fetchAll();

$cat = array();
foreach($sel_cat as $value){
	array_push($cat,array('id'=>$value['id'],'nom'=>$value['nom'],'lien'=>$value['lien']));
}

$smarty->assign('cat',$cat);
?>
