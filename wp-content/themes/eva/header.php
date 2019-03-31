<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Eva
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row site-branding middle-xs center-xs">
				<div class="col-xs-12 col-sm-10">
					<a href="https://www.automata.tech" class="site-header__logo">
					<svg xmlns="http://www.w3.org/2000/svg" width="47" height="42">
						<path d="M36.684,29.955a6.063,6.063,0,1,1,3.032,11.314H17.087Z"></path>
						<path d="M12.13,35.2A6.063,6.063,0,1,1,.816,32.171l11.314-19.6Q12.13,23.888,12.13,35.2Z"></path>
						<path d="M19.862,11.315a6.063,6.063,0,1,1,8.282-8.282l11.314,19.6Z"></path>
					</svg>
					</a>
				</div>
			</div><!-- .site-branding -->
		</div>
	</header><!-- #masthead -->
</div>
