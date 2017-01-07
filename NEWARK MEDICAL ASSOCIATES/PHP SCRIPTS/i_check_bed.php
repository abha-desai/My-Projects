<?php
ob_start();
include "chkauth.php";
?>
<html><head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>HMS</title>
  
    <link href="css/hover-min.css" rel="stylesheet" media="all">
	<link href='https://fonts.googleapis.com/css?family=Droid+Sans:700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/font-awesome.css">
  <style type="text/css">
   
	
	.div_box
	{	
		background-color:rgba(254, 255, 248, 0.9);
		color:black;
	border: 2px solid #F0DCB1;		
	}
  </style>

	<link rel="stylesheet" href="js/date/jquery-ui.css" />
    <script src="js/date/jquery-1_91.js"></script>
    <script src="js/date/jquery-ui.js"></script>
    <script src="js/date/script.js"></script>
	
	
	<link rel="stylesheet" href="css/form.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		
</head>
<body style="background-color: #e9ebab;
					background-image: url('images/light-honeycomb.png'); margin:0px; padding:0px;">
      
		
		<div style="width:100%; height:90px; border-bottom:1px solid #F4E7C2; background-color:rgba(0, 0, 0, 0.60); text-align:center;position: fixed; z-index:30; top:0px; color:white; font-size:22px;" id="mapster_wrap_0">
		<img src="images/hms_logo.png" style="margin-top:5px;"/>
			
		</div>
		
		<div style="position:absolute; top:1%; right:2%; color:white; z-index:50; text-align:center; line-height:5px; font-family: 'Droid Sans', sans-serif;">
			
		 <h3> Welcome, <?php echo $_SESSION['uname']; ?> </h3>
		 <a href="logout.php"><h3 style="color:white;">Logout</h3></a>
		</div>
		
		<!--Sidebar Panel-->
		<a href="admin.php" style="text-decoration:none;color:black;">
		<div style="position:fixed; right:1%; top:16%; width:60px; height:60px; border-radius:30px; background:white; z-index:30; text-align:center; border: 2px solid #F0DCB1;cursor:pointer;" class="hvr-grow-shadow">
			<center><i class="fa fa-home fa-lg" style="font-size:40px; margin-top:10px;"></i></center>
		</div>
		</a>
		
		<a href="i_admin.php" style="text-decoration:none;color:black;">
		<div style="position:fixed; right:1%; top:30%; width:60px; height:60px; border-radius:30px; background:white; z-index:30; text-align:center; border: 2px solid #F0DCB1;cursor:pointer;" class="hvr-grow-shadow">
			<center><i class="fa fa-th fa-lg" style="font-size:40px; margin-top:16px;"></i></center>
		</div>
		</a>
		
		<a href="javascript:history.back()" style="text-decoration:none;color:black;">
		<div style="position:fixed; right:1%; top:44%; width:60px; height:60px; border-radius:30px; background:white; z-index:30; text-align:center; border: 2px solid #F0DCB1;cursor:pointer;" class="hvr-grow-shadow">
			<center><i class="fa fa-arrow-circle-left fa-lg" style="font-size:40px; margin-top:14px;"></i></center>
		</div>
		</a>
		<!---- End Sidebar Panel-->
		
		
<div style="width:1000px; height:auto; min-height:450px; margin-top:140px; margin-bottom:50px; margin-left:auto; margin-right:auto; text-align:center;" class="div_box">
	
	
	<form class="form_main" action="i_check_bed_1.php" method="get">
	<h2 class="form_h2">Check Bed Availabilty</h2>
	<table cellspacing="14" style="margin:auto;">



	<tr>
	<td><label  class="form_label" >Select Building No. :</label></td>
	<td>  <select name="bldg">
		  <option value="1">Building 1</option>
		  <option value="2">Building 2</option>
		</select>  </td>
	</tr>

	<tr>
	<td></td>
	<td> <input type="submit" class="form_submit" value="Submit" class="form_submit"> </td>
	</tr>



	</table>
	</form>


</div>

</body>

<html> 
<?php ob_flush(); ?>