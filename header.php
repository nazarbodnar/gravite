<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webshowcase
 */
global $webshowcase;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo get_bloginfo( 'name' ); ?> | Web Developer</title>
    <meta name="description" content="<?php get_bloginfo( 'description' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?php if ( ! empty( $webshowcase['blog_favicon'] ) ) {
		echo $webshowcase['blog_favicon']['url'];
	} ?>" type="image/x-icon">

	<?php wp_head(); ?>

</head>

<body <?php body_class( $class ); ?>>
<header id="header">
	header will be here
</header>