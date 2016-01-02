<?php
/**
 * The template for displaying Category Portfolio page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nittoli
 */

get_header(); ?>





	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

	<?php if ( have_posts() ) : ?>

			<header class="page-header">
				
					<h1 class="title"> <?php single_cat_title(); ?></h1>
					<div class="line-container"><!-- .line -->
						<span class="left-line"></span>
						<span class="middle-line"></span>
						<span class="right-line"></span>
					</div>
				
			</header><!-- .page-header -->

			<div class="sub-categoires">
				<?php $args = array('child_of' => 3);
					$categories = get_categories( $args );
					foreach($categories as $category) { 
					    echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" class="sub-categories"' . '>' . $category->name.'</a> '; 
					}
				?>
			</div>

			<div id="portfolio-grid" data-columns><!-- Grid Begins -->
			<?php while ( have_posts() ) : the_post(); ?>

			<div class="portfolio-content"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<div class="portfolio-title"><div class="title-txt"><span class="title-icon">
				<img src="<?php echo get_template_directory_uri() . '/images/plussign5.png'; ?>"/></span><p><?php the_title(); ?></p></div></div>
				<?php if (has_post_thumbnail() ){
					the_post_thumbnail();
				}
				?></a>
				</div>

				<?php endwhile; ?>
			</div><!-- Grid Ends -->

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php //get_sidebar(); ?>
<?php get_footer(); ?>