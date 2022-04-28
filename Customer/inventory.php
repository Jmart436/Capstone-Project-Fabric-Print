<?php

/*
* PHP file that displays current inventory levels
*/

include 'dbcon.php';

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
    echo "failed";
}

// T-Shirt (White) XS
$white_shirt_xs = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'white' AND Clothing_Size = 'XS'";
$white_shirt_xs_result=mysqli_query($conn,$white_shirt_xs);
$white_shirt_xs_count=mysqli_num_rows($white_shirt_xs_result);

// T-shirt (White) S
$white_shirt_s = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'white' AND Clothing_Size = 'S'";
$white_shirt_s_result=mysqli_query($conn,$white_shirt_s);
$white_shirt_s_count=mysqli_num_rows($white_shirt_s_result);

// T-shirt (White) M
$white_shirt_m = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'white' AND Clothing_Size = 'M'";
$white_shirt_m_result=mysqli_query($conn,$white_shirt_m);
$white_shirt_m_count=mysqli_num_rows($white_shirt_m_result);

// T-shirt (White) L
$white_shirt_l = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'white' AND Clothing_Size = 'L'";
$white_shirt_l_result=mysqli_query($conn,$white_shirt_l);
$white_shirt_l_count=mysqli_num_rows($white_shirt_l_result);

// T-shirt (White) XL
$white_shirt_xl = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'white' AND Clothing_Size = 'XL'";
$white_shirt_xl_result=mysqli_query($conn,$white_shirt_xl);
$white_shirt_xl_count=mysqli_num_rows($white_shirt_xl_result);

// T-shirt (Grey) XS
$grey_shirt_xs = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'grey' AND Clothing_Size = 'XS'";
$grey_shirt_xs_result=mysqli_query($conn,$grey_shirt_xs);
$grey_shirt_xs_count=mysqli_num_rows($grey_shirt_xs_result);

// T-shirt (Grey) S
$grey_shirt_s = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'grey' AND Clothing_Size = 'S'";
$grey_shirt_s_result=mysqli_query($conn,$grey_shirt_s);
$grey_shirt_s_count=mysqli_num_rows($grey_shirt_s_result);

// T-shirt (Grey) M
$grey_shirt_m = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'grey' AND Clothing_Size = 'M'";
$grey_shirt_m_result=mysqli_query($conn,$grey_shirt_m);
$grey_shirt_m_count=mysqli_num_rows($grey_shirt_m_result);

// T-shirt (Grey) L
$grey_shirt_l = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'grey' AND Clothing_Size = 'L'";
$grey_shirt_l_result=mysqli_query($conn,$grey_shirt_l);
$grey_shirt_l_count=mysqli_num_rows($grey_shirt_l_result);

// T-shirt (Grey) XL
$grey_shirt_xl = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'grey' AND Clothing_Size = 'XL'";
$grey_shirt_xl_result=mysqli_query($conn,$grey_shirt_xl);
$grey_shirt_xl_count=mysqli_num_rows($grey_shirt_xl_result);

// T-shirt (Black) XS
$black_shirt_xs = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'black' AND Clothing_Size = 'XS'";
$black_shirt_xs_result=mysqli_query($conn,$black_shirt_xs);
$black_shirt_xs_count=mysqli_num_rows($black_shirt_xs_result);

// T-shirt (Black) S
$black_shirt_s = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'black' AND Clothing_Size = 'S'";
$black_shirt_s_result=mysqli_query($conn,$black_shirt_s);
$black_shirt_s_count=mysqli_num_rows($black_shirt_s_result);

// T-shirt (Black) M
$black_shirt_m = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'black' AND Clothing_Size = 'M'";
$black_shirt_m_result=mysqli_query($conn,$black_shirt_m);
$black_shirt_m_count=mysqli_num_rows($black_shirt_m_result);

// T-shirt (Black) L
$black_shirt_l = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'black' AND Clothing_Size = 'L'";
$black_shirt_l_result=mysqli_query($conn,$black_shirt_l);
$black_shirt_l_count=mysqli_num_rows($black_shirt_l_result);

// T-shirt (Black) XL
$black_shirt_xl = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt' AND Clothing_Color = 'black' AND Clothing_Size = 'XL'";
$black_shirt_xl_result=mysqli_query($conn,$black_shirt_xl);
$black_shirt_xl_count=mysqli_num_rows($black_shirt_xl_result);

// T-shirt(pre-treated) (White) XS
$white_pre_treat_xs = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'white' AND Clothing_Size = 'XS'";
$white_pre_treat_xs_result=mysqli_query($conn,$white_pre_treat_xs);
$white_pre_treat_xs_count=mysqli_num_rows($white_pre_treat_xs_result);

// T-shirt(pre-treated) (White) S
$white_pre_treat_s = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'white' AND Clothing_Size = 'S'";
$white_pre_treat_s_result=mysqli_query($conn,$white_pre_treat_s);
$white_pre_treat_s_count=mysqli_num_rows($white_pre_treat_s_result);

