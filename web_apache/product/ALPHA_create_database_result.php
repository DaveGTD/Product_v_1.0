<?php
	
	// $chkbox = $_POST['chk'];
	$ONE = $_POST['ONE'];
	$operator = $_POST['operator'];
	$TWO = $_POST['TWO'];

	
	
	foreach($ONE as $a => $b)
	{
		echo $ONE[$a];
		echo $operator[$a];
		echo $TWO[$a];
	}
	
	
?>