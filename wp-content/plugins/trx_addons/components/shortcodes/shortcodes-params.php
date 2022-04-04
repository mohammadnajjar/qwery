<?php
/**
 * ThemeREX Shortcodes additional params
 *
 * @package ThemeREX Addons
 * @since v2.12.0
 */

// Don't load directly
if ( ! defined( 'TRX_ADDONS_VERSION' ) ) {
	exit;
}

// A global array with additional parameters
global $trx_addons_sc_add_params;
$trx_addons_sc_add_params = array();

if ( ! function_exists( 'trx_addons_sc_add_params' ) ) {
	/**
	 * Main function to add new params to the our shortcodes/blocks
	 * 
	 * @param array $params  An array with additional params in the format:
	 *                       'sc'      Name of the shortcode or an array with a shortcode names to add new params in.
	 *                       'sc_gb'   Name of the Gutenberg block or an array with a block names to add params in.
	 *                       'group'   Name of the existing group parameter to insert new params inside it 
	 *                                 (before or after the key, specified in parameters 'before' or 'after').
	 *                       'before'  Name of the existing parameter to insert new params before it.
	 *                       'after'   Name of the existing parameter to insert new params after it. If 'before' and 'after' are empty - new parameters
	 *                                 should be inserted to the end of the array with parameters.
	 *                       'params'  An array with new parameters in the format:
	 *                                 array(
	 *                                     'param1_name' => array(
	 *                                                        'title'       => 'Title of the parameter',
	 *                                                        'description' => 'Description of the parameter',
	 *                                                        'default'     => 'Default value of the parameter',
	 *                                                        'options'     => 'An array with options for parameters with type select, radio, etc.',
	 *                                                        'type'        => 'Type of the parameter'
	 *                                                      ),
	 *                                     'param2_name' => array(),
	 *                                     ...
	 *                                 )
	 */
	function trx_addons_sc_add_params( $params ) {
		
	}
}
