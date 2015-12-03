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
			
				<?php $args = array('category_name' => 'news'); ?><!-- Sets the variable $args, then declares it an array with one key of category_name with value of news. -->
					<?php $posts = get_posts($args);  ?> <!-- Sets up a variable called $posts that contains our post arguments above. -->
					<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?> <!-- Has more than 1 data instance because its an array. All data will be assigned to variable $post -->
						<li class="blog-posts">
							<div class="footer-post-thumb"> <!-- Post Thumbnail Image -->
							<?php if (has_post_thumbnail() ) {
					            the_post_thumbnail(); 
					} else { ?>
					            <img src=" <?php echo get_template_directory_uri().'/images/smile.png'; ?>"/> <?php } ?>
					        </div>
					        <div class="footer-post-title"> <!-- Post Title Link  -->
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</div>
						</li>
					<?php endforeach; 
					wp_reset_postdata();?> <!-- Runs the same loop again to find and display the next post. -->
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
