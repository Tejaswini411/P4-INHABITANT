<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

	<header id="masthead" class="site-header" role="banner">
			<div class="container">
					<a class="header-logo" href="<?php echo esc_url(home_url('/')); ?>/home">
						<img class="header-logo-img about-header-logo" src="<?= get_template_directory_uri() ?>/images/logos/inhabitent-logo-tent-white.svg" />
					    <img class="header-logo-img regular-header-logo" src="<?= get_template_directory_uri() ?>/images/logos/inhabitent-logo-tent.svg" />
					</a>
					<nav class="site-navigation" role="navigation">
<div class="main-navigation-container">
	<ul class="menu">
			<li class="list-item "><a href="<?php echo esc_url(home_url('/')); ?>product_type">Shop</a></li>
			<li class="list-item"><a href="<?php echo esc_url(home_url('/')); ?>journal">Journal</a></li>
			<li class="list-item "><a href="<?php echo esc_url(home_url('/')); ?>about">About</a></li>
			<li class="list-item "><a href="<?php echo esc_url(home_url('/')); ?>find-us">Find Us</a></li>
	</ul>
	<!-- <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?> -->

</div>						


<div class="header-search">
<form role="search" method="get" class="search-form" action="">
			<a href="#" id="searchToggle" class="search-toggle" aria-hidden="true">
				<i class="fa fa-search"></i>
			</a>
			<div class="search-container">
			<label>
				<input type="search" class="search-field" placeholder="Type and hit enter..." value="" name="s" title="Search for:" />
			</label>
			<input type="submit" id="search-submit" class="screen-reader-text" value="Search" />
			</div>
</form>
</div>

</nav><!-- #site-navigation -->
				</div>
		


</div>
<div class="shop-page-header">
   				<h1 class="page-title">Shop Stuff</h1>
                                 <ul class="product-type-list">
                                             <li>
                           <p><a href=" ">Do</a></p>
                        </li>
                                             <li>
                           <p><a href=" ">Eat</a></p>
                        </li>
                                             <li>
                           <p><a href=" ">Sleep</a></p>
                        </li>
                                             <li>
                           <p><a href=" ">Wear</a></p>
                        </li>
									   </ul>
</div>
</header>
<div id="content" class="site-content">