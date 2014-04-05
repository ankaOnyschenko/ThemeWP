
<?php
/*
	Template Name: Команда
*/
?>
<?php get_header(); ?>

<h2 class="teampage">
    <?php
        $obj = get_post_type_object( 'team' );
        echo $obj->labels->name;
    ?>
</h2>
	<div class="content">
		<ul class="team">
			<?php
				$args = array(
					'post_type' => 'team',
					'order'     => 'ASC',
					);
				$team = new WP_Query( $args );
					if( $team->have_posts() ) {
						while( $team->have_posts() ) {
                $team->the_post();
			?>			
			<li>
				 <h3>
					<?php the_title() ?>
					<span><?php echo get_post_meta($post->ID, "location", $single = true); ?> </span>
				</h3>			
				<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
				} ?>
				<?php the_content() ?>
			</li>
			<?php
					}
				}
				else {
					echo 'No team!';
				}
			?>
		</ul>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>