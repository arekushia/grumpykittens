<?php
function addCat($nom, $img, $sound){
	$c['nom'] = $nom;
	$c['img'] = $img;
	$c['sound'] = $sound;
	return $c;
}

function newTile($c, $a){
	echo '<a href="?page=categories&cat='.$c['img'].'" id="tile" class="height wide column box fade-in '.$a.'">
			<h2 class="ui center aligned icon header inverted">
				<img class="ui centered small image" src="medias/'.$c['img'].'.png">'.$c['nom'].'
			</h2>
		</a>
	';
}

$sel_cat = $bdd->query("SELECT * FROM categories")->fetchAll();
var_dump($sel_cat);
$cat = array('1'=>addCat('Catastrophe naturelle','catastrophe_naturelle',''),
		'2'=>addCat('Guerre','guerre','boom'),
		'3'=>addCat('Attentat','attentat',''),
		'4'=>addCat('Epidémie','epidemie','')
	);

$smarty->assign('cat',$cat);
?>
