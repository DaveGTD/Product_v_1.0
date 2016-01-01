<?php
	$q=$_GET['q'];
	$my_data=mysql_real_escape_string($q);
	$mysqli=mysqli_connect('localhost','root','root','test') or die("Database Error");
	$sql="SELECT lastname FROM users WHERE lastname LIKE '%$my_data%' ORDER BY lastname";
	$result = mysqli_query($mysqli,$sql) or die(mysqli_error());
	
	if($result)
	{
		while($row=mysqli_fetch_array($result))
		{
			echo $row['lastname']."\n";
		}
	}
?>