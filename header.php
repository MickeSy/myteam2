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
		<div class="navbar-wrapper">	
			<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="container">
					<a class="navbar-brand" href="#">Myteam</a>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
							</li>
						</ul>
					</div>
				</div> <!--container-->
			</nav>
		</div>