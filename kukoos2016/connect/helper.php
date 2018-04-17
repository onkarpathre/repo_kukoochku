<?php

require_once("connect.php");





class helper extends connect{



	function text($type,$name,$value,$data,$extra)

	{

		$str =  "<input type='$type' name='$name' class='$name' id='$name' value='$value' placeholder='$data' "; 



		if(is_array($extra))

		{

			foreach($extra as $val)

			{

				$str.=$val . " ";



			}

		}

		

		$str.=" /> ";

		

		echo $str;

	}

/**** TEXT FUNCTION ENDS ****************/

//<form method="" action="" enctype='multipart/form-data' id="" name="">

	function form_open($method,$action,$name,$extra){

		$str = "<form method='$method' action='$action' enctype='multipart/form-data' name='$name' ";

			if(is_array($extra)){

				foreach($extra as $val){

				   $str.= $val . " ";

				}

			}

		echo $str.= ">";

	}



/*** FORM FUNCTION ENDS ***************/



	function form_close(){

		echo "</form>";

	}

/************* function image upload *************/

	function imageupload($image){

		$imagename = $image['name'];

		$tmppath = $image['tmp_name'];

		$uniquename = time().$imagename;

		$destination = "../upload/".$uniquename;

		move_uploaded_file($tmppath,$destination);

		return $uniquename;

	}



	function insert($table,$field,$value)

	{

		$str = "insert into $table ($field) values ($value) ";

		//echo $str;



		$this->conn->query($str) or die($this->conn->error);

	

	}

   function my_insert($table,$field,$value)

	{

		 $sql ="INSERT INTO " .$table. " (" .$field. " ) VALUES (" .$value." )";

		$this->conn->query($sql) or die ($this->conn->error);

		//echo "<br />Last insert Id Is : ";

		return $this->conn->insert_id;

	

	}



	function uservalidate($user,$range)

	{

		$pattern = "/^[a-z][a-z._0-9]{".$range."}$/";

		return preg_match($pattern,$user);

	}

	function passwordvalidate($pass,$range)

	{

		$pattern = "/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@%#$]).{".$range."}/";

		return preg_match($pattern,$pass);

	}





	

	function select($field,$table,$condition)

	{

		$str = "select $field from $table where $condition";

		//echo $str;



		$result = $this->conn->query($str) or die($this->conn->error);

		

		/*

			echo "<pre>";

			print_r($result);

			echo "</pre>";	

		*/

		if($result->num_rows==0)

		{

			return "no";

		}

		else

		{

	

			while($row = $result->fetch_array(MYSQL_NUM))

			{

			// MYSQL_NUM , MYSQL_BOTH , MYSQL_ASSOC

				/*echo "<pre>";

				print_r($row);

				echo "</pre>";*/



				$data[] = $row;

			}

			/*

			echo "<pre>";

				print_r($data);

			echo "</pre>";

			*/

			return $data;



	

		}







			

	}

	function login($table,$fuser,$fpass,$puser,$ppass)

	{

		// select log_pass from vij_login where log_user='$user'

		$ans = $this->select($fpass,$table,"$fuser='$puser'");

		print_r($ans);

		if($ans=="no")

		{

			return "user wrong";

		}

		else

		{

			if($ans[0][0]!=sha1($ppass))

			{

				return "Wrong pass";

			}

			else

			{

				return 1;

			}

		}





	}





	function dynamic_dropdown($table,$field,$condition,$name,$extra)

	{



// select lg_id,lg_name from vij_lib_grp where lg_status=1 and lg_uid='4'

		$ans = $this->select($field,$table,$condition);

		//print_r($ans);

		if($ans=="no")

		{

			echo "No Data Found";

		}

		else

		{

			$str= "<select name='$name' id='$name' class='$name' ";

			if(is_array($extra))

			{

				foreach($extra as $val)

				{

					$str.=$val." "; 

				}

			}



			$str.=" >";

			foreach($ans as $val)

			{

				$str.="<option value='$val[0]'>$val[1]</option>";

			}

			$str.="</select>";



			echo $str;

		}

	}

	function textarea($name,$row,$col,$value,$data,$extra)

	{

		$str = "<textarea name='$name' class='$name' id='$name' placeholder='$data' rows='$row' cols='$col' ";

		if(is_array($extra))

			{

				foreach($extra as $val)

				{

					$str.=$val." "; 

				}

			}

		$str.=">";

		if(!empty($value))

		{

			$str.=$value;

		}

		$str.="</textarea>";

		echo $str;



	}

	

	function all_file_upload($filedata,$allowed_ext,$allowed_size,$folder)

	{

		//print_r($filedata);

		if(empty($filedata['name'][0]))

		{

			return "File Empty";

		}

		else

		{

			$fname = $filedata['name'];

			//echo $fname;

			$file_array = explode(".",$fname);

			//print_r($file_array);

			if(count($file_array)==1)

			{

				return "improper File";

			}

			else

			{

				$ext = count($file_array)-1;

				// position of extenstion

				//echo $ext;

				$final_ext = $file_array[$ext];

				// original extension like jpg,html,css etc..

				$final_ext = strtolower($final_ext);

				// original extension with lowercase like jpg,html,css etc..

				echo $ext_allowed = in_array($final_ext,$allowed_ext);

				// within array passed value is exist or not

				

				if($ext_allowed==1)

				{

					$size = $filedata['size'];

					if($size>$allowed_size)

					{

						return "file size is large";

					}

					else

					{

						if(!is_dir($folder))

						{

							mkdir($folder,0755);

						}

						$tmppath = $filedata['tmp_name'];

						$final_path = $folder.time().$fname;

						move_uploaded_file($tmppath,$final_path);

						return $final_path;

					}

				}

				else

				{

					return "$final_ext : not allowed";

				}

			}

		}

	}

	

