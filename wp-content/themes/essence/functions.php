<?php
the_post_thumbnail();
the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

the_post_thumbnail( array(100,100) );

add_theme_support('post-thumbnails');
set_post_thumbnail_size(1568,9999);

  function apk_load_styles(){
    wp_register_style('theme_style',get_stylesheet_uri(), '','1.0', 'all');
    wp_enqueue_style('theme_style');
  }
  add_action('wp_enqueue_scripts', 'apk_loud_styles');



  // Register Custom Post Type

  function Banner() {
      $labels = array(
          'name'                  => _x( 'Banner', 'Post Type General Name', 'apk' ),
          'singular_name'         => _x( 'Banner', 'Post Type Singular Name', 'apk' ),
          'menu_name'             => __( 'Banner', 'apk' ),
          'name_admin_bar'        => __( 'Post Type', 'apk' ),
          'archives'              => __( 'Item Archives', 'apk' ),
          'attributes'            => __( 'Item Attributes', 'apk' ),
          'parent_item_colon'     => __( 'Parent Item:', 'apk' ),
          'all_items'             => __( 'All Items', 'apk' ),
          'add_new_item'          => __( 'Add New Item', 'apk' ),
          'add_new'               => __( 'Add New', 'apk' ),
          'new_item'              => __( 'New Item', 'apk' ),
          'edit_item'             => __( 'Edit Item', 'apk' ),
          'update_item'           => __( 'Update Item', 'apk' ),
          'view_item'             => __( 'View Item', 'apk' ),
          'view_items'            => __( 'View Items', 'apk' ),
          'search_items'          => __( 'Search Item', 'apk' ),
          'not_found'             => __( 'Not found', 'apk' ),
          'not_found_in_trash'    => __( 'Not found in Trash', 'apk' ),
          'featured_image'        => __( 'Featured Image', 'apk' ),
          'set_featured_image'    => __( 'Set featured image', 'apk' ),
          'remove_featured_image' => __( 'Remove featured image', 'apk' ),
          'use_featured_image'    => __( 'Use as featured image', 'apk' ),
          'insert_into_item'      => __( 'Insert into item', 'apk' ),
          'uploaded_to_this_item' => __( 'Uploaded to this item', 'apk' ),
          'items_list'            => __( 'Items list', 'apk' ),
          'items_list_navigation' => __( 'Items list navigation', 'apk' ),
          'filter_items_list'     => __( 'Filter items list', 'apk' ),
      );
      $args = array(
          'label'                 => __( 'Banner', 'apk' ),
          'description'           => __( 'Post Type Description', 'apk' ),
          'labels'                => $labels,
          'supports'              => array( 'title', 'editor', 'thumbnail' ),
          'taxonomies'            => array(  ),
          'hierarchical'          => false,
          'public'                => true,
          'show_ui'               => true,
          'show_in_menu'          => true,
          'menu_position'         => 5,
          'menu_icon'             => 'dashicons-format-image',
          'show_in_admin_bar'     => true,
          'show_in_nav_menus'     => true,
          'can_export'            => true,
          'has_archive'           => true,
          'exclude_from_search'   => false,
          'publicly_queryable'    => true,
          'capability_type'       => 'page',
      );
      register_post_type( 'Banner', $args );

  }
  add_action( 'init', 'Banner', 0 );

  function Team() {
      $labels = array(
          'name'                  => _x( 'Team', 'Post Type General Name', 'apk' ),
          'singular_name'         => _x( 'Team', 'Post Type Singular Name', 'apk' ),
          'menu_name'             => __( 'Team', 'apk' ),
          'name_admin_bar'        => __( 'Post Type', 'apk' ),
          'archives'              => __( 'Item Archives', 'apk' ),
          'attributes'            => __( 'Item Attributes', 'apk' ),
          'parent_item_colon'     => __( 'Parent Item:', 'apk' ),
          'all_items'             => __( 'All Items', 'apk' ),
          'add_new_item'          => __( 'Add New Item', 'apk' ),
          'add_new'               => __( 'Add New', 'apk' ),
          'new_item'              => __( 'New Item', 'apk' ),
          'edit_item'             => __( 'Edit Item', 'apk' ),
          'update_item'           => __( 'Update Item', 'apk' ),
          'view_item'             => __( 'View Item', 'apk' ),
          'view_items'            => __( 'View Items', 'apk' ),
          'search_items'          => __( 'Search Item', 'apk' ),
          'not_found'             => __( 'Not found', 'apk' ),
          'not_found_in_trash'    => __( 'Not found in Trash', 'apk' ),
          'featured_image'        => __( 'Featured Image', 'apk' ),
          'set_featured_image'    => __( 'Set featured image', 'apk' ),
          'remove_featured_image' => __( 'Remove featured image', 'apk' ),
          'use_featured_image'    => __( 'Use as featured image', 'apk' ),
          'insert_into_item'      => __( 'Insert into item', 'apk' ),
          'uploaded_to_this_item' => __( 'Uploaded to this item', 'apk' ),
          'items_list'            => __( 'Items list', 'apk' ),
          'items_list_navigation' => __( 'Items list navigation', 'apk' ),
          'filter_items_list'     => __( 'Filter items list', 'apk' ),
      );
      $args = array(
          'label'                 => __( 'Team', 'apk' ),
          'description'           => __( 'Post Type Description', 'apk' ),
          'labels'                => $labels,
          'supports'              => array( 'title', 'editor', 'thumbnail' ),
          'taxonomies'            => array(  ),
          'hierarchical'          => false,
          'public'                => true,
          'show_ui'               => true,
          'show_in_menu'          => true,
          'menu_position'         => 5,
          'menu_icon'             => 'dashicons-admin-users',
          'show_in_admin_bar'     => true,
          'show_in_nav_menus'     => true,
          'can_export'            => true,
          'has_archive'           => true,
          'exclude_from_search'   => false,
          'publicly_queryable'    => true,
          'capability_type'       => 'page',
      );
      register_post_type( 'Team', $args );

  }
  add_action( 'init', 'Team', 0 );
  if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5d1ff055dfe0c',
	'title' => 'Team',
	'fields' => array(
		array(
			'key' => 'field_5d1ff0613bbda',
			'label' => 'Link de Facebook',
			'name' => 'link_de_facebook',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5d1ff0763bbdb',
			'label' => 'Link de Twitter',
			'name' => 'link_de_twitter',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5d1ff08a3bbdc',
			'label' => 'Link de Google',
			'name' => 'link_de_google',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5d1ff0933bbdd',
			'label' => 'Link de Instagram',
			'name' => 'link_de_ig',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'team',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;



// Register Custom Post Type
function Gallery() {

	$labels = array(
		'name'                  => _x( 'Gallery', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Gallery', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Gallery', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Gallery', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => '',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Gallery', $args );

}
add_action( 'init', 'Gallery', 0 );

// Register Custom Post Type
function Why_choose() {

	$labels = array(
		'name'                  => _x( 'Why_choose', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Why_choose', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Why_choose', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Why_choose', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'icon' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-smiley',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => '',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Why_choose', $args );

}
add_action( 'init', 'Why_choose', 0 );
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5d239431c6965',
	'title' => 'Icon',
	'fields' => array(
		array(
			'key' => 'field_5d239442930a4',
			'label' => 'Icon',
			'name' => 'icon',
			'type' => 'text',
			'instructions' => 'Please, choose an icon of https://fontawesome.com/',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'why_choose',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;

// Register Custom Post Type
function Ariannys() {

	$labels = array(
		'name'                  => _x( 'ariannys', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'ariannys', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'ariannys', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'ariannys', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'categories', '' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-undo',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => '',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Ariannys', $args );

}
add_action( 'init', 'Ariannys', 0 );
