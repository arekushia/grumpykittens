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
				{newTile($cat[0],'one')}
				{newTile($cat[1],'two')}
			</div>
			<div class="center aligned row">
				{newTile($cat[2],'three')}
				{newTile($cat[3],'four')}
			</div>
		</div>
	</div>
{/block}
