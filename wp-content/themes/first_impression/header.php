<?php
/**
 * The header for our theme.
 *
 * @package White_Canvas_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<!-- Typekit -->
		<script src="https://use.typekit.net/hrz2oow.js"></script> 
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
		<!-- /Typekit -->
		
	<?php wp_head(); ?>
		<!-- Google Analytics -->
		<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-55846603-4', 'auto');
			  ga('send', 'pageview');
		</script><!-- /Google Analytics -->
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<div class="site-logo">
							<a href="<?php echo home_url(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/images/FirstImpressionDesignLogo.png" alt="First Impression Designs Logo"/>
							</a>
						</div>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 
						'theme_location' => 'primary', 
						'menu_id' => 'primary-menu' 
					)); 
					?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
