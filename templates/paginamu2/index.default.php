<?php
/**
 * WebEngine CMS
 * https://webenginecms.org/
 * 
 * @version 1.2.0
 * @author Lautaro Angelico <http://lautaroangelico.com/>
 * @copyright (c) 2013-2019 Lautaro Angelico, All Rights Reserved
 * 
 * Licensed under the MIT license
 * http://opensource.org/licenses/MIT
 */

if(!defined('access') or !access) die();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
		<title><?php $handler->websiteTitle(); ?></title>
		<meta name="generator" content="WebEngine <?php echo __WEBENGINE_VERSION__; ?>"/>
		<meta name="author" content="Lautaro Angelico"/>
		<meta name="description" content="<?php config('website_meta_keywords'); ?>"/>
		<meta name="keywords" content="<?php config('website_meta_keywords'); ?>"/>
		<link rel="shortcut icon" href="<?php echo __PATH_TEMPLATE__; ?>favicon.ico"/>
		<meta name="viewport" content="width=1240, maximum-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="<?php echo __PATH_TEMPLATE_CSS__; ?>style.css" rel="stylesheet">
		<link href="<?php echo __PATH_TEMPLATE_CSS__; ?>swiper.min.css" rel="stylesheet">
		<link href="<?php echo __PATH_TEMPLATE_CSS__; ?>slick.css" rel="stylesheet">
		<link href="<?php echo __PATH_TEMPLATE_CSS__; ?>slick-theme.css" rel="stylesheet">
		<link href="<?php echo __PATH_TEMPLATE_CSS__; ?>webengine.css" rel="stylesheet">
		<link href="<?php echo __PATH_TEMPLATE_CSS__; ?>profiles.css" rel="stylesheet">
		<link href="<?php echo __PATH_TEMPLATE_CSS__; ?>override.css" rel="stylesheet">
		<script>
			var baseUrl = '<?php echo __BASE_URL__; ?>';
		</script>
	<style>
.video {
    position: absolute; 
    top: 0; 
    left: 0; 
    width: 100%; 
    min-width: 1200px;
}
 </style>
	</head>
	<body>
<video id="my-video" class="video" autoplay muted loop>
   <source src="http://s6.imperium-mu.com/video/mu.mp4" type="video/mp4">
</video>
		<div class="wrapper">
			<header class="header">
				<div class="top-panel flex-c-c">
					<?php templateBuildNavbar(); ?>
					<div class="topPanel__buttons flex">
						<?php if(isLoggedIn()) { ?>
						<a href="<?php echo __BASE_URL__; ?>logout" class="button"><?php echo lang('menu_txt_6'); ?></a>
						<?php } else { ?>
						<a href="#login-login" class="open_modal button"><?php echo lang('menu_txt_4'); ?></a>
						<a href="<?php echo __BASE_URL__; ?>register" class="buttonDark"><?php echo lang('menu_txt_3'); ?></a>
						<?php } ?>
					</div>
				</div><!-- top-panel -->
				<div class="logo">
					<a href="<?php echo __BASE_URL__; ?>"><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>extazys.png" alt=""></a>
				</div>
				<div class="sparks-sparks">
					<div class="sparks sparks-1">
					</div>
					<div class="sparks sparks-2">
					</div>
					<div class="sparks sparks-3">
					</div>
				</div> 
				<div class="smog">
					<i class="num1"></i>
					<i class="num2"></i>
					<i class="num3"></i>
				</div>
			</header><!-- .header-->
				<main class="content">
					<div class="fast-button">
						<div class="download-block">
							<a href="<?php echo __BASE_URL__; ?>downloads"><span><?php echo strtoupper(lang('menu_txt_7')); ?></span><br><p><?php config('server_name'); ?></p></a>
						</div><!-- DOWNLOAD-block -->
						<div class="status-block">
							<div class="server-bottom">
								<div class="flex-s-c" style="margin-bottom: 10px;">
									<span class="server-name"><?php echo lang('server_time'); ?></span> <span><time id="tServerTime"></time> <span id="tServerDate"></span></span>
								</div>
								<div class="flex-s-c">
									<span class="server-name"><?php echo lang('user_time'); ?></span> <span><time id="tLocalTime"></time> <span id="tLocalDate"></span></span>
								</div>
							</div>
						</div>
						<div class="status-block">
							<div class="server">
								<div class="flex-s-c">
									<span class="server-name"><?php config('server_name'); ?></span> <span class="status-online"><?php echo lang('sidebar_srvinfo_txt_5'); ?></span>
								</div>
								<div class="progress-bar-webengine">
									<span style="width: <?php echo ($srvInfo[3]*100)/$templateMaxOnline; ?>%;"></span>
								</div>
								<a href="<?php echo __BASE_URL__; ?>info" class="desc"><?php echo lang('sidebar_srvinfo_txt_1'); ?></a> <span class="status-online"><?php echo number_format($srvInfo[3]); ?></span>
							</div>
						</div>	
					</div>
					<div class="page-content">
						<div class="row">
							<?php if(in_array($_REQUEST['page'], $disabledSidebar)) { ?>
							<div class="col-xs-12">
								<?php $handler->loadModule($_REQUEST['page'],$_REQUEST['subpage']); ?>
							</div>
							<?php } else { ?>
							<div class="col-xs-8">
								<?php $handler->loadModule($_REQUEST['page'],$_REQUEST['subpage']); ?>
							</div>
							<div class="col-xs-4">
								<?php include(__PATH_TEMPLATE_ROOT__ . 'inc/modules/sidebar.php'); ?>
							</div>
							<?php } ?>
						</div>
					</div><!--page content-->
					
					<?php include(__PATH_TEMPLATE_ROOT__ . 'inc/modules/media.php'); ?>	
				</main><!-- .content -->
				
				<?php include(__PATH_TEMPLATE_ROOT__ . 'inc/modules/footer.php'); ?>
				
		</div><!-- .wrapper -->
		
		<!-- Login Modal -->
		<?php if(!isLoggedIn()) { ?>
		<div id="login-login" class="modal_div"> 
			<span class="modal_close"></span>
			<div class="modal-content">
				<div class="logo-re"><a href="/"><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>logo-1-reg.png" alt=""></a></div>
				<h2><span><?php echo lang('module_titles_txt_2'); ?></span></h2>
				<form action="<?php echo __BASE_URL__ . 'login'; ?>" method="post">
					<p><input class="input-re" type="text" name="webengineLogin_user" placeholder="USERNAME"></p>
					<p><input class="input-re" type="password" name="webengineLogin_pwd" placeholder="PASSWORD"></p>
					<div class="formButton">
						<button class="button" name="webengineLogin_submit" type="submit" value="submit"><?php echo lang('login_txt_3'); ?></button>
					</div>
				</form>
			</div> 
		</div>
		<div id="overlay"></div>
		<?php } ?>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="<?php echo __PATH_TEMPLATE_JS__; ?>webengine.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="<?php echo __PATH_TEMPLATE_JS__; ?>global.js"></script>
		<script src="<?php echo __PATH_TEMPLATE_JS__; ?>swiper.min.js"></script>
		<script src="<?php echo __PATH_TEMPLATE_JS__; ?>main.js"></script>
		<script src="<?php echo __PATH_TEMPLATE_JS__; ?>events.js"></script>
		<script src="<?php echo __PATH_TEMPLATE_JS__; ?>slick.min.js"></script>
		<script>
			$('.center').slick({
			  infinite: true,
			  centerMode: true,
			  centerPadding: '50px 30px',
			  slidesToShow: 3,
			  slidesToScroll: 3
			});
		</script>
	</body>
</html>