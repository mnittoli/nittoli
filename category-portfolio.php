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
					    echo '<span"' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" class="sub-categories category-'.get_cat_id($category->name).' "' . '>' . $category->name.'</span> '; 
					}
				?>
			</div>

			<div id="portfolio-grid" data-columns><!-- Grid Begins -->
			<?php while ( have_posts() ) : the_post(); ?>
		
			<div class="portfolio-content
			<?php 
			$posttags = get_post_class();
			if ($posttags) {
				foreach ($posttags as $tag) {
					echo $tag.' ';
				}
			}
			?>">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">




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
<script>
var websiteDesign = true;
var print = true;
var mobileApps = true;
var websiteDesignDOM = jQuery(".category-website-design");
var printDOM = jQuery(".category-print");
var mobileAppsDOM = jQuery(".category-mobile-apps");
var websiteDesignTrigger=jQuery(".category-4");
var mobileAppsTrigger=jQuery(".category-5");
var printTrigger=jQuery(".category-6");
websiteDesignTrigger.click(function() {
	websiteDesign = true;
	print = false;
	mobileApps = false;
	filterMaFolio();
});
printTrigger.click(function() {
	websiteDesign = false;
	print = true;
	mobileApps = false;
	filterMaFolio();
});
mobileAppsTrigger.click(function() {
	websiteDesign = false;
	print = false;
	mobileApps = true;
	filterMaFolio();
});
function filterMaFolio() {
	websiteDesignDOM.hide();
	printDOM.hide();
	mobileAppsDOM.hide();

	if (websiteDesign) {
		websiteDesignDOM.show();
	} else {
		websiteDesignDOM.hide();
	}
	 if (print) {
	 	printDOM.show();
	} else {
		printDOM.hide();
	}
	 if (mobileApps) {
	 	mobileAppsDOM.show();
	} else {
		mobileAppsDOM.hide();
	}
}



</script>
<?php get_footer(); ?>

