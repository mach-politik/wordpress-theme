<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<a href="https://creativecommons.org/licenses/by-sa/4.0/deed.de" rel="license" target="_blank">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/CC-BY-SA_icon.svg" alt="Creative Commons" />
			</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