// T-shirt(pre-treated) (White) M
$white_pre_treat_m = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'white' AND Clothing_Size = 'M'";
$white_pre_treat_m_result=mysqli_query($conn,$white_pre_treat_m);
$white_pre_treat_m_count=mysqli_num_rows($white_pre_treat_m_result);

// T-shirt(pre-treated) (White) L
$white_pre_treat_l = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'white' AND Clothing_Size = 'L'";
$white_pre_treat_l_result=mysqli_query($conn,$white_pre_treat_l);
$white_pre_treat_l_count=mysqli_num_rows($white_pre_treat_l_result);

// T-shirt(pre-treated) (White) XL
$white_pre_treat_xl = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'white' AND Clothing_Size = 'XL'";
$white_pre_treat_xl_result=mysqli_query($conn,$white_pre_treat_xl);
$white_pre_treat_xl_count=mysqli_num_rows($white_pre_treat_xl_result);

// T-shirt(pre-treated) (Grey) XS
$grey_pre_treat_xs = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'grey' AND Clothing_Size = 'XS'";
$grey_pre_treat_xs_result=mysqli_query($conn,$grey_pre_treat_xs);
$grey_pre_treat_xs_count=mysqli_num_rows($grey_pre_treat_xs_result);

// T-shirt(pre-treated) (Grey) S
$grey_pre_treat_s = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'grey' AND Clothing_Size = 'S'";
$grey_pre_treat_s_result=mysqli_query($conn,$grey_pre_treat_s);
$grey_pre_treat_s_count=mysqli_num_rows($grey_pre_treat_s_result);

// T-shirt(pre-treated) (Grey) M
$grey_pre_treat_m = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'grey' AND Clothing_Size = 'M'";
$grey_pre_treat_m_result=mysqli_query($conn,$grey_pre_treat_m);
$grey_pre_treat_m_count=mysqli_num_rows($grey_pre_treat_m_result);

// T-shirt(pre-treated) (Grey) L
$grey_pre_treat_l = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'grey' AND Clothing_Size = 'L'";
$grey_pre_treat_l_result=mysqli_query($conn,$grey_pre_treat_l);
$grey_pre_treat_l_count=mysqli_num_rows($grey_pre_treat_l_result);

// T-shirt(pre-treated) (Grey) XL
$grey_pre_treat_xl = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'grey' AND Clothing_Size = 'XL'";
$grey_pre_treat_xl_result=mysqli_query($conn,$grey_pre_treat_xl);
$grey_pre_treat_xl_count=mysqli_num_rows($grey_pre_treat_xl_result);

// T-shirt(pre-treated) (Black) XS
$black_pre_treat_xs = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'black' AND Clothing_Size = 'XS'";
$black_pre_treat_xs_result=mysqli_query($conn,$black_pre_treat_xs);
$black_pre_treat_xs_count=mysqli_num_rows($black_pre_treat_xs_result);

// T-shirt(pre-treated) (Black) S
$black_pre_treat_s = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'black' AND Clothing_Size = 'S'";
$black_pre_treat_s_result=mysqli_query($conn,$black_pre_treat_s);
$black_pre_treat_s_count=mysqli_num_rows($black_pre_treat_s_result);

// T-shirt(pre-treated) (Black) M
$black_pre_treat_m = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'black' AND Clothing_Size = 'M'";
$black_pre_treat_m_result=mysqli_query($conn,$black_pre_treat_m);
$black_pre_treat_m_count=mysqli_num_rows($black_pre_treat_m_result);

// T-shirt(pre-treated) (Black) L
$black_pre_treat_l = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'black' AND Clothing_Size = 'L'";
$black_pre_treat_l_result=mysqli_query($conn,$black_pre_treat_l);
$black_pre_treat_l_count=mysqli_num_rows($black_pre_treat_l_result);

// T-shirt(pre-treated) (Black) XL
$black_pre_treat_xl = "SELECT * FROM CLOTHING WHERE Clothing_Item = 'T-shirt(pre-treated)' AND Clothing_Color = 'black' AND Clothing_Size = 'XL'";
$black_pre_treat_xl_result=mysqli_query($conn,$black_pre_treat_xl);
$black_pre_treat_xl_count=mysqli_num_rows($black_pre_treat_xl_result);
?>

<html>
	

<head>
	<meta charset="UTF-8">
	<title>Customer Homepage</title>
	<link href="css/Customer_Homepage.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://webstatic.kennesaw.edu/_omni/css/default.css?v=3.24"><!-- Default -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<div class="site_wrapper">
	<div id="header" role="banner">
	   <div class="inner_rim">
		  <div class="logo_container">
<a href="index.php">
<img src="https://webstatic.kennesaw.edu/_omni/images/global/logo_mobile.png?v=1" alt="Kennesaw State University" class="mobile_logo">
<img src="https://webstatic.kennesaw.edu/_omni/images/global/logo_black.png?v=1" alt="Kennesaw State University" class="print_logo">
</a>
			 <div class="top"><a href="index.html">Kennesaw State University
				   <div class="logo"></div></a></div>
				   <div class="bottom"></div>
		  </div>
		  <div id="header_nav" style="border-right: 0px;">
			<ul class="active">
			<li><a href="index.html">Home</a></li>

				<li><a href="index.html">Location</a></li>
				
				<li><a href="inventory.php">View Inventory</a></li>
			</ul>
		</div>
		  </div>
		  </div>
		  </div>
		  

