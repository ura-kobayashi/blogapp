<?php
use Josegonzalez\Environments\Environment;

Environment::configure('ci', true,[
	'MYSQL_DB_HOST' => 'localhost',
	'MYSQL_USER'	=> 'webapp',
	'MYSQL_PASSWORD' => 'passw0rd',
	'MYSQL_DB_NAME'	=> 'blog',
	'MYSQL_TEST_DB_NAME' => 'test_blog',
	'MYSQL_PREFIX' => '',
]);
