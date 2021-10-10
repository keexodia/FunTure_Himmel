<?php wp_footer(); ?>
	<!-- footer -->
	<footer class="l-footer p-footer">
		<div class="p-footer__inner">
			<?php
            	wp_nav_menu( array(
					'theme_location' => 'footer-menu',
					'container' => 'div',
					'container_class' => 'p-footer__nav',
					'menu_class' => 'p-footer__item',
					'add_li_class'  => 'p-footer__list',
				) );
        	?>
		</div>
		<div class="p-footer__copyright">
			<small>&copy;Himmel All Rights Reserved.</small>
		</div>
		</footer>
	</body>
</html>
