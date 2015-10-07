

<?php $posts=get_posts( 'category_name=portfolio' ); ?>
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
wp_reset_postdata();?>
</div>
