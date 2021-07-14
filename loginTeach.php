<html>
<body>
<?php


session_start();
if(isset($_POST["submit"]))
{
	$conn=mysqli_connect('localhost','root','','nibm');
	
	 if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	
	$myusername = mysqli_real_escape_string($conn,$_POST["user"]);
      $mypassword = mysqli_real_escape_string($conn,$_POST["pw"]); 
      
      $sql = "SELECT * FROM teacher WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);
      

		
      if($count == 1) 
	  {
      
         $_SESSION['login_user'] = $myusername;
         
         header("location: indexTeacher.html");
      }else {
        
		 echo '<script language="javascript">';
		 echo 'alert("Your Login Name or Password is invalid")';
		 echo '</script>';

}
	 }
}
?>
</body>
</html>


