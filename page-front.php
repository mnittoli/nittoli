<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nittoli
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="about-container">
			

				<?php get_template_part( 'template-parts/content', 'services' ); ?>

				

			
			</div>
		<div class="portfolio-container section-container">

			<?php get_template_part( 'template-parts/content', 'portfolio' ); ?>
			
		</div>
		<div class="testimonials section-container">

			<?php get_template_part( 'template-parts/content', 'testimonials' ); ?>
			
		</div>







		</main><!-- #main -->
	</div><!-- #primary -->

 <?php //*get_sidebar(); ?>
<?php get_footer(); ?>
