<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bam
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wptime-plugin-preloader"></div>
<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>

<?php do_action( 'bam_body_top' ); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bam' ); ?></a>

	<?php do_action( 'bam_top_bar' ); ?>

	<?php do_action( 'bam_header' ); ?>

	<?php do_action( 'bam_before_content' ); ?>
				<?php
	if(is_front_page())
	{
		echo do_shortcode('[smartslider3 slider="2"]');

	}?>

	<div id="content" class="site-content">
		<div class="container">
			
			

