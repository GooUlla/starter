<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ReplaceThis
 */

?>

	<footer id="colophon">
		<div>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'upbrands' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'upbrands' ), 'WordPress' );
				?>
			</a>
			<span> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'upbrands' ), 'upbrands', '<a href="https://upbrandsdesigns.com/">UpBrandsDesigns!</a>' );
				?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
