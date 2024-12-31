<footer class="footer">
	<div class="toTop-fon">
			<div class="toTop" id="toTop"></div>
		</div>
	<div class="footer-block-t">
		<ul class="f-menu">
			<li><a href="<?php echo __BASE_URL__; ?>"><?php echo lang('menu_txt_1'); ?></a></li>
			<li><a href="<?php echo __BASE_URL__; ?>register"><?php echo lang('menu_txt_3'); ?></a></li>
			<li><a href="<?php echo __BASE_URL__; ?>rankings"><?php echo lang('menu_txt_10'); ?></a></li>
			<li><a href="<?php echo __BASE_URL__; ?>downloads"><?php echo lang('menu_txt_7'); ?></a></li>
			<li><a href="<?php echo __BASE_URL__; ?>donation"><?php echo lang('menu_txt_8'); ?></a></li>
			<li><a href="<?php config('website_forum_link'); ?>"><?php echo lang('menu_txt_2'); ?></a></li>
			<li><a href="<?php echo __BASE_URL__; ?>info"><?php echo lang('menu_txt_11'); ?></a></li>
		</ul>
	</div><!-- footer-block-t -->
	<div class="footer-end flex-s-c">
		<div class="footer-block-coperite">
		
		<?php if(config('language_switch_active',true)) { ?>
		<div style="margin-bottom: 10px;">
			<span style="color:#fff;"><?php echo lang('switch_lang'); ?></span><br />
			<a href="<?php echo __BASE_URL__ . 'language/switch/to/en'; ?>" data-toggle="tooltip" data-placement="top" title="English"><img src="<?php echo getCountryFlag('US'); ?>" /></a>
			<a href="<?php echo __BASE_URL__ . 'language/switch/to/es'; ?>" data-toggle="tooltip" data-placement="top" title="Español"><img src="<?php echo getCountryFlag('ES'); ?>" /></a>
			<a href="<?php echo __BASE_URL__ . 'language/switch/to/ph'; ?>" data-toggle="tooltip" data-placement="top" title="Filipino"><img src="<?php echo getCountryFlag('PH'); ?>" /></a>
			<a href="<?php echo __BASE_URL__ . 'language/switch/to/pt'; ?>" data-toggle="tooltip" data-placement="top" title="Português"><img src="<?php echo getCountryFlag('BR'); ?>" /></a>
			<a href="<?php echo __BASE_URL__ . 'language/switch/to/ro'; ?>" data-toggle="tooltip" data-placement="top" title="Romanian"><img src="<?php echo getCountryFlag('RO'); ?>" /></a>
		</div>
		<?php } ?>
		
			<span>&copy; <?php echo date("Y"); ?> <?php config('server_name'); ?></span><br /><br />
			<?php $handler->webenginePowered(); ?>
		</div>
		<div class="footer-logo"><a href="<?php echo __BASE_URL__; ?>"><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>extazys.png" alt=""></a></div>
		<div class="footer-block-r">
			<div class="soc-block">
				<a href="#" class="facebook"><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>soc-icons_f.png" alt=""></a>
				<a href="#" class="twitter"><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>soc-icons_t.png" alt=""></a>
				<a href="#" class="youtube"><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>soc-icons_y.png" alt=""></a>
			</div>
			<div class="templstock"><a href="https://templstock.com/" title="Game Site Templates - High quality PSD Templates, WordPress themes, HTML templates and Free game templates." class="templstock a"><img src="<?php echo __PATH_TEMPLATE_IMG__; ?>templ-logo.png" alt=""></a>
			</div>
		</div>
	</div>
</footer><!-- .footer -->