<div class="block-players widget-fon-guilds">
	<div class="block-widget-title">
		TOP <span class="widget-title-text">GUILDS</span>
	</div>
	<ul class="top-block guild">
		<li class="top-title">
			<span class="top-number">#</span> <span class="top-name">Name</span> <span class="score">Score</span>
		</li>
		<?php
		$topGuilds = LoadCacheData('rankings_guilds.cache');
		if(is_array($topGuilds)) {
			foreach($topGuilds as $key => $row) {
				if($key == 0) continue;
				if($key >= 8) continue;
				echo '<li class="top-list">';
				echo '<span class="top-number">'.$key.'. '.returnGuildLogo($row[3], 18).'</span> <span class="top-name">'.guildProfile($row[0]).'</span> <span class="score">'.number_format($row[2]).'</span>';
				echo '</li>';
			}
		}
		?>
	</ul>
	<div class="buttons-small">
		<a href="<?php echo __BASE_URL__; ?>rankings/guilds" class="button-small">Top Guilds</a>
	</div>
</div>