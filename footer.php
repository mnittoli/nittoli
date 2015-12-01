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
	<div class="footer-content">
	<div class="footer-section blog-posts">
		<ul>
			
				<?php
				 $postslist = get_posts('numberposts=5&order=DESC&orderby=date');
				 foreach ($postslist as $post) :
				    setup_postdata($post);
				 ?>

				<li>
				<?php if (has_post_thumbnail() ) {
				            the_post_thumbnail(); 
				} else { ?>
				            <img src=" <?php echo get_template_directory_uri().'/images/smile.png'; ?>"/>
				<?php } ?>
				 <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				 </li>


				 <?php endforeach; ?>
			
		</ul>
	</div>	

	<div class="footer-section social">
		<ul>
			<li class="social">
				<a href="https://www.facebook.com/mnittoli" target="blank"><img src="<?php echo get_template_directory_uri().'/images/facebook.png'; ?>"/></a>
			</li>
			<li class="social">
				<a href="https://www.twitter.com/mike_nittoli" target="blank"><img src="<?php echo get_template_directory_uri().'/images/twitter.png'; ?>"/></a>
			</li>
			<li class="social">
				<a href="https://www.linkedin.com/in/mnittoli" target="blank"><img src="<?php echo get_template_directory_uri().'/images/linkedin12.png'; ?>"/></a>
			</li>
			<li class="social">
				<a href="https://www.codepen.io/mnittoli" target="blank"><img src="<?php echo get_template_directory_uri().'/images/codepen.png'; ?>"/></a>
			</li>

			<li class="social">
				<a href="https://www.github.com/mnittoli" target="blank"><img src="<?php echo get_template_directory_uri().'/images/cat6.png'; ?>"/></a>
			</li>
			<li class="social">
				<a href="http://www.codeacademy.com/mnittoli" target="blank"><img src="<?php echo get_template_directory_uri().'/images/codeacademy.png'; ?>"/></a>
			</li>

		</ul>
	</div >
	
	<div class="footer-section latest-tweets">
		<?php get_sidebar(); ?>
	</div>

	</div>
	</footer><!-- #colophon -->
		<div class="copyrights">
			<p> Copyrights <?php echo date("Y");?> © Mike Nittoli</p>
		</div>
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/salvattore.min.js"></script>
</body>
</html>