	function image_thumbnail($filedata,$ans,$type,$new_width,$new_height,$thumb)

	{

		$old_image = imagecreatefromjpeg($ans);

		$old_width = imagesx($old_image);

		$old_height= imagesy($old_image);

	

		if($type==1)

		{

			$new_width = $new_width;

			$new_height = $new_height;

		}

		else

		{

			if($new_width>0)

			{

				$ratio = $old_width / $new_width;

				$new_height = round($old_height / $ratio);

			}

			else

			{

				return "new file size shoulb > 0";

			}

		}

		

		$new_image = imagecreatetruecolor($new_width,$new_height);

		

	

		imagecopyresampled($new_image,$old_image,0,0,0,0,$new_width,$new_height,$old_width,$old_height);

	

		if(!is_dir($thumb))

		{

			mkdir($thumb,0755);

		}

	

		$path = $thumb.time().$filedata['name'];

		imagejpeg($new_image,$path);

		return $path;

	}

	

	function pagination($field,$table,$condition,$perpage)

	{

		$cnt = $this->select($field,$table,$condition);

		//print_r($cnt);

		$records = $cnt[0][0];

		if($records>0)

		{

		

		$page = ceil($records/$perpage);

		

		$start = 1;

		$end = $page;

		for($i=1;$i<=$page;$i++)

		{

			

				echo "<a class='pagination' href='#' id='page-$i-$perpage'> $i </a> &nbsp;&nbsp; ";

			

		}

		

		

	}

	

	

	}

	

	function pagination1($pageno,$y,$field,$table,$condition)

	{

		// perpage*pageno - perpage

		if(isset($_REQUEST['pageno']) && !empty($_REQUEST['pageno']))

		{

		$x = ( $y*$pageno ) - $y;

		$ans = $this->select($field,$table,"$condition limit $x,$y");

		return $ans;

		}

	}

	

	function check_isset_empty($data)

	{

		if(is_array($data))

		{

			foreach($data as $val)

			{

				if(empty($val) || !isset($val))

				{

					return 1;

				}

			}

		}

	}

	

	function multiple_file_upload($filedata,$allowed_type,$allowed_file_size,$folder)

	{

		if(empty($filedata['name'][0]))

		{

			return "no file";

		}

		else

		{

			foreach($filedata['type'] as $type)

			{

				$ans_type=in_array($type,$allowed_type);

				if($ans_type!=1)

				{

					return "$type:not allowed";

				}

			}

			$file_size = array_sum($filedata['size']);

			if($file_size>$allowed_file_size)

			{

				return "Filesize heavy";

			}

			else

			{

				if(!is_dir($folder))

				{

					mkdir($folder,0755);

				}

				$cnt=0;

				foreach($filedata['name'] as $fname)

				{

					$unique_path = $folder.date("Y-m-d H-i-s").time().$cnt.$fname;

					

					$buffer_path = $filedata['tmp_name'][$cnt];

					

					move_uploaded_file($buffer_path,$unique_path);

					

					$final_fname[] = $unique_path;

					

					$cnt++;

				}

				return $final_fname;

			}

		}

	}

	

	function multiple_image_thumbnail($filedata,$ans,$type,$new_width,$new_height,$thumb)

	{

		if(is_array($ans))

		{

			$cnt=0;

			foreach($ans as $ans_data)

			{

				$old_image = imagecreatefromjpeg($ans_data);

				$old_width = imagesx($old_image);

				$old_height= imagesy($old_image);

			

				if($type==1)

				{

					$new_width = $new_width;

					$new_height = $new_height;

				}

				else

				{

					if($new_width>0)

					{

						$ratio = $old_width / $new_width;

						$new_height = round($old_height / $ratio);

					}

					else

					{

						return "new file size shoulb > 0";

					}



				}

				

				$new_image = imagecreatetruecolor($new_width,$new_height);

				

			

				imagecopyresampled($new_image,$old_image,0,0,0,0,$new_width,$new_height,$old_width,$old_height);

			

				if(!is_dir($thumb))

				{

					mkdir($thumb,0755);

				}

			

				$path = $thumb.time().$filedata['name'][$cnt];

				

				$final_thumb_path[]=$path;

				imagejpeg($new_image,$path);

				

				$cnt++;

			}

			

		}

		return $final_thumb_path;

	}

	               function update($table,$field,$condition)

					{

					$str = "UPDATE $table SET $field WHERE $condition ";

					//echo $str; die;

					

					$this->conn->query($str) or die($this->conn->error);



                      }

	

	function delete($table,$condition)

	{

		$str = "delete from $table where $condition";

		$this->conn->query($str) or die($this->conn->error);

	}

//////////////////////////////////////////////////////	

}







$obj = new helper();



?>
