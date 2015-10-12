<?php $args = array(
	'category_name' => 'portfolio'
); ?>

<?php $posts=get_posts( $args ); ?>
<h1 class="categoryName"><?php echo $args["category_name"]; ?></h1>
<div class="centered">
<div id="grid" data-columns>
<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>

	<div>
	<div class="grid-title">
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	
	
<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail();
} ?>
</div>
<?php the_content(); ?>
	</div>
<?php endforeach;
wp_reset_postdata();?></div>
</div>
<div style="clear:both"></div>
