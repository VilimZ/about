<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package About
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-footer-info">
			<span class="sep"> - </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf(esc_html__( 'COPYRIGHT: %1$s  %2$s', 'about' ), '  &copy;', date_i18n( __('Y', 'about')) .' <a href="mailto:vilim.zovko@gmail.com">VILIM ZOVKO</a>' );
				?>
				<span class="sep"> - </span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
