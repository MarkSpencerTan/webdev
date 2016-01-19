<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 * and the left sidebar conditional
 *
 * @since 1.0.0
 */
?><!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />


<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class( 'basic' ); ?>>

	
		<header class="navbar-inverse navbar navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
					<span class="clipped">Menu</span>
			          <span class="icon-bar"></span>
			          <span class="icon-bar"></span>
			          <span class="icon-bar"></span>
			        </button>
					
				</div>
				<nav class="navbar-collapse collapse" role="navigation" aria-label="Site Menu">
					<ul id="menu-nav" class="nav navbar-nav">
						<li id="menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active menu-item-19">
							<a href="http://ideafoundation.tk/">Home</a>
						</li>
						<li id="menu-item-35" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-35">
							<a class="dropdown-toggle" data-toggle="dropdown"  data-target="#" href="http://ideafoundation.tk/about-idea/" aria-expanded="false" aria-haspopup="true">About <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li id="menu-item-86" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-86"><a href="http://ideafoundation.tk/idea/">IDEA</a></li>
									<li id="menu-item-38" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38"><a href="http://ideafoundation.tk/about-ebola/">Ebola</a></li>
									<li id="menu-item-43" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43"><a href="http://ideafoundation.tk/about-sierra-leone/">Sierra Leone</a></li>
									<li id="menu-item-211" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-211"><a href="http://ideafoundation.tk/board-of-directors/">Board of Directors</a></li>
									<li id="menu-item-212" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-212"><a href="http://ideafoundation.tk/sponsors/">Sponsors</a></li>
								</ul>	
						</li>
						<li id="menu-item-25" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25">
							<a href="http://ideafoundation.tk/news/">News</a>
						</li>
						<li id="menu-item-63" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-63" tabindex="-1">
							<span class="logoholder">
								<span class="sitelogo">
									<img class="sitelogoimg" src="http://ideafoundation.tk/wp-content/uploads/2015/10/cropped-logo.png" alt="The Idea Foundation Logo">
								</span>
							</span>
						</li>
						<!--
						<li id="menu-item-37" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37">
							<a href="http://ideafoundation.tk/programs/">Programs</a>
						</li>
						-->
						
						<li id="menu-item-37" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-37">
							<a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="http://ideafoundation.tk/programs/" aria-expanded="false" aria-haspopup="true">Programs <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li id="menu-item-290" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-290"><a href="http://ideafoundation.tk/calaba-town-clinic/">Calaba Town Clinic</a></li>
									<li id="menu-item-289" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-289"><a href="http://ideafoundation.tk/fistula-repair-surgery/">Fistula Repair Surgery</a></li>
									<li id="menu-item-292" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-292"><a href="http://ideafoundation.tk/food-for-quarantined-villages/">Food For Quarantined Villages</a></li>
									<li id="menu-item-287" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-287"><a href="http://ideafoundation.tk/k-12-textbooks-library-books/">K-12 Textbooks & Library Books</a></li>
									<li id="menu-item-293" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-293"><a href="http://ideafoundation.tk/medical-equipment-and-supplies/">Medical Equipment and Supplies</a></li>
									<li id="menu-item-291" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-291"><a href="http://ideafoundation.tk/safe-drinking-water/">Safe Drinking Water</a></li>
									<li id="menu-item-288" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-288"><a href="http://ideafoundation.tk/womens-literacy-vocational-program/">Women's Literacy & Vocational Program</a></li>
								</ul>	
						</li>

						<li id="menu-item-172" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-172">
							<a href="http://ideafoundation.tk/contact/">Contact</a>
						</li>
						<li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20">
							<a href="http://ideafoundation.tk/donate/"><strong>Donate!</strong></a>
						</li>
					</ul>
				</nav>
			
			</div>
		</header>

		<!--Code for searchbar-->
		<div class="minibar"> 
			<div class="title"> <?php echo get_bloginfo( 'name' ); ?> </div>
			<span class="pull-right searchbar"><?php get_search_form(); ?></span>
		</div>
	<div id="page">
		<?php if ( is_singular() && ! is_front_page() ) { ?>
			<div  class="container" id="maincontent">
			<div class="row" id="primary">
		<?php } else { ?>
			<div id="main">
		<?php } ?>