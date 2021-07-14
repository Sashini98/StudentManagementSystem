<html>
  <head>
    <title>NIBM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
<body>

  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html"><i class="flaticon-university"></i>NIBM <br><small>School Support</small></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item "><a href="i" class="nav-link"></a></li>
          <li class="nav-item"><a href="" class="nav-link"></a></li>
          <li class="nav-item"><a href="" class="nav-link"></a></li>
          <li class="nav-item"><a href="" class="nav-link"></a></li>
          <li class="nav-item"><a href="" class="nav-link"></a></li>
          <li class="nav-item"><a href="" class="nav-link"></a></li>
          <li class="nav-item cta"><a href="logout.php" class="nav-link"><span>Log Out</span></a></li>
        </ul>
      </div>
    </div>
	
  </nav>
       <div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span></span></p>
            <h1 class="mb-3 bread"></h1>
          </div>
        </div>
      </div>
    </div>
  
  
  
<?php

  $name   = $_POST["Report"];
  
echo"<h3 align='center'>$name</h3>";
if(isset($_POST["submit"]))
{
	$conn=mysqli_connect('localhost','root','','nibm');
	
	
	if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	}

	
	
	
	if ($name=="Registered Teachers")
	{
		 $sql = "SELECT * FROM teacher";

                if($stmt = $conn->query($sql)){
                echo "<table align='center' cellpadding = '10' border-spacing= '5px' border= '1px solid black'>";
				echo "<th>First Name</th><th>Last Name</th><th>Email</th><th>Mobile Number</th><th>Gender</th><th>Address</th><th>School</th><th>UserName</th><th>Password</th>";
                while ($nt = $stmt->fetch_assoc()) {
				
                echo "<tr><td>$nt[fname]</td><td>$nt[lname]</td><td>$nt[email]</td><td>$nt[mobile]</td><td>$nt[gender]</td><td>$nt[address]</td><td>$nt[school]</td><td>$nt[username]</td><td>$nt[password]</td></tr>";
				
                }

                echo "</table>";
				echo"<br><br><br><br><br><br><br><br>";
                }else{
                 echo $conn->error;
                 }
	
	}
		
	
	
	
	if ($name=="Registered Students")
	{
			 $sql = "SELECT * FROM student";

                if($stmt = $conn->query($sql)){
                echo "<table align='center' cellpadding = '10' border-spacing= '5px' border= '1px solid black'>";
				echo "<th>First Name</th><th>Last Name</th><th>Birth Day</th><th>Email</th><th>Mobile Number</th><th>Gender</th><th>Address</th><th>School</th><th>UserName</th><th>Password</th>";
                while ($nt = $stmt->fetch_assoc()) {
				
                echo "<tr><td>$nt[fname]</td><td>$nt[lname]</td><td>$nt[day]/$nt[month]/$nt[year]</td><td>$nt[email]</td><td>$nt[mobile]</td><td>$nt[gender]</td><td>$nt[address]</td><td>$nt[school]</td><td>$nt[username]</td><td>$nt[password]</td></tr>";
				
                }

                echo "</table>";
				echo"<br><br><br><br><br><br><br><br>";
                }else{
                 echo $conn->error;
                 }
	}
	
	
	
	

	if ($name=="Students registered for events")
	{
		$sql = "SELECT * FROM seminar";

                if($stmt = $conn->query($sql)){
                echo "<table align='center' cellpadding = '10' border-spacing= '5px' border= '1px solid black'>";
				echo "<th>First Name</th><th>Last Name</th><th>Birth Day</th><th>Email</th><th>Mobile Number</th><th>Address</th><th>School</th>";
                while ($nt = $stmt->fetch_assoc()) {
				
                echo "<tr><td>$nt[FirstName]</td><td>$nt[LastName]</td><td>$nt[Date]/$nt[Month]/$nt[Year]</td><td>$nt[email]</td><td>$nt[phone]</td><td>$nt[address]</td><td>$nt[school]</td></tr>";
				
                }

                echo "</table>";
				echo"<br><br><br><br><br><br><br><br>";
                }else{
                 echo $conn->error;
                 }	 
	}
	
}
?>
</body>
</html>
