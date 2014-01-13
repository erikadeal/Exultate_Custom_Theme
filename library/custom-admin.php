<?php

//This file customiZes the dashboard for the Exultate theme

function remove_dashboard_widgets() {
        remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );
}
add_action( 'wp_dashboard_setup', 'remove_dashboard_widgets' );

function add_dashboard_widgets() {
    wp_add_dashboard_widget( 'dashboard_welcome', 'Welcome to the Exultate website!', 'add_welcome_widget' );
}
function add_welcome_widget(){ ?>
 
    This dashboard lets you add and edit content to the Exultate website. In the menu on the left, you will find the following types of content:

    <ul>
    	<li><strong>News: </strong>News and updates about Exultate. You can edit them or add new ones.</li>
    	<li><strong>Concerts: </strong>A special type of post for upcoming concerts where you can add information about the location and time.</li>
    	<li><strong>Recordings: </strong>Descriptive information about Exultate recordings. You can edit, add more, and link them to the store.</li>
    	<li><strong>Products: </strong>A list of everything Exultate sells through the website, including prices, sale, and shipping information.</li>
    	<li><strong>Pages: </strong>Static pages that you can edit.</li>

    	More information about how to add or edit these types of content is available on each page.
    </ul>
 
<?php }
 
add_action( 'wp_dashboard_setup', 'add_dashboard_widgets' );

function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'News';
    $submenu['edit.php'][5][0] = 'News Items';
    $submenu['edit.php'][10][0] = 'Add News Item';
}
add_action( 'admin_menu', 'change_post_menu_label' );

?>