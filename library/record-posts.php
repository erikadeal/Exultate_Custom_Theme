<?php
/* Bones recording Post Type Example
This page walks you through creating 
a recording post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

Developed by: Eddie Machado
URL: http://themble.com/bones/
*/

// Flush rewrite rules for recording post types
add_action( 'after_switch_theme', 'bones_flush_rewrite_rules' );

// let's create the function for the recording type
function recording_posts() { 
	// creating (registering) the recording type 
	register_post_type( 'recording', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Recordings', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Recording', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'All Recordings', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Recording', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Post Types', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Post Type', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Post Type', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search recordings', 'bonestheme' ), /* Search recording Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the example recording post type', 'bonestheme' ), /* recording Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-format-audio',
			'rewrite'	=> array( 'slug' => 'recording_type', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'recording_type', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'recording-fields', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your recording post type */
	register_taxonomy_for_object_type( 'category', 'recordings' );
	/* this adds your post tags to your recording post type */
	register_taxonomy_for_object_type( 'post_tag', 'recordings' );
	
}

	// adding the function to the Wordpress init
	add_action( 'init', 'recording_posts');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// now let's add recording categories (these act like categories)
	register_taxonomy( 'recordings_cat', 
		array('recording'), /* if you change the name of register_post_type( 'recording_type', then you have to change this */
		array('hierarchical' => true,     /* if this is true, it acts like categories */
			'labels' => array(
				'name' => __( 'Recording Categories', 'bonestheme' ), /* name of the recording taxonomy */
				'singular_name' => __( 'Recording Category', 'bonestheme' ), /* single taxonomy name */
				'search_items' =>  __( 'Search Recording Categories', 'bonestheme' ), /* search title for taxomony */
				'all_items' => __( 'All Recording Categories', 'bonestheme' ), /* all title for taxonomies */
				'parent_item' => __( 'Parent Recording Category', 'bonestheme' ), /* parent title for taxonomy */
				'parent_item_colon' => __( 'Parent Recording Category:', 'bonestheme' ), /* parent taxonomy title */
				'edit_item' => __( 'Edit Recording Category', 'bonestheme' ), /* edit recording taxonomy title */
				'update_item' => __( 'Update Recording Category', 'bonestheme' ), /* update title for taxonomy */
				'add_new_item' => __( 'Add New Recording Category', 'bonestheme' ), /* add new title for taxonomy */
				'new_item_name' => __( 'New Recording Category Name', 'bonestheme' ) /* name title for taxonomy */
			),
			'show_admin_column' => true, 
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'recording-slug' ),
		)
	);
	
	// now let's add recording tags (these act like categories)
	register_taxonomy( 'recording_tag', 
		array('recording'), /* if you change the name of register_post_type( 'recording_type', then you have to change this */
		array('hierarchical' => false,    /* if this is false, it acts like tags */
			'labels' => array(
				'name' => __( 'recording Tags', 'bonestheme' ), /* name of the recording taxonomy */
				'singular_name' => __( 'Recording Tag', 'bonestheme' ), /* single taxonomy name */
				'search_items' =>  __( 'Search recording Tags', 'bonestheme' ), /* search title for taxomony */
				'all_items' => __( 'All recording Tags', 'bonestheme' ), /* all title for taxonomies */
				'parent_item' => __( 'Parent recording Tag', 'bonestheme' ), /* parent title for taxonomy */
				'parent_item_colon' => __( 'Parent recording Tag:', 'bonestheme' ), /* parent taxonomy title */
				'edit_item' => __( 'Edit recording Tag', 'bonestheme' ), /* edit recording taxonomy title */
				'update_item' => __( 'Update recording Tag', 'bonestheme' ), /* update title for taxonomy */
				'add_new_item' => __( 'Add New recording Tag', 'bonestheme' ), /* add new title for taxonomy */
				'new_item_name' => __( 'New recording Tag Name', 'bonestheme' ) /* name title for taxonomy */
			),
			'show_admin_column' => true,
			'show_ui' => true,
			'query_var' => true,
		)
	);
	
	/*
		looking for recording meta boxes?
		check out this fantastic tool:
		https://github.com/jaredatch/recording-Metaboxes-and-Fields-for-WordPress
	*/
	

?>
