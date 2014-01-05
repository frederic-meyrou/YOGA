<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>
				<nav id="access" role="navigation">
				<h3 class="assistive-text"><?php _e( 'Main menu', 'twentyeleven' ); ?></h3>
				<?php wp_nav_menu( array( 'theme_location' => '' ) ); ?>
			        </nav><!-- #access -->

			<div id="site-generator">
				<a href="<?php echo esc_url( __( 'http://atelieryoga.fr/', 'Atelier YOGA' ) ); ?>" title="<?php esc_attr_e( 'Atelier YOGA', 'Atelier YOGA' ); ?>" rel="generator"><?php printf( __( 'Atelier YOGA', 'Atelier YOGA' ), 'Atelier YOGA' ); ?></a>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>