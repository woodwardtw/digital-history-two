<?php
/**
 * Custom post types
 *
 * 
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


//class custom post type

// Register Custom Post Type class
// Post Type Key: class

function create_class_cpt() {

  $labels = array(
    'name' => __( 'Classes', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Class', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Class', 'textdomain' ),
    'name_admin_bar' => __( 'Class', 'textdomain' ),
    'archives' => __( 'Class Archives', 'textdomain' ),
    'attributes' => __( 'Class Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Class:', 'textdomain' ),
    'all_items' => __( 'All Classes', 'textdomain' ),
    'add_new_item' => __( 'Add New Class', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Class', 'textdomain' ),
    'edit_item' => __( 'Edit Class', 'textdomain' ),
    'update_item' => __( 'Update Class', 'textdomain' ),
    'view_item' => __( 'View Class', 'textdomain' ),
    'view_items' => __( 'View Classes', 'textdomain' ),
    'search_items' => __( 'Search Classes', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into class', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this class', 'textdomain' ),
    'items_list' => __( 'Class list', 'textdomain' ),
    'items_list_navigation' => __( 'Class list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Class list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'class', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'menu_icon' => '',
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array('category', 'post_tag'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-universal-access-alt',
  );
  register_post_type( 'class', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_class_cpt', 0 );