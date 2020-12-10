<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = 'container';
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
<div class="wrapper wrapper-footer-widgets">
	<div class="container">
		<div class="row">
			<?php
		  		if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-left') )
			?>
			<?php
		  		if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-center') )
			?>
			<?php
		  		if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-right') )
			?>
		</div>
	</div>
</div>

<div class="wrapper" id="wrapper-footer">
	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row">
			<div class="col">
				<div class="site-info">
					All content &copy; copyright <?php bloginfo( 'name' ); ?> <?php echo date("Y"); ?>. Website by <a href="https://bigplane.co.uk" title="Visit the Big Plane website">Big Plane</a>.
				</div><!-- .site-info -->
			</div>
		</div><!-- row end -->
	</div><!-- container end -->
</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</body>

</html>
