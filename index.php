<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nittoli
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="main-wrapper">
					<?php $args = array('category_name' => 'news'); ?><!-- Sets the variable $args, then declares it an array with one key of category_name with value of news. -->
					<?php $posts = get_posts($args);  ?> <!-- Sets up a variable called $posts that contains our post arguments above. -->
					<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?> <!-- Takes the post and posts them. -->
					   	<?php get_template_part( 'template-parts/content', 'default' ); ?>
					<?php endforeach; 
					wp_reset_postdata();?> <!-- Runs the same loop again to find and display the next post. -->
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php //get_sidebar();?>
<?php get_footer(); ?>
