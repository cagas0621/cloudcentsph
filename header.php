<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * 
 *
 * @package WordPress
 * @subpackage Cloudcentsph
 * @since Cloudcentsph
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>CloudCents</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="<?php echo home_url(); ?>"><img class="headerlogoimg" src="<?php bloginfo('template_directory'); ?>/assets/images/Picture1.png" alt=""></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<?php
				$url_parts = explode('/', rtrim(home_url($_SERVER['REQUEST_URI']), '/'));
				$url_name = end($url_parts);
				?>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item <?php echo ($url_name == 'cloudcentsph' || $url_name == ' ') ? 'active' : '' ?> "><a href="<?php echo home_url(); ?>" class="btn-nav nav-link">Home</a></li>
					<li class="nav-item <?php echo ($url_name == 'about') ? 'active' : '' ?>"><a href="<?php echo get_permalink(get_page_by_path('about')); ?>" class="btn-nav nav-link">About</a></li>
					<li class="nav-item dropdownmenu">
						<div class="btn-group">
							<a class="btn-nav nav-link" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
								Services
							</a>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<li><a class="dropdown-item <?php echo ($url_name == 'virtual_accounting') ? 'active' : '' ?>" href="<?php echo get_permalink(get_page_by_path('virtual_accounting')) ?>">Virtual Accounting</a></li>
								<li><a class="dropdown-item <?php echo ($url_name == 'virtual_assistant') ? 'active' : '' ?>" href="<?php echo get_permalink(get_page_by_path('virtual_assistant')) ?>">Virtual Assistant</a></li>
								<li><a class="dropdown-item <?php echo ($url_name == 'lead_generation') ? 'active' : '' ?>" href="<?php echo get_permalink(get_page_by_path('lead_generation')) ?>">Lead Generation</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item <?php echo ($url_name == 'team') ? 'active' : '' ?>"><a href="<?php echo get_permalink(get_page_by_path('team')); ?>" class="btn-nav nav-link">Team</a></li>
					<li class="nav-item <?php echo ($url_name == 'contact_us') ? 'active' : '' ?>"><a href="<?php echo get_permalink(get_page_by_path('contact_us')); ?>" class="btn-nav nav-link">Contact US</a></li>
				</ul>
			</div>
		</div>
	</nav>