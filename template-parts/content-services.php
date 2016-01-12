<div class="service-outer-wrapper">
<div class="service-wrapper">
<?php $args = array(
	'category_name' => 'services'
); ?>

<?php $posts=get_posts( $args ); ?>
<h1 class="categoryName"><?php echo $args["category_name"]; ?></h1>

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