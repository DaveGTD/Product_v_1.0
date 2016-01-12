<?php
	
// get the column names and types 
	
$host = "localhost";
$user = "root";
$password = "root";
$database = "test";
$table = 'users';

$conn = new mysqli($host, $user, $password, $database);
$sql = "SELECT COLUMN_NAME,COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='$table'";
$result = $conn->query($sql);

$nameAndType = array();

if ($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		$name = $row['COLUMN_NAME'];
		$type = $row['COLUMN_TYPE'];
		$nameAndType['$name'] = $type;
			
	}
}
	
print_r($nameAndType);

$conn->close();

	
	
?>