<div class="service-outer-wrapper">
<div class="service-wrapper">
<?php $args = array(
	'category_name' => 'services'
); ?>

<?php $posts=get_posts( $args ); ?>
<h2 class="front-section-heading"><?php echo category_description( get_category_by_slug('services')->term_id ); ?></h2>

<div class="service-content-wrapper">
<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>

	<div class="service-content">
		<h3><?php the_title(); ?></h3>
		<?php the_content(); ?>
	</div>

<?php endforeach;
wp_reset_postdata();?>
</div>
</div>
</div>