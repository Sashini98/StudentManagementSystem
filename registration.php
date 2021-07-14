<html>
<body>
<?php

  $fname   = $_POST["First_Name"];
  $lname   = $_POST["Last_Name"];
  $date	   =$_POST["Birthday_day"];
  $month   =$_POST["Birthday_Month"];
  $year    =$_POST["Birthday_Year"];
  $email   = $_POST["Email_Id"];
  $phone   = $_POST["Mobile_Number"];
  $address = $_POST["Address"];
  $school  =$_POST["School"];


if(isset($_POST["submit"]))
{
	$conn=mysqli_connect('localhost','root','','nibm');
	
	
	if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	}

	
	$ac=mysqli_query($conn,"INSERT INTO seminar VALUES ('$fname', '$lname','$date', '$month', '$year','$email', '$phone','$address','$school') ");
	
	if($ac)
	{
		 header("Location:success.html");
	}
	
	else
	{
		 header("Location:failed.html");
	}
}
?>
</body>
</html>


