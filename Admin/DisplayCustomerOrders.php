<?php
// Displays Customers on a php page
include 'dbcon.php';

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
    echo "failed";
}
// Get Customer records from Customer table
?>


<html>
<head>
  <meta charset="UTF-8">
  <title>Display Customer Orders</title>
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
      <li><a style="text-decoration: none;"href="index.html">Home</a></li>
			</ul>
		</div>
		  </div>
		  </div>
		  </div>
<body class = "body">
  <div class = "marginTop">
  <h2>Customer Order History:</h2>

<!--Insert Customer Order list here -->

<?php 

// SQL querry will be a JOIN between CUSTOMER and ORDER on idCustomer
// Show KSU_ID, Customer_Lname, Customer_Fname, Clothing_Item, Clothing_Size, Clothing_Color, Quantity, Order_Date

$sql = "SELECT CUSTOMER.KSU_ID, CUSTOMER.Customer_Lname, CUSTOMER.Customer_Fname, ORDERS.Clothing_Item, ORDERS.Clothing_Size, ORDERS.Clothing_Color, ORDERS.Quantity, ORDERS.Order_Date
        FROM CUSTOMER INNER JOIN ORDERS ON CUSTOMER.idCUSTOMER=ORDERS.idCustomer;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "
  <table class='table table-condensed'>
  <tr>
  <th>KSU ID</th>
  <th>Last Name</th>
  <th>First Name</th>
  <th>Clothing Item</th>
  <th>Size</th>
  <th>Color</th>
  <th>Quantity</th>
  <th>Order Date</th>
  </tr>
  ";
 
  while($row = $result->fetch_assoc()) {
    echo "
      <tr>
        <td>$row[KSU_ID]</td>
        <td>$row[Customer_Lname]</td>
        <td>$row[Customer_Fname]</td>
        <td>$row[Clothing_Item]</td>
        <td>$row[Clothing_Size]</td>
        <td>$row[Clothing_Color]</td>
        <td>$row[Quantity]</td>
        <td>$row[Order_Date]</td>
      </tr>
    ";
  }
  echo "</table>";
} else {
  echo "0 results";
}
?>


  <!--Button to go back to the Admin Homepage-->
  <div class="container">             
		<ul class="pager">
		  <li><a href="index.html" style="color: black;">Back to Admin Homepage</a></li>
		</ul>
	  </div>
</div>
</body>
</html>
