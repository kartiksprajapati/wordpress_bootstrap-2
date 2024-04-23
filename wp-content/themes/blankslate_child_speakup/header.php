<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blankslate_Child_Speakup
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text"
			href="#primary"><?php esc_html_e('Skip to content', 'blankslate_child_speakup'); ?></a>

		<header id="masthead" class="site-header pt-2">

			<div class="container">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-4">
							<div class="site-branding">
								<?php
								the_custom_logo();
								if (is_front_page() && is_home()):
									?>
									<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
											rel="home"><?php bloginfo('name'); ?></a></h1>
									<?php
								else:
									?>
									<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
											rel="home"><?php bloginfo('name'); ?></a></p>
									<?php
								endif;
								$blankslate_child_speakup_description = get_bloginfo('description', 'display');
								if ($blankslate_child_speakup_description || is_customize_preview()):
									?>
									<p class="site-description">
										<?php echo $blankslate_child_speakup_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
									</p>
								<?php endif; ?>
							</div><!-- .site-branding -->
						</div>
						<div class="col-md-8">
							<!-- <div class="banner-image">
								<img src="<?php echo get_template_directory_uri(); ?>/images/banner.png"
									alt="Famous Personalities" class="img-fluid">
							</div> -->
						</div>
					</div>
				</div>

				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu"
						aria-expanded="false"><?php esc_html_e('Primary Menu', 'blankslate_child_speakup'); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id' => 'primary-menu',
						)
					);
					?>
				</nav>
			</div>
		</header>