{extends "../layout.tpl"}
{block name=main}
	{if isset($cat)}
		<img class="ui centered small image" src="medias/{$cat['lien']}.png"><h2>{$cat['nom']}</h2>
	{/if}
{/block}
