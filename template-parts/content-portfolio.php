
<div>

<h2 class="front-section-heading"><?php echo category_description( get_category_by_slug('featured-portfolio')->term_id ); ?></h2>

	

<div id="portfolio-grid" class="clear" data-columns><!-- Grid Begins -->
	<?php $args = array(
		'category_name' => 'featured-portfolio'
	); ?>

	<?php $posts=get_posts( $args ); ?>

	
		<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>

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
<?php endforeach;
wp_reset_postdata();?>
</div><!-- Grid Ends -->
<a href="http://localhost/wordpress/index.php/category/portfolio/" class="portfolio-button">See More Work</a>
</div>


				

		