<?php
	ini_set('display_errors', 1); 
	error_reporting(E_ALL);
	
	function __autoload($class) {
		require_once('model/' . $class . '.class.php' );
	}
