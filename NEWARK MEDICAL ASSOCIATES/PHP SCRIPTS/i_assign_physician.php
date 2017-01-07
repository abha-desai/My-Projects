<?php ob_start();
include "chkauth.php";
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>HMS</title>
		
		<script src="js/modernizr.custom.js"></script>
		
	<link rel="stylesheet" href="css/style_search.css">
	<!-- Load jQuery library -->
	<script type="text/javascript" src="scripts/jquery.min.js"></script>
	<!-- Load custom js -->
	<script type="text/javascript" src="scripts/custom6.js"></script>
	
	<style>
	@import url(https://fonts.googleapis.com/css?family=Lato:300,400,700);
	@font-face {
		font-family: 'bpicons';
		src:url('fonts/bpicons/bpicons.eot');
		src:url('fonts/bpicons/bpicons.eot?#iefix') format('embedded-opentype'),
			url('fonts/bpicons/bpicons.woff') format('woff'),
			url('fonts/bpicons/bpicons.ttf') format('truetype'),
			url('fonts/bpicons/bpicons.svg#bpicons') format('svg');
		font-weight: normal;
		font-style: normal;
	}
	ul
{
    list-style-type: none;
	background:white;
}
	.container > header {
    width: 90%;
    max-width: 69em;
    margin: 0px auto;
    padding: 2.875em 1.875em 1.875em;
	}
	.clearfix:after {
    clear: both;
	}
	.clearfix:before, .clearfix:after {
		content: " ";
		display: table;
	}
	body {
    font-family: 'Lato',Calibri,Arial,sans-serif;
    color: #47A3DA;
}
	</style>
	
	
    <link href="css/hover-min.css" rel="stylesheet" media="all">
	<link href='https://fonts.googleapis.com/css?family=Droid+Sans:700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/font-awesome.css">
  <style type="text/css">
    .div_box
	{
		background-color:rgba(70, 154, 219,1.0);
		
	}
	
	.div_box:before
	{	
		background-color:rgba(255, 255, 255, 1.0);
		color:black;		
	}
	
  </style>
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
		
		
		<div class="container div_search" >
			<header class="clearfix">
				
				
				
				
			</header>	
				<div id="main_search" style="margin:60px auto 10px;">

		<!-- Main Title -->
		<h1 class="title" style="text-align:center;">Search In-Patient</h1>
		

		<!-- Main Input -->
		<input type="text" id="search" autocomplete="off" >

		<!-- Show Results -->
		<h4 id="results-text">Showing results for: <b id="search-string">Array</b></h4>
		<ul id="results"></ul>


	</div>
			
		</div>
	</body>
</html>
<?php ob_flush();?>