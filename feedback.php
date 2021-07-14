<html>
<body>
<?php

  $name   = $_POST["name"];
  $email   = $_POST["email"];
  $subject   = $_POST["subject"];
  $message = $_POST["message"];


if(isset($_POST["submit"]))
{
	$conn=mysqli_connect('localhost','root','','nibm');
	
	
	if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
	
	$ac=mysqli_query($conn,"INSERT INTO feedback VALUES (DEFAULT,'$name', '$email', '$subject','$message') ");
	
	if($ac)
	{
		 header("Location:contact.html");
	}
	
	else
	{
		echo "failed";
	}
}
?>
</body>
</html>


