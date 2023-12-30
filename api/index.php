<?php 
	
	require_once(__DIR__ . '/../vendor/autoload.php');

	header('Content-Type: application/json');

	use LionDatabase\Driver;
	use LionRequest\Request;
	use LionRoute\Route;

	define('request', (new Request())->capture());

	Driver::run([
		'default' => 'lion_database',
		'connections' => [
			'lion_database' => [
				'type' => 'mysql',
				'host' => 'db',
				'port' => 3306,
				'dbname' => 'lion_database',
				'user' => 'root',
				'password' => 'lion'
			]
		]
	]);

	Route::init();

	include_once('./web.php');


	Route::dispatch();
