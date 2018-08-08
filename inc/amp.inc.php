<?php

// AMP stuff

add_action( 'init', 'wpse26388_rewrites_init' );
function wpse26388_rewrites_init(){
    //echo "AMP custom rewrite rule hook\n<br>";
//	add_rewrite_rule('^(.*)\.amp/?$', 'index.php?pagename=$matches[1]&amp=1', 'top' );
	add_rewrite_rule('^amp/(.?.+?)(?:/([0-9]+))?/?$', 'index.php?pagename=$matches[1]&page=$matches[2]&amp=1', 'top' );
	//add_rewrite_rule('^amp/?$', 'index.php?pagename=$matches[1]&amp=1', 'top' );
}

add_filter( 'query_vars', 'wpse26388_query_vars' );
function wpse26388_query_vars( $query_vars ){
	$query_vars[] = 'amp';
    //print_r($query_vars);

    return $query_vars;
}


add_filter( 'template_include', 'portfolio_page_template', 99 );

function portfolio_page_template( $template ) {

    // is page
    if (get_query_var('amp') && is_page()) {
        //echo "amp1: " . get_query_var('amp');
		$new_template = locate_template( array( 'amp-page.php' ) );
		if ( !empty( $new_template ) ) {
			return $new_template;
		}
    }
    /*
	if ( is_page( 'portfolio' ) ) {
		$new_template = locate_template( array( 'portfolio-page-template.php' ) );
		if ( !empty( $new_template ) ) {
			return $new_template;
		}
	}
*/

//echo "\n<br>amp: " . get_query_var('amp');
//echo "\n<br>template: " .$template;
	return $template;
}



function append_query_string($url, $post, $leavename=false ) {
    //global $wp_query, $post;
    if (get_query_var('amp')) {
        //echo "\n<br>amp22: " . get_query_var('amp');
        //echo $url;
        $url = 'amp/'.$url;
    }
    return $url;
}
//add_filter('the_permalink', 'append_query_string');
//add_filter('post_link', 'append_query_string');


function my_page_template_redirect()
{
    global $wp_query;

    //print_r($wp_query);

    /*
    if( is_page( 'goodies' ) && ! is_user_logged_in() )
    {
        wp_redirect( home_url( '/signup/' ) );
        die;
    }
    */

    //echo "amp: " . get_query_var('amp');
//echo "\n<br>template: " .$template;
}
add_action( 'template_redirect', 'my_page_template_redirect' );



function change_pricing($content) {
    if( get_query_var( 'amp' ) && is_page() && is_main_query() ) {
        echo 'AAAAAAAAAA';

            
            $string = $content;
            $pattern = '/<img(.*?)>/s';
            $replacement = '<amp-img$1></amp-img>';
            
            $content = preg_replace($pattern, $replacement, $string);

    }       

    return $content;
}

//add_filter('the_content', 'change_pricing');