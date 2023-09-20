<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	

	<footer id="colophon" class="site-footer">
		
		<div class="site-info">
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?>
				</nav><!-- .footer-navigation -->
			<?php endif; ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

			<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.<?php echo get_template_directory_uri(); ?>/js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/bootstrap.min.js"></script>			
  			<script src="<?php echo get_template_directory_uri(); ?>/js/easing.min.js"></script>			
			<script src="<?php echo get_template_directory_uri(); ?>/js/hoverIntent.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/js/superfish.min.js"></script>	
			<script src="<?php echo get_template_directory_uri(); ?>/js/mn-accordion.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.ajaxchimp.min.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>	
			<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>						
			<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.nice-select.min.js"></script>	
    		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.circlechart.js"></script>								
			<script src="<?php echo get_template_directory_uri(); ?>/js/mail-script.js"></script>	
			<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

</body>
</html>
