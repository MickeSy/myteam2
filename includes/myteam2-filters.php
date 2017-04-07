<?php

function myteam2_custom_excerpt_length($length){
	return 30;
}

add_filter('excerpt_length', 'myteam2_custom_excerpt_length');



function myteam2_excerpt_more($more){
	return sprintf( '<br /><a class="read-more btn btn-primary btn-sm" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Read More', 'myteam2' )
    );
}
add_filter('excerpt_more', 'myteam2_excerpt_more');
