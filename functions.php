<?php
/**
 *  SCRIPT_SUMMARY
 *
 *  @author Michael Cannon <mc@aihr.us>
 */
add_filter( 'user_contactmethods','custom_user_contactmethods' );


function custom_user_contactmethods( $contactmethods ) {
	// unset( $contactmethods['aim'] );
	// unset( $contactmethods['yim'] );
	// unset( $contactmethods['jabber'] );

	// $contactmethods['facebook']	= __( 'Facebook', 'custom' );
	// $contactmethods['twitter']	= __( 'Twitter', 'custom' );
	// $contactmethods['linkedin']	= __( 'LinkedIn', 'custom' );
	$contactmethods['AUTHOR_IMAGE']	= __( 'Avatar URL', 'custom' );

	return $contactmethods;
}

?>