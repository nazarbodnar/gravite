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
	<div class="our-services">
		<div class="container">
			<div class="heading">
				<h2>Our Services</h2>
				<p>We have been involved in the design and development of dozens of commercial products rfom around the worls. We have an expertise in many spheres of software development.</p>
			</div>
			<ul class="services-list">
				<li class="services-item">
					<h3>IT Consulting</h3>
					<p>Our IT Consulting Services are the first step toward transforming your enterprise IT and improving your business efficiency.</p>
				</li>
				<li class="services-item">
					<h3>Software Development</h3>
					<p>Our IT Consulting Services are the first step toward transforming your enterprise IT and improving your business efficiency.</p>
				</li>
				<li class="services-item">
					<h3>Support and Maintenance</h3>
					<p>Our IT Consulting Services are the first step toward transforming your enterprise IT and improving your business efficiency.</p>
				</li>
			</ul>
		</div>
	</div>
	<div class="how-it-works">
		<div class="small-container">
			<div class="heading">
				<h2>How Gravite works for you?</h2>
				<p>When you need a softwer development help in your business and you have no time for coding for your website, Gravite will take that job for you and will build a great looking website or app.</p>
			</div>
			<ul class="how-it-works-list">
				<li class="how-it-works-item">
					<div class="img">
						<img src="" alt="">
					</div>
					<h3>Start Product</h3>
					<p>High-performing teams need more than the latest tools to do</p>
				</li>
				<li class="how-it-works-item">
					<div class="img">
						<img src="" alt="">
					</div>
					<h3>Support Product</h3>
					<p>High-performing teams need more than the latest tools to do their best work</p>
				</li>
				<li class="how-it-works-item">
					<div class="img">
						<img src="" alt="">
					</div>
					<h3>Release Product</h3>
					<p>High-performing teams need more than the latest tools to do their best work</p>
				</li>

			</ul>
		</div>
	</div>
</main>

<?php get_footer(); ?>


