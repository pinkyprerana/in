<?php 
	$servername ="localhost";
	$username ="root";
	$password = "";
	$dbName ="in";

//create connection
	$conn = new mysqli($servername, $username, $password, $dbName);
//check connection

	if ($conn->connect_error)
	{
		die ("Connection failed". $conn->connect_error);
	}
	$name= $_POST['name'];
	$email=$_POST['email'];
	$sql = "INSERT INTO login (name,email) 
			VALUES ('$name','$email')";
if ($conn->query($sql) === TRUE) 
	{
    echo "Registered successfully";
	} 
else 
	{
    echo "Error: " . $conn->error;
	}
$conn->close();	
?>
