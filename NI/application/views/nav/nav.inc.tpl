<nav>
	<div class="ui menu inverted navbar navigation">
		<a class="item" href="{$datas['Page']['index']['lien']}.php"><h1><img width="200px" src="http://audric.cf/i/logo.png"></h1></a>
		
		{foreach $datas['Page'] as $k}
			{if $k['visible']}
				<a class="navy item {if isset($curpage)&&($k['lien']==$curpage)}active{/if}" href="?page={$k['lien']}">{$k['nom']}</a>
			{/if}
		{/foreach}
	</div>
</nav>
