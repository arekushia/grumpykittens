{extends "../layout.tpl"}
{block name=main}
	{if isset($cat)}
		<img class="ui centered small image" src="medias/{$cat}.png">
	{/if}
{/block}
