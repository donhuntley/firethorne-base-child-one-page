<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package firethorne-base
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
            <?php get_sidebar('footer'); ?>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'firethorne-base' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'firethorne-base-child-one-page' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s', 'firethorne-base-child-one-page' ), 'Firethorne One-page', '<a href="http://github.com/donhuntley/" rel="designer">Firethorne Design</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
