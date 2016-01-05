

			<div class="portfolio-content"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<div class="portfolio-title"><div class="title-txt"><span class="title-icon">
				<img src="<?php echo get_template_directory_uri() . '/images/plussign5.png'; ?>"/></span><p><?php the_title(); ?></p></div></div>
				<?php if (has_post_thumbnail() ){
					the_post_thumbnail();
				}
				?></a>
				</div>





				

		