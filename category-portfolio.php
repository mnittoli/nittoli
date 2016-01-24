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
				
					<h2 class="front-section-heading"> <?php single_cat_title(); ?></h2>
					<!--<div class="line-container"><!-- .line 
						<span class="left-line"></span>
						<span class="middle-line"></span>
						<span class="right-line"></span>
					</div>-->
				
			</header><!-- .page-header -->

			<div class="sub-categories">
				<span class="sub-categories category-all" onclick=showall()>All</span>
				<?php $args = array('child_of' => 10);
					$categories = get_categories( $args );
					foreach($categories as $category) { 
					    echo '<span onclick=filteritman("'.$category->slug.'") title="' . sprintf( __( "View all posts in %s" ), $category->slug ) . '" class="sub-categories category-'.get_cat_id($category->slug).' "' . '>' . $category->slug.'</span> '; 
					}
				?>
			</div>

			<div id="portfolio-grid"><!-- Grid Begins -->
			<?php while ( have_posts() ) : the_post(); ?>
		
			<div class="portfolio-content
			<?php 
			$posttags = get_post_class();
			if ($posttags) {
				foreach ($posttags as $tag) {
					echo $tag.' ';
				}
			}
			?>" style="width:26%">
			<a href="<?php the_permalink(); ?>">




				<div class="portfolio-title"><div class="title-txt"><span class="title-icon">
				<img src="<?php echo get_template_directory_uri() . '/images/plussign5.png'; ?>"/></span><p><?php the_title(); ?></p></div></div>
				<?php if (has_post_thumbnail() ){
					the_post_thumbnail('full');
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
<script>
$grid = jQuery('#portfolio-grid').isotope({
  // options
  itemSelector: '.portfolio-content',
  layoutMode: 'fitRows'
});
function filteritman(cat) {
	$grid.isotope({ filter: '.category-' + cat });	
}
function showall() {
$grid.isotope({ filter: '*' });
}
</script>
<?php get_footer(); ?>