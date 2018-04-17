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
	 if(!(empty($_FILES['file']['name'])))
	{
	$pname =  $_FILES['file']['name'];
	$src=$_FILES['file']['tmp_name'];
	$image=time().$pname;
	$dest = "uploads/page/".$image;
	move_uploaded_file($src,$dest);
    }
	else
	{
	$image = $_REQUEST['files1exist'];
	}
	$name=addslashes($_POST['name']);
	$content=addslashes($_POST['content']);
		$insertimsge = $obj->my_insert("pages","image,name,content,visible,flag","'$image','$name','$content','$visible','0'");
		echo "<script type=text/javascript> {alert('Data uploaded successfully!!!');} </script>";
		echo "<script type=text/javascript> location.href='managepages.php?page=1&ipp=20'; </script>";


?>
					


	
