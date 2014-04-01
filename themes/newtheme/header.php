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
            <h1><a href="<?php bloginfo('url'); ?>" id="logo"><?php bloginfo('name'); ?><img src="<?php echo get_template_directory_uri(); ?>/images/GeekHub.png" alt="GeekHub" />GeekHub--></a></h1>

            <?php wp_nav_menu(array(
                'theme_location'  => 'main_menu',
                'menu_class'      => 'header-navigation',
                'container'       => false
            )); ?>
            
            <ul class="social">
				<li class="fb"><a href="#">Facebook</a></li>
				<li class="vk"><a href="#">VKontakte</a></li>
				<li class="tw"><a href="#">Twitter</a></li>
				<li class="yt"><a href="#">YouTube</a></li>
				<li class="vm"><a href="#">Vimeo</a></li>
			</ul>
		</div>
		<h2 class="registration-open">Реєстрація на другий сезон відкрита!</h2>
		<a href="#" class="registration">Зареєструватися</a>
	</div>