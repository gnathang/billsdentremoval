<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package billsdentremoval
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200;1,300;1,400;1,500
							&family=Raleway:ital,wght@0,200;0,400;0,500;1,200&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>


	<?php wp_head(); ?>
</head>

<body class="block" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site z-1">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'billsdentremoval' ); ?></a>

	<nav class="main-nav-small block pt5 f2 fw1">
		<?php 
			wp_nav_menu(array(
				'theme_location' => 'menu-1',
				'menu_id' => 'primary-menu',
			) );
			?>	
	</nav>

	<header id="masthead" class="site-header z-1 bg-near-black pv3">

		<div class="header-container w-100 flex items-center z-1 justify-between ph4-l ph3">


			<div class="w-20-l tl">
				<a class="logo-href block" href="<?php echo home_url(); ?>">
				<img src="<?php bloginfo('template_directory');?>/images/cropped-IMG_0325-1-300x294.png" class="logo mh1">
				</a>
			</div>

      <nav id="site-navigation" class="main-nav-big w-60 raleway ttu tracked-mega">
        <?php 
        wp_nav_menu(array(
          'theme_location' => 'menu-1',
          'menu_id' => 'primary-menu',
        ) );
        ?>
      </nav>

			<div class="social flex justify-end items-center w-20 tr">
			<img src="<?php bloginfo('template_directory');?>/images/hamburger.svg" class="hamburger pointer center pv3 ph2">
			<a href="https://www.facebook.com/BillsDentRemoval">
				<img class="social-link pv3 ph2" src="<?php bloginfo('template_directory');?>/images/facebook.svg">
			</a>
			<a href="https://www.instagram.com/bills_dent_removal/?igshid=17gyvtkf6lz24">
				<img class="social-link pv3 ph2" src="<?php bloginfo('template_directory');?>/images/insta.svg">
			</a>
			</div>

		</div>
	</header><!-- #masthead -->

