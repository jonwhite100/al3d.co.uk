<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

 $the_theme = wp_get_theme();
 $container = get_theme_mod( 'understrap_container_type' );
 ?>
	<div class="footer-container">
		<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
		<footer class="site-footer" id="colophon">
			<div id="wrapper-footer">
				<div class="<?php echo esc_attr( $container ); ?>">
					<div class="row">
						<div class="col-md-6">
							<div class="site-info">
							    &copy; Copyright al3d <?php echo date("Y"); ?>. Site by <a href="https://www.bigplanemedia.co.uk">Big Plane Media</a><span class="sep"> | </span>
							</div><!-- .site-info -->
						</div><!--col end -->
						<div class="col-md-6 footer-menu">
							<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
						</div>
					</div><!-- row end -->
				</div><!-- container end -->
			</div><!-- wrapper end -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page we need this extra closing tag here -->
<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
<script>
	ScrollReveal().reveal('.home-display', { delay: 500 });
	ScrollReveal().reveal('.footer-widget', { delay: 500 });
</script>
<?php wp_footer(); ?>

</body>

</html>
