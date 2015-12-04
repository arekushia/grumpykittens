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
	document.onkeypress = function(e) {
		switch (e.keyCode) {
			case 98:
				window.location = "?page=casse-brique";
				break;
			case 99:
				window.location = "?page=categories&cat=catastrophe_naturelle";
				break;
			case 103:
				window.location = "?page=categories&cat=guerre";
				break;
			case 97:
				window.location = "?page=categories&cat=attentat";
				break;
			case 101:
				window.location = "?page=categories&cat=epidemie";
				break;
		}
	};
	document.onkeydown = function(e) {
		switch (e.keyCode) {
			case 38:
				var audio = new Audio('medias/sounds/chewy_roar.mp3');audio.play();
				break;
			case 37:
				var audio = new Audio('medias/sounds/light-saber-off.mp3');audio.play();
				break;
			case 39:
				var audio = new Audio('medias/sounds/light-saber-on.mp3');audio.play();
				break;
			case 40:
				var audio = new Audio('medias/sounds/yodalaughing.mp3');audio.play();
				break;
		}
	};
	</script>
</html>
