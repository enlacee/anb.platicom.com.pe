<?php

defined('ABSPATH') or die('No script kiddies please!');
/*
  Plugin Name: A Mukito
  Plugin URI:
  Description: Show video game into wordpress admin
  Version:     1.0
  Author:      Anibal Copitan
  Author URI:  http://acopitan.blogspot.com/
 */
add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_menu() {
	add_menu_page( 'My Top Level Mukito', 'MUkito Game', 'read', 'my-mukito-game.anb', 'myplguin_admin_page', 'dashicons-tickets', 6  );
}

function myplguin_admin_page(){
	?>
	<div class="wrap">
		<h2>Welcome To My Plugin</h2>
	</div>
	<?php
}

