<?php

// Define the version as a constant so we can easily replace it throughout the theme
define( 'UNFOLD_VERSION', 1.0 );

/*-----------------------------------------------------------------------------------*/
/* Add Rss to Head
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );


/*-----------------------------------------------------------------------------------*/
/* register main menu
/*-----------------------------------------------------------------------------------*/
register_nav_menus(
	array(
		'primary'    => __( 'Primary Menu', 'unfold' ),
	)
);

/*-----------------------------------------------------------------------------------*/
/* Enque Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function unfold_scripts() {

	// theme styles
	wp_enqueue_style( 'unfold-style', get_template_directory_uri() . '/style.css', '10000', 'all' );

	// add fitvid
	wp_enqueue_script( 'unfold-fitvid', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), UNFOLD_VERSION, true );

	// add theme scripts
	wp_enqueue_script( 'unfold', get_template_directory_uri() . '/js/theme.min.js', array(), UNFOLD_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'unfold_scripts' );
