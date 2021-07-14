<html>
<body>
<?php

  $name   = $_POST["Name"];
  $date	   =$_POST["day"];
  $month   =$_POST["Month"];
  $year    =$_POST["Year"];
  $time  = $_POST["Time"];
  $venue   = $_POST["Venue"];
  $decsription = $_POST["Description"];

  
    $picture_tmp = $_FILES['img']['tmp_name'];
    $picture_name = $_FILES['img']['name'];
    $picture_type = $_FILES['img']['type'];

    $allowed_type = array('image/png', 'image/gif', 'image/jpg', 'image/jpeg');

    if(in_array($picture_type, $allowed_type)) {
        $path = 'images/'.$picture_name; 
    } else {
        $error[] = 'File type not allowed';
    }
 
if(isset($_POST["submit"]))
{
	$conn=mysqli_connect('localhost','root','','nibm');
	
	
	if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	}
	
	
	$ac=mysqli_query($conn,"INSERT INTO events VALUES (DEFAULT,'$name','$date','$month','$year','$time','$venue','$decsription','$path') ");
	move_uploaded_file($picture_tmp, $path);
	if($ac)
	{
		 header("Location:indexAdmin.html");
	}
	
	else
	{
		echo "failed to Insert";
	}
}
?>
</body>
</html>



