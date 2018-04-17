<?php
ob_start();
require_once("connect/config.php");
require_once("connect/helper.php");
require_once("connect/access.php");

	$visible = addslashes($_REQUEST['visible']);
   $desp1 = addslashes($_REQUEST['desp1']);
   $name1 = addslashes($_REQUEST['name1']);
if(!(empty($_FILES['file']['name'])))
	        {
				$pname = $_FILES['file']['name'];
				$src=$_FILES['file']['tmp_name'];
				$image=time().$pname;
				$dest = "uploads/product/".$image; 
				move_uploaded_file($src,$dest);
	        }
	
$insertimsge = $obj->my_insert("product","name,image,description,visible,flag","'$name1','$image','$desp1','$visible','0'");
echo "<script type=text/javascript> {alert('Data Added succesfully!!!');} </script>";
echo "<script type=text/javascript> location.href='manage_product.php?page=1&ipp=20'; </script>";
	
?>
