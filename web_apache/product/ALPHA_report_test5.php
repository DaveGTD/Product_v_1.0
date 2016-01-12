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
		$nameAndType[$name] = $type;
			
	}
}
	
foreach ($nameAndType as $k => $v)
{
	if(contains($v , 'char') || contains($v, 'text') || contains($v, 'blob') || contains($v, 'enum'))
	{
		$nameAndType[$k] = 'text';
	}
	
	if(contains($v, 'int') || contains($v, 'float') || contains($v, 'double'), contains($v, 'decimal'))
	{
		$nameAndType[$k] = 'number';
	}
}
	
	
function startsWith($haystack, $needle)
{
     $length = strlen($needle);
     return (substr($haystack, 0, $length) === $needle);
}

function endsWith($haystack, $needle)
{
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    }

    return (substr($haystack, -$length) === $needle);
}

function contains($haystack, $needle)
{
	if (strpos($haystack, $needle) !== FALSE)
	{
		return true;
	}
	else
	{
		return false;
	}
}
	
print_r($nameAndType);

$conn->close();

	
	
?>