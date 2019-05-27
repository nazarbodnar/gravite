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
     <div class="container clearfix">
        <span class="logo"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/Logotype-01.svg" alt=""></a></span>
        <ul class="top-nav">
            <li class="language">
                <a class="btn-lang" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>En</a>
                <ul class="lang-drop">
                    <li><a href="#">Uk</a></li>
                    <li><a href="#">De</a></li>
                </ul>
            </li>
        </ul>
        <nav class="main-nav">
            <ul class="main-nav-list">
                <li class="main-nav-item"><a class="btn-scroll" href=".home">Home</a></li>
                <li class="main-nav-item"><a class="btn-scroll" href=".our-services">Services</a></li>
                <li class="main-nav-item"><a class="btn-scroll" href=".processes">Processes</a></li>
                <li class="main-nav-item"><a class="btn-scroll" href=".team">Team</a></li>
                <li class="main-nav-item"><a class="btn-scroll" href=".contact-us">Contacts</a></li>
            </ul>
        </nav>
    </div>
    <a href="#" class="open-menu"><span></span>Open Menu</a>
    <span class="fader"></span>
</header>