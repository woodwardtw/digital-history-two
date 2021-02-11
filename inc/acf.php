<?php
/**
 * ACF
 * 
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


function dhtwo_get_readings(){
  global $post;
  $html = '';
  $readings = get_field('readings');

    if( $readings) {      
      $html = "<div class='readings'><h2>Readings</h2>{$readings}</div>";  
     return $html;    
    }

}



function dhtwo_get_projects(){
  global $post;
  $html = '';
  $projects = get_field('projects');

    if( $projects) {      
      $html = "<div class='projects'><h2>Projects</h2>{$projects}</div>";  
     return $html;    
    }

}

function dhtwo_get_tools(){
  global $post;
  $html = '';
  $tools = get_field('tools');

    if( $tools) {      
      $html = "<div class='tools'><h2>Tools</h2>{$tools}</div>";  
     return $html;    
    }

}


function dhtwo_get_asides(){
  global $post;
  $html = '';
  $asides = get_field('asides');

    if( $asides) {      
      $html = "<div class='asides'><h2>Asides</h2>{$asides}</div>";  
     return $html;    
    }

}

function dhtwo_get_citation(){
  global $post;
  $html = '';
  $citation = get_field('featured_image_citation');

    if( $citation) {      
      $html = "<div class='citation'>Feature Image Citation: {$citation}</div>";  
     return $html;    
    }

}




	//save acf json
		add_filter('acf/settings/save_json', 'dhtwo_json_save_point');
		 
		function dhtwo_json_save_point( $path ) {
		    
		    // update path
		    $path = get_stylesheet_directory() . '/acf-json'; //replace w get_stylesheet_directory() for theme
		    
		    
		    // return
		    return $path;
		    
		}


		// load acf json
		add_filter('acf/settings/load_json', 'dhtwo_json_load_point');

		function dhtwo_json_load_point( $paths ) {
		    
		    // remove original path (optional)
		    unset($paths[0]);
		    
		    
		    // append path
		    $paths[] = get_stylesheet_directory()  . '/acf-json';//replace w get_stylesheet_directory() for theme
		    
		    
		    // return
		    return $paths;
		    
		}