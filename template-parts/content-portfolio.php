<p>Content Loads</p>
<?php $posts=get_posts( 'category_name=portfolio' ); ?>
<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
	<p>It works</p>
	<li>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</li>
<?php endforeach;
wp_reset_postdata();?>
