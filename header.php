<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title> <?php bloginfo('name'); ?> </title>

		<?php
			wp_head();
		?>

		
	</head>
	
	
	<body <?php echo body_class(); ?> >
		<div class="container-fluid">
		 	<img src="<?php header_image(); ?>" <?php post_class(); ?> height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />   <!--getting headerimage, if themeuser wants to use one-->
			<div class="row">
				<div class="col-md-12 nav">
					
					<div class="navbar-wrapper">	
						<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
							<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
							</button>
							
							<div class="container">
								<a class="navbar-brand" href="<?php bloginfo('url'); ?>"> 
								
									<?php 
										if (has_custom_logo()){			//does page have logo, otherwise use the pagetitle for the "project"
											the_custom_logo();
										}else{
											echo get_bloginfo('<h1>' . 'name' . '</h1>');
										}; 
									
										wp_nav_menu( array(				//using bootstrapclasses for the navbar
											'theme-location'	=> 'primary_menu',
											'container'			=>	'div',
											'container_class'	=> 'collapse navbar-collapse',
											'container_id'		=>	'navbarNavDropdown',
											'menu_class'		=>	'navbar-nav',
											'fallback_cb'		=>	'__return_false',
											'items_wrap'		=> '<ul id="%1$s" class="%2$s ml-auto">%3$s</ul>',  
											'depth'				=> 2,
											'walker'			=> new bootstrap_4_walker_nav_menu(),   
										));
									?>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

		
				