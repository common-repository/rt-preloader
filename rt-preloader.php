<?php 
/*
Plugin Name: RT Preloader
Plugin URI: http://readytheme.net/plugins/rt-preloader
Description: RT Preloader is a nice and smooth preloader wordpress plugin which you can install in your website in the easiest way.
Author: Ready Theme
Version: 1.0
Author URI: http://readytheme.net
*/

/* Adding Latest jQuery from WordPress */
function rt_preloader_wp_latest_jquery() {
	wp_enqueue_script('jquery');
}
add_action('init', 'rt_preloader_wp_latest_jquery');

/* Adding plugin javascript active file */
function rt_preloader_plugin_active() {
	wp_register_script( 'plugin-script-active', plugins_url('js/active.js', __FILE__) );
    wp_enqueue_script( 'plugin-script-active' );
}
add_action( 'init', 'rt_preloader_plugin_active' );

/* Adding Plugin Custom CSS file */
function rt_preloader_plugin_styles() {
	wp_register_style( 'plugin-style', plugins_url('css/style.css', __FILE__) );
    wp_enqueue_style( 'plugin-style' );
}
add_action( 'wp_enqueue_scripts', 'rt_preloader_plugin_styles' );

/* HTML Content */
function rt_preloader_main_content () {
?>
	<div id="pageloader">
		<div class="loader-container">
			<div class="spinner">
			</div> 
		</div>
	</div>
<?php
}
add_action ('wp_enqueue_scripts', 'rt_preloader_main_content');

?>