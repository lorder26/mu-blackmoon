<div class="block-players widget-fon-discussions"><!--block-DISCUSSIONS-->
	<div class="block-widget-title">
		TOP GENS
	</div>
	<ul class="top-block">
		<li class="top-title">
			<span class="top-number">#</span> <span class="top-flag"></span> <span class="top-name">Name</span> <span class="top-lvl">Family</span> <span class="top-Res">Rank</span>
		</li>
		<?php
		$topResets = LoadCacheData('rankings_gens.cache');
		if(is_array($topResets)) {
			$showPlayerCountry = mconfig('show_country_flags') ? true : false;
			$charactersCountry = loadCache('character_country.cache');
			$gensType = $rdata[1] == 1 ? '<img class="rankings-gens-img" src="'.__PATH_TEMPLATE_IMG__.'gens_1.png" title="'.lang('rankings_txt_26',true).'" alt="'.lang('rankings_txt_26',true).'"/>' : '<img class="rankings-gens-img" src="'.__PATH_TEMPLATE_IMG__.'gens_2.png" title="'.lang('rankings_txt_27',true).'" alt="'.lang('rankings_txt_27',true).'"/>';
			if(!is_array($charactersCountry)) $showPlayerCountry = false;
			foreach($topResets as $key => $row) {
				if($key == 0) continue;
				if($key >= 8) continue;
				echo '<li class="top-list">';
				echo '<span class="top-number">'.$key.'.</span> 
				      <span class="top-flag"><img src="'.getCountryFlag($charactersCountry[$row[0]]).'" /></span> 
				      <span class="top-name">'.playerProfile($row[0]).'</span> 
				      <span class="top-lvl">'.$gensType.'</span> 
				      <span class="top-Res">'.number_format($row[2]).'</span>';
				echo '</li>';
			}
		}
		?>
	</ul>	
		<div class="buttons-small">
			<a href="<?php echo __BASE_URL__; ?>rankings/gens" class="button-small">Top Gens</a>
		</div>
</div>