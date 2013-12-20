<?php 


// Responsive

add_action('init', 'cptui_register_my_cpt_responsive');
function cptui_register_my_cpt_responsive() {
register_post_type('responsive', array(
'label' => 'Responsive',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'responsive', 'with_front' => true),
'query_var' => true,
'menu_icon' => '/wp-content/themes/jn-wpbs/assets/img/social/admin-responsive.png',
'supports' => array('title','thumbnail'),
'taxonomies' => array('category'),
'labels' => array (
  'name' => 'Responsive',
  'singular_name' => 'Project',
  'menu_name' => 'Responsive',
  'add_new' => 'Add Project',
  'add_new_item' => 'Add New Project',
  'edit' => 'Edit',
  'edit_item' => 'Edit Project',
  'new_item' => 'New Project',
  'view' => 'View Project',
  'view_item' => 'View Project',
  'search_items' => 'Search Responsive',
  'not_found' => 'No Responsive Found',
  'not_found_in_trash' => 'No Responsive Found in Trash',
  'parent' => 'Parent Project',
)
) ); }


// Interactive

add_action('init', 'cptui_register_my_cpt_interactive');
function cptui_register_my_cpt_interactive() {
register_post_type('interactive', array(
'label' => 'Interactive',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'interactive', 'with_front' => true),
'query_var' => true,
'menu_icon' => '/wp-content/themes/jn-wpbs/assets/img/social/admin-interactive.png',
'supports' => array('title','thumbnail'),
'taxonomies' => array('category'),
'labels' => array (
  'name' => 'Interactive',
  'singular_name' => 'Project',
  'menu_name' => 'Interactive',
  'add_new' => 'Add Project',
  'add_new_item' => 'Add New Project',
  'edit' => 'Edit',
  'edit_item' => 'Edit Project',
  'new_item' => 'New Project',
  'view' => 'View Project',
  'view_item' => 'View Project',
  'search_items' => 'Search Interactive',
  'not_found' => 'No Interactive Found',
  'not_found_in_trash' => 'No Interactive Found in Trash',
  'parent' => 'Parent Project',
)
) ); }


// Design

add_action('init', 'cptui_register_my_cpt_design');
function cptui_register_my_cpt_design() {
register_post_type('design', array(
'label' => 'Design',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'design', 'with_front' => true),
'query_var' => true,
'menu_icon' => '/wp-content/themes/jn-wpbs/assets/img/social/admin-design.png',
'supports' => array('title','thumbnail'),
'taxonomies' => array('category'),
'labels' => array (
  'name' => 'Design',
  'singular_name' => 'Design Project',
  'menu_name' => 'Design',
  'add_new' => 'Add Design Project',
  'add_new_item' => 'Add New Design Project',
  'edit' => 'Edit',
  'edit_item' => 'Edit Design Project',
  'new_item' => 'New Design Project',
  'view' => 'View Design Project',
  'view_item' => 'View Design Project',
  'search_items' => 'Search Design',
  'not_found' => 'No Design Found',
  'not_found_in_trash' => 'No Design Found in Trash',
  'parent' => 'Parent Design Project',
)
) ); }

 ?>