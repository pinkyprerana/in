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

	if(count($_POST)>0) 
        {
        $search=$_POST[user_data];
        $sql = "INSERT INTO SEARCH(user_data)VALUES ('$search')";
        if($conn->query($sql) === TRUE) 
	    {
        $result = mysqli_query($conn,"SELECT * FROM user_data where search='$search' ");
        include("inHOMEpage.html");
        $i=0;
        while($row = mysqli_fetch_array($result));
     
        }
    }
        else 
	    {
             echo "Error: " . $conn->error;
	    }
$conn->close();	
?>