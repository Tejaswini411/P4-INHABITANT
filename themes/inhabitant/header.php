<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
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

	<header>
    <div class="topflex">
		<img class="logo" src="wp-content/themes/inhabitant/images/logos/inhabitent-logo-tent-white.svg">


		<nav>
			 <ul class="topnav">
				<li><a href=" "> ABOUT </a></li>
				<li><a href=" "> SHOP </a></li>
				<li><a href=" "> FEATURED </a></li>
				<li><a href=" "> UPDATES </a></li>	
			 </ul>
		</nav>

    	<button class="search"><img src="wp-content/themes/inhabitant/images/logos/"/></button>
	</div>

	</header>