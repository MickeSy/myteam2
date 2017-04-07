<article class="post-with-featured-image">
	<div class="featured-image" style="background-image: url(<?php the_post_thumbnail_url('post-featured-image'); ?>"></div>
	<div class="container">
		<div class = "row">
			<div class = "col-md-9">
			<header>
				<h4 class="the-meta">
					<span class="the-date"> <?php the_date(); ?> </span>
					by <span class="the-author"> <?php the_author(); ?></span>
			</header>
			</div>	
		</div>	
	</div>				
	
	<div class="container">
		<div class = "row">
			<div class = "col-md-9">
			<main class="the-content">
				<?php the_content(); ?>
			</main>
			</div>	
		</div>	
	</div>	
</article>