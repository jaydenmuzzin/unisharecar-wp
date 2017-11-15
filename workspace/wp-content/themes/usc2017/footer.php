<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Test_Theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://usc-wp-jaydenmuzzin.c9users.io/sitemap//') ); ?>">Sitemap</a>
			<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'testtheme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'testtheme' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span> -->
			<?php /* printf( esc_html__( 'Theme: %1$s by %2$s.', 'testtheme' ), 'testtheme', '<a href="https://automattic.com/" rel="designer">JM</a>' ); */ ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
