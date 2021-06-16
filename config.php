<?php
	$host = "localhost";
        $user = "root";
        $pass = "";
        $db = "internship";
        

        $conn = mysqli_connect($host, $user, $pass, $db);

	if(!$conn){
		die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
	}