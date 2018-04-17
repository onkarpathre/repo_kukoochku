<?php
session_start();

	if(!isset($_SESSION['admin_username']))
	{
		header("location:logout.php");
	}
//require_once("class/helper.php");
?>
