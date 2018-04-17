<?php
ob_start();
require_once("connect/access.php");
require_once("connect/helper.php");
	$imgid = trim($_POST['imgid']);
	//$pass = trim($_POST['password']);
	$explode = explode("/",$imgid);
	$id = $explode[0];
	$status = $explode[1];
	if($status == 'yes')
	{
	  $visibility = "no";
	}
	else
	{
	   $visibility = "yes";
	}
	
$update = $obj->update("service","visible='$visibility'","id='$id'");


?>

