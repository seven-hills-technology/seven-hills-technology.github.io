<?php
/**
 * Plugin Name: Seven Hills Technology
 * Plugin URI: https://sevenhillstechnology.com
 * Description: Blocks used in the SHT Design
 * Author: Brian Adams
 * Author URI: https://sevenhillstechnology.com
 * Version: 1.0.0
 */


/**
 * Enqueue the block's assets for the editor.
 *
 * wp-blocks:  The registerBlockType() function to register blocks.
 * wp-element: The wp.element.createElement() function to create elements.
 * wp-i18n:    The __() function for internationalization.
 *
 * @since 1.0.0
 */
function sht_modern_dark_block_register_block() {
	wp_register_script(
		'sht-modern-dark-block', 
		plugins_url( 'build/index.js', __FILE__ ), 
		array( 'wp-blocks', 'wp-element', 'wp-editor' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'build/index.js' )
	);

	wp_register_style(
		'sht-modern-dark-block-editor-style',
		plugins_url('src/editor.css', __FILE__),
		array('wp-edit-blocks'),
		filemtime(plugin_dir_path(__FILE__) . 'src/editor.css')
	);

    register_block_type( 'sht-blocks/sht-modern-dark-block', array(
		'editor_script' => 'sht-modern-dark-block',
		'editor_style' => 'sht-modern-dark-block-editor-style'
    ) );
}
add_action( 'init', 'sht_modern_dark_block_register_block' );


function sht_modern_light_block_register_block() {
	wp_register_script(
		'sht-modern-light-block', 
		plugins_url( 'build/index.js', __FILE__ ), 
		array( 'wp-blocks', 'wp-element', 'wp-editor' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'build/index.js' )
	);

	wp_register_style(
		'sht-modern-light-block-editor-style',
		plugins_url('src/editor.css', __FILE__),
		array('wp-edit-blocks'),
		filemtime(plugin_dir_path(__FILE__) . 'src/editor.css')
	);

    register_block_type( 'sht-blocks/sht-modern-light-block', array(
		'editor_script' => 'sht-modern-light-block',
		'editor_style' => 'sht-modern-light-block-editor-style'
    ) );
}
add_action( 'init', 'sht_modern_light_block_register_block' );
