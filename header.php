<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="apple-touch-icon" sizes="57x57" href="https://mach-politik.ch/favicon/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="114x114" href="https://mach-politik.ch/favicon/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="72x72" href="https://mach-politik.ch/favicon/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="144x144" href="https://mach-politik.ch/favicon/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="60x60" href="https://mach-politik.ch/favicon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="120x120" href="https://mach-politik.ch/favicon/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="76x76" href="https://mach-politik.ch/favicon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="152x152" href="https://mach-politik.ch/favicon/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="https://mach-politik.ch/favicon/apple-touch-icon-180x180.png">
<meta name="apple-mobile-web-app-title" content="mach-politik.ch">
<link rel="shortcut icon" href="https://mach-politik.ch/favicon/favicon.ico" />
<link rel="icon" type="image/png" href="https://mach-politik.ch/favicon/favicon-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="https://mach-politik.ch/favicon/favicon-160x160.png" sizes="160x160">
<link rel="icon" type="image/png" href="https://mach-politik.ch/favicon/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="https://mach-politik.ch/favicon/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="https://mach-politik.ch/favicon/favicon-32x32.png" sizes="32x32">
<meta name="msapplication-TileColor" content="#87ceeb">
<meta name="msapplication-TileImage" content="https://mach-politik.ch/favicon/mstile-144x144.png">
<meta name="application-name" content="mach-politik.ch">
<meta name="msapplication-TileColor" content="#87ceeb">
<meta name="msapplication-TileImage" content="https://mach-politik.ch/favicon/mstile-144x144.png">
<meta name="application-name" content="mach-politik.ch">
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

	<body <?php body_class(); ?>>
		<nav id="global-bar">
			<div class="left">
				<a href="https://mach-politik.ch">Hauptseite</a>
				<a href="https://mach-politik.ch/projekte/projects/projekte">Projekte</a>
			</div>
			<div class="right">
				<a href="https://mach-politik.ch/projekte/login">Login</a>
				<a href="https://mach-politik.ch/projekte/account/register">Registrieren</a>
			</div>
		</nav>
		<div id="page" class="hfeed site">
			<header id="masthead" class="site-header" role="banner">
				<hgroup>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</hgroup>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img alt="Logo Mach-Politik.ch" width="960" height="250" src="<?php echo get_template_directory_uri(); ?>/images/logo-B-2farbig-halbkreis-header-web.svg"
				</a>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
					<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->
			<div id="main" class="wrapper">
