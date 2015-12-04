{extends "../layout.tpl"}
{block name=main}
	{if isset($cat)}
	<div class="ui middle aligned center aligned grid page">
		<div class="column">
			<img class="ui centered small image" src="medias/{$cat['lien']}.png"><h2>{$cat['nom']}</h2>
			<img class="ui centered massive image" src="medias/infographie/{$cat['lien']}.png">
		</div>
	</div>
	{/if}
{/block}
