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
	<div class="footer-section blog-posts">
		<ul>
			<?php
				$args = array( 'numberposts' => '5' );
				$recent_posts = wp_get_recent_posts( $args );
				foreach( $recent_posts as $recent ){
					echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
				}
			?>
		</ul>
	</div>	

	<div class="footer-section social">
		<ul>
			<li>
				<a href="https://www.facebook.com/mnittoli" target="blank"><img src="<?php echo get_template_directory_uri().'/images/facebook.png'; ?>"/></a>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri().'/images/twitter.png'; ?>"/>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri().'/images/linkedin12.png'; ?>"/>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri().'/images/codepen.png'; ?>"/>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri().'/images/cat6.png'; ?>"/>
			</li>
		</ul>
	</div >
	
	<div class="footer-section latest-tweets">
		<?php get_sidebar(); ?>
	</div>


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/salvattore.min.js"></script>
</body>
</html>
