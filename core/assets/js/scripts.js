/**
 * Redux Extended Plugin Scripts
 */
jQuery( document ).ready( function( $ ) {

    // Checkbox - Check All & Select None
    $( '.checkbox-container' ).on( 'click', '.check-button', function() {
        $this        = $( this );
        $checkbox_id = $this.attr('data-input');
        $checked     = false;
        $check_value = 0;

        if ( $this.hasClass( 'check-all-button' ) == true ) {
            $checked     = true;
            $check_value = 1;
        }

        $( $checkbox_id ).find( 'input:checkbox' ).prop( 'checked', $checked );
        $( $checkbox_id ).find( 'input.checkbox-check:hidden' ).val( $check_value );
    } );

} );