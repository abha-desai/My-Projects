<?php ob_start();
include "chkauth.php";


$date=$_GET['date'];
$room=$_GET['room'];
include "connect.php";

$sql='SELECT * FROM hms_surgery_room WHERE date="'.$date.'" AND room="'.$room.'" ';
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if ($count==0)
{
	$sql='INSERT INTO hms_surgery_room VALUES ("'.$date.'", "'.$room.'", 0,0,0,0,0,0,0,0,0,0)';
	mysql_query($sql);
	$sql='SELECT * FROM hms_surgery_room WHERE date="'.$date.'" AND room="'.$room.'" ';
	$result=mysql_query($sql);
	$data=mysql_fetch_array($result);
}
else $data=mysql_fetch_array($result);

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
	<script type="text/javascript" src="scripts/custom15.js"></script>
	
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
	
	.div_box
	{	
		background-color:rgba(254, 255, 248, 1.0);
		color:black;
	border: 2px solid #F0DCB1;		
	}
  
  
	.CSSTableGenerator {
		margin:0px;padding:0px;
		width:100%;	
		border:1px solid #000000;

		-moz-border-radius-bottomleft:0px;
		-webkit-border-bottom-left-radius:0px;
		border-bottom-left-radius:0px;

		-moz-border-radius-bottomright:0px;
		-webkit-border-bottom-right-radius:0px;
		border-bottom-right-radius:0px;

		-moz-border-radius-topright:0px;
		-webkit-border-top-right-radius:0px;
		border-top-right-radius:0px;

		-moz-border-radius-topleft:0px;
		-webkit-border-top-left-radius:0px;
		border-top-left-radius:0px;
		}.CSSTableGenerator table{
		width:100%;
		height:100%;
		margin:0px;padding:0px;
		}
	.CSSTableGenerator tr:hover td{

		}.CSSTableGenerator tr:nth-child(odd){ background-color:#e5e5e5; }
		.CSSTableGenerator tr:nth-child(even)    { background-color:#ffffff; }
		
		.CSSTableGenerator td{
		
		vertical-align:middle;
		text-align:center;

		border:1px solid #000000;
		border-width:0px 1px 1px 0px;
		padding:7px;
		font-size:18px;
		font-family: 'Lato',Calibri,Arial,sans-serif;;
		font-weight:normal;
		color:#000000;
		}
		
		.table_update
		{
			background-color:#4099DD;
			color:white;
			padding:2px 5px;
			font-size:15px;
			border: 1px solid #2271AD;
			width:90px;
		}
		
		.table_update:hover
		{
			background-color:#70B5EA;
		}
		
		.table_input
		{
			font-size:15px;
		}
	</style>
	
	
    <link href="css/hover-min.css" rel="stylesheet" media="all">
	<link href='https://fonts.googleapis.com/css?family=Droid+Sans:700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/font-awesome.css">

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
		
		
		<div class="container" >
			<header class="clearfix">
				
				
				
				
			</header>	
				<div  style="margin:0px auto 0px;">
		<div style="width:1000px; height:auto; min-height:450px; margin-top:70px; margin-bottom:50px; margin-left:auto; margin-right:auto; text-align:center;" class="div_box">
		<!-- Main Title -->
		<h2 class="title" style="text-align:center; line-height:0.5em;">Get In-Patient Info.</h2>
		

		<!-- Main Input -->
		<input type="text" id="search" autocomplete="off" style="width:600px; margin-bottom:30px;" >

		<!-- Show Results -->
		<h4 id="results-text">Showing results for: <b id="search-string">Array</b></h4>
		<ul id="results" style="margin-left:auto; margin-right:auto; width:574px;"></ul>


		
		<div>
			<h2 class="title" style="text-align:center; line-height:0.5em; font-size:1.2em;">NOTE:- To delete a patient, enter 0 in the input box</h2>
			<h2 class="title" style="text-align:center; line-height:0.5em;">Assign Operation Theatre No.:- <?php echo strtoupper($room);?> - Date :- <?php echo $date;?></h2>
			
			<table class="CSSTableGenerator" style="width:80%;margin-left:auto;margin-right:auto;margin-bottom:30px;">
				
				<tr>
				<td>Time Slot</td>
				<td>Availability</td>			
				<td></td>			
				</tr>
				
				<?php	
				
				 
				for($i=1;$i<=10;$i++)
				{
				
					echo '<tr>';
					$t_slot="t".$i;
					if($t_slot=="t1") echo '<td>10AM - 11AM</td>';
					else if($t_slot=="t2") echo '<td>11AM - 12PM</td>';
					else if($t_slot=="t3") echo '<td>12PM - 01PM</td>';
					else if($t_slot=="t4") echo '<td>01PM - 02PM</td>';
					else if($t_slot=="t5") echo '<td>02PM - 03PM</td>';
					else if($t_slot=="t6") echo '<td>03PM - 04PM</td>';
					else if($t_slot=="t7") echo '<td>04PM - 05PM</td>';
					else if($t_slot=="t8") echo '<td>05PM - 06PM</td>';
					else if($t_slot=="t9") echo '<td>06PM - 07PM</td>';
					else if($t_slot=="t10") echo '<td>07PM - 08PM</td>';
					
					
					$msg="";
					if(isset($_SESSION['p_msg']) && $_SESSION['t_slot']==$t_slot)
					{
						
						$msg=$_SESSION['p_msg'];
						unset($_SESSION['p_msg']);
						unset($_SESSION['t_slot']);

					}
					if ($data[$t_slot] == 0)
					    $available='<td style="background-color:green; color:white;"><form action="i_book_surgery_2.php?date='.$date.'&room='.$room.'&t_slot='.$t_slot.'" method="post"> <input class="table_input" name="ip_no" type="text" size="40" placeholder="Enter patient no." />'.$msg.'</td><td><input type="submit" value="Update" class="table_update"></form></td>';
					else	
					{
						
						$s_code=$data[$t_slot];
						
						$sql1='SELECT ip_no FROM hms_surgery WHERE s_code='.$s_code;
						$result1=mysql_query($sql1);
						$data1=mysql_fetch_array($result1);
						$ip_no=$data1['ip_no'];
						
						$sql1='SELECT p_name FROM hms_inpatient WHERE p_no='.$ip_no;
						$result1=mysql_query($sql1);
						$data1=mysql_fetch_array($result1);
						
						$available='<td style="background-color:#D85B5B; color:white;"><form action="i_book_surgery_2.php?date='.$date.'&room='.$room.'&t_slot='.$t_slot.'" method="post"> <input class="table_input" name="ip_no" type="text" size="40" placeholder="Enter patient no." value="'.$ip_no." -- ".$data1['p_name'].'" />'.$msg.' <input type="hidden" value="'.$ip_no.'" name="old_ip_no" /></td><td><input type="submit" value="Update" class="table_update"></form> <br> <form action="i_book_surgery_3.php?date='.$date.'&room='.$room.'&t_slot='.$t_slot.'" method="post"> <input type="submit" style="margin-top:5px;" value="Add Details" class="table_update"></form>   </td>';
					}
					
					echo $available;
					echo '</tr>';
				
				}
				
				
				?>
			</table>
				
					
		</div>
	</div>
	
	</div>
			
		</div>
	</body>
</html>
<?php ob_flush();?>