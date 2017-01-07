<?php
session_start();

/*Timeout after 1800sec(30 minutes)*/
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // request 30 minutes ago
    session_destroy();
    session_unset();
	header ("Location: error/error2.php");exit;
}
$_SESSION['LAST_ACTIVITY'] = time();
if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) 
{
header ("Location: error/error.php");exit;
}
?>