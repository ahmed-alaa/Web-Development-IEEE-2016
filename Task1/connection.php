
<?php
$serverName='localhost';
$userName='root';
$password='';
$databaseName='Demo1';


//create connection
$connection =new mysqli($serverName,$userName,$password,$databaseName);


//check connection
if($connection->connect_error)
{
	die("connection failed: ". $connection->connect_error);
}

?>

