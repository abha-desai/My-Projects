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
		
		<!--<a href="p_admin.php" style="text-decoration:none;color:black;">
		<div style="position:fixed; right:1%; top:30%; width:60px; height:60px; border-radius:30px; background:white; z-index:30; text-align:center; border: 2px solid #F0DCB1;cursor:pointer;" class="hvr-grow-shadow">
			<center><i class="fa fa-th fa-lg" style="font-size:40px; margin-top:16px;"></i></center>
		</div>
		</a>-->
		
		<a href="javascript:history.back()" style="text-decoration:none;color:black;">
		<div style="position:fixed; right:1%; top:30%; width:60px; height:60px; border-radius:30px; background:white; z-index:30; text-align:center; border: 2px solid #F0DCB1;cursor:pointer;" class="hvr-grow-shadow">
			<center><i class="fa fa-arrow-circle-left fa-lg" style="font-size:40px; margin-top:14px;"></i></center>
		</div>
		</a>
		<!---- End Sidebar Panel-->
		
<div style="width:1000px; height:600px; margin-top:140px; margin-bottom:50px; margin-left:auto; margin-right:auto; ">

	
	  <div style="width:300px; height:250px; float:left; border:2px solid #F0DCB1; text-align:center; cursor:pointer;  " class="hvr-rectangle-in  div_box" onclick="location.href='i_check_bed.php';" >
		<center><i class="fa fa-bed fa-lg" style="font-size:169px; margin-top:27px;"></i></center>
		<p style="margin-bottom:10px; height:0.5px; "><h2 style=" font-family: 'Droid Sans', sans-serif; font-size:25px; ">Check Bed Availability</h2>  
		</p>
	  </div>
	
	
	<div style="width:300px; height:250px; margin-left:auto;margin-right:auto; border:2px solid #F0DCB1; text-align:center; display:block; cursor:pointer;  " class="hvr-rectangle-in  div_box" onclick="location.href='i_assign_bed.php';" >
		<center><i class="fa fa-user fa-lg" style="font-size:169px; margin-top:27px;"></i></center>
		<p style="margin-bottom:10px; height:0.5px; "><h2 style=" font-family: 'Droid Sans', sans-serif; font-size:25px; ">Assign Patient to Bed</h2>  
		</p>
		
	</div>
	
	<div style="width:300px; height:250px; float:right; border:2px solid #F0DCB1; text-align:center;margin-top:-254px; cursor:pointer; " class="hvr-rectangle-in  div_box" onclick="location.href='i_assign_physician.php';" >
		<center><i class="fa fa-user-md  fa-lg" style="font-size:169px; margin-top:27px;"></i></center>
		<p style="margin-bottom:10px; height:0.5px; "><h2 style=" font-family: 'Droid Sans', sans-serif; font-size:25px; ">Assign Physician</h2>  
		</p>
	</div>

	
	
		 <div style="width:300px; height:250px; float:left; border:2px solid #F0DCB1; text-align:center;margin-top:92px;cursor:pointer; " class="hvr-rectangle-in  div_box" onclick="location.href='i_assign_nurse.php';" >
		<center><i class="fa fa-user-md fa-lg" style="font-size:169px; margin-top:27px;"></i></center>
		<p style="margin-bottom:10px; height:0.5px; "><h2 style=" font-family: 'Droid Sans', sans-serif; font-size:25px; ">Assign Nurse</h2>  
		
	</div>
	
		<div style="width:300px; height:250px; margin-left:auto;margin-right:auto; border:2px solid #F0DCB1; text-align:center; margin-top:92px;cursor:pointer;  text-decoration:none; display:block;"     
		class="hvr-rectangle-in  div_box" onclick="location.href='i_book_surgery.php';" >
		<center><i class="fa fa-heartbeat fa-lg" style="font-size:169px; margin-top:27px;"></i></center>
		<p style="margin-bottom:10px; height:0.5px; "><h2 style=" font-family: 'Droid Sans', sans-serif; font-size:25px; ">Book Surgery </h2> 
		</p>
		
	</div>
	
	<div style="width:300px; height:250px; float:right; border:2px solid #F0DCB1; text-align:center; margin-top:-254px;  cursor:pointer;" class="hvr-rectangle-in div_box" onclick="location.href='i_view_surgery_room.php';" >
		<center><i class="fa fa-hospital-o fa-lg" style="font-size:169px; margin-top:27px;"></i></center>
		<p style="margin-bottom:10px; height:0.5px; "><h2 style=" font-family: 'Droid Sans', sans-serif; font-size:25px; ">View Surgery By Room</h2>
		</p>
	</div>
	
	
	
	<div style="width:300px; height:250px; float:left; border:2px solid #F0DCB1; text-align:center;margin-top:92px;cursor:pointer; margin-bottom:35px;" class="hvr-rectangle-in  div_box" onclick="location.href='i_view_surgery_surgeon.php';">
		<center><i class="fa fa-user-md fa-lg" style="font-size:169px; margin-top:27px;"></i></center>
		<p style="margin-bottom:10px; height:0.5px; "><h2 style=" font-family: 'Droid Sans', sans-serif; font-size:25px; ">View Surgery By Surgeon</h2>  
		
	</div>
	
		<div style="width:300px; height:250px; margin-left:auto;margin-right:auto; border:2px solid #F0DCB1; text-align:center; margin-top:92px;cursor:pointer;  text-decoration:none; display:block; margin-bottom:35px;"     
		class="hvr-rectangle-in  div_box"  onclick="location.href='i_view_surgery_patient.php';">
		<center><i class="fa fa-wheelchair fa-lg" style="font-size:156px; margin-top:38px;"></i></center>
		<p style="margin-bottom:10px; height:0.5px; "><h2 style=" font-family: 'Droid Sans', sans-serif; font-size:25px; ">View Surgery By Patient</h2> 
		</p>
		
	</div>
	


</div>

</body>

<html> 
<?php ob_flush(); ?>