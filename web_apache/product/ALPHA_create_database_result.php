<?php
	
	// $chkbox = $_POST['chk'];
	$ONE = $_POST['ONE'];
	$op = $_POST['op'];
	$TWO = $_POST['TWO'];

	
	
	foreach($ONE as $a => $b)
	{
		echo $ONE[$a] . '<br>';
		echo $op[$a]  . '<br>';
		echo $TWO[$a] . '<br>';
	}
	
	
?>