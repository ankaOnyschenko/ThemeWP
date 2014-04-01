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
            <h1><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/GeekHub.png" alt="GeekHub" />GeekHub</a></h1>

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
    
	<div class="content">
		<p>
			<strong>GeekHub</strong> — це проект, що надає можливість отримати практичні знання та навички в сфері розробки програмного забезпечення. 
			На відміну від традиційної освіти, викладачі GeekHub працюють з новітніми технологіями у провідних софтверних компаніях, тому слухачі GeekHub отримують тільки актуальні знання. 
			Якщо ти зацікавлений — запрошуємо ознайомитись з деталями проекту, та <a href="#">зареєструватися</a> слухачем!
		</p>
		<div class="our-courses">
			<?php 
			$category = get_the_category();
			echo $category[0]->cat_name;
			?>
		</div>
		<?php if (is_home()) { query_posts($query_string.'&cat=0&showposts=10'); } ?>
		<ul class="list-of-courses">
            <?php if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post(); ?>
                    <li id="post-<?php the_ID(); ?>" class="<?php if ($counter % 2 == 1) {echo 'even';} else {echo 'odd';} ?>" >
                        <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        } ?>
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <?php the_content(); ?>
                    </li>
                <?php } // end while
            } // end if ?>
        </ul>		
	</div>
    
	<div class="footer">
		<ul class="widgets">
			<li class="fb-widget"><img src="images/fb_widget.jpg" alt="Facebook widget" /></li>
			
			<li><a href="#"><img src="images/certificates_registry.png" alt="certificates registry" /></a></li>
			
			<li class="our-sponsors">
				<h3>Наші спонсори</h3>
				<ul>
					<li class="house-of-gospel"><a href="#"><img src="images/house_of_gospel.png" alt="Дім Євангілія" /></a></li>
					<li class="master-of-code"><a href="#"><img src="images/master_of_code.png" alt="master.of.code" /></a></li>
					<li class="sergium"><a href="#"><img src="images/sergium.png" alt="Sergium" /></a></li>
					<li class="yothog"><a href="#"><img src="images/yothog.png" alt="Yothog" /></a></li>
					<li class="sponsor"><a href="#"><img src="images/sponsor.png" alt="Sponsor" /></a></li>
				</ul>
			</li>
		</ul>
		
		<?php wp_nav_menu(array(
                'theme_location'  => 'main_menu',
                'menu_class'      => 'footer-navigation',
                'container'       => false
            )); ?>
			
		<p>&copy; Copyright <?php echo date('Y')?></p>
	</div>
</div>
</body>
</html>