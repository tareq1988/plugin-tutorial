<?php
/**
 * Adds additional contact methods to user profile
 *
 * @param  array $methods
 * @return array
 */
function wetuts_user_contact_methods( $methods ) {

    $methods['twitter'] = __( 'Twitter', 'wetuts' );
    $methods['facebook'] = __( 'Facebook', 'wetuts' );
    $methods['linkedin'] = __( 'LinkedIn', 'wetuts' );

    return $methods;
}

add_filter( 'user_contactmethods', 'wetuts_user_contact_methods' );