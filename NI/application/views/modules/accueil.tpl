{extends "../layout.tpl"}
{block name=main}
	<div class="ui middle aligned center aligned grid page">
		<div class="column six wide">
			<h2 id="nomSite" class="ui header">
				<div class="content">Besoin d'aide ?<br>Allons-y !</div>
			</h2>
		</div>
	</div>
	<div class="ui vertical stripe quote segment">
		<div class="ui equal width stackable internally celled grid">
			<div class="center aligned row">
				{newTile($cat[1])}
				{newTile($cat[2])}
			</div>
			<div class="center aligned row">
				{newTile($cat[3])}
				{newTile($cat[4])}
			</div>
		</div>
	</div>
{/block}
