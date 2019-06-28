<?php

// database login
$db = [
	'server'   => 'db:3306',
	'username' => 'nette',
	'password' => 'nette'
];

// database connection
$conn = mysqli_connect($db['server'], $db['username'], $db['password']);
$conn ?: die('Connection failed: ' . mysqli_connect_error());

// print echo when everything is fine
echo '<div style="text-align: center; color: green">Database: Connected successfully</div>';

// php version info
phpinfo();
