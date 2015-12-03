<?php
	function addToCarousel($t, $d, $i){
		$c['titre'] = $t;
		$c['desc'] = $d;
		$c['img'] = $i;
		return $c;
	}
	
	$affiches = array("1"=>addToCarousel("Test","Ceci est un test","kristy.png"),
			"2"=>addToCarousel("Test 2","Ceci est un  autre test","matthew.png"),
			"3"=>addToCarousel("Test 3","Cecefezf","molly.png")
	);
	
	$smarty->assign('affiches',$affiches);
?>
