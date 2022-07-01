<?php
require_once get_template_directory() . '/framework/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'whiteblogs_wtb_register_required_plugins' );

function whiteblogs_wtb_register_required_plugins() {
	
	$plugins = array(
        
        array(
            'name' => esc_html__('Contact Form 7','whiteblogs'),
            'slug' => 'contact-form-7',
            'required' => false,
        ),
        array(
            'name' => esc_html__('Save Data Contact Form 7','whiteblogs'),
            'slug' => 'save-data-contact-form-7',
            'required' => false,
        ),
        array(
            'name' => esc_html__('Redux Framework','whiteblogs'),
            'slug' => 'redux-framework',
            'required' => false,
        )
    );

	
	$config = array(
		'id'           => 'whiteblogs',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);

	tgmpa( $plugins, $config );
}