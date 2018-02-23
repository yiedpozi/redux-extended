<?php
/**
 * Plugin Name: Redux Extended
 * Plugin URI:  https://github.com/yiedpozi
 * Description: Plugin to extend functionality on Redux Framework
 * Version:     1.0.0
 * Author:      Yied Pozi
 * Author URI:  mailto:yiedpozi@gmail.com
 * Text Domain: redux-extended
 * Domain Path: /languages
 */

// If this file is called directly, exit.
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Define plugin constants.
 *
 * @since 1.0.0
 */
define( 'REDUXEXTENDED_FILE', __FILE__ );
define( 'REDUXEXTENDED_PATH', plugin_dir_path( REDUXEXTENDED_FILE ) );
define( 'REDUXEXTENDED_URL', plugin_dir_url( REDUXEXTENDED_FILE ) );
define( 'REDUXEXTENDED_VERSION', '1.0.0' );
define( 'REDUXEXTENDED_TEXTDOMAIN', 'redux-extended' );

/**
 * Begins execution of the plugin.
 *
 * @since 1.0.0
 */
function run_redux_extended() {

    require_once( REDUXEXTENDED_PATH . 'class-redux-extended.php' );

	$redux_extend = new ReduxExtended();

}
run_redux_extended();