<!-- TODO: Display live inventory count-->
<!-- Displays Inventory counts for current inventory for the Customer-->
<body class = "body">
	<div class = "marginTop">
	<h2 style="margin:0 auto;">Location: Burruss Building 465</h2>
	<h2>Price:</h2>
	<div style = "margin-left:30px">
	<table style= "width:30%; margin:0 auto; margin-bottom:2em;">
		<tr>
			<th>Condition</th>
			<th>Price to print</th>
		</tr>
		<tr>
			<td>You bring your own white shirt</td>
			<td>$2</td>
		</tr>
		<tr>
			<td>You bring your own non-white shirt</td>
			<td>$3</td>
		</tr>		
		<tr>
			<td>You purchase a white shirt and print</td>
			<td>$7</td>
		</tr>	
		<tr>
			<td>You purchase a non-white shirt and print</td>
			<td>$8</td>
		</tr>		

	</table>
</div>

<table style="width: 70%;" class = "table table-condensed center">
		<tr>
			<th>Item</th>
			<th>XS</th>
			<th>S</th>
			<th>M</th>
			<th>L</th>
			<th>XL</th>
			<th>Needs Pre-Treatment?</th>
		</tr>
		<tr>
			<td>T-shirt (White)</td>
			<td><?php echo $white_shirt_xs_count ?></td><!--XS-->
            <td><?php echo $white_shirt_s_count ?></td><!--S-->
            <td><?php echo $white_shirt_m_count ?></td><!--M-->
            <td><?php echo $white_shirt_l_count ?></td><!--L-->
            <td><?php echo $white_shirt_xl_count ?></td><!--XL-->
			<td>No</td>
		</tr>
		<tr>
			<td>T-shirt (Grey)</td>
            <td><?php echo $grey_shirt_xs_count ?></td><!--XS-->
            <td><?php echo $grey_shirt_s_count ?></td><!--S-->
            <td><?php echo $grey_shirt_m_count ?></td><!--M-->
            <td><?php echo $grey_shirt_l_count ?></td><!--L-->
            <td><?php echo $grey_shirt_xl_count ?></td><!--XL-->
			<td>Yes</td>
		</tr>
		<tr>
			<td>T-shirt (Black)</td>
			<td><?php echo $black_shirt_xs_count ?></td><!--XS-->
            <td><?php echo $black_shirt_s_count ?></td><!--S-->
            <td><?php echo $black_shirt_m_count ?></td><!--M-->
            <td><?php echo $black_shirt_l_count ?></td><!--L-->
            <td><?php echo $black_shirt_xl_count ?></td><!--XL-->
			<td>Yes</td>

		</tr>
		<tr>
			<td>Pre-treated T-Shirt (White)</td>
			<td><?php echo $white_pre_treat_xs_count ?></td><!--XS-->
            <td><?php echo $white_pre_treat_s_count ?></td><!--S-->
            <td><?php echo $white_pre_treat_m_count ?></td><!--M-->
            <td><?php echo $white_pre_treat_l_count ?></td><!--L-->
            <td><?php echo $white_pre_treat_xl_count ?></td><!--XL-->
			<td>No</td>
		</tr>
		<tr>
			<td>Pre-treated T-Shirt (Grey)</td>
            <td><?php echo $grey_pre_treat_xs_count ?></td><!--XS-->
            <td><?php echo $grey_pre_treat_s_count ?></td><!--S-->
            <td><?php echo $grey_pre_treat_m_count ?></td><!--M-->
            <td><?php echo $grey_pre_treat_l_count ?></td><!--L-->
            <td><?php echo $grey_pre_treat_xl_count ?></td><!--XL-->
			<td>No</td>
		</tr>
		<tr>
			<td>Pre-treated T-Shirt (Black)</td>
            <td><?php echo $black_pre_treat_xs_count ?></td><!--XS-->
            <td><?php echo $black_pre_treat_s_count ?></td><!--S-->
            <td><?php echo $black_pre_treat_m_count ?></td><!--M-->
            <td><?php echo $black_pre_treat_l_count ?></td><!--L-->
            <td><?php echo $black_pre_treat_xl_count ?></td><!--XL-->
			<td>No</td>
		</tr>
	</table>

	<!-- Button to go to the Customer Info Page
	<button class="button" onClick="location.href='Customer_Info.html'">
		To Customer Info Page
	</button>


	<div>
		<button class="button" id="toAdminIndex" onClick="location.href='../Admin'">
		  To Admin Index
		</button>
	  </div>
 -->
	  <div class="container">                 
  <ul class="pager">
    <li class="previous"><a href="Customer_Info.html">To Customer Info Page</a></li>
    <li class="next"><a href="../Admin">To Admin Index</a></li>
  </ul>
</div>

<div class="container">             
		<ul class="pager">
		  <li><a href="Customer_Info.html" style="color: black;">To Customer Info Page</a></li>
		</ul>
	  </div>
</div>
</body>

</html>