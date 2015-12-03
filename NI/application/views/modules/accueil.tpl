{extends "../layout.tpl"}
{block name=main}
	<div class="ui middle aligned center aligned grid page">
		<div class="column">
			<h2 id="nomSite" class="ui teal header">
				<div class="content">Besoin d'aide ?<br>Allons-y !</div>
			</h2>
			
			<div class="ui segment">
				<div id="helpr-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						{for $i=0 to 2}
							<li data-target="#helpr-carousel" data-slide-to="{$i}"></li>
						{/for}
					</ol>
					  <div class="carousel-inner" role="listbox">
						{foreach $affiches as $i=>$value}
							<div class="item {if $i==1}active{/if}">
								<img src="medias/carousel/{$value['img']}">
								<div class="carousel-caption">
									<h3>{$value['titre']}</h3>
									<p>{$value['desc']}</p>
								</div>
							</div>
						{/foreach}
					</div>
					<a class="left carousel-control" href="#helpr-carousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#helpr-carousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
{/block}
