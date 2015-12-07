<?php
/**
 * Enqueue scripts and styles for front-end.
 *
 * @since Andex One 1.0
 */

  function custom_rewrite_rule() {
	if( isset( $_GET['player'] ) ) {
        var_dump($_GET['t']);
     }
    add_rewrite_rule('^nutrition/([^/]*)/([^/]*)/?','index.php?t=mukito','top');
  }
  add_action('init', 'custom_rewrite_rule', 10, 0);
  
  
  function mukito_scripts_styles() {
    global $wp_styles;
    global $wp_scripts;

    // load jquey customs
    //wp_deregister_script('jquery');
	//wp_register_script('jquery', get_template_directory_uri() . '/public/lib/jquery/dist/jquery.js', array(), false, true);
    //wp_enqueue_script('jquery');
    
	// JS
	if (!isset($_GET['player'])) {
		wp_enqueue_script( 'mukito-jquery.storage', get_template_directory_uri() . '/public/lib/jquery-storage-api/jquery.storageapi.js', array(), false, true);
		wp_enqueue_script( 'mukito-jquery.url', get_template_directory_uri() . '/public/js/jquery.url.js', array(), false, true);

	}


    // init CSS
    wp_enqueue_style('mukito-style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'mukito_scripts_styles' );
