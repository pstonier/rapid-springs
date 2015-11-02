<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rapid_Springs
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info wrap">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'rapid-springs' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'rapid-springs' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'rapid-springs' ), 'rapid-springs', '<a href="http://rapidsprings.com" rel="designer">Rapid Springs Interactive</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
