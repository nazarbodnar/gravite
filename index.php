<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package webshowcase
 */
global $webshowcase;
get_header(); ?>

<main id="main">
	<div class="visual">
			<div class="container">
				<div class="cell">
					<div class="visual-text">
						<h1>We Are French-Ukrainian Software Development Company</h1>
						<p>Our talented team of professionals operates under an effective system of internal quality management and communication</p>
						<a class="project-btn" href="#"><span>Contact Us</span></a>
					</div>
				</div>
			</div>
		</div>
</main>

<?php get_footer(); ?>


