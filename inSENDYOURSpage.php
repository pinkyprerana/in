<?php 
	$servername ="localhost";
	$email ="root";
	$password = "";
	$dbName ="in";
	$msg_to_user="";

//create connection
	$conn = new mysqli($servername, $email, $password, $dbName);
//check connection

	if ($conn->connect_error)
	{
		die ("Connection failed". $conn->connect_error);
	}
	
	$email= $_POST['email'];//getting user email
    $filename= $_FILES['filename']//getting pdf file

	$sql= "INSERT INTO SENDYOURS(email,filename) VALUES ('$email','$filename')";
    if($conn->query($sql) === TRUE) 
	    {
			include ("inTHANKYOUpage.php");
			 
	    } 
    else 
	    {
             echo "Error: " . $conn->error;
	    }
$conn->close();	
?>
