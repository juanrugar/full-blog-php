<?php 
	session_start();

	// connect to database
	$conn = mysqli_connect("localhost", "root", "", "full_php_blog");

	if(!$conn){
		die("Error connecting to database: " . mysql_connect_error());
       
	}
	// define global constants

	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost/full-php-blog/');
?>