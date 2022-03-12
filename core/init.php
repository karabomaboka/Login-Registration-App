<?php
	include 'config.php';

	//autoload
	spl_autoload_register(function($class){
		require_once "classes/{$class}.php";
	});

	$userObj   = new Users;

	//
	session_start();
?>