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

	<body class="home-page">
		<div class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

	<header id="masthead" class="site-header" role="banner">
			<div class="container">
					<a class="header-logo" href="<?= get_site_url(); ?>">
						<img class="header-logo-img" src="<?= get_template_directory_uri() ?>/images/logos/inhabitent-logo-tent-white.svg" style="display: <?php echo $displaywhite ?>;">
					   <!--  <img class="header-logo-img" src="<?= get_template_directory_uri() ?>/images/logos/inhabitent-logo-tent.svg" style="display: <?php echo $displayblue ?>;"> -->
					</a>
				</div>
		

<nav class="site-navigation" role="navigation">
<div class="main-navigation-container">
	<ul class="menu">
			<li class="list-item "><a href="<?php echo esc_url(home_url('/')); ?>product_type">Shop</a></li>
			<li class="list-item"><a href="<?php echo esc_url(home_url('/')); ?>journal">Journal</a></li>
			<li class="list-item "><a href="<?php echo esc_url(home_url('/')); ?>about">About</a></li>
			<li class="list-item "><a href="">Find Us</a></li>
	</ul>
</div>						


<div class="header-search">
<form role="search" method="get" class="search-form" action="">
		<fieldset>
			<a href="#" class="search-toggle" aria-hidden="true">
				<i class="fa fa-search"></i>
			</a>
			<label>
				<input type="search" class="search-field" placeholder="Type and hit enter..." value="" name="s" title="Search for:" />
			</label>
			<input type="submit" id="search-submit" class="screen-reader-text" value="Search" />
		</fieldset>
</form>
</div>

</nav><!-- #site-navigation -->
</div>
</header>
	






	