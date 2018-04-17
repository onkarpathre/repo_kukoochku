<?php
ob_start();
require_once("connect/config.php");
require_once("connect/helper.php");
require_once("connect/access.php");
//$valid_formats = array("jpg", "png", "gif", "zip", "bmp");
//$max_file_size = 1024*2000; //100 kb //2 mb
//$path = "uploads/"; // Upload directory
$count = 0;
	$visible=($_POST['visible']);
	$desp1=($_POST['desp1']);
	$name1=($_POST['name1']);
	//$urllink=($_POST['urllink']);

	/*foreach ($_FILES['files']['name'] as $f => $name) 
	 {     
	    if ($_FILES['files']['error'][$f] == 4)
		 {
	        continue; // Skip file if any error found
	     }	       
	      if ($_FILES['files']['error'][$f] == 0)
		   {	           
					if ($_FILES['files']['size'][$f] > $max_file_size) 
					{
						$message[] = "$name is too large!.";
						//continue; // Skip large files
					}
					elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) )
					{
						$message[] = "$name is not a valid format";
						//continue; // Skip invalid file formats
					}
					else
						{ // No error found! Move uploaded files 
                                  $name = str_replace(' ', '_', $name);
								  $pname = time().$name;
						if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$pname)) {
							$count++; // Number of successfully uploaded files
							

						}
					//exit();	
	        }
			//print_r($message);
			
	    }
	}*/
$insertimsge = $obj->my_insert("clientspeak","desp,name,visible,flag","'$desp1','$name1','$visible','0'");
if(isset($message) && $count >=1)
{
 $implode = implode("--",$message);
			echo "<script type=text/javascript> {alert('Some images are not uploaded!!!');} </script>";
					echo "<script type=text/javascript> location.href='manage_clientspeak.php?page=1&ipp=20'; </script>";
}
else if(isset($message) && $count ==0)
{
 $implode = implode("--",$message);
			echo "<script type=text/javascript> {alert('Error Occur while uploading!!!');} </script>";
					echo "<script type=text/javascript> location.href='manage_clientspeak.php?page=1&ipp=20'; </script>";
}
else
{
					 echo "<script type=text/javascript> {alert('Data uploaded successfully!!!');} </script>";
					echo "<script type=text/javascript> location.href='manage_clientspeak.php?page=1&ipp=20'; </script>";

}

	
