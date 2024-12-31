<div class="news-top">
	<div class="news-top-title">
		<a href="<?php echo __BASE_URL__; ?>news" class="tab-more bright">+</a>
		<span class="tab-button active">TEMAS DE ANUNCIO</span>
	</div>
	<div class="news-top-text">
	<?php
	$cachedNews = loadCache('news.cache');

	if(is_array($cachedNews)) {

		foreach($cachedNews as $newsArticle) {
		    
		$news_title = base64_decode($newsArticle['news_title']);
			echo '<div class="news flex-s-c">';
			echo '<a href="'.__BASE_URL__.'news/'.$newsArticle['news_id'].'"><span class="news-1">[NEWS] </span> '.$news_title.' </a>';
			echo '<span class="date">'.date("Y.m.d", $newsArticle['news_date']).'</span>';
			echo '</div>';
		}
	}
	?>
	</div>
</div>