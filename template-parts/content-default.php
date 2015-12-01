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

		<?php if ( 'post' === get_post_type() ) : ?>
		<!-- <div class="entry-meta left">
			<span class="capital"><?php the_author(); ?></span>
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
			<span><?php the_date(); ?>		</span>		
		</div>.entry-meta -->
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
