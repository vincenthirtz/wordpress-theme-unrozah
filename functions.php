<?php
if ( function_exists('register_sidebar') )
register_sidebar();



	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'unrozah' ),

	) );

	function unrozah_sidebar() {
		register_sidebar(
			array (
				'name' => __( 'Custom', 'unrozah' ),
				'id' => 'custom-side-bar',
				'description' => __( 'Custom Sidebar', 'unrozah' ),
				'before_widget' => '<div class="widget-content">',
				'after_widget' => "</div>",
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>',
			)
		);
	}
	add_action( 'widgets_init', 'unrozah_sidebar' );
	
?>