<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GeekHub - Главная</title>
<link href="http://fonts.googleapis.com/css?family=PT+Sans&amp;subset=latin,cyrillic,cyrillic-ext,latin-ext" rel="stylesheet" type="text/css" />
<?php wp_head(); ?>
</head>

<body>
<div class="wrapper">
	<div class="header-wrapper">
		<div class="header">
            <h1>
				<a href="<?php echo get_option('home'); ?>/">
					<img src="<?php echo get_theme_mod( 'logo' ); ?>" alt="<?php bloginfo('name'); ?>"/>
					<?php bloginfo('name'); ?>
				</a>
			</h1>

            <?php wp_nav_menu(array(
                'theme_location'  => 'main_menu',
                'menu_class'      => 'header-navigation',
                'container'       => false
            )); ?>
            
			
            <ul class="social">
				<?php if(get_theme_mod('facebook') ) { ?>
				<li class="fb"><a href="https://facebook.com/ <?php echo get_theme_mod('facebook'); ?>">Facebook</a></li>
				<?php } ?>
				<?php if(get_theme_mod('vk') ) { ?>
				<li class="vk"><a href="https://vk.com/  <?php echo get_theme_mod('vk'); ?>">VKontakte</a></li>
				<?php } ?>
				<?php if(get_theme_mod('twitter') ) { ?>
				<li class="tw"><a href="https://twitter.com/ <?php echo get_theme_mod('twitter'); ?>">Twitter</a></li>
				<?php } ?>
				<?php if(get_theme_mod('youtube') ) { ?>
				<li class="yt"><a href="https://youtube.com/ <?php echo get_theme_mod('youtube'); ?>">YouTube</a></li>
				<?php } ?>
				<?php if(get_theme_mod('vimeo') ) { ?>
				<li class="vm"><a href="https://vimeo.com/ <?php echo get_theme_mod('vimeo'); ?>">Vimeo</a></li>
				<?php } ?>
			</ul>
		</div>
		<h2 class="registration-open">Реєстрація на другий сезон відкрита!</h2>
		<a href="#" class="registration">Зареєструватися</a>
	</div>