<?php

require_once dirname(__FILE__) . '/class-tgm-plugin-activation.php';

add_action('tgmpa_register', 'hsblog_register_required_plugins');

function hsblog_register_required_plugins()
{
	$plugins = array(
		[
			'name'               => 'Redux Framework',
			'slug'               => 'redux-framework',
			'required'           => true,
			'version'            => '4.1.26',
		],
		[
			'name'               => 'Woocommerce',
			'slug'               => 'woocommerce',
			'required'           => true,
			'version'            => '5.3.0',
		],
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = [
		'id'           => 'HsBlog2Sc',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'plugins.php',
		'capability'   => 'manage_options',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '',
	];
	tgmpa($plugins, $config);
}
