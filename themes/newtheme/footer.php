	<div class="footer">
		<?php wp_nav_menu(array(
                'theme_location'  => 'main_menu',
                'menu_class'      => 'footer-navigation',
                'container'       => false
            )); ?>
			
		<p>&copy; Copyright <?php echo date('Y')?></p>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>


