<?php 

add_action('acf/init', 'acf_custom_blocks');
function acf_custom_blocks() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
        // acf_register_block(array(
		// 	'name'				=> 'contact-form',
		// 	'title'				=> __('contact-form'),
		// 	'description'		=> __('contact-form.'),
		// 	'render_template'   => get_template_directory() . '/templates/blocks/contact-form.php',
		// 	'category'			=> 'custom',
		// 	'icon'				=> 'admin-comments',
		// 	'keywords'			=> array( 'contact-form' ),
		// ));

	}

}