<?php

/**
 * Extend Redux Framework fields.
 *
 * @since      1.0.0
 * @package    ReduxExtended
 * @subpackage ReduxExtended/core
 */
class ReduxExtended_Field {

    /**
     * Extend checkbox field
     *
     * @param  mixed  $data
     * @since  1.0.0
     */
    public function checkbox( $data ) {

        $input_id    = str_replace( array( '[', ']' ), array( '-', ''), $data[ 'name' ]);
        $button_attr = ' data-input="#' . $input_id . '"';

        // Check All / Check None
        if ( $data[ 'check-ability' ] == true ) {
            echo '<div class="checkbox-container"><button type="button" id="' . $data[ 'id'] . '-check-all" class="button check-button check-all-button"' . $button_attr . '>' . __( 'Check All', REDUXEXTENDED_TEXTDOMAIN ) . '</button><button type="button" id="' . $data[ 'id'] . '-check-none" class="button check-button check-none-button"' . $button_attr . '>' . __( 'Check None', REDUXEXTENDED_TEXTDOMAIN ) . '</button></div>';

        }
    }

}
