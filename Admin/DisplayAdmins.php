<?php
// Displays Admins on a php page
include 'dbcon.php';

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
    echo "failed";
}
?>

<html>
<head>
  <meta charset="UTF-8">
  <title>Display Admins</title>
  <link href="css/Admin_Homepage.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://webstatic.kennesaw.edu/_omni/css/default.css?v=3.24"><!-- Default -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<div class="site_wrapper">
	<div id="header" role="banner">
	   <div class="inner_rim">
		  <div class="logo_container">
<a href="index.html">
<img src="https://webstatic.kennesaw.edu/_omni/images/global/logo_mobile.png?v=1" alt="Kennesaw State University" class="mobile_logo">
<img src="https://webstatic.kennesaw.edu/_omni/images/global/logo_black.png?v=1" alt="Kennesaw State University" class="print_logo">
</a>
			 <div class="top"><a href="index.html">Kennesaw State University
				   <div class="logo"></div></a></div>
				   <div class="bottom"></div>
		  </div>
		  <div id="header_nav" style="border-right: 0px;">
			<ul class="active">
      <li><a style="text-decoration: none;" href="index.html">Home</a></li>
			</ul>
		</div>
		  </div>
		  </div>
		  </div>
<body class = "body">
<div class = "marginTop">
<h1 style = "text-align:center;"> Admin List </h1>
</body>
</html>

<!--Insert Admin List Here-->
<?php
// Get Admin records from Admin table
$sql = "SELECT Admin_Lname, Admin_Fname, Admin_KSU_Email, Phone_number FROM ADMIN";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "
  <table style='width: 60%; ' class='table table-condensed centerTable'>
  <tr>
  <th>Last Name</th>
  <th>First Name</th>
  <th>KSU Email</th>
  <th>Phone Number</th>
  </tr>
  ";
 
  while($row = $result->fetch_assoc()) {
    echo "
      <tr>
        <td>$row[Admin_Lname]</td>
        <td>$row[Admin_Fname]</td>
        <td>$row[Admin_KSU_Email]</td>
        <td>$row[Phone_number]</td>
      </tr>
    ";
  }
  echo "</table>";
} else {
  echo "0 results";
}
?>


<!--Button to go back to the Admin Homepage-->
<html>
  <body>
  <div class="container">             
		<ul class="pager">
		  <li><a href="index.html" style="color: black;">Back to Admin Homepage</a></li>
		</ul>
	  </div>

</div>

</body>
</html>

