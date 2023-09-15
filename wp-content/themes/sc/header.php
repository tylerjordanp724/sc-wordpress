<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sabrinaclaudio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_site_url();?>/favicon.png"/>
	<script src="https://kit.fontawesome.com/a04c9c83c4.js" crossorigin="anonymous"></script>
	<!-- Google tag (gtag.js) -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-TK9VFRBVP0"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-TK9VFRBVP0');
	</script> -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	
