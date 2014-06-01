	<footer class="footer" role="contentinfo">

		<div class="footer-inner clearfix">

			<nav role="navigation">
				<?php
				wp_nav_menu(array(
					'container' => '',                              // remove nav container
					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
					'menu' => __( 'Footer Links', 'lillehummer' ),   // nav name
					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
					'theme_location' => 'footer-links',             // where it's located in the theme
					'before' => '',                                 // before the menu
        			'after' => '',                                  // after the menu
        			'link_before' => '',                            // before each link
        			'link_after' => '',                             // after each link
        			'depth' => 0                                   // limit the depth of the nav
				));
				?>
			</nav>

			<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

		</div>

	</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>
