<?php
	
	$chkbox = $_POST['chk'];
	$BX_NAME=$_POST['BX_NAME'];
	$BX_age=$_POST['BX_age'];			
	$BX_gender=$_POST['BX_gender'];
	$BX_birth=$_POST['BX_birth'];	
	
	
	foreach($BX_NAME as $a => $b)
	{
		echo $BX_NAME[$a];
		echo $BX_age[$a];
		echo $BX_gender[$a];
		echo $BX_birth[$a];
	}
	
	
?>