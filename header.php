<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bb-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script>
		if (!__SERVER_DATA__) {
			var __SERVER_DATA__ = {};
		}
	</script>

	<?php
	$logo = Redux::get_option(_S_REDUX, 'options--logo') ?? [];
	wp_head();
	?>
	<!-- CSS REACT -->
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'bb-theme'); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-header-wrap container mx-auto flex items-center justify-between">
				<div class="site-branding">
					<a href="<?php echo esc_url(home_url('/')); ?>" target="_blank" rel="noopener noreferrer">
						<img class="block max-h-16 lg:max-h-20" src="<?php echo esc_url($logo['url']); ?>" alt="" />
					</a>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation">
					<button id="menu-toggle" class="menu-toggle text-2xl text-gray-900">
						<i class="las la-bars"></i>
					</button>
					<div id="primary-menu-wrap">
						<button id="close-menu-toggle" class="block md:hidden text-2xl text-gray-900 absolute right-0 top-0 p-2">
							<i class="las la-times"></i>
						</button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</div>

				</nav><!-- #site-navigation -->
			</div>
		</header><!-- #masthead -->