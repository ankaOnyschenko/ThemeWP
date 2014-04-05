	<div class="sidebar">
		<ul class="widgets">
			<li class="fb-widget"><?php if ( !function_exists ('dynamic_sidebar')
			|| !dynamic_sidebar ('Доп. поле') ) { ?> <?php } ?></li>
			
			<li class="our-sponsors">
				<h3>		
					<?php
						$obj = get_post_type_object( 'sponsors' );
						echo $obj->labels->name;
					?>
				</h3>
				<ul>
				<?php
					$args = array(
						'post_type' => 'sponsors',
						'order'     => 'ASC',
						);
					$sponsors = new WP_Query( $args );
						if( $sponsors->have_posts() ) {
							while( $sponsors->have_posts() ) {
					$sponsors->the_post();
				?>			
					<li class="sponsors">
						<a href="#">		
							<?php
								if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							} ?>
							<?php the_content() ?>
						</a>
					</li>
			<?php
					}
				}
				else {
					echo 'No sponsors!';
				}
			?>
				</ul>
			</li>
		</ul>
	</div>