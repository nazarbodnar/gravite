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
	<div class="visual home">
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
	<div class="how-it-works processes">
		<div class="small-container">
			<div class="heading">
				<h2>How Gravite works for you?</h2>
				<p>When you need a softwer development help in your business and you have no time for coding for your website, Gravite will take that job for you and will build a great looking website or app.</p>
			</div>
			<ul class="how-it-works-list">
				<li class="how-it-works-item">
					<div class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/Icon_1.svg" alt="">
					</div>
					<h3>Start Product</h3>
					<p>High-performing teams need more than the latest tools to do</p>
				</li>
				<li class="how-it-works-item">
					<div class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/Icon_2-01.svg" alt="">
					</div>
					<h3>Support Product</h3>
					<p>High-performing teams need more than the latest tools to do their best work</p>
				</li>
				<li class="how-it-works-item">
					<div class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/Icon_3.svg" alt="">
					</div>
					<h3>Release Product</h3>
					<p>High-performing teams need more than the latest tools to do their best work</p>
				</li>

			</ul>
		</div>
	</div>
	<div class="team">
		<div class="container">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="team-item">
							<div class="img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/img1.png" alt="">
							</div>
							<div class="slide-text">
								<p>Content should be a journey. It should hit users at all the stages: awareness, consideration, and decision. If your content doesn’t continue to inform and be relevant, users will get turned off. A pipeline is only as good as the quality and readiness of leads.</p>
								<span class="name">Erick Jeunemaitre</span>
								<span class="position">CoFounder Gravite</span>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="team-item">
							<div class="img">
								<img src="<?php echo get_template_directory_uri(); ?>/images/img1.png" alt="">
							</div>
							<div class="slide-text">
								<p>Content should be a journey. It should hit users at all the stages: awareness, consideration, and decision. If your content doesn’t continue to inform and be relevant, users will get turned off. A pipeline is only as good as the quality and readiness of leads.</p>
								<span class="name">Erick Jeunemaitre</span>
								<span class="position">CoFounder Gravite</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</div>
	<div class="need-help">
		<div class="container">
			<h2>Need Help and Support?</h2>
			<div class="text-box">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
			</div>
			<a class="project-btn" href="#"><span>Contact Us</span></a>
		</div>
	</div>
	<div class="contact-us">
		<div class="container">
			<h2>Contact Us</h2>
			<div class="address-box">
				<strong>Headquarters</strong>
				<span>France</span>
				<span>Headquarters Champs Elysées Avenue 25, 1101 EB Paris</span>
				<span>info@gravite.com</span>
			</div>
			<div class="address-box">
				<strong>Delivery Centers</strong>
				<span>Ukraine</span>
				<span>Naukova Street</span>
				<span>info@gravite.com</span>
			</div>
		</div>
	</div>
	<div class="counter">
		<div class="container">
			<ul class="counter-box">
				<li class="counter-item">
					<div class="box">
						<span class="counter-string">540</span>
					</div>
					<div class="name">Lecture</div>
				</li>
				<li class="counter-item">
					<div class="box">
						<span class="counter-string">170</span>+
					</div>
					<div class="name">Courses</div>
				</li>
				<li class="counter-item">
					<div class="box">
						<span class="counter-string">6</span>
					</div>
					<div class="name">Locations</div>
				</li>
				<li class="counter-item">
					<div class="box">
						<span class="counter-string">93</span>%
					</div>
					<div class="name">Graduates</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="technology">
		<div class="container">
			<h2>Expertise covered</h2>
			<ul class="technology-list">
				<li class="technology-item">
					<span class="ico">
						<img src="<?php echo get_template_directory_uri(); ?>/images/2.png" alt="">
					</span>
					<span class="name">Android</span>
				</li>
				<li class="technology-item">
					<span class="ico">
						<img src="<?php echo get_template_directory_uri(); ?>/images/4.png" alt="">
					</span>
					<span class="name">IOS</span>
				</li>
				<li class="technology-item">
					<span class="ico">
						<img src="<?php echo get_template_directory_uri(); ?>/images/24.png" alt="">
					</span>
					<span class="name">Xamarin</span>
				</li>
				<li class="technology-item">
					<span class="ico">
						<img src="<?php echo get_template_directory_uri(); ?>/images/3.png" alt="">
					</span>
					<span class="name">AngularJS</span>
				</li>
				<li class="technology-item">
					<span class="ico">
						<img src="<?php echo get_template_directory_uri(); ?>/images/14.png" alt="">
					</span>
					<span class="name">Node.js</span>
				</li>
				<li class="technology-item">
					<span class="ico">
						<img src="<?php echo get_template_directory_uri(); ?>/images/10.png" alt="">
					</span>
					<span class="name">MS.NET</span>
				</li>
				<li class="technology-item">
					<span class="ico">
						<img src="<?php echo get_template_directory_uri(); ?>/images/13.png" alt="">
					</span>
					<span class="name">Magento</span>
				</li>
				<li class="technology-item">
					<span class="ico">
						<img src="<?php echo get_template_directory_uri(); ?>/images/17.png" alt="">
					</span>
					<span class="name">Salesforce</span>
				</li>
				<li class="technology-item">
					<span class="ico">
						<img src="<?php echo get_template_directory_uri(); ?>/images/23.png" alt="">
					</span>
					<span class="name">WordPress</span>
				</li>
				<li class="technology-item">
					<span class="ico">
						<img src="<?php echo get_template_directory_uri(); ?>/images/5.png" alt="">
					</span>
					<span class="name">AWS</span>
				</li>
				<li class="technology-item">
					<span class="ico">
						<img src="<?php echo get_template_directory_uri(); ?>/images/22.png" alt="">
					</span>
					<span class="name">Windows Server</span>
				</li>
				<li class="technology-item">
					<span class="ico">
						<img src="<?php echo get_template_directory_uri(); ?>/images/9.png" alt="">
					</span>
					<span class="name">SQL</span>
				</li>
				<li class="technology-item">
					<span class="ico">
						<img src="<?php echo get_template_directory_uri(); ?>/images/16.png" alt="">
					</span>
					<span class="name">ROR</span>
				</li>
				<li class="technology-item">
					<span class="ico">
						<img src="<?php echo get_template_directory_uri(); ?>/images/1.png" alt="">
					</span>
					<span class="name">Python</span>
				</li>
				<li class="technology-item">
					<span class="ico">
						<img src="<?php echo get_template_directory_uri(); ?>/images/15.png" alt="">
					</span>
					<span class="name">PHP</span>
				</li>
				<li class="technology-item">
					<span class="ico">
						<img src="<?php echo get_template_directory_uri(); ?>/images/8.png" alt="">
					</span>
					<span class="name">C#</span>
				</li>
				<li class="technology-item">
					<span class="ico">
						<img src="<?php echo get_template_directory_uri(); ?>/images/7.png" alt="">
					</span>
					<span class="name">C</span>
				</li>
				<li class="technology-item">
					<span class="ico">
						<img src="<?php echo get_template_directory_uri(); ?>/images/12.png" alt="">
					</span>
					<span class="name">JavaScript</span>
				</li>
				<li class="technology-item">
					<span class="ico">
						<img src="<?php echo get_template_directory_uri(); ?>/images/6.png" alt="">
					</span>
					<span class="name">C++</span>
				</li>
				<li class="technology-item">
					<span class="ico">
						<img src="<?php echo get_template_directory_uri(); ?>/images/11.png" alt="">
					</span>
					<span class="name">Java</span>
				</li>
				<li class="technology-item">
					<span class="ico">
						<img src="<?php echo get_template_directory_uri(); ?>/images/21.png" alt="">
					</span>
					<span class="name">UX/UI</span>
				</li>
				<li class="technology-item">
					<span class="ico">
						<img src="<?php echo get_template_directory_uri(); ?>/images/20.png" alt="">
					</span>
					<span class="name">Unity</span>
				</li>
				<li class="technology-item">
					<span class="ico">
						<img src="<?php echo get_template_directory_uri(); ?>/images/19.png" alt="">
					</span>
					<span class="name">Selenium</span>
				</li>
				<li class="technology-item">
					<span class="ico">
						<img src="<?php echo get_template_directory_uri(); ?>/images/18.png" alt="">
					</span>
					<span class="name">SAP</span>
				</li>
			</ul>
		</div>
	</div>
</main>

<?php get_footer(); ?>


