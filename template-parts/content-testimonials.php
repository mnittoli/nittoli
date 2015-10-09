<?php $args = array(
	'category_name' => 'testimonials'
); ?>

<?php $posts=get_posts( $args ); ?>
<h1 class="categoryName"><?php echo $args["category_name"]; ?></h1>
<div>
<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>

	<div>
	
<?php the_content(); ?>
	</div>
	<div class="testimonial-author">
		<?php the_title(); ?>
	
	
<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail();
} ?>
</div>
<?php endforeach;
wp_reset_postdata();?>
</div>
