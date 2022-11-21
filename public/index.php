<?php

//include_once __DIR__ . '/../template/layout.html.php';
include_once __DIR__ . '/../includes/session_start.php';

try {
	include_once __DIR__ . '/../includes/db_connection.php';
	$output = 'Database connection established.';
	
//include_once __DIR__ .'/../template/layout.html.php';
include_once __DIR__ .'/../template/index.html.php';


	echo $output;
	}
catch (PDOException $e) {
  echo 'Unable to connect to the database server: ' . $e->getMessage();
}
	

			

