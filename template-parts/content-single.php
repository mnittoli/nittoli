<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nittoli
 */

?>
<div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title left">', '</h2>' ); ?>

		<div class="entry-meta left">
				<span class="capital"><?php the_author(); ?></span>
				<?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
				<span><?php the_date(); ?>		</span>		
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
			<div class="post_featured_image">
				<?php if (has_post_thumbnail()) {
						the_post_thumbnail();
						}
				?><!-- End Post Featured Image -->
			</div>
	<div class="entry-content">
		<?php the_content(); ?>
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
</div>
