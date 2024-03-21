<?php
	//connect to db
	$server = 'localhost';
	$user = 'root';
	$password = '';
	$database = 'admindb';
	//establish connection
	$connect = mysqli_connect($server, $user, $password, $database);
	if (!$connect) {
		die(mysqli_connect_error());
	}else{
        echo "Database successfully connected";
    }
?>