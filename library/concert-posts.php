<?php
/* Bones concert Post Type

Author: Erika Deal

*/

// Flush rewrite rules for concert post types
add_action( 'after_switch_theme', 'bones_flush_rewrite_rules' );

// Flush your rewrite rules
function bones_flush_rewrite_rules() {
	flush_rewrite_rules();
}

// let's create the function for the concert type
function concert_posts() { 
	// creating (registering) the concert type 
	register_post_type( 'concert', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Concerts', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Concert', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'All Concerts', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Concert', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Post Types', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Post Type', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Post Type', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Concerts', 'bonestheme' ), /* Search concert Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the example concert post type', 'bonestheme' ), /* concert Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-calendar', /* the icon for the concert post type menu */
			'rewrite'	=> array( 'slug' => 'concert_type', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'concert_type', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'concert-fields', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your concert post type */
	register_taxonomy_for_object_type( 'category', 'concerts' );
	/* this adds your post tags to your concert post type */
	register_taxonomy_for_object_type( 'post_tag', 'concerts' );
	
}

	// adding the function to the Wordpress init
	add_action( 'init', 'concert_posts');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// now let's add concert categories (these act like categories)
	register_taxonomy( 'concerts_cat', 
		array('concert'), /* if you change the name of register_post_type( 'concert_type', then you have to change this */
		array('hierarchical' => true,     /* if this is true, it acts like categories */
			'labels' => array(
				'name' => __( 'Concert Categories', 'bonestheme' ), /* name of the concert taxonomy */
				'singular_name' => __( 'Concert Category', 'bonestheme' ), /* single taxonomy name */
				'search_items' =>  __( 'Search concert Categories', 'bonestheme' ), /* search title for taxomony */
				'all_items' => __( 'All concert Categories', 'bonestheme' ), /* all title for taxonomies */
				'parent_item' => __( 'Parent concert Category', 'bonestheme' ), /* parent title for taxonomy */
				'parent_item_colon' => __( 'Parent concert Category:', 'bonestheme' ), /* parent taxonomy title */
				'edit_item' => __( 'Edit concert Category', 'bonestheme' ), /* edit concert taxonomy title */
				'update_item' => __( 'Update concert Category', 'bonestheme' ), /* update title for taxonomy */
				'add_new_item' => __( 'Add New concert Category', 'bonestheme' ), /* add new title for taxonomy */
				'new_item_name' => __( 'New concert Category Name', 'bonestheme' ) /* name title for taxonomy */
			),
			'show_admin_column' => true, 
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'concert-slug' ),
		)
	);
	
	// now let's add concert tags (these act like categories)
	register_taxonomy( 'concert_tag', 
		array('concert'), /* if you change the name of register_post_type( 'concert_type', then you have to change this */
		array('hierarchical' => false,    /* if this is false, it acts like tags */
			'labels' => array(
				'name' => __( 'Concert Tags', 'bonestheme' ), /* name of the concert taxonomy */
				'singular_name' => __( 'Concert Tag', 'bonestheme' ), /* single taxonomy name */
				'search_items' =>  __( 'Search concert Tags', 'bonestheme' ), /* search title for taxomony */
				'all_items' => __( 'All concert Tags', 'bonestheme' ), /* all title for taxonomies */
				'parent_item' => __( 'Parent concert Tag', 'bonestheme' ), /* parent title for taxonomy */
				'parent_item_colon' => __( 'Parent concert Tag:', 'bonestheme' ), /* parent taxonomy title */
				'edit_item' => __( 'Edit concert Tag', 'bonestheme' ), /* edit concert taxonomy title */
				'update_item' => __( 'Update concert Tag', 'bonestheme' ), /* update title for taxonomy */
				'add_new_item' => __( 'Add New concert Tag', 'bonestheme' ), /* add new title for taxonomy */
				'new_item_name' => __( 'New concert Tag Name', 'bonestheme' ) /* name title for taxonomy */
			),
			'show_admin_column' => true,
			'show_ui' => true,
			'query_var' => true,
		)
	);
	
?>
