<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nittoli
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="back-top clearfix">
			<div class="arrow-up">
				<a href="#header">BACK TO TOP</a>
			</div>
		</div>
		<div class="footer-social-widgets">
			<a href="#"><img src="<?php echo get_template_directory_uri().'/images/facebook.png'; ?>"/></a>
			<a href="#"><img src="<?php echo get_template_directory_uri().'/images/twitter.png'; ?>"/></a>
			<a href="#"><img src="<?php echo get_template_directory_uri().'/images/codepen.png'; ?>"/></a>
			<div class="footer-widget clearfix"></div>
		</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'nittoli' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'nittoli' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'nittoli' ), 'nittoli', '<a href="http://www.mikenittoli.com" rel="designer">Mike Nittoli</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/salvattore.min.js"></script>
</body>
</html>
