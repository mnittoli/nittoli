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

	
			<div class="about-container"><!-- Services Section -->

				<?php get_template_part( 'template-parts/content', 'services' ); ?>
			
			</div>
			<div class="portfolio-class section-container"><!-- Portfolio Section -->


				<?php get_template_part( 'template-parts/content', 'portfolio' ); ?>
				
			</div>
			<div class="testimonials section-container">

				<?php get_template_part( 'template-parts/content', 'testimonials' ); ?>
				
			</div>







	

 <?php //*get_sidebar(); ?>
<?php get_footer(); ?>
