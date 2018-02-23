<?php

/**
 * The plugin class.
 *
 * @since      1.0.0
 * @package    ReduxExtended
 * @subpackage ReduxExtended
 */
class ReduxExtended {

    public static $_option_name;

    /**
     * Set option name that will use extended function.
     *
     * @param  mixed  $option_name
     * @since  1.0.0
     */
    public static function extend( $option_name ) {

        self::$_option_name = $option_name;

        // Check if Redux Framework class exist
        if ( class_exists( 'ReduxFramework' ) ) {
            self::load_dependencies();

            if ( is_array( $option_name ) ) {
                foreach ( $option_name as $option ) {
                    self::define_extend_hooks( $option );
                }
            }
            else {
                self::define_extend_hooks( $option_name );
            }
        }

    }

    /**
     * Load the required dependencies.
     *
     * @since  1.0.0
     */
    private function load_dependencies() {

        require_once( REDUXEXTENDED_PATH . '/core/class-redux-extended-field.php' );

    }

    /**
     * Register all of the hooks to extend Redux Framework.
     *
     * @param  mixed  $option_name
     * @since  1.0.0
     */
    private function define_extend_hooks( $option_name ) {

        // Register/enqueue styles & scripts on plugin options page
        add_action( 'redux/page/' . $option_name . '/enqueue', array( __CLASS__, 'enqueue_styles_scripts' ) );

        $field = new ReduxExtended_Field();

        // List of field that will be extended
        $fields_extend = ['checkbox'];

        foreach ( $fields_extend as $value ) {
            add_action( 'redux/field/' . $option_name . '/' . $value . '/fieldset/before/' . $option_name, array( $field, $value ) );
        }

    }

    /**
     * Register and enqueue styles and scripts on plugin options page.
     *
     * @since  1.0.0
     */
    public function enqueue_styles_scripts() {

        wp_register_style( 'redux-extend', REDUXEXTENDED_URL . 'core/assets/css/styles.min.css', array(), REDUXEXTENDED_VERSION );
        wp_register_script( 'redux-extend', REDUXEXTENDED_URL . 'core/assets/js/scripts.min.js', array(), REDUXEXTENDED_VERSION );

        wp_enqueue_style( 'redux-extend' );
        wp_enqueue_script( 'redux-extend' );

    }

}
$redux_extend = new ReduxExtended();
