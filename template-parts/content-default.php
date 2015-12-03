<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nittoli
 */

?>

<article id="post-<?php the_ID(); ?>" class="post-2col <?php post_class(); ?>"
	<header class="entry-header">

		<?php the_title( sprintf( '<h2 class="entry-title left"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<div class="entry-meta left">
				<span class="capital"><?php the_author(); ?></span>
				<?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
				<span><?php the_date(); ?>		</span>		
			</div><!-- .entry-meta -->
				<!-- Begin Featured Image -->
			<?php $thumb_id = get_post_thumbnail_id();
				$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
				$thumb_url = $thumb_url_array[0]; ?>
			<div class='featured-image' style="background-image: url('<?php echo ($thumb_url); ?>');">
			</div>
		 <!-- End Featured Image -->
		<?php if ( 'post' === get_post_type() ) : ?>
		
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content post-2col left">

		<?php
			the_excerpt();
					
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nittoli' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php nittoli_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
