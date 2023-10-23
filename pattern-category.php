<?php

/**
 * Registers pattern categories.
 *
 * @since Ascendoor FSE
 *
 * @return void
 */
function ascendoor_fse_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'ascendoor-fse' => array( 'label' => __( 'Ascendoor Pattern', 'ascendoor-fse' ) ),
	);

	$block_pattern_categories = apply_filters( 'ascendoor_fse_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'ascendoor_fse_register_pattern_category' );
