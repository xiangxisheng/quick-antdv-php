<?php

if (!defined('DS')) {
	define('DS', DIRECTORY_SEPARATOR);
}
$config = require(__DIR__ . DS . 'default.php');
$mMenuConsole = &getMenu($config, 0, 'console');
array_unshift($mMenuConsole['children'], [
	'name' => 'yunfanghong',
	'label' => '云防红',
	'children' => [
		[
			'name' => 'yunfanghong',
			'label' => '云防红',
			'component' => 'common/table',
			'role' => 'sysadmin',
			"alias" => "/",
		],
	],
]);
$config['setting']['title'] = '云防红';
return $config;
