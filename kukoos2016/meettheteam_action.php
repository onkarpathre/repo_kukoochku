<?php
ob_start();
require_once("connect/config.php");
require_once("connect/helper.php");
require_once("connect/access.php");
//$valid_formats = array("jpg","JPG","jpeg","JPEG","png","PNG","gif","GIF", "zip", "bmp");
//$max_file_size = 1024*2000; //100 kb //2 mb
//$path = "uploads/page/"; // Upload directory

	$visible=addslashes($_POST['visible']);
	//$urllink=($_POST['urllink']);
	$name=addslashes($_POST['name']);
	$name1=addslashes($_POST['name1']);
	 if(!(empty($_FILES['file']['name'])))
	{
	$pname =  $_FILES['file']['name'];
	$src=$_FILES['file']['tmp_name'];
	$image=time().$pname;
	$dest = "uploads/team/".$image;
	move_uploaded_file($src,$dest);
    }
	else
	{
	$image = $_REQUEST['file'];
	}
	
	
		$insertimsge = $obj->my_insert("meet_the_team","name,image,visible,flag,designation_name","'$name','$image','$visible','0','$name1'");
		echo "<script type=text/javascript> {alert('Data uploaded successfully!!!');} </script>";
		echo "<script type=text/javascript> location.href='managemeettheteam.php?page=1&ipp=20'; </script>";


?>
					


	
