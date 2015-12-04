<?php
	if(isset($_GET['cat'])){
		$cat = $_GET['cat'];
		$dir = 'medias';
		$folder = opendir($dir);
		while($file = readdir($folder)){
			$ex = explode('.',$file);
			if($cat==$ex[0]){
				$smarty->assign('cat',$cat);
			}
		}
	}
?>
