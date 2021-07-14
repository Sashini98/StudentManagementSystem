<html>
<body>
<?php

  $fname   = $_POST["First_Name"];
  $lname   = $_POST["Last_Name"];
  $email   = $_POST["Email_Id"];
  $phone   = $_POST["Mobile_Number"];
  $gender  = $_POST["Gender"];
  $address = $_POST["Address"];
  $school  =$_POST["School"];
  $user    =$_POST["user"];
  $pw      =$_POST["pw"];


if(isset($_POST["submit"]))
{
	$conn=mysqli_connect('localhost','root','','nibm');
	
	
	if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	}

	
	$sql_u = "SELECT * FROM teacher WHERE username='$user'";
  	$res_u = mysqli_query($conn, $sql_u);


  	if (mysqli_num_rows($res_u) > 0) {
  	  $name_error = "Sorry... username already taken"; 	
      echo $name_error;	  
  	}
	else{
	
	$ac=mysqli_query($conn,"INSERT INTO teacher VALUES ('$fname', '$lname','$email','$gender', '$phone','$address','$school','$user','$pw') ");
	
	if($ac)
	{
		 header("Location:indexAdmin.html");
	}
	
	else
	{
		echo "failed to register";
	}
	}
}
?>
</body>
</html>


