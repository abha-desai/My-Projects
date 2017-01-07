<?php
include "connect.php";

if (!empty($_POST)) {
    // username and password sent from form
    $MyUsername = mysql_real_escape_string($_POST['username']);
    $MyPassword = mysql_real_escape_string($_POST['password']);
    $sql = "SELECT * FROM hms_login WHERE uname='$MyUsername' AND pwd='$MyPassword' ";

    
	$result = mysql_query($sql) ;
	
    $count = mysql_num_rows($result);
	//echo $count;
    if ($count==1) 
	{
        // Register $myusername, $mypassword and redirect to file "home.php"
       $row = mysql_fetch_array($result);
		
	   session_start();
		
		$_SESSION['LAST_ACTIVITY'] = time();
		$_SESSION['uname']=$MyUsername;
			//echo $row['type'];
            if ($row['type'] == '1')
			{
				$_SESSION['login']='1';
                header("location:admin.php");
				exit;
            }
            else {
            header("location:error/error.php");exit;
            }
    }
     else {
      header("location:error/error.php");exit;
 }
 
 }

//mysql_close();
?>