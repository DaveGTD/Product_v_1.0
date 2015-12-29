<?php 

include 'secret.inc';
// var_dump($_POST);	
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$conn = getConnection();
	
	$answer = false;
	
	if($answer)
	{
		header('Location: http://localhost:9901/Product_v_1.0/web_apache/product/ALPHA_home.php');
	}
	else
	{
		echo "<h4> Login Failed! </h4><br>";
		echo "<strong> Please try again </strong>";
	}
	
	
?>