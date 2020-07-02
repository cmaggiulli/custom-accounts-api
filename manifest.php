<?php

$manifest = array(
	'acceptable_sugar_flavors' => array('CE','PRO','CORP','ENT','ULT'),
	'acceptable_sugar_versions' => array(
		'exact_matches' => array(),
		'regex_matches' => array('(.*?)\\.(.*?)\\.(.*?)$'),
	),
	'author' => 'SugarCRM',
	'description' => 'Custom Account API',
	'icon' => '',
	'is_uninstallable' => true,
	'name' => 'Link Leads',
	'published_date' => '2019-11-01 00:00:01',
	'type' => 'module',
	'version' => '0.1',
);

$installdefs = array(
	'id' => 'package_789000',
	'copy' => array(
		0 => array(
			'from' => '<basepath>/Files/custom/modules/Accounts/clients/base/api/CustomAccountApi.php',
			'to' => 'custom/modules/Accounts/clients/base/api/CustomAccountApi.php',
		),
	)
);
