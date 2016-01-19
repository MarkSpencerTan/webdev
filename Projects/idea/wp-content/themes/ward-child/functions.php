<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ) );
}

/* Disable the Admin Bar By Default */

add_filter( 'show_admin_bar', '__return_false' );


/* Remove the Admin Bar preference in user profile to remove temptation... */
remove_action( 'personal_options', '_admin_bar_preferences' );

	register_sidebar(array(
		'name'=> 'Column Sidebar',
		'id' => 'column_sidebar',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

