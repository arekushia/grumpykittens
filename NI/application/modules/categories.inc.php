<?php
	if(isset($_GET['cat'])){
		$cat = $_GET['cat'];
		$dir = 'medias';
		$folder = opendir($dir);
		while($file = readdir($folder)){
			$ex = explode('.',$file);
			if($cat==$ex[0]){
				$sel_cat = $bdd->query("SELECT * FROM categories WHERE lien='$cat'")->fetch();
				$smarty->assign('cat',$sel_cat);
			}
		}
	}
?>
