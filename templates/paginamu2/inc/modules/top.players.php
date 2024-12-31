<div class="block-players widget-fon">
	<div class="block-widget-title">
		TOP PLAYERS
	</div>	
	<ul class="top-block">
		<li class="top-title">
			<span class="top-number">#</span> <span class="top-flag"></span> <span class="top-name">Name</span> <span class="top-lvl">LvL</span> <span class="top-Res">Res</span>
		</li>
		<?php
		$topResets = LoadCacheData('rankings_resets.cache');
		if(is_array($topResets)) {
			$showPlayerCountry = mconfig('show_country_flags') ? true : false;
			$charactersCountry = loadCache('character_country.cache');
			if(!is_array($charactersCountry)) $showPlayerCountry = false;
			foreach($topResets as $key => $row) {
				if($key == 0) continue;
				if($key >= 8) continue;
				echo '<li class="top-list">';
				echo '<span class="top-number">'.$key.'.</span> <span class="top-flag"><img src="'.getCountryFlag($charactersCountry[$row[0]]).'" /></span> <span class="top-name">'.playerProfile($row[0]).'</span> <span class="top-lvl">'.number_format($row[3]).'</span> <span class="top-Res">'.number_format($row[2]).'</span>';
				echo '</li>';
			}
		}
		?>
	</ul>
	<div class="buttons-small">
		<a href="<?php echo __BASE_URL__; ?>rankings/resets" class="button-small">Top Resets</a>
	</div>
</div>