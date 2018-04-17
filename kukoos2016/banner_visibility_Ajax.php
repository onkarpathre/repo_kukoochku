<?php
ob_start();
require_once("connect/access.php");
require_once("connect/helper.php");
	$imgid = trim($_POST['imgid']);
	
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
	
$updatecategory = $obj->update("banner","visible='$visibility'","id='$id'");


?>

