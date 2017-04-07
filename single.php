<?php

	get_header();
	
	if (have_posts()){
		
		while (have_posts()){
			the_post();
		}
			if(has_post_thumbnail()){
				get_template_part('content-templates/article', 'article-with-featured-image');

			} else{
				get_template_part('content-templates/article', '');

			}
			

	}else{
		_e('Sorry, could not find that post for you', 'myteam2');
	}

	get_footer();


?>