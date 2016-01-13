<?php

$sqlAppend = $_POST['tableSQL'];

$host = "localhost";
$user = "root";
$password = "root";
$database = "test";
$table = "users";

$conn = new mysqli($host, $user, $password, $database);
$sql = "SELECT * FROM '$table' WHERE " . $sqlAppend ;
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) 
    {
        foreach ($row as $k => $v)
        {
	        echo $row[$k] . '<br>';
        }
    }
} 
else 
{
    echo "0 results";
}

$conn->close();

?>


