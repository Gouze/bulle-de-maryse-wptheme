<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
	*
	* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	*
	* @package Bulmascores
	*/
	?>
	<!doctype html>
	<html <?php language_attributes();?>>
		<head>
			<meta charset="<?php bloginfo('charset');?>">
			<meta name="description" content="<?php bloginfo('description');?>">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
			<link rel="profile" href="http://gmpg.org/xfn/11">
			<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Sacramento|Josefin+Sans&display=swap" rel="stylesheet">
			<?php wp_head();?>
		</head>
		<body <?php body_class();?>>
			<!-- Navbar Menu -->
			<header id="masthead" class="site-header">
				<nav class="navbar is-light">
					<div class="container">
<div class="columns is-mobile" style="width:100%;">
						<div class="column is-one-third is-flex header_menu">
							<img class="" src="<?php echo get_template_directory_uri() ?>/assets/images/layout/menu.svg" alt="">
							<span>menu</span>
						</div>
						<div class="column is-one-third has-text-centered">
								<?php
								if (has_custom_logo()) {
								the_custom_logo();
								} else {?>
								<a href="<?php echo esc_url_raw(home_url()); ?>">
									<h1><?php bloginfo('name');?></h1>
								</a>
								<?php }?>
								<div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
									<span></span>
									<span></span>
									<span></span>
								</div>
							</div>
						<div class="column is-one-third  content-is-vcentered has-text-right justify-right">
			<span class=" header_search">rechercher</span>
			<img src="<?php echo get_template_directory_uri() ?>/assets/images/search.svg" alt="" />
			<div class="home_search_wrapper"><input class="home_search_input" type="text"></div>
						</div>

							<div id="navbarExampleTransparentExample" class="navbar-menu">
								<div class="navbar-start">
									<!-- <?php wp_nav_menu(array(
									'theme_location' => 'menu-1', //change it according to your register_nav_menus() function
									'depth'          => 2,
									'container'      => 'navbar-start',
									'items_wrap'     => '%3$s',
									'walker'         => new Bulma_Walker(),
									));
									?> -->


									
								</div>
								<div class="navbar-end">
									
											</div><!-- .navbar-end -->
											</div>	

										</div>
										</div><!-- .container -->
									</nav>
									</header><!-- #masthead -->