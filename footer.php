<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underboot
 */

?>

	</div><!-- #content -->
	

	<footer id="colophon" class="site-footer pt-5 pb-3 mt-md-4">

		<?php do_action('underboot_footer'); ?>

		<div class="container">
			<div class="site-info">
				<span>Created with ❤️</span>
			</div><!-- .site-info -->
		</div><!-- .container -->

	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>