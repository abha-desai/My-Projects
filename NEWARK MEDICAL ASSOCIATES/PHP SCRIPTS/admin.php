<?php
ob_start();
include "chkauth.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>HMS</title>
        <meta name="description" content="" />
        <meta name="keywords" content="circle, border-radius, hover, css3, transition, image, thumbnail, effect, 3d" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo_f.css" />
		<link rel="stylesheet" type="text/css" href="css/common_f.css" />
        <link rel="stylesheet" type="text/css" href="css/style_f.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
		<!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		
		
    </head>
    <body style="background-color: #e9ebab;
					background-image: url('images/light-honeycomb.png'); margin:0px; padding:0px;">
        <div class="container">
		
		<div style="width:100%; height:90px; border-bottom:1px solid #F4E7C2; background-color:rgba(0, 0, 0, 0.60); text-align:center;position: fixed; z-index:30; top:0px; color:white; font-size:22px;" id="mapster_wrap_0">
		<img src="images/hms_logo.png" style="margin-top:5px;"/>
			
		</div>
		
		<div style="position:absolute; top:-44%; right:2%; color:white; z-index:50; text-align:center; line-height:5px;">
			
		 <h3> Welcome, <?php echo $_SESSION['uname']; ?> </h3>
		 <a href="logout.php"><h3 style="color:white;">Logout</h3></a>
		</div>
			
			
			<section class="main" style="margin-top:160px;">
			
				<ul class="ch-grid">
					<li>
						<a href="p_admin.php"><div class="ch-item ch-img-2" style="cursor:pointer;">
							<div class="ch-info">
								<h3>Patient Management</h3>
								</div>
						</div></a>
					</li>
					<li>
						<a href="i_admin.php"><div class="ch-item ch-img-1" style="cursor:pointer;">
							<div class="ch-info">
								<h3>In-Patient Management</h3>
								</div>
						</div></a>
					</li>
					<li>
						<a href="s_admin.php"><div class="ch-item ch-img-3" style="cursor:pointer;">
							<div class="ch-info">
								<h3>Staff Management</h3>
								</div>
						</div></a>
					</li>
				</ul>
				
			</section>
			
        </div>
    </body>
</html>
<?php ob_flush(); ?>