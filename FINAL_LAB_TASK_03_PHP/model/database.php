<?php
	$dbuser = 'root';
	$dbpass = '';
	$host 	= 'localhost';
	$dbname	= 'mini_project';

	function getConnection(){

		global $dbname, $dbpass, $dbuser, $host;
		$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $conn;
	}
?>