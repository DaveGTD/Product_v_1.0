<?php 

include 'secret.inc';
var_dump($_POST);	
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$conn = getConnection();
	
	$answer = true;
	
	if($answer)
	{
		header('Location: http://localhost:80/Product_v_1.0/web_apache/product/ALPHA_home.php');
	}
	else
	{
		echo "Login Failed";
	}
	
	
?>