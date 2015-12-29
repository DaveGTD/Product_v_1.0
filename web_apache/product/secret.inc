<?php
	
	function getConnection()
	{
		$host = "localhost";
		$user = "root";
		$password = "root";
		$db = "product_v_1_0";	
		return new mysqli($host, $user, $password, $db);
	}


?>