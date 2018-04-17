<?php
ob_start();
include_once("connect/access.php");
include_once("connect/helper.php"); 
$page_id='2';
	if(!(isset($_REQUEST["sd"])))
	{
		header("location:managebanner.php?page=1&ipp=20");
	}
	else
	{
		$id = $_REQUEST["sd"];
		$res=$obj->select("*","banner","id=$id");
		
		$id = $res[0][0];
		$image  = $res[0][1];
		$content  = $res[0][2];
	}
	if(isset($_REQUEST["submit"]))
	{
	
		$content = addslashes($_REQUEST['content123']);
		if(!(empty($_FILES['file']['name'])))
		    {
			  $pname =  $_FILES['file']['name'];
			  $src=$_FILES['file']['tmp_name'];
			  $image=time().$pname;
			  $dest = "uploads/banner/".$image;
			  move_uploaded_file($src,$dest);
			}
			else
			{
			$image = $_REQUEST['files1exist'];
			}
					
		$update_banner = $obj->update("banner","image='$image',content='$content'","id=$id");
		 echo "<script type=text/javascript> {alert('Data Updated successfully!!!');} </script>";
		echo  "<script type='text/javascript'>location.href='managebanner.php?page=1&ipp=20';</script>";		
			
		       
			  
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kukoo's | Edit Banner.&#8230;</title> 
<link href="css1/bootstrap.min.css" rel="stylesheet">
<link href="css1/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
<link href="css1/font-awesome.css" rel="stylesheet">
<link href="css1/style.css" rel="stylesheet">
<link href="css1/pages/dashboard.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.autocomplete.pack.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script>
function imagefunction_new()
			{       
					var image = mainForm.file.value;
					//alert(image);
					if ( image !="")
					{
						var extPos = mainForm.file.value.lastIndexOf( "." );
								//alert(extPos);
						if ( extPos == - 1)
						{
							alert( "Only Jpg or Gif or Png files can be added." );
							mainForm.file.focus( );
							return false;
						}
						else
						{
							var extn = mainForm.file.value.substring(extPos + 1, mainForm.file.value.length );
						if ( extn != "jpeg" && extn != "jpg" && extn != "gif" && extn != "png" && extn != "PNG" && extn != "GIF" && extn != "JPEG" && extn != "JPG"  )
							{
									alert( "Only Jpg or Gif or Png  files can be added." );
									mainForm.file.focus( );
									return false;
							}
						
						}
					}
					
					
					return true;	
			}
			
	
		</script>

<style>
.inp
	{
		width:314px;
		height:31px;
		border-radius:4px;
		border:1px #a4a4a4 solid;
		outline:none;
		padding-left:5px;
	}
	label
{
background-color:#ddd;
padding: 5px 12px;
cursor:pointer;
margin:0 5px 0 0;
border-radius:3px;
color:#FFFFFF;
}
input[type=checkbox]
{
display:none;
}
input[type=checkbox]:checked + label
{
background-color:#00ba8b;
color:#FFFFFF;
}
.size-radio
	{
		margin:0 0 0 0;
	}
	
</style>
</head>
<body>
<?php include_once('header.php');?>
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3>Edit Banner</h3>
            </div>
            <div class="widget-content">
              <div class="widget big-stats-container">
                <div class="widget-content">
                  <form  id="mainForm"  name="mainForm" method="post"  enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>"  onSubmit="return imagefunction_new();" >
                    <table align="center" border="0" width="80%" cellpadding="0" cellspacing="0" id="id-form" style="border:1px #efefef solid;padding:30px 0px 25px 25px; border-collapse: separate;">
                      <tbody>
                        <tr>
                          <td colspan="2" align="center">&nbsp;</td>
                        </tr>
                         <tr>
                          <td width="20%" align="left" valign="top"><strong>Banner Image:</strong></td>
                          
                          <td width="80%" align="left"><div class="inp-file">
						   
							
						    <img src="uploads/banner/<?php echo $image;?>" alt="" border="0" width="100" height="100" class="thumbnail"  /><br />
                               <input type="file" name="file" id="file"/>
                               <input type="hidden" name="files1exist" id="files1exist" value="<?php echo $image; ?>"/>
                              <br/>
                            
                            <font color="#FF0000" style="font-size:12px; line-height:16px;">
								Please select jpeg,png,gif image only<br/>
								Size:1400px*450px.
							</font>
							</td>
                        </tr>
                        
                        <tr>
                          <td colspan="2" align="center">&nbsp;</td>
                        </tr>
                         <tr>
                          <td width="20%" align="left" valign="top"><strong>Content:</strong></td>
                          
                          <td width="80%" align="left"><div class="inp-file">
						   <textarea rows="5" cols="20" name="content123" id="content123" value=""  style=" margin-top:5px;"><?php echo $content;?></textarea>
						   
						  </td>
                        </tr>                        
                        <tr>
                          <td colspan="2" align="center">&nbsp;</td>
                        </tr>
                       
                        
                        <tr>
                          <td colspan="2" ><input type="submit" name="submit" id="submit" value="Update" class="btn btn-primary" style="border-radius:2px; margin-left:150px;" />
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <!--<input type="reset" name="reset" id="reset" value="Reset" class="btn btn-primary" style="border-radius:2px;" />-->
                            &nbsp;&nbsp;&nbsp;&nbsp; <a href="managebanner.php?page=1&ipp=20" class="btn btn-primary" >Cancel</a> </td>
                        </tr>
                        <tr>
                          <td colspan="2" align="center">&nbsp;</td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /main-inner -->
</div>
<!-- /main -->
<?php include_once('footer.php');?>
</body>
</html>
