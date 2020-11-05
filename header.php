<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package About
 */

?>
<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head();?>
</head>

<body <?php body_class();?>>
<?php wp_body_open();?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'about');?></a>

	<header id="Home" class="site-header">
		<div class="header-left-column">

			<div class="header-left-column-info">

				<?php if (is_front_page() && is_home()): 	?>

						<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name');?></a></h1>

				<?php else:	?>

						<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name');?></a></p>

				<?php	endif;

						$about_description = get_bloginfo('description', 'display');
						if ($about_description || is_customize_preview()):
				?>

				<p class="site-description"><?php echo $about_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped    ?></p>
				<?php endif;?>

			</div> <!-- header-left-column-info -->
			

			<video autoplay muted loop id="Video">
				<source src="/wp-content/uploads/2020/10/Source-Code-4733.mp4" type="video/mp4">
			</video>

		</div><!-- left column -->
		<div class="header-right-column">
			<img src="" alt="">


			<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('&#9776; Menu', 'about');?></button>
			<?php
					wp_nav_menu(
						array(
							'theme_location' => 'header-menu',
							'menu_id' => 'primary-menu',
							'container_class' => 'header-menu',
							'menu_class' => 'header-menu',
						)
					);
			?>
		</nav><!-- #site-navigation -->
		<?php the_custom_logo();?>
		</div><!-- .header-right-column -->


	</header><!-- #masthead -->
