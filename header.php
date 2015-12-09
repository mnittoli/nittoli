<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nittoli
 */


?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nittoli' ); ?></a>
		<?php if ( is_front_page() || is_home() ) : ?>
	<header id="masthead" class="site-header" role="banner" style="background: url('<?php echo( get_header_image() ); ?>');">
		<div class="overlay">
			
			<div class="bird"><!--Bird Layer-->
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo_bird_transparent.png" />
			</div><!--End Bird Layer-->
			<div class="logo"><!--Logo Layer-->
				<!-- <img src="<?php echo get_template_directory_uri(); ?>/images/logo_bird_transparent.png" /> -->
			</div><!--End Logo Layer-->
			<div class="intro-overlay">
				<div class="site-branding">
				
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				
				<p class="site-description"><?php bloginfo( 'description' ); ?></p>
			</div><!-- .site-branding -->
				<!--<div class="search"><form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
		<label>
			<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
			<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
		</label>
		<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
	</form></div>-->
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'nittoli' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
			</div>
			<div class="social-top"><!--Social Media Icons-->
						<ul>
							<li class="social">
								<a href="https://www.facebook.com/mnittoli" target="blank"><img src="<?php echo get_template_directory_uri().'/images/facebook.png'; ?>"/></a>
							</li>
							<li class="social">
								<a href="https://www.twitter.com/mike_nittoli" target="blank"><img src="<?php echo get_template_directory_uri().'/images/twitter.png'; ?>"/></a>
							</li>
							<li class="social">
								<a href="https://www.linkedin.com/in/mnittoli" target="blank"><img src="<?php echo get_template_directory_uri().'/images/linkedin12.png'; ?>"/></a>
							</li>
							<li class="social">
								<a href="https://www.codepen.io/mnittoli" target="blank"><img src="<?php echo get_template_directory_uri().'/images/codepen.png'; ?>"/></a>
							</li>

							<li class="social">
								<a href="https://www.github.com/mnittoli" target="blank"><img src="<?php echo get_template_directory_uri().'/images/cat6.png'; ?>"/></a>
							</li>
							<li class="social">
								<a href="http://www.codeacademy.com/mnittoli" target="blank"><img src="<?php echo get_template_directory_uri().'/images/codeacademy.png'; ?>"/></a>
							</li>
						</ul>
			</div><!--End Social Media Icons-->
		</div><!-- #overlay -->
	</header><!-- #masthead -->
				<?php else  : ?>
					<div class="secondary-header">
						<div class="secondary-header-wrapper">
							<div class="secondary-bird"><!--Bird Layer-->
								<img src="<?php echo get_template_directory_uri(); ?>/images/logo_bird_transparent.png" />
							</div><!--End Bird Layer-->
							<nav id="site-navigation" class="secondary-navigation" role="navigation">
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
							</nav>
						</div>
					</div>
				<?php endif; ?>
	<div id="content" class="site-content">
