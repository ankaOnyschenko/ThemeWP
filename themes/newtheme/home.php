<?php get_header(); ?>
	<div class="content">
	<?php if ($_SERVER["REQUEST_URI"] == '/') { ?>	
		<p>
			<strong>GeekHub</strong> — це проект, що надає можливість отримати практичні знання та навички в сфері розробки програмного забезпечення. 
			На відміну від традиційної освіти, викладачі GeekHub працюють з новітніми технологіями у провідних софтверних компаніях, тому слухачі GeekHub отримують тільки актуальні знання. 
			Якщо ти зацікавлений — запрошуємо ознайомитись з деталями проекту, та <a href="#">зареєструватися</a> слухачем!
		</p>
	<?php } else {?> <?php } ?>
		<div class="our-courses"> 
			<?php $category = get_the_category(); echo $category[0]->cat_name; ?>
		</div>
		<?php if (is_home()) { query_posts($query_string.'&cat=2&showposts=10'); } ?>
		<ul class="list-of-courses">
			<?php
				$args = array(
					'post_type' => 'courses',
					'order'     => 'ASC',
					);
				$courses = new WP_Query( $args );
					if( $courses->have_posts() ) {
						while( $courses->have_posts() ) {
                $courses->the_post();
			?>
			<li id="post-<?php the_ID(); ?>" class="<?php if ($counter % 2 == 1) {echo 'even';} else {echo 'odd';} ?>">
				<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
				} ?>
				<h4><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h4>
				<?php the_content() ?>
			</li>
			<?php
					}
				}
				else {
					echo 'Oh ohm no courses!';
				}
			?>
        </ul>		
	</div>
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>