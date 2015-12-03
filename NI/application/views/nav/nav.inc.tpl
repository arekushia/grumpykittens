<nav>
	<div class="ui menu inverted navbar">
		<a class="item" href="{$datas['Page']['index']['lien']}.php"><h1>{$datas['NomSite']}</h1></a>
		
		{foreach $datas['Page'] as $k}
			{if $k['visible']}
				<a class="item {if $k['nom']==$datas['Page']['index']['nom']}active{/if}" href="{$k['lien']}.php">{$k['nom']}</a>
			{/if}
		{/foreach}
	</div>
</nav>
