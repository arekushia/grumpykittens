<!DOCTYPE html>
<html lang="fr">
	<head>
		{include '../layout/includes.inc.tpl'}
	</head>
	<body>
		<header>
			{include '../layout/header.inc.tpl'}
			{include '../nav/nav.inc.tpl'}
		</header>
		<main>
			{block name=main}{/block}
		</main>
	</body>
	<footer>
		{include '../layout/footer.inc.tpl'}
	</footer>
	<script>
	document.onkeydown = function(e) {
	switch (e.keyCode) {
		case 37:
			alert('left');
			break;
		case 38:
			var audio = new Audio('medias/sounds/bomb.mp3');audio.play();
			break;
		case 39:
			var audio = new Audio('medias/sounds/alla.mp3');audio.play();
			break;
		case 40:
			var audio = new Audio('medias/sounds/boom.mp3');audio.play();
			break;
    }
};
	</script>
</html>
